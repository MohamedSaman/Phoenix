<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sale Receipt - {{ $sale->invoice_number }}</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Courier New', Courier, monospace;
            font-size: 8.5pt;
            color: #000;
            background: #fff;
            line-height: 1.3;
            padding: 8px;
        }

        /* ── Header ── */
        .inv-hdr-tbl    { width: 100%; border-collapse: collapse; }
        .inv-company-td { width: 66%; border: 1px solid #000; border-right: none; padding: 5px 8px; vertical-align: middle; }
        .inv-company-inner { width: 100%; border-collapse: collapse; }
        .inv-logo-td    { width: 52px; padding-right: 8px; vertical-align: middle; }
        .inv-logo       { height: 44px; width: auto; display: block; }
        .inv-shop-name  { font-size: 13pt; font-weight: bold; letter-spacing: 0.5px; padding-bottom: 1px; }
        .inv-shop-tag   { font-size: 7.5pt; font-style: italic; color: #444; padding-bottom: 1px; }
        .inv-shop-addr, .inv-shop-contact { font-size: 7.5pt; }
        .inv-infobox-td { width: 34%; border: 1px solid #000; padding: 0; vertical-align: top; }
        .inv-ib-tbl     { width: 100%; border-collapse: collapse; height: 100%; }
        .inv-ib-lbl     { border: 1px solid #000; padding: 2px 5px; font-size: 7.5pt; font-weight: bold; white-space: nowrap; width: 42%; background: #1a5276; color: #fff; }
        .inv-ib-val     { border: 1px solid #000; border-left: none; padding: 2px 5px; font-size: 7.5pt; }

        /* ── Bill To ── */
        .inv-bto-tbl { width: 100%; border-collapse: collapse; }
        .inv-bto-td  { border: 1px solid #000; border-top: none; padding: 4px 8px; font-size: 8pt; }

        /* ── Items Table ── */
        .inv-items-tbl     { width: 100%; border-collapse: collapse; border-top: none; }
        .inv-items-tbl th  { background: #1a5276; color: #fff; border: 1px solid #000; padding: 3px 5px; font-size: 8pt; font-weight: bold; text-align: left; }
        .inv-items-tbl td  { border: 1px solid #000; padding: 2px 5px; font-size: 8pt; }
        .inv-filler td     { height: 14px; }
        .inv-c-code  { width: 11%; }
        .inv-c-qty   { width: 7%; }
        .inv-c-price { width: 14%; }
        .inv-c-disc  { width: 13%; }
        .inv-c-amt   { width: 14%; }
        .inv-tc { text-align: center; }
        .inv-tr { text-align: right; }

        /* ── Bottom Row ── */
        .inv-bot-tbl  { width: 100%; border-collapse: collapse; }
        .inv-bot-left { border: 1px solid #000; border-top: none; padding: 5px 8px; vertical-align: top; }
        .inv-out-lbl  { font-weight: bold; font-size: 8pt; margin-bottom: 2px; }
        .inv-out-val  { font-size: 8.5pt; }
        .inv-bot-right { width: 36%; border: 1px solid #000; border-top: none; border-left: none; padding: 0; vertical-align: top; }
        .inv-tot-tbl  { width: 100%; border-collapse: collapse; }
        .inv-tot-lbl  { border: 1px solid #000; padding: 2px 6px; font-size: 8pt; font-weight: bold; width: 48%; background: #1a5276; color: #fff; }
        .inv-tot-val  { border: 1px solid #000; border-left: none; padding: 2px 6px; font-size: 8pt; text-align: right; }
        .inv-bal-row .inv-tot-lbl,
        .inv-bal-row .inv-tot-val { border-top: 2px solid #000; font-size: 9pt; }

        /* ── Signature Row ── */
        .inv-sig-tbl { width: 100%; border-collapse: collapse; }
        .inv-sig-td  { width: 27%; border: 1px solid #000; border-top: none; padding: 6px 8px 4px; vertical-align: bottom; }
        .inv-note-td { border: 1px solid #000; border-top: none; border-left: none; border-right: none; padding: 6px 8px; font-size: 7.5pt; text-align: center; vertical-align: middle; font-style: italic; }
        .inv-sig-line { border-bottom: 1px solid #000; height: 22px; margin-bottom: 3px; }
        .inv-sig-lbl  { font-size: 7.5pt; font-weight: bold; text-align: center; }

        /* ═══ Print Styles — A5 Landscape Dot Matrix ═══ */
        @media print {
            body { padding: 0; margin: 0; }

            /* Dot matrix: strip colour fills so they print as plain borders */
            .inv-ib-lbl,
            .inv-items-tbl th,
            .inv-tot-lbl {
                background: none !important;
                color: #000 !important;
            }

            @page {
                size: A5 landscape;
                margin: 5mm;
            }
        }

        /* Auto-print trigger */
        @media screen {
            .no-print { display: block; }
        }
        @media print {
            .no-print { display: none !important; }
        }
    </style>
</head>
<body onload="window.print();">

    {{-- Print Button (screen only) --}}
    <div class="no-print" style="text-align: center; margin-bottom: 10px;">
        <button onclick="window.print();" style="padding: 8px 20px; font-size: 12px; cursor: pointer;">Print Again</button>
        <button onclick="window.close();" style="padding: 8px 20px; font-size: 12px; cursor: pointer; margin-left: 10px;">Close</button>
    </div>

    <div class="inv-wrap">

        {{-- ══ HEADER ══ --}}
        <table class="inv-hdr-tbl" cellpadding="0" cellspacing="0">
            <tr>
                <td class="inv-company-td">
                    <table cellpadding="0" cellspacing="0" class="inv-company-inner">
                        <tr>
                            <td rowspan="4" class="inv-logo-td">
                                <img src="{{ asset('images/logo.png') }}" alt="" class="inv-logo">
                            </td>
                            <td class="inv-shop-name">{{ config('shop.name') }}</td>
                        </tr>
                        <tr><td class="inv-shop-tag">{{ config('shop.tagline') }}</td></tr>
                        <tr><td class="inv-shop-addr">{{ config('shop.address') }}</td></tr>
                        <tr><td class="inv-shop-contact">Tele: {{ config('shop.phone') }} &nbsp;&nbsp; Email: {{ config('shop.email') }}</td></tr>
                    </table>
                </td>
                <td class="inv-infobox-td">
                    <table class="inv-ib-tbl" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="inv-ib-lbl">Date</td>
                            <td class="inv-ib-val">{{ $sale->created_at->format('d/m/Y') }}</td>
                        </tr>
                        <tr>
                            <td class="inv-ib-lbl">Time</td>
                            <td class="inv-ib-val">{{ $sale->created_at->format('H:i') }}</td>
                        </tr>
                        <tr>
                            <td class="inv-ib-lbl">Invoice No.</td>
                            <td class="inv-ib-val">{{ $sale->invoice_number }}</td>
                        </tr>
                        <tr>
                            <td class="inv-ib-lbl">Sales Rep.</td>
                            <td class="inv-ib-val">{{ $sale->user->name ?? '-' }}</td>
                        </tr>
                        <tr>
                            <td class="inv-ib-lbl">Payment</td>
                            <td class="inv-ib-val">{{ ucfirst(str_replace('_', ' ', $sale->payments->first()?->payment_method ?? 'Cash')) }}</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        {{-- ══ BILL TO ══ --}}
        <table class="inv-bto-tbl" cellpadding="0" cellspacing="0">
            <tr>
                <td class="inv-bto-td">
                    <strong>Bill To:</strong>&nbsp;
                    {{ $sale->customer->name ?? 'Walk-in Customer' }}
                    @if($sale->customer->address)
                    &nbsp;|&nbsp; {{ $sale->customer->address }}
                    @endif
                    @if($sale->customer->phone)
                    &nbsp;&nbsp; <strong>Tel:</strong> {{ $sale->customer->phone }}
                    @endif
                </td>
            </tr>
        </table>

        {{-- ══ ITEMS TABLE ══ --}}
        <table class="inv-items-tbl" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th class="inv-c-code">Code</th>
                    <th class="inv-c-desc">Description</th>
                    <th class="inv-c-qty">Qty</th>
                    <th class="inv-c-price">Unit Price</th>
                    <th class="inv-c-disc">Discount</th>
                    <th class="inv-c-amt">Amount</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sale->items as $item)
                <tr>
                    <td class="inv-c-code">{{ $item->product_code }}</td>
                    <td class="inv-c-desc">{{ $item->product_name }}</td>
                    <td class="inv-c-qty inv-tc">{{ $item->quantity }}</td>
                    <td class="inv-c-price inv-tr">Rs.{{ number_format($item->unit_price, 2) }}</td>
                    <td class="inv-c-disc inv-tr">
                        @if($item->discount_per_unit > 0)-Rs.{{ number_format($item->discount_per_unit, 2) }}@else&nbsp;-@endif
                    </td>
                    <td class="inv-c-amt inv-tr">Rs.{{ number_format(($item->unit_price - $item->discount_per_unit) * $item->quantity, 2) }}</td>
                </tr>
                @endforeach
                @php $invFiller = max(0, 8 - count($sale->items)); @endphp
                @for($f = 0; $f < $invFiller; $f++)
                <tr class="inv-filler"><td>&nbsp;</td><td></td><td></td><td></td><td></td><td></td></tr>
                @endfor
            </tbody>
        </table>

        {{-- ══ BOTTOM: OUTSTANDINGS + TOTALS ══ --}}
        <table class="inv-bot-tbl" cellpadding="0" cellspacing="0">
            <tr>
                <td class="inv-bot-left">
                    <div class="inv-out-lbl">OUT STANDINGS:-</div>
                    <div class="inv-out-val">
                        @if($sale->due_amount > 0)
                            Rs.{{ number_format($sale->due_amount, 2) }}
                        @else
                            None
                        @endif
                    </div>
                </td>
                <td class="inv-bot-right">
                    <table class="inv-tot-tbl" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="inv-tot-lbl">Net Total</td>
                            <td class="inv-tot-val">Rs.{{ number_format($sale->total_amount, 2) }}</td>
                        </tr>
                        <tr>
                            <td class="inv-tot-lbl">Paid</td>
                            <td class="inv-tot-val">Rs.{{ number_format($sale->payments->sum('amount'), 2) }}</td>
                        </tr>
                        <tr class="inv-bal-row">
                            <td class="inv-tot-lbl">Balance</td>
                            <td class="inv-tot-val">Rs.{{ number_format($sale->due_amount, 2) }}</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        {{-- ══ SIGNATURE ROW ══ --}}
        <table class="inv-sig-tbl" cellpadding="0" cellspacing="0">
            <tr>
                <td class="inv-sig-td">
                    <div class="inv-sig-line"></div>
                    <div class="inv-sig-lbl">Customer Signature</div>
                </td>
                <td class="inv-note-td">
                    Goods Received in good condition. &lsquo;Warranty covers only manufacturing defects.&rsquo;
                </td>
                <td class="inv-sig-td">
                    <div class="inv-sig-line"></div>
                    <div class="inv-sig-lbl">Authorised Signature</div>
                </td>
            </tr>
        </table>

    </div>

</body>
</html>