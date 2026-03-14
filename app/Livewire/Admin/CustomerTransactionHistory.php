<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Customer;
use App\Models\Sale;
use App\Models\Payment;
use App\Models\ReturnsProduct;

class CustomerTransactionHistory extends Component
{
    public Customer $customer;

    public function mount(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function render()
    {
        // 1. Get Sales (Increases Balance / Debit)
        $sales = Sale::where('customer_id', $this->customer->id)
            ->get()
            ->map(function ($sale) {
                return [
                    'type' => 'Sale',
                    'id' => $sale->id,
                    'reference' => 'INV-' . str_pad($sale->id, 5, '0', STR_PAD_LEFT),
                    'date' => $sale->created_at,
                    'debit' => $sale->total_amount,
                    'credit' => 0,
                    'details' => 'Sale Invoice: ' . ($sale->invoice_number ?? ''),
                ];
            });

        // 2. Get Payments (Decreases Balance / Credit)
        $payments = Payment::where(function($query) {
                $query->where('customer_id', $this->customer->id)
                      ->orWhereHas('sale', function($q) {
                          $q->where('customer_id', $this->customer->id);
                      });
            })
            ->get()
            ->map(function ($payment) {
                return [
                    'type' => 'Payment',
                    'id' => $payment->id,
                    'reference' => $payment->payment_reference ?? 'PAY-' . str_pad($payment->id, 5, '0', STR_PAD_LEFT),
                    'date' => $payment->payment_date ?? $payment->created_at,
                    'debit' => 0,
                    'credit' => $payment->amount,
                    'details' => 'Payment via ' . ucfirst($payment->payment_method),
                ];
            });

        // 3. Get Returns (Decreases Balance / Credit)
        $returns = ReturnsProduct::whereHas('sale', function($q) {
                $q->where('customer_id', $this->customer->id);
            })
            ->get()
            ->map(function ($return) {
                return [
                    'type' => 'Return',
                    'id' => $return->id,
                    'reference' => 'RET-' . str_pad($return->id, 5, '0', STR_PAD_LEFT),
                    'date' => $return->created_at,
                    'debit' => 0,
                    'credit' => $return->total_amount,
                    'details' => 'Product Return',
                ];
            });

        // Combine, sort by date ascending, and reset keys
        $transactions = collect()
            ->concat($sales)
            ->concat($payments)
            ->concat($returns)
            ->sortBy(function($transaction) {
                // Ensure strictly stable sorting if timestamps are exactly identical.
                // Sales (type A) come first, then returns (type B), then payments (type C).
                $typeOrder = ['Sale' => 1, 'Return' => 2, 'Payment' => 3];
                $timestamp = \Carbon\Carbon::parse($transaction['date'])->timestamp;
                return $timestamp . '_' . $typeOrder[$transaction['type']] . '_' . $transaction['id'];
            })
            ->values();

        // Calculate running balance
        $balance = 0;
        $processedTransactions = $transactions->map(function ($transaction) use (&$balance) {
            $balance += $transaction['debit'];
            $balance -= $transaction['credit'];
            $transaction['balance'] = $balance;
            return $transaction;
        });

        // Simply reverse the array (newest at top) to maintain the exact mathematical sequence!
        // Do NOT sortByDesc() here as it visually breaks lines sharing the same timestamp.
        $processedTransactions = $processedTransactions->reverse()->values();

        return view('livewire.admin.customer-transaction-history', [
            'transactions' => $processedTransactions
        ])->layout('components.layouts.admin');
    }
}
