<div class="pos-wrapper">
    <style>
        .pos-invoice-print-area {
            background-color: #fff;
            color: #000;
            font-family: Arial, sans-serif;
            font-size: 14px;
            padding: 20px;
            box-sizing: border-box;
            width: 100%;
        }
        .inv-wrap {
            width: 100%;
            border: 2px solid #000;
        }
        .inv-hdr-tbl {
            width: 100%;
            border-bottom: 2px solid #000;
        }
        .inv-company-td {
            padding: 10px;
            vertical-align: top;
        }
        .inv-infobox-td {
            width: 350px;
            vertical-align: top;
            border-left: 2px solid #000;
        }
        .inv-ib-tbl {
            width: 100%;
            border-collapse: collapse;
        }
        .inv-ib-tbl td {
            padding: 4px 8px;
            border-bottom: 1px solid #000;
            font-size: 13px;
        }
        .inv-ib-tbl tr:last-child td {
            border-bottom: none;
        }
        .inv-ib-lbl {
            background-color: #0072BC;
            color: #fff;
            font-family: 'Helvetica', 'Roboto', sans-serif;
            font-weight: bold;
            width: 100px;
            border-right: 1px solid #000;
        }
        .inv-ib-val {
            background-color: #fff;
            color: #000;
            font-weight: bold;
        }
        .inv-company-inner {
            width: 100%;
        }
        .inv-logo-td {
            width: 100px;
            text-align: center;
            vertical-align: middle;
        }
        .inv-logo {
            max-width: 120px;
            max-height: 120px;
        }
        .inv-shop-name {
            font-family: 'Impact', 'Haettenschweiler', 'Arial Black', sans-serif;
            font-size: 26px;
            font-weight: normal; /* Impact is already bold */
            color: #ED1C24;
            padding-bottom: 2px;
            letter-spacing: 0.5px;
            transform: scaleX(1.05); /* Slight horizontal stretch */
            transform-origin: left center;
            display: inline-block;
        }
        .inv-shop-tag {
            font-size: 12px;
            font-style: italic;
            font-family: 'Helvetica', 'Roboto', sans-serif;
            font-weight: bold;
            color: #0072BC;
            padding-bottom: 2px;
        }
        .inv-shop-addr, .inv-shop-contact {
            font-size: 12px;
            font-family: 'Arial', 'Univers', 'Open Sans', sans-serif;
            color: #000;
        }
        .inv-bto-tbl {
            width: 100%;
            border-bottom: 2px solid #000;
        }
        .inv-bto-td {
            padding: 6px 10px;
            font-size: 13px;
            font-family: 'Helvetica', 'Roboto', sans-serif;
            font-weight: bold;
        }
        .inv-items-tbl {
            width: 100%;
            border-collapse: collapse;
            border-bottom: 2px solid #000;
        }
        .inv-items-tbl th {
            background-color: #0072BC;
            color: #fff;
            text-align: left;
            padding: 6px 10px;
            font-size: 13px;
            font-family: 'Helvetica', 'Roboto', sans-serif;
            font-weight: bold;
            border-right: 1px solid #000;
            border-bottom: 2px solid #000;
        }
        .inv-items-tbl th:last-child {
            border-right: none;
        }
        .inv-items-tbl td {
            padding: 6px 10px;
            font-size: 13px;
            font-family: 'Arial', 'Univers', sans-serif;
            border-right: 1px solid #000;
            border-bottom: 1px solid #000;
        }
        .inv-items-tbl td:last-child {
            border-right: none;
        }
        .inv-tr { text-align: right; }
        .inv-tc { text-align: center; }
        
        .inv-filler td {
            height: 25px; /* Minimum height for empty rows */
        }
        
        .inv-bot-tbl {
            width: 100%;
            border-collapse: collapse;
            border-bottom: 2px solid #000;
        }
        .inv-bot-left {
            vertical-align: top;
            padding: 10px;
            width: 60%;
            font-family: 'Helvetica', 'Roboto', sans-serif;
        }
        .inv-bot-right {
            vertical-align: top;
            width: 40%;
            border-left: 2px solid #000;
        }
        .inv-out-lbl {
            font-weight: bold;
            margin-bottom: 5px;
            font-size: 13px;
        }
        .inv-out-val {
            font-style: italic;
            font-family: 'Arial', 'Univers', sans-serif;
        }
        .inv-tot-tbl {
            width: 100%;
            border-collapse: collapse;
        }
        .inv-tot-tbl td {
            padding: 6px 10px;
            font-size: 14px;
            font-weight: bold;
            font-family: 'Arial', 'Univers', sans-serif;
            border-bottom: 1px solid #000;
        }
        .inv-tot-tbl tr:last-child td {
            border-bottom: none;
        }
        .inv-tot-lbl {
            background-color: #0072BC;
            color: #fff;
            width: 40%;
            font-family: 'Helvetica', 'Roboto', sans-serif;
            border-right: 1px solid #000;
        }
        .inv-tot-val {
            text-align: right;
            border-bottom: 1px solid #000;
        }
        
        .inv-sig-tbl {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        .inv-sig-td {
            width: 30%;
            text-align: center;
            vertical-align: bottom;
            padding: 20px 10px 10px;
        }
        .inv-note-td {
            width: 40%;
            text-align: center;
            vertical-align: top;
            font-style: italic;
            font-size: 11px;
            font-family: 'Arial', 'Univers', 'Open Sans', sans-serif;
            color: #ED1C24;
            padding: 10px;
            border-left: 1px solid #000;
            border-right: 1px solid #000;
        }
        .inv-sig-line {
            border-top: 1px solid #000;
            margin: 0 auto 5px;
            width: 80%;
        }
        .inv-sig-lbl {
            font-size: 12px;
            font-family: 'Helvetica', 'Roboto', sans-serif;
            font-weight: bold;
        }

        .inv-watermark-container {
            position: relative;
        }
        .inv-watermark {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0.12;
            z-index: 0;
            pointer-events: none;
            width: 50%;
            max-width: 400px;
        }
        .inv-items-tbl {
            position: relative;
            z-index: 1;
        }
        
            @media print {
                @page {
                    size: 8.5in 5.5in; /* Custom 8.5 x 5.5 inch standard receipt paper / A5 size */
                    margin: 10mm;
                }
                body * { visibility: hidden; }
                #saleReceiptPrintContent, #saleReceiptPrintContent * { visibility: visible; }
                #saleReceiptPrintContent {
                    position: absolute;
                    left: 0;
                    top: 0;
                    width: 100%;
                }
                .pos-overlay, .pos-modal-card {
                    background: transparent !important;
                    box-shadow: none !important;
                }
            }
    </style>

    {{-- Toast Notifications --}}
    <div id="posToastContainer" class="pos-toast-container"></div>

    {{-- ════════════════════════════════════════════
         OPENING CASH MODAL
    ════════════════════════════════════════════ --}}
    @if($showOpeningCashModal)
    <div class="pos-overlay" style="z-index:2000;">
        <div class="pos-modal-card" style="max-width:440px;">
            <div class="pos-modal-header">
                <div class="d-flex align-items-center gap-2">
                    <div class="pos-icon-badge">
                        <i class="bi bi-cash-stack"></i>
                    </div>
                    <div>
                        <h5 class="mb-0 fw-bold">Open POS Session</h5>
                        <small class="opacity-75">{{ now()->format('l, F d, Y') }}</small>
                    </div>
                </div>
            </div>
            <div class="pos-modal-body">
                <div class="text-center mb-4">
                    <div class="pos-cash-icon-wrap mx-auto mb-3">
                        <i class="bi bi-safe2"></i>
                    </div>
                    <p class="text-muted mb-0 small">Enter the opening cash amount to start today's POS session.</p>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold pos-label">Opening Cash (Rs.) <span class="text-danger">*</span></label>
                    <div class="input-group input-group-lg">
                        <span class="input-group-text pos-input-prefix">Rs.</span>
                        <input type="number"
                            class="form-control pos-input-lg text-center fw-bold"
                            wire:model="openingCashAmount"
                            step="0.01"
                            min="0"
                            placeholder="0.00"
                            autofocus>
                    </div>
                    @error('openingCashAmount')
                    <div class="pos-field-error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="pos-info-box">
                    <i class="bi bi-info-circle me-2"></i>
                    This amount will be recorded as your starting cash for today's transactions.
                </div>
            </div>
            <div class="pos-modal-footer justify-content-center">
                <button type="button" class="btn pos-btn-gradient btn-lg px-5" wire:click="submitOpeningCash">
                    <i class="bi bi-play-circle me-2"></i>Start POS Session
                </button>
            </div>
        </div>
    </div>
    @endif

    {{-- ════════════════════════════════════════════
         FULL-WIDTH TOP HEADER
    ════════════════════════════════════════════ --}}
    <div class="pos-top-bar">
        <div class="d-flex align-items-center gap-3">
            <div class="pos-top-badge">
                <i class="bi bi-shop"></i>
            </div>
            <div>
                <h5 class="mb-0 fw-bold pos-shop-name">{{ strtoupper(config('shop.name')) }}</h5>
                <small class="pos-muted">Point of Sale</small>
            </div>
        </div>
        <div class="d-flex align-items-center gap-3">
            @if($currentSession)
            <div class="pos-session-badge">
                <i class="bi bi-circle-fill text-success me-1" style="font-size:0.5rem; vertical-align:middle;"></i>
                <span>Session Active</span>
            </div>
            @endif
            <div class="text-end">
                <div class="fw-bold pos-clock" id="posLiveClock">{{ now()->format('h:i A') }}</div>
                <small class="pos-muted">{{ now()->format('l, M d, Y') }}</small>
            </div>
        </div>
    </div>

    {{-- ════════════════════════════════════════════
         MAIN POS LAYOUT
    ════════════════════════════════════════════ --}}
    <div class="pos-layout">

        {{-- ── LEFT PANEL: Products ── --}}
        <main class="pos-products-panel">

            {{-- Search Bar --}}
            <div class="pos-search-wrap">
                <div class="pos-search-box">
                    <i class="bi bi-search pos-search-icon"></i>
                    <input type="text" class="pos-search-input"
                        wire:model.live.debounce.300ms="search"
                        placeholder="Search by name, code or model...">
                    @if($search)
                    <button type="button" class="pos-search-clear" wire:click="$set('search', '')">
                        <i class="bi bi-x-lg"></i>
                    </button>
                    @endif
                </div>

                {{-- Search Dropdown --}}
                @if(count($searchResults) > 0)
                <div class="pos-search-dropdown">
                    @foreach($searchResults as $product)
                    <div class="pos-search-result"
                        wire:click="addToCart({{ json_encode($product) }})">
                        <div>
                            <div class="fw-semibold">{{ $product['name'] }}</div>
                            <small class="pos-muted">{{ $product['code'] }} · {{ $product['model'] }}</small>
                        </div>
                        <div class="text-end flex-shrink-0">
                            <div class="pos-search-price">Rs.{{ number_format($product['price'], 2) }}</div>
                            <small class="pos-muted">Stock: {{ $product['stock'] }}</small>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif
            </div>

            {{-- Category Tabs --}}
            <div class="pos-categories">
                <button type="button"
                    class="pos-cat-btn {{ !$selectedCategory ? 'active' : '' }}"
                    wire:click="selectCategory(null)">
                    <i class="bi bi-grid-3x3-gap me-1"></i>All
                </button>
                @foreach($categories as $category)
                <button type="button"
                    class="pos-cat-btn {{ $selectedCategory == $category->id ? 'active' : '' }}"
                    wire:click="selectCategory({{ $category->id }})">
                    {{ $category->category_name }}
                </button>
                @endforeach
            </div>

            {{-- Product Grid --}}
            <div class="pos-products-scroll">
                <div class="pos-products-grid">
                    @forelse($products as $product)
                    <div class="pos-product-card"
                        wire:click="addToCart({{ json_encode($product) }})">
                        <div class="pos-product-img">
                            @if($product['image'])
                            @php
                            $productImage = str_replace('\\', '/', $product['image']);
                            if (preg_match('/^https?:\/\//i', $productImage)) {
                            $productImageUrl = $productImage;
                            } elseif (str_starts_with($productImage, 'storage/') || str_starts_with($productImage, '/storage/')) {
                            $productImageUrl = '/' . ltrim($productImage, '/');
                            } else {
                            $productImageUrl = '/storage/' . ltrim($productImage, '/');
                            }
                            @endphp
                            <img src="{{ $productImageUrl }}"
                                alt="{{ $product['name'] }}"
                                onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                            <div class="pos-product-noimg" style="display:none;">
                                <i class="bi bi-box-seam"></i>
                            </div>
                            @else
                            <div class="pos-product-noimg">
                                <i class="bi bi-box-seam"></i>
                            </div>
                            @endif
                            <span class="pos-stock-badge {{ $product['stock'] > 0 ? 'in-stock' : 'out-stock' }}">
                                {{ $product['stock'] }}
                            </span>
                        </div>
                        <div class="pos-product-info">
                            <div class="pos-product-name">{{ Str::limit($product['name'], 32) }}</div>
                            <div class="pos-product-code">{{ $product['code'] }}</div>
                            <div class="pos-product-price">Rs.{{ number_format($product['price'], 2) }}</div>
                        </div>
                    </div>
                    @empty
                    <div class="pos-no-products">
                        <i class="bi bi-search"></i>
                        <p>No products found</p>
                    </div>
                    @endforelse
                </div>
            </div>

        </main>


        {{-- ── RIGHT PANEL: Products ── --}}
        <aside class="pos-cart-panel">

            {{-- Panel Header --}}
            <div class="pos-cart-header">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex align-items-center gap-2">
                        <div class="pos-header-icon">
                            <i class="bi bi-cart3"></i>
                        </div>
                        <span class="fw-bold fs-6">Current Sale</span>
                    </div>
                    <button type="button" class="btn pos-btn-ghost-sm" wire:click="viewCloseRegisterReport">
                        <i class="bi bi-file-earmark-bar-graph me-1"></i>Report
                    </button>
                </div>
                {{-- Customer select --}}
                <div class="d-flex gap-2">
                    <select class="form-select pos-select flex-grow-1" wire:model.live="customerId">
                        @foreach($customers as $customer)
                        <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                        @endforeach
                    </select>
                    <button type="button" class="btn pos-btn-icon" wire:click="openCustomerModal" title="Add New Customer">
                        <i class="bi bi-person-plus"></i>
                    </button>
                </div>
            </div>

            {{-- Cart Items --}}
            <div class="pos-cart-body">
                @if(count($cart) > 0)
                <table class="pos-cart-table">
                    <thead>
                        <tr>
                            <th class="pos-ct-th pos-ct-name">Item</th>
                            <th class="pos-ct-th pos-ct-qty">Qty</th>
                            <th class="pos-ct-th pos-ct-price">Price</th>
                            <th class="pos-ct-th pos-ct-disc">Disc.</th>
                            <th class="pos-ct-th pos-ct-total">Sub Total</th>
                            <th class="pos-ct-th pos-ct-rm"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cart as $index => $item)
                        <tr class="pos-ct-row" wire:key="cart-item-{{ $item['key'] ?? $index }}">
                            <td class="pos-ct-td pos-ct-name">
                                <div class="fw-semibold pos-item-name">{{ Str::limit($item['name'], 24) }}</div>
                                <div class="pos-item-code">{{ $item['code'] }}</div>
                            </td>
                            <td class="pos-ct-td pos-ct-qty">
                                <div class="pos-qty-control">
                                    <button type="button" class="pos-qty-btn" wire:click="decrementQuantity({{ $index }})">
                                        <i class="bi bi-dash"></i>
                                    </button>
                                    <input type="number" class="pos-qty-input"
                                        value="{{ $item['quantity'] }}"
                                        wire:change="updateQuantity({{ $index }}, $event.target.value)"
                                        min="1">
                                    <button type="button" class="pos-qty-btn" wire:click="incrementQuantity({{ $index }})">
                                        <i class="bi bi-plus"></i>
                                    </button>
                                </div>
                            </td>
                            <td class="pos-ct-td pos-ct-price">
                                <input type="number"
                                    class="pos-price-input"
                                    value="{{ $item['price'] }}"
                                    wire:change="updatePrice({{ $index }}, $event.target.value)"
                                    min="0"
                                    step="0.01">
                            </td>
                            <td class="pos-ct-td pos-ct-disc">
                                <div class="pos-disc-edit-wrap">
                                    <input type="number"
                                        class="pos-disc-input"
                                        value="{{ $item['discount'] }}"
                                        wire:change="updateDiscount({{ $index }}, $event.target.value)"
                                        min="0"
                                        max="{{ $item['price'] }}"
                                        step="0.01"
                                        placeholder="0">
                                    @if($item['discount'] > 0)
                                    <small class="pos-disc-val">
                                        -Rs.{{ number_format($item['discount'] * $item['quantity'], 2) }}
                                    </small>
                                    @endif
                                </div>
                            </td>
                            <td class="pos-ct-td pos-ct-total">
                                <span class="pos-item-total">Rs.{{ number_format($item['total'], 2) }}</span>
                            </td>
                            <td class="pos-ct-td pos-ct-rm">
                                <button type="button" class="btn pos-btn-remove" wire:click="removeFromCart({{ $index }})">
                                    <i class="bi bi-x-lg"></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <div class="pos-empty-cart">
                    <div class="pos-empty-icon">
                        <i class="bi bi-cart-x"></i>
                    </div>
                    <p class="mb-1 fw-semibold">Cart is empty</p>
                    <small>Search or click products to add</small>
                </div>
                @endif
            </div>
            {{-- Cart Footer (Moved inside panel) --}}
            <div class="pos-cart-footer">
                <div class="pos-footer-totals">
                    <div class="pos-totals">
                        <div class="pos-total-row">
                            <span>Subtotal</span>
                            <span>Rs.{{ number_format($this->subtotal, 2) }}</span>
                        </div>
                        @if($this->totalDiscount > 0)
                        <div class="pos-total-row pos-discount-row">
                            <span><i class="bi bi-tag me-1"></i>Item Disc.</span>
                            <span>-Rs.{{ number_format($this->totalDiscount, 2) }}</span>
                        </div>
                        @endif
                        <div class="pos-total-row pos-extra-discount-row">
                            <span>Extra Discount</span>
                            <div class="d-flex align-items-center gap-1">
                                <input type="number" class="pos-discount-input"
                                    wire:model.live="additionalDiscount" min="0" placeholder="0">
                                <button type="button" class="pos-discount-toggle" wire:click="toggleDiscountType">
                                    {{ $additionalDiscountType === 'percentage' ? '%' : 'Rs' }}
                                </button>
                            </div>
                        </div>
                        <div class="pos-grand-total-row">
                            <span>Grand Total</span>
                            <span>Rs.{{ number_format($this->grandTotal, 2) }}</span>
                        </div>
                    </div>
                </div>

                <!-- <div class="pos-footer-payment mt-3 mb-3">
                    <div class="pos-info-box h-100 d-flex flex-column justify-content-center border-0 p-2" style="background: rgba(212, 166, 61, 0.05);">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="text-muted small">Items:</span>
                            <span class="fw-bold small">{{ collect($cart)->sum('quantity') }}</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="text-muted small">Customer:</span>
                            <span class="fw-bold text-truncate small ms-2">{{ $selectedCustomer->name ?? 'None' }}</span>
                        </div>
                    </div>
                </div> -->

                <div class="pos-footer-actions">
                    <button type="button"
                        class="btn pos-btn-complete py-3"
                        wire:click="openPaymentModal"
                        wire:loading.attr="disabled"
                        @if(count($cart)==0) disabled @endif>
                        <span wire:loading.remove wire:target="openPaymentModal">
                            <i class="bi bi-wallet2 me-2"></i>Proceed to Payment
                        </span>
                        <span wire:loading wire:target="openPaymentModal">
                            <span class="spinner-border spinner-border-sm me-2"></span>...
                        </span>
                    </button>

                    @if(count($cart) > 0)
                    <button type="button" class="btn pos-btn-clear" wire:click="clearCart">
                        <i class="bi bi-x-circle me-1"></i>Clear Sale
                    </button>
                    @endif
                </div>
            </div>
        </aside>
    </div>

    {{-- ════════════════════════════════════════════
         ADD CUSTOMER MODAL
    ════════════════════════════════════════════ --}}
    @if($showCustomerModal)
    <div class="pos-overlay">
        <div class="pos-modal-card" style="max-width:1200px;">
            <div class="pos-modal-header">
                <div class="d-flex align-items-center gap-2">
                    <div class="pos-icon-badge">
                        <i class="bi bi-person-plus"></i>
                    </div>
                    <h5 class="mb-0 fw-bold">Add New Customer</h5>
                </div>
                <button type="button" class="btn pos-btn-close" wire:click="closeCustomerModal">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
            <div class="pos-modal-body">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="pos-label">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control pos-input" wire:model="customerName" placeholder="Customer name">
                        @error('customerName') <div class="pos-field-error">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="pos-label">Phone <span class="text-danger">*</span></label>
                        <input type="text" class="form-control pos-input" wire:model="customerPhone" placeholder="Phone number">
                        @error('customerPhone') <div class="pos-field-error">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="pos-label">Email</label>
                        <input type="email" class="form-control pos-input" wire:model="customerEmail" placeholder="Email address">
                        @error('customerEmail') <div class="pos-field-error">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="pos-label">Customer Type <span class="text-danger">*</span></label>
                        <select class="form-select pos-input" wire:model="customerType">
                            <option value="retail">Retail</option>
                            <option value="wholesale">Wholesale</option>
                        </select>
                        @error('customerType') <div class="pos-field-error">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="pos-label">Business Name</label>
                        <input type="text" class="form-control pos-input" wire:model="businessName" placeholder="Business name">
                    </div>
                    <div class="col-12">
                        <label class="pos-label">Address <span class="text-danger">*</span></label>
                        <textarea class="form-control pos-input" wire:model="customerAddress" rows="2" placeholder="Address"></textarea>
                        @error('customerAddress') <div class="pos-field-error">{{ $message }}</div> @enderror
                    </div>
                </div>
            </div>
            <div class="pos-modal-footer">
                <button type="button" class="btn pos-btn-secondary" wire:click="closeCustomerModal">
                    <i class="bi bi-x-circle me-1"></i>Cancel
                </button>
                <button type="button" class="btn pos-btn-gradient" wire:click="createCustomer">
                    <i class="bi bi-check-circle me-1"></i>Create Customer
                </button>
            </div>
        </div>
    </div>
    @endif

    {{-- ════════════════════════════════════════════
         PAYMENT MODAL
    ════════════════════════════════════════════ --}}
    @if($showPaymentModal)
    <div class="pos-overlay" style="z-index: 1600;">
        <div class="pos-modal-card" style="max-width:800px;">
            <div class="pos-modal-header">
                <div class="d-flex align-items-center gap-2">
                    <div class="pos-icon-badge">
                        <i class="bi bi-cash-coin"></i>
                    </div>
                    <div>
                        <h5 class="mb-0 fw-bold">Payment Details</h5>
                        <small class="opacity-75">Payable: Rs.{{ number_format($this->grandTotal, 2) }}</small>
                    </div>
                </div>
                <button type="button" class="btn pos-btn-close" wire:click="$set('showPaymentModal', false)">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>

            <div class="pos-modal-body">
                {{-- Tabs --}}
                <div class="payment-tabs">
                    <button type="button" class="payment-tab-btn {{ $activeTab === 'single' ? 'active' : '' }}" wire:click="$set('activeTab', 'single')">
                        <i class="bi bi-person me-1"></i>Single Payment
                    </button>
                    <button type="button" class="payment-tab-btn {{ $activeTab === 'multiple' ? 'active' : '' }}" wire:click="$set('activeTab', 'multiple'); $set('paymentMethod', 'multiple')">
                        <i class="bi bi-layers me-1"></i>Multiple Payment
                    </button>
                </div>

                @if($activeTab === 'single')
                {{-- Single Payment Content --}}
                <div class="pos-payment-methods mb-4">
                    <div class="pos-pm-grid">
                        <input type="radio" class="pos-pm-radio" name="paymentMethod" id="pmCash" value="cash" wire:model.live="paymentMethod">
                        <label class="pos-pm-label" for="pmCash">
                            <i class="bi bi-cash"></i>
                            <span>Cash</span>
                        </label>

                        <input type="radio" class="pos-pm-radio" name="paymentMethod" id="pmCheque" value="cheque" wire:model.live="paymentMethod">
                        <label class="pos-pm-label" for="pmCheque">
                            <i class="bi bi-bank"></i>
                            <span>Cheque</span>
                        </label>

                        <input type="radio" class="pos-pm-radio" name="paymentMethod" id="pmDue" value="due" wire:model.live="paymentMethod">
                        <label class="pos-pm-label" for="pmDue">
                            <i class="bi bi-clock-history"></i>
                            <span>Due</span>
                        </label>
                    </div>
                </div>

                <div class="pos-payment-inputs">
                    @if($paymentMethod === 'cash')
                    <div class="pos-input-group">
                        <label class="pos-label">Amount Received</label>
                        <div class="input-group">
                            <span class="input-group-text pos-input-prefix-sm">Rs.</span>
                            <input type="number" class="form-control pos-input-lg py-3" wire:model.live="cashAmount" placeholder="0.00" autofocus>
                        </div>
                    </div>
                    @elseif($paymentMethod === 'cheque')
                    <div class="pos-cheque-section">
                        @if(count($cheques) > 0)
                        <div class="pos-cheque-list mb-3">
                            @foreach($cheques as $ci => $cheque)
                            <div class="pos-cheque-item">
                                <div class="pos-cheque-info">
                                    <span class="pos-cheque-meta">Cheque {{ $ci + 1 }}</span>
                                    <span class="pos-cheque-amt">Rs.{{ number_format($cheque['amount'], 2) }}</span>
                                </div>
                                <button type="button" class="pos-cheque-del" wire:click="removeCheque({{ $ci }})">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                            @endforeach
                        </div>
                        @endif

                        <div class="pos-add-cheque p-3 border rounded bg-light">
                            <label class="pos-label mb-2">Add Cheque Amount</label>
                            <div class="input-group mb-2">
                                <span class="input-group-text pos-input-prefix-sm">Rs.</span>
                                <input type="number" class="form-control pos-input" wire:model="tempChequeAmount" placeholder="Amount">
                            </div>
                            <button type="button" class="btn pos-btn-outline w-100 btn-sm" wire:click="addCheque">
                                <i class="bi bi-plus-circle me-1"></i>Add to List
                            </button>
                        </div>
                    </div>
                    @elseif($paymentMethod === 'due')
                    <div class="pos-due-notice mb-3">
                        <i class="bi bi-info-circle me-2"></i>Full amount will be marked as outstanding.
                    </div>
                    <div class="row g-3">
                        <div class="col-md-5">
                            <label class="pos-label">Due After (Days)</label>
                            <div class="input-group">
                                <input type="number" class="form-control pos-input-sm" wire:model.live="dueDays" placeholder="No. of days">
                                <span class="input-group-text py-0" style="font-size: 0.75rem;">Days</span>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <label class="pos-label">Promise Date (Due Date)</label>
                            <input type="date" class="form-control pos-input" wire:model.live="dueDate" min="{{ now()->format('Y-m-d') }}">
                        </div>
                    </div>
                    @if($dueDays)
                    <div class="pos-info-box mt-3 py-2">
                        <i class="bi bi-clock-history me-2"></i>This payment is due in <strong>{{ $dueDays }} days</strong> ({{ \Carbon\Carbon::parse($dueDate)->format('d/m/Y') }})
                    </div>
                    @endif
                    @endif
                </div>
                @else
                {{-- Multiple Payment Content --}}
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="pos-label">Cash Amount</label>
                        <div class="input-group">
                            <span class="input-group-text pos-input-prefix-sm">Rs.</span>
                            <input type="number" class="form-control pos-input" wire:model.live="cashAmount" placeholder="0.00">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="pos-label">Add Cheque Amount</label>
                        <div class="input-group">
                            <span class="input-group-text pos-input-prefix-sm">Rs.</span>
                            <input type="number" class="form-control pos-input" wire:model="tempChequeAmount" placeholder="Amount">
                            <button type="button" class="btn pos-btn-outline" wire:click="addCheque">Add</button>
                        </div>
                    </div>
                </div>

                @if(count($cheques) > 0)
                <div class="pos-cheque-list mt-3">
                    @foreach($cheques as $ci => $cheque)
                    <div class="pos-cheque-item">
                        <div class="pos-cheque-info">
                            <span class="pos-cheque-meta">Cheque {{ $ci + 1 }}</span>
                            <span class="pos-cheque-amt">Rs.{{ number_format($cheque['amount'], 2) }}</span>
                        </div>
                        <button type="button" class="pos-cheque-del" wire:click="removeCheque({{ $ci }})">
                            <i class="bi bi-trash"></i>
                        </button>
                    </div>
                    @endforeach
                </div>
                @endif

                <div class="pos-info-box mt-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>Total Paid (Multiple):</span>
                        <span class="fw-bold">Rs.{{ number_format($this->totalPaidAmount, 2) }}</span>
                    </div>
                </div>
                @endif

                {{-- Due Calculation --}}
                @if($this->dueAmount > 0)
                <div class="pos-due-amount mt-4 mb-0">
                    <span><i class="bi bi-exclamation-triangle me-2"></i>Remaining Due</span>
                    <span>Rs.{{ number_format($this->dueAmount, 2) }}</span>
                </div>
                @endif
            </div>

            <div class="pos-modal-footer">
                <button type="button" class="btn pos-btn-secondary" wire:click="$set('showPaymentModal', false)">
                    <i class="bi bi-x-circle me-1"></i>Cancel
                </button>
                <button type="button" class="btn pos-btn-gradient px-4" wire:click="validateAndCreateSale" wire:loading.attr="disabled">
                    <span wire:loading.remove wire:target="validateAndCreateSale">
                        <i class="bi bi-check-circle me-1"></i>Confirm & Complete Sale
                    </span>
                    <span wire:loading wire:target="validateAndCreateSale">
                        <span class="spinner-border spinner-border-sm me-1"></span>Processing...
                    </span>
                </button>
            </div>
        </div>
    </div>
    @endif

    {{-- ════════════════════════════════════════════
         PARTIAL PAYMENT CONFIRMATION MODAL
    ════════════════════════════════════════════ --}}
    @if($showPaymentConfirmModal)
    <div class="pos-overlay" style="z-index: 2500;">
        <div class="pos-modal-card" style="max-width:440px;">
            <div class="pos-modal-header pos-modal-warning">
                <div class="d-flex align-items-center gap-2">
                    <div class="pos-icon-badge warning">
                        <i class="bi bi-exclamation-triangle"></i>
                    </div>
                    <h5 class="mb-0 fw-bold">Partial Payment</h5>
                </div>
            </div>
            <div class="pos-modal-body">
                <p class="text-muted mb-3">Payment amount is less than the grand total. The due amount will be added to the customer's account.</p>
                <div class="pos-summary-table mb-3">
                    <div class="pos-summary-row">
                        <span>Grand Total</span>
                        <span class="fw-semibold">Rs.{{ number_format($grandTotal, 2) }}</span>
                    </div>
                    <div class="pos-summary-row">
                        <span>Paid Amount</span>
                        <span class="fw-semibold pos-success-text">Rs.{{ number_format($totalPaidAmount, 2) }}</span>
                    </div>
                    <div class="pos-summary-row pos-summary-due">
                        <span>Due Amount</span>
                        <span class="fw-bold">Rs.{{ number_format($pendingDueAmount, 2) }}</span>
                    </div>
                </div>

                <div class="pos-due-days-input p-3 border rounded bg-light">
                    <label class="pos-label mb-2">Due Days</label>
                    <div class="input-group">
                        <input type="number" class="form-control pos-input" wire:model.live="dueDays" placeholder="Enter number of days">
                        <span class="input-group-text py-0" style="font-size: 0.85rem;">Days</span>
                    </div>
                    @if($dueDate)
                    <div class="text-muted small mt-2">
                        <i class="bi bi-calendar-event me-1"></i>Due Date: <strong class="text-danger">{{ \Carbon\Carbon::parse($dueDate)->format('d/m/Y') }}</strong>
                    </div>
                    @endif
                </div>
            </div>
            <div class="pos-modal-footer">
                <button type="button" class="btn pos-btn-secondary" wire:click="cancelSaleConfirmation">
                    <i class="bi bi-x-circle me-1"></i>Cancel
                </button>
                <button type="button" class="btn pos-btn-gradient" wire:click="confirmSaleWithDue">
                    <i class="bi bi-check-circle me-1"></i>Proceed with Due
                </button>
            </div>
        </div>
    </div>
    @endif

    {{-- ════════════════════════════════════════════
         SALE RECEIPT MODAL
    ════════════════════════════════════════════ --}}
    @if($showSaleModal && $createdSale)
    <div class="pos-overlay" style="align-items:flex-start; padding: 20px; overflow-y:auto; z-index: 2000;">
        <div class="pos-modal-card" style="max-width: 1200px; width: 100%; box-shadow: 0 10px 30px rgba(0,0,0,0.5);">
            <div class="pos-modal-header" style="background: linear-gradient(135deg, #c7952a, #dba434); color: white; border-bottom: none; padding: 20px 25px;">
                <div class="d-flex align-items-center gap-3">
                    <div class="pos-icon-badge" style="background: rgba(255,255,255,0.2); color: white; border: none; width: 48px; height: 48px;">
                        <i class="bi bi-cart-check" style="font-size: 1.5rem;"></i>
                    </div>
                    <div>
                        <h4 class="mb-0 fw-bold text-white">Sale Completed!</h4>
                        <div class="text-white-50" style="font-size: 14px;">{{ $createdSale->invoice_number }}</div>
                    </div>
                </div>
                <button type="button" class="btn btn-sm" wire:click="createNewSale" style="background: rgba(255,255,255,0.2); color: white; border-radius: 8px;">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>

            <div class="pos-modal-body p-0" id="saleReceiptPrintContent">
                <div class="pos-invoice-print-area">
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
                                    <tr>
                                        <td class="inv-shop-tag">{{ config('shop.tagline') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="inv-shop-addr">{{ config('shop.address') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="inv-shop-contact">Tele: {{ config('shop.phone') }} &nbsp;&nbsp; Email: {{ config('shop.email') }}</td>
                                    </tr>
                                </table>
                            </td>
                            <td class="inv-infobox-td">
                                <table class="inv-ib-tbl" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td class="inv-ib-lbl">Date</td>
                                        <td class="inv-ib-val">{{ $createdSale->created_at->format('d/m/Y') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="inv-ib-lbl">Time</td>
                                        <td class="inv-ib-val">{{ $createdSale->created_at->format('H:i') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="inv-ib-lbl">Invoice No.</td>
                                        <td class="inv-ib-val">{{ $createdSale->invoice_number }}</td>
                                    </tr>
                                    <tr>
                                        <td class="inv-ib-lbl">Sales Rep.</td>
                                        <td class="inv-ib-val">{{ auth()->user()->name ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td class="inv-ib-lbl">Payment</td>
                                        @php
                                        $paymentMethodLabels = [
                                        'cash' => 'Cash',
                                        'cheque' => 'Cheque',
                                        'bank_transfer' => 'Bank Transfer',
                                        'credit_card' => 'Credit Card',
                                        ];

                                        $paymentMethods = $createdSale->payments
                                        ->pluck('payment_method')
                                        ->filter()
                                        ->unique()
                                        ->values();

                                        if ($paymentMethods->count() > 1) {
                                        $methodText = $paymentMethods
                                        ->map(fn ($method) => $paymentMethodLabels[$method] ?? ucwords(str_replace('_', ' ', $method)))
                                        ->implode(' + ');
                                        $paymentLabel = 'Multiple (' . $methodText . ')';
                                        } elseif ($paymentMethods->count() === 1) {
                                        $singleMethod = $paymentMethods->first();
                                        $paymentLabel = $paymentMethodLabels[$singleMethod] ?? ucwords(str_replace('_', ' ', $singleMethod));
                                        } else {
                                        $paymentLabel = ($createdSale->due_amount ?? 0) > 0 ? 'Due' : 'Cash';
                                        }
                                        @endphp
                                        <td class="inv-ib-val">{{ $paymentLabel }}</td>
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
                                <span style="font-family: 'Arial', sans-serif; font-weight: normal;">
                                    {{ $createdSale->customer->name }}
                                    @if($createdSale->customer->address)
                                    &nbsp;|&nbsp; {{ $createdSale->customer->address }}
                                    @endif
                                    @if($createdSale->customer->phone)
                                    &nbsp;&nbsp; <strong>Tel:</strong> {{ $createdSale->customer->phone }}
                                    @endif
                                </span>
                            </td>
                        </tr>
                    </table>

                    {{-- ══ ITEMS TABLE ══ --}}
                    <div class="inv-watermark-container">
                        <img src="{{ asset('images/logo.png') }}" class="inv-watermark" alt="">
                        <table class="inv-items-tbl" cellpadding="0" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="inv-c-code">Code</th>
                                    <th class="inv-c-desc">Description</th>
                                    <th class="inv-c-qty inv-tc">Qty</th>
                                    <th class="inv-c-price inv-tr">Unit Price</th>
                                    <th class="inv-c-disc inv-tr">Discount</th>
                                    <th class="inv-c-amt inv-tr">Amount</th>
                                </tr>
                            </thead>
                        <tbody>
                            @foreach($createdSale->items as $item)
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
                            @php $invFiller = max(0, 8 - count($createdSale->items)); @endphp
                            @for($f = 0; $f < $invFiller; $f++)
                                <tr class="inv-filler">
                                <td>&nbsp;</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                </tr>
                                @endfor
                        </tbody>
                    </table>
                    </div>

                    {{-- ══ BOTTOM: OUTSTANDINGS + TOTALS ══ --}}
                    <table class="inv-bot-tbl" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="inv-bot-left">
                                <div class="inv-out-lbl">OUT STANDINGS:-</div>
                                <div class="inv-out-val">
                                    @if($createdSale->due_amount > 0)
                                    Rs.{{ number_format($createdSale->due_amount, 2) }}
                                    @else
                                    None
                                    @endif
                                </div>
                            </td>
                            <td class="inv-bot-right">
                                <table class="inv-tot-tbl" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td class="inv-tot-lbl">Net Total</td>
                                        <td class="inv-tot-val">Rs.{{ number_format($createdSale->total_amount, 2) }}</td>
                                    </tr>
                                    <tr>
                                        <td class="inv-tot-lbl">Paid</td>
                                        <td class="inv-tot-val">Rs.{{ number_format($createdSale->payments->sum('amount'), 2) }}</td>
                                    </tr>
                                    <tr class="inv-bal-row">
                                        <td class="inv-tot-lbl">Balance</td>
                                        <td class="inv-tot-val">Rs.{{ number_format($createdSale->due_amount, 2) }}</td>
                                    </tr>
                                    @if($createdSale->due_amount > 0 && $createdSale->due_date)
                                    <tr>
                                        <td class="inv-tot-lbl">Due Date</td>
                                        <td class="inv-tot-val">{{ \Carbon\Carbon::parse($createdSale->due_date)->format('d/m/Y') }}</td>
                                    </tr>
                                    @endif
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
                </div>
            </div>

            <div class="pos-modal-footer justify-content-center gap-3" style="background: #fdfbf7; border-top: none; padding: 25px; border-bottom-left-radius: 12px; border-bottom-right-radius: 12px;">
                <button type="button" class="btn pos-btn-secondary px-4 py-2" wire:click="createNewSale" style="background: white; border: 1px solid #dee2e6; color: #495057; border-radius: 8px;">
                    <i class="bi bi-x-circle me-1"></i>Close
                </button>
                <button type="button" class="btn pos-btn-outline px-4 py-2" wire:click="printSaleReceipt" style="background: white; border: 1px solid #c7952a; color: #c7952a; border-radius: 8px;">
                    <i class="bi bi-printer me-1"></i>Print
                </button>
                <button type="button" class="btn pos-btn-gradient px-4 py-2" wire:click="downloadInvoice" style="background: linear-gradient(135deg, #c7952a, #b8860b); color: white; border: none; border-radius: 8px; font-weight: 600;">
                    <i class="bi bi-download me-1"></i>Download Invoice
                </button>
            </div>
        </div>
    </div>
    @endif

    {{-- ════════════════════════════════════════════
         CLOSE REGISTER MODAL
    ════════════════════════════════════════════ --}}
    @if($showCloseRegisterModal)
    <div class="pos-overlay" style="align-items:flex-start; padding:20px; overflow-y:auto;">
        <div class="pos-modal-card" style="max-width:1200px; width:100%;">
            <div class="pos-modal-header">
                <div class="d-flex align-items-center gap-2">
                    <div class="pos-icon-badge">
                        <i class="bi bi-x-circle"></i>
                    </div>
                    <div>
                        <h5 class="mb-0 fw-bold">Close Register</h5>
                        <small class="opacity-75">{{ date('d/m/Y H:i') }}</small>
                    </div>
                </div>
                <button type="button" class="btn pos-btn-close" wire:click="cancelCloseRegister">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>

            <div class="pos-modal-body" id="closeRegisterPrintContent">
                <div class="print-header text-center mb-4">
                    <img src="{{ asset('images/logo.png') }}" alt="{{ config('shop.name') }}" style="max-height:80px;">
                    <p class="mb-0 mt-2">{{ config('shop.address') }}</p>
                    <p><strong>TEL:</strong> {{ config('shop.phone') }} | <strong>EMAIL:</strong> {{ config('shop.email') }}</p>
                </div>

                <p class="text-muted small mb-3 no-print">Review the session summary below before closing the register.</p>

                <div class="pos-register-table">
                    <div class="pos-reg-row">
                        <span>Cash in Hand (Opening)</span>
                        <span>Rs.{{ number_format($sessionSummary['opening_cash'] ?? 0, 2) }}</span>
                    </div>
                    <div class="pos-reg-row">
                        <span>Cash Sales (POS)</span>
                        <span>Rs.{{ number_format($sessionSummary['pos_cash_sales'] ?? 0, 2) }}</span>
                    </div>
                    <div class="pos-reg-row">
                        <span>Cheque Payment (POS)</span>
                        <span>Rs.{{ number_format($sessionSummary['pos_cheque_payment'] ?? 0, 2) }}</span>
                    </div>
                    <div class="pos-reg-row">
                        <span>Bank / Online Transfer (POS)</span>
                        <span>Rs.{{ number_format($sessionSummary['pos_bank_transfer'] ?? 0, 2) }}</span>
                    </div>
                    <div class="pos-reg-row highlight">
                        <span class="fw-semibold">Admin Payments - Total</span>
                        <span class="fw-semibold">Rs.{{ number_format($sessionSummary['total_admin_payment'] ?? 0, 2) }}</span>
                    </div>
                    <div class="pos-reg-row sub">
                        <span class="ps-3">└ Cash</span>
                        <span>Rs.{{ number_format($sessionSummary['total_admin_cash_payment'] ?? 0, 2) }}</span>
                    </div>
                    <div class="pos-reg-row sub">
                        <span class="ps-3">└ Cheque</span>
                        <span>Rs.{{ number_format($sessionSummary['total_admin_cheque_payment'] ?? 0, 2) }}</span>
                    </div>
                    <div class="pos-reg-row sub">
                        <span class="ps-3">└ Bank Transfer</span>
                        <span>Rs.{{ number_format($sessionSummary['total_admin_bank_transfer'] ?? 0, 2) }}</span>
                    </div>
                    <div class="pos-reg-row highlight">
                        <span class="fw-semibold">Total Cash (POS + Admin)</span>
                        <span class="fw-semibold">Rs.{{ number_format($sessionSummary['total_cash_from_sales'] ?? 0, 2) }}</span>
                    </div>
                    <div class="pos-reg-row">
                        <span>Total POS Sales</span>
                        <span>Rs.{{ number_format($sessionSummary['total_pos_sales'] ?? 0, 2) }}</span>
                    </div>
                    <div class="pos-reg-row">
                        <span>Total Admin Sales</span>
                        <span>Rs.{{ number_format($sessionSummary['total_admin_sales'] ?? 0, 2) }}</span>
                    </div>
                    <div class="pos-reg-row highlight">
                        <span class="fw-semibold">Total Cash Payment Today</span>
                        <span class="fw-semibold">Rs.{{ number_format($sessionSummary['total_cash_payment_today'] ?? 0, 2) }}</span>
                    </div>
                    <div class="pos-reg-row">
                        <span>Expenses</span>
                        <span>Rs.{{ number_format($sessionSummary['expenses'] ?? 0, 2) }}</span>
                    </div>
                    <div class="pos-reg-row">
                        <span>Refunds</span>
                        <span>Rs.{{ number_format($sessionSummary['refunds'] ?? 0, 2) }}</span>
                    </div>
                    <div class="pos-reg-row">
                        <span>Cash Deposit - Bank</span>
                        <span>Rs.{{ number_format($sessionSummary['cash_deposit_bank'] ?? 0, 2) }}</span>
                    </div>
                    <div class="pos-reg-row">
                        <span>Supplier Payments</span>
                        <span>Rs.{{ number_format($sessionSummary['supplier_payment'] ?? 0, 2) }}</span>
                    </div>
                    <div class="pos-reg-row">
                        <span>Supplier Cash Payments</span>
                        <span>Rs.{{ number_format($sessionSummary['supplier_cash_payment'] ?? 0, 2) }}</span>
                    </div>
                    <div class="pos-reg-row total">
                        <span class="fw-bold">Total Cash in Hand</span>
                        <span class="fw-bold">Rs.{{ number_format($sessionSummary['expected_cash'] ?? 0, 2) }}</span>
                    </div>
                </div>

                <hr class="my-3">

                <div class="mb-3">
                    <label class="pos-label">Notes</label>
                    <textarea class="form-control pos-input" rows="2" wire:model="closeRegisterNotes" placeholder="Add any notes...">{{ $closeRegisterNotes ?? '' }}</textarea>
                </div>

                @if($closeRegisterCash > 0)
                @php $difference = $closeRegisterCash - ($sessionSummary['expected_cash'] ?? 0); @endphp
                @if($difference != 0)
                <div class="pos-alert {{ $difference > 0 ? 'pos-alert-warning' : 'pos-alert-danger' }}">
                    <i class="bi bi-exclamation-triangle me-2"></i>
                    <strong>Cash Difference:</strong> Rs.{{ number_format(abs($difference), 2) }} ({{ $difference > 0 ? 'Excess' : 'Short' }})
                </div>
                @endif
                @endif

                <div class="register-print-footer">
                    <p><strong>Date:</strong> {{ date('d/m/Y') }} | <strong>Time:</strong> {{ date('H:i') }}</p>
                </div>
            </div>

            <div class="pos-modal-footer">
                <button type="button" class="btn pos-btn-secondary"
                    wire:click="closeRegisterAndRedirect"
                    wire:loading.attr="disabled">
                    <span wire:loading.remove wire:target="closeRegisterAndRedirect">
                        <i class="bi bi-x-circle me-1"></i>Close Register
                    </span>
                    <span wire:loading wire:target="closeRegisterAndRedirect">
                        <span class="spinner-border spinner-border-sm me-1"></span>Closing...
                    </span>
                </button>
                <button type="button" class="btn pos-btn-gradient" wire:click="downloadCloseRegisterReport">
                    <i class="bi bi-download me-1"></i>Download Report
                </button>
            </div>
        </div>
    </div>
    @endif

</div>

@push('styles')
<style>
    /* ═══════════════════════════════════════════
   POS THEME - Admin Gold/Cream Palette
   ═══════════════════════════════════════════ */
    :root {
        --pos-dark: #050505;
        --pos-dark-2: #1a1a1a;
        --pos-gold: #d4a63d;
        --pos-gold-dark: #8a6114;
        --pos-gold-hover: #c49430;
        --pos-gold-light: #f7e7bf;
        --pos-gold-bg: #fff8ea;
        --pos-bg: #fffaf0;
        --pos-surface: #ffffff;
        --pos-border: #eadfca;
        --pos-text: #111827;
        --pos-muted: #6b7280;
        --pos-success: #16a34a;
        --pos-danger: #dc2626;
        --pos-warning: #d97706;
        --pos-gradient: linear-gradient(135deg, #8a6114, #d4a63d);
        --pos-shadow: 0 8px 24px rgba(17, 24, 39, 0.06);
        --pos-shadow-lg: 0 16px 40px rgba(17, 24, 39, 0.10);
        --pos-radius: 10px;
    }

    /* ── Wrapper ── */
    .pos-wrapper {
        background: var(--pos-bg);
        height: 100vh;
        overflow: hidden;
        display: flex;
        flex-direction: column;
    }

    /* ── Layout Grid ── */
    .pos-layout {
        display: grid;
        grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
        flex: 1;
        overflow: hidden;
    }

    /* ═══ LEFT PANEL: Cart ═══ */
    .pos-cart-panel {
        background: var(--pos-surface);
        display: flex;
        flex-direction: column;
        height: 100%;
        /* Fill the grid cell */
        min-height: 0;
        /* Important: allow it to be smaller than content for internal scrolling */
        border-left: 2px solid var(--pos-border);
        box-shadow: -4px 0 20px rgba(138, 97, 20, 0.05);
        overflow: hidden;
    }

    .pos-cart-header {
        background: var(--pos-dark);
        color: #ffffff;
        padding: 16px 18px;
        flex-shrink: 0;
    }

    .pos-header-icon {
        width: 32px;
        height: 32px;
        border-radius: 8px;
        background: var(--pos-gradient);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 0.95rem;
    }

    .pos-accent {
        color: var(--pos-gold) !important;
    }

    .pos-muted {
        color: var(--pos-muted);
    }

    /* Cart Body */
    .pos-cart-body {
        flex: 1;
        min-height: 0;
        overflow-y: auto;
        padding: 12px;
        scrollbar-width: thin;
        scrollbar-color: var(--pos-gold) var(--pos-bg);
    }

    .pos-cart-body::-webkit-scrollbar {
        width: 5px;
    }

    .pos-cart-body::-webkit-scrollbar-thumb {
        background: var(--pos-gold);
        border-radius: 4px;
    }

    /* ═══ Cart Table ═══ */
    .pos-cart-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0 5px;
        table-layout: fixed;
    }

    /* Column widths */
    .pos-ct-name {
        width: auto;
    }

    .pos-ct-qty {
        width: 100px;
    }

    .pos-ct-price {
        width: 100px;
    }

    .pos-ct-disc {
        width: 110px;
    }

    .pos-ct-total {
        width: 105px;
    }

    .pos-ct-rm {
        width: 32px;
    }

    /* Header cells */
    .pos-ct-th {
        font-size: 0.63rem;
        font-weight: 700;
        color: var(--pos-muted);
        text-transform: uppercase;
        letter-spacing: 0.05em;
        padding: 2px 4px 7px;
        border-bottom: 1px solid var(--pos-border);
        white-space: nowrap;
        vertical-align: bottom;
    }

    .pos-ct-th.pos-ct-name {
        padding-left: 2px;
    }

    .pos-ct-th.pos-ct-qty {
        text-align: center;
    }

    .pos-ct-th.pos-ct-price,
    .pos-ct-th.pos-ct-disc,
    .pos-ct-th.pos-ct-total {
        text-align: right;
    }

    /* Data rows */
    .pos-ct-row td {
        background: var(--pos-surface);
        padding: 8px 4px;
        vertical-align: middle;
        border-top: 1px solid var(--pos-border);
        border-bottom: 1px solid var(--pos-border);
        transition: background .15s, border-color .15s;
    }

    .pos-ct-row td:first-child {
        border-left: 1px solid var(--pos-border);
        border-radius: 8px 0 0 8px;
        padding-left: 10px;
    }

    .pos-ct-row td:last-child {
        border-right: 1px solid var(--pos-border);
        border-radius: 0 8px 8px 0;
        padding-right: 4px;
    }

    .pos-ct-row:hover td {
        background: var(--pos-gold-bg);
        border-color: var(--pos-gold);
    }

    /* Data cell text alignment */
    .pos-ct-td.pos-ct-qty {
        text-align: center;
        padding-right: 6px !important;
    }

    .pos-ct-td.pos-ct-price,
    .pos-ct-td.pos-ct-disc,
    .pos-ct-td.pos-ct-total {
        text-align: right;
    }

    .pos-ct-td.pos-ct-price {
        padding-left: 4px !important;
        padding-right: 4px !important;
    }

    .pos-ct-td.pos-ct-disc {
        padding-left: 4px !important;
        padding-right: 4px !important;
    }

    .pos-ct-td.pos-ct-total {
        padding-left: 8px !important;
    }

    .pos-ct-td.pos-ct-rm {
        text-align: center;
    }

    .pos-disc-val {
        font-size: 0.76rem;
        font-weight: 500;
        color: var(--pos-danger);
        white-space: nowrap;
    }

    .pos-muted-val {
        color: var(--pos-muted);
        white-space: nowrap;
    }

    .pos-disc-edit-wrap {
        display: flex;
        flex-direction: column;
        align-items: stretch;
        justify-content: center;
        gap: 3px;
        min-height: 26px;
    }

    .pos-disc-input {
        width: 100%;
        height: 26px;
        border: 1px solid var(--pos-border);
        border-radius: 6px;
        text-align: right;
        font-size: 0.74rem;
        font-weight: 600;
        outline: none;
        padding: 0 6px;
        color: var(--pos-text);
        background: var(--pos-surface);
    }

    .pos-disc-input:focus {
        border-color: var(--pos-gold);
        box-shadow: 0 0 0 2px rgba(212, 166, 61, 0.15);
    }

    .pos-disc-edit-wrap .pos-disc-val {
        text-align: right;
        line-height: 1;
    }

    .pos-item-name {
        font-size: 0.82rem;
        font-weight: 600;
        color: var(--pos-text);
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .pos-item-code {
        font-size: 0.68rem;
        color: var(--pos-muted);
        margin-top: 1px;
    }

    .pos-item-total {
        font-size: 0.82rem;
        font-weight: 700;
        color: var(--pos-gold-dark);
    }

    .pos-item-unit {
        font-size: 0.72rem;
        color: var(--pos-muted);
    }

    .pos-item-discount {
        font-size: 0.72rem;
        color: var(--pos-danger);
        margin-top: 6px;
        padding-top: 6px;
        border-top: 1px dashed var(--pos-border);
    }

    /* Quantity Control */
    .pos-qty-control {
        display: flex;
        align-items: center;
        gap: 4px;
        justify-content: center;
    }

    .pos-qty-btn {
        background: var(--pos-gold-bg);
        border: 1px solid var(--pos-border);
        border-radius: 6px;
        width: 26px;
        height: 28px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        font-size: 0.8rem;
        color: var(--pos-gold-dark);
        transition: all .15s;
        flex-shrink: 0;
    }

    .pos-qty-btn:hover {
        background: var(--pos-gold);
        border-color: var(--pos-gold);
        color: #fff;
    }

    .pos-qty-input {
        width: 52px;
        height: 28px;
        border: 1px solid var(--pos-border);
        border-radius: 6px;
        text-align: center;
        font-size: 0.82rem;
        font-weight: 700;
        outline: none;
        padding: 0;
        color: var(--pos-text);
        background: var(--pos-surface);
        flex-shrink: 0;
    }

    .pos-qty-input:focus {
        border-color: var(--pos-gold);
        box-shadow: 0 0 0 2px rgba(212, 166, 61, 0.15);
    }

    /* Editable Price Input */
    .pos-price-input {
        width: 100%;
        height: 28px;
        border: 1px solid var(--pos-border);
        border-radius: 6px;
        text-align: right;
        font-size: 0.78rem;
        font-weight: 600;
        outline: none;
        padding: 0 6px;
        color: var(--pos-text);
        background: var(--pos-surface);
        transition: border-color .15s, box-shadow .15s;
        min-width: 0;
        display: block;
    }

    .pos-price-input:focus {
        border-color: var(--pos-gold);
        box-shadow: 0 0 0 2px rgba(212, 166, 61, 0.15);
    }

    /* hide number input spin arrows */
    .pos-price-input::-webkit-outer-spin-button,
    .pos-price-input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .pos-price-input[type=number] {
        -moz-appearance: textfield;
    }

    .pos-btn-remove {
        background: none;
        border: none;
        color: var(--pos-muted);
        padding: 3px 6px;
        font-size: 0.72rem;
        border-radius: 6px;
        transition: all .15s;
        line-height: 1;
    }

    .pos-btn-remove:hover {
        background: #fef2f2;
        color: var(--pos-danger);
    }

    /* Empty Cart */
    .pos-empty-cart {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 50px 20px;
        color: var(--pos-muted);
        text-align: center;
    }

    .pos-empty-icon {
        width: 72px;
        height: 72px;
        border-radius: 50%;
        background: var(--pos-gold-bg);
        border: 2px dashed var(--pos-border);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 12px;
    }

    .pos-empty-icon i {
        font-size: 2rem;
        color: var(--pos-gold);
        opacity: .6;
    }

    .pos-empty-cart p {
        font-size: 0.88rem;
        margin: 0;
        color: var(--pos-text);
    }

    .pos-empty-cart small {
        font-size: 0.78rem;
    }

    /* ═══ Cart Footer ═══ */
    /* ═══ Cart Footer (Sidebar Version) ═══ */
    .pos-cart-footer {
        border-top: 2px solid var(--pos-border);
        padding: 15px;
        background: var(--pos-gold-bg);
        flex-shrink: 0;
        width: 100%;
    }

    .pos-footer-grid {
        display: flex;
        flex-direction: column;
        gap: 0;
    }

    .pos-footer-totals {
        border-right: none;
        padding-right: 0;
    }

    .pos-footer-payment {
        border-right: none;
        padding-right: 0;
    }

    .pos-footer-actions {
        display: flex;
        flex-direction: row;
        gap: 8px;
        width: 100%;
    }

    .pos-footer-actions .btn {
        flex: 1 1 0;
        margin-top: 0 !important;
    }

    .pos-totals {
        margin-bottom: 0;
    }

    .pos-total-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 0.82rem;
        color: var(--pos-text);
        padding: 3px 0;
    }

    .pos-discount-row {
        color: var(--pos-danger);
    }

    .pos-extra-discount-row {
        margin: 4px 0;
    }

    .pos-grand-total-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 1.05rem;
        font-weight: 700;
        color: var(--pos-text);
        border-top: 2px solid var(--pos-border);
        margin-top: 6px;
        padding-top: 10px;
    }

    .pos-grand-total-row span:last-child {
        color: var(--pos-gold-dark);
    }

    .pos-discount-input {
        width: 70px;
        height: 28px;
        border: 1px solid var(--pos-border);
        border-radius: 6px 0 0 6px;
        padding: 0 8px;
        font-size: 0.8rem;
        outline: none;
        background: var(--pos-surface);
    }

    .pos-discount-input:focus {
        border-color: var(--pos-gold);
    }

    .pos-discount-toggle {
        background: var(--pos-gradient);
        color: #fff;
        border: none;
        border-radius: 0 6px 6px 0;
        height: 28px;
        padding: 0 10px;
        font-size: 0.75rem;
        font-weight: 700;
        cursor: pointer;
        transition: all .15s;
    }

    .pos-discount-toggle:hover {
        opacity: .85;
    }

    /* Payment Methods */
    .pos-payment-methods {
        margin-bottom: 10px;
    }

    .pos-pm-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 15px;
    }

    .pos-pm-radio {
        display: none;
    }

    .pos-pm-label {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 15px 10px;
        border: 1px solid var(--pos-border);
        border-radius: 8px;
        font-size: 1.1rem;
        font-weight: 600;
        color: var(--pos-muted);
        cursor: pointer;
        transition: all .2s;
        background: var(--pos-surface);
    }

    .pos-pm-label i {
        font-size: 1.5rem;
    }

    .pos-pm-label:hover {
        border-color: var(--pos-gold);
        color: var(--pos-text);
    }

    .pos-pm-radio:checked+.pos-pm-label {
        background: var(--pos-gradient);
        border-color: var(--pos-gold-dark);
        color: #fff;
        box-shadow: 0 4px 12px rgba(138, 97, 20, 0.25);
    }

    /* Payment Inputs */
    .pos-payment-inputs {
        margin-bottom: 10px;
    }

    .pos-input-group {
        margin-bottom: 8px;
    }

    .pos-input-prefix-sm {
        background: var(--pos-surface);
        border-color: var(--pos-border);
        font-size: 1.1rem;
        font-weight: 600;
        padding: 4px 15px;
        border-radius: 0 !important;
        color: var(--pos-gold-dark);
    }

    .pos-due-notice {
        background: var(--pos-gold-bg);
        border: 1px solid var(--pos-gold-light);
        border-radius: 8px;
        padding: 10px 14px;
        font-size: 0.78rem;
        color: var(--pos-warning);
    }

    /* Overpayment warning */
    .pos-overpay-warn {
        background: #fef2f2;
        border: 1px solid #fecaca;
        border-radius: 6px;
        padding: 5px 10px;
        font-size: 0.75rem;
        font-weight: 600;
        color: var(--pos-danger);
        margin-top: 4px;
    }

    /* Cheque list */
    .pos-cheque-list {
        background: var(--pos-gold-bg);
        border: 1px solid var(--pos-border);
        border-radius: 8px;
        padding: 6px 8px;
        margin-bottom: 8px;
        max-height: 130px;
        overflow-y: auto;
    }

    .pos-cheque-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 4px 2px;
        border-bottom: 1px dashed var(--pos-border);
        font-size: 0.78rem;
    }

    .pos-cheque-item:last-of-type {
        border-bottom: none;
    }

    .pos-cheque-info {
        display: flex;
        flex-direction: column;
        gap: 1px;
    }

    .pos-cheque-meta {
        font-size: 0.68rem;
        color: var(--pos-muted);
    }

    .pos-cheque-amt {
        font-weight: 700;
        color: var(--pos-gold-dark);
        font-size: 0.82rem;
    }

    .pos-cheque-del {
        background: none;
        border: none;
        color: var(--pos-danger);
        font-size: 0.9rem;
        padding: 0 3px;
        line-height: 1;
        cursor: pointer;
    }

    .pos-cheque-del:hover {
        opacity: 0.7;
    }

    .pos-cheque-total {
        display: flex;
        justify-content: space-between;
        padding: 4px 2px 0;
        font-size: 0.78rem;
        color: var(--pos-text);
        border-top: 1px solid var(--pos-border);
        margin-top: 3px;
    }

    /* Add cheque mini form */
    .pos-add-cheque .pos-input-sm,
    .pos-add-cheque .input-group .form-control {
        font-size: 0.78rem;
        padding: 4px 8px;
        height: 30px;
    }

    .pos-add-cheque .input-group-text {
        font-size: 0.78rem;
        padding: 4px 8px;
        height: 30px;
    }

    .pos-btn-add-cheque {
        background: var(--pos-gold-bg);
        border: 1px solid var(--pos-gold);
        color: var(--pos-gold-dark);
        font-size: 0.78rem;
        font-weight: 600;
        border-radius: 7px;
        padding: 5px 10px;
        transition: all .15s;
    }

    .pos-btn-add-cheque:hover {
        background: var(--pos-gold);
        color: #fff;
    }

    .pos-due-amount {
        display: flex;
        justify-content: space-between;
        background: #fef2f2;
        border: 1px solid #fecaca;
        border-radius: 8px;
        padding: 8px 12px;
        font-size: 0.82rem;
        font-weight: 600;
        color: var(--pos-danger);
        margin-bottom: 10px;
    }

    /* Complete / Clear Buttons */
    .pos-btn-complete {
        background: var(--pos-gradient);
        color: #fff;
        border: none;
        font-weight: 700;
        font-size: 0.92rem;
        border-radius: 10px !important;
        padding: 13px;
        transition: all .2s;
        box-shadow: 0 4px 16px rgba(138, 97, 20, 0.25);
        letter-spacing: 0.02em;
    }

    .pos-btn-complete:hover:not(:disabled) {
        background: linear-gradient(135deg, #d4a63d, #8a6114);
        color: #fff;
        box-shadow: 0 6px 20px rgba(138, 97, 20, 0.35);
        transform: translateY(-1px);
    }

    .pos-btn-complete:disabled {
        opacity: .45;
        cursor: not-allowed;
        box-shadow: none;
    }

    .pos-btn-clear {
        background: none;
        color: var(--pos-danger);
        border: 1px solid #fecaca;
        font-size: 0.82rem;
        border-radius: 8px !important;
        padding: 8px;
        transition: all .15s;
    }

    .pos-btn-clear:hover {
        background: #fef2f2;
        color: var(--pos-danger);
    }

    /* Header Buttons */
    .pos-btn-ghost-sm {
        background: rgba(255, 255, 255, 0.1);
        color: var(--pos-gold);
        border: 1px solid rgba(255, 255, 255, 0.2);
        font-size: 0.75rem;
        padding: 5px 12px;
        border-radius: 7px !important;
        transition: all .15s;
        font-weight: 600;
    }

    .pos-btn-ghost-sm:hover {
        background: var(--pos-gold);
        color: var(--pos-dark);
        border-color: var(--pos-gold);
    }

    .pos-btn-icon {
        background: rgba(255, 255, 255, 0.1);
        color: var(--pos-gold);
        border: 1px solid rgba(255, 255, 255, 0.2);
        padding: 5px 10px;
        border-radius: 7px !important;
        transition: all .15s;
    }

    .pos-btn-icon:hover {
        background: var(--pos-gold);
        color: var(--pos-dark);
    }

    .pos-select {
        background: rgba(255, 255, 255, 0.12);
        border: 1px solid rgba(255, 255, 255, 0.22);
        color: #fff;
        font-size: 0.82rem;
        padding: 6px 10px;
        border-radius: 7px !important;
    }

    .pos-select:focus {
        border-color: var(--pos-gold);
        box-shadow: none;
        background: rgba(255, 255, 255, 0.18);
        color: #fff;
    }

    .pos-select option {
        background: var(--pos-dark);
        color: #fff;
    }

    /* ═══ Payment Modal Tabs ═══ */
    .payment-tabs {
        display: flex;
        gap: 2px;
        margin-bottom: 20px;
        background: var(--pos-border);
        padding: 4px;
        border-radius: 10px;
    }

    .payment-tab-btn {
        flex: 1;
        padding: 15px;
        border: none;
        background: none;
        color: var(--pos-muted);
        font-weight: 600;
        font-size: 1.1rem;
        border-radius: 8px;
        transition: all 0.2s;
        cursor: pointer;
    }

    .payment-tab-btn.active {
        background: #fff;
        color: var(--pos-gold-dark);
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
    }


    /* ═══ RIGHT PANEL: Products ═══ */
    .pos-products-panel {
        display: flex;
        flex-direction: column;
        height: 100%;
        background: var(--pos-bg);
        overflow: hidden;
    }

    /* Top Bar */
    .pos-top-bar {
        background: var(--pos-surface);
        border-bottom: 2px solid var(--pos-border);
        padding: 14px 22px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-shrink: 0;
        width: 100%;
    }

    .pos-top-badge {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        background: var(--pos-gradient);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 1.1rem;
    }

    .pos-shop-name {
        font-size: 1.05rem;
        color: var(--pos-dark);
        letter-spacing: 0.04em;
    }

    .pos-clock {
        font-size: 1rem;
        color: var(--pos-gold-dark);
        font-weight: 700;
    }

    .pos-session-badge {
        background: #dcfce7;
        border: 1px solid #86efac;
        color: #15803d;
        font-size: 0.72rem;
        font-weight: 600;
        padding: 4px 10px;
        border-radius: 20px;
    }

    /* Search */
    .pos-search-wrap {
        background: var(--pos-surface);
        border-bottom: 1px solid var(--pos-border);
        padding: 12px 18px;
        position: relative;
        flex-shrink: 0;
    }

    .pos-search-box {
        display: flex;
        align-items: center;
        border: 2px solid var(--pos-border);
        border-radius: 10px;
        background: var(--pos-bg);
        padding: 0 14px;
        transition: border-color .2s;
    }

    .pos-search-box:focus-within {
        border-color: var(--pos-gold);
        background: var(--pos-surface);
        box-shadow: 0 0 0 3px rgba(212, 166, 61, 0.1);
    }

    .pos-search-icon {
        color: var(--pos-muted);
        font-size: 0.95rem;
        flex-shrink: 0;
    }

    .pos-search-input {
        flex: 1;
        border: none;
        background: none;
        padding: 11px 10px;
        font-size: 0.86rem;
        outline: none;
        color: var(--pos-text);
    }

    .pos-search-input::placeholder {
        color: var(--pos-muted);
    }

    .pos-search-clear {
        background: none;
        border: none;
        color: var(--pos-muted);
        padding: 4px;
        cursor: pointer;
        font-size: 0.78rem;
    }

    .pos-search-clear:hover {
        color: var(--pos-danger);
    }

    .pos-search-dropdown {
        position: absolute;
        top: calc(100% - 2px);
        left: 18px;
        right: 18px;
        background: var(--pos-surface);
        border: 2px solid var(--pos-gold);
        border-radius: 0 0 10px 10px;
        box-shadow: var(--pos-shadow-lg);
        z-index: 1000;
        max-height: 300px;
        overflow-y: auto;
    }

    .pos-search-result {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 11px 16px;
        cursor: pointer;
        border-bottom: 1px solid var(--pos-border);
        font-size: 0.84rem;
        transition: background .15s;
    }

    .pos-search-result:last-child {
        border-bottom: none;
    }

    .pos-search-result:hover {
        background: var(--pos-gold-bg);
    }

    .pos-search-price {
        font-weight: 700;
        color: var(--pos-gold-dark);
    }

    /* Categories */
    .pos-categories {
        background: var(--pos-surface);
        border-bottom: 1px solid var(--pos-border);
        padding: 10px 18px;
        display: flex;
        gap: 6px;
        flex-wrap: nowrap;
        flex-shrink: 0;
        overflow-x: auto;
        scrollbar-width: thin;
        scrollbar-color: var(--pos-gold) transparent;
    }

    .pos-categories::-webkit-scrollbar {
        height: 3px;
    }

    .pos-categories::-webkit-scrollbar-thumb {
        background: var(--pos-gold);
        border-radius: 4px;
    }

    .pos-cat-btn {
        background: none;
        border: 1px solid var(--pos-border);
        border-radius: 20px;
        padding: 5px 16px;
        font-size: 0.78rem;
        font-weight: 600;
        color: var(--pos-muted);
        cursor: pointer;
        transition: all .15s;
        white-space: nowrap;
    }

    .pos-cat-btn:hover {
        border-color: var(--pos-gold);
        color: var(--pos-gold-dark);
        background: var(--pos-gold-bg);
    }

    .pos-cat-btn.active {
        background: var(--pos-gradient);
        border-color: var(--pos-gold-dark);
        color: #fff;
        box-shadow: 0 2px 8px rgba(138, 97, 20, 0.2);
    }

    /* Products Scroll & Grid */
    .pos-products-scroll {
        flex: 1;
        min-height: 0;
        overflow-y: auto;
        padding: 16px 18px;
        scrollbar-width: thin;
        scrollbar-color: var(--pos-gold) var(--pos-bg);
    }

    .pos-products-scroll::-webkit-scrollbar {
        width: 5px;
    }

    .pos-products-scroll::-webkit-scrollbar-thumb {
        background: var(--pos-gold);
        border-radius: 4px;
    }

    .pos-products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(155px, 1fr));
        gap: 12px;
    }

    /* Product Card */
    .pos-product-card {
        background: var(--pos-surface);
        border: 1px solid var(--pos-border);
        border-radius: var(--pos-radius);
        cursor: pointer;
        overflow: hidden;
        transition: all .25s ease;
    }

    .pos-product-card:hover {
        border-color: var(--pos-gold);
        box-shadow: 0 8px 24px rgba(138, 97, 20, 0.15);
        transform: translateY(-3px);
    }

    .pos-product-card:active {
        transform: scale(0.97);
    }

    .pos-product-img {
        position: relative;
        height: 100px;
        background: linear-gradient(135deg, #fdf8ee, var(--pos-bg));
        overflow: hidden;
    }

    .pos-product-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .pos-product-noimg {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--pos-gold);
        font-size: 2rem;
        opacity: .35;
    }

    .pos-stock-badge {
        position: absolute;
        top: 6px;
        right: 6px;
        font-size: 0.65rem;
        font-weight: 700;
        padding: 2px 7px;
        border-radius: 12px;
    }

    .pos-stock-badge.in-stock {
        background: #dcfce7;
        color: #15803d;
    }

    .pos-stock-badge.out-stock {
        background: #fee2e2;
        color: #dc2626;
    }

    .pos-product-info {
        padding: 10px 12px;
    }

    .pos-product-name {
        font-size: 0.8rem;
        font-weight: 600;
        color: var(--pos-text);
        height: 32px;
        overflow: hidden;
        line-height: 1.35;
        margin-bottom: 3px;
    }

    .pos-product-code {
        font-size: 0.7rem;
        color: var(--pos-muted);
        margin-bottom: 5px;
    }

    .pos-product-price {
        font-size: 0.9rem;
        font-weight: 700;
        color: var(--pos-gold-dark);
        background: var(--pos-gold-bg);
        display: inline-block;
        padding: 2px 8px;
        border-radius: 6px;
    }

    .pos-no-products {
        grid-column: 1 / -1;
        padding: 60px 0;
        text-align: center;
        color: var(--pos-muted);
    }

    .pos-no-products i {
        font-size: 3rem;
        opacity: .3;
        display: block;
        margin-bottom: 10px;
    }


    /* ═══════════════════════════════════════════
   MODALS
   ═══════════════════════════════════════════ */
    .pos-overlay {
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.65);
        backdrop-filter: blur(4px);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1500;
        padding: 20px;
    }

    .pos-modal-card {
        background: var(--pos-surface);
        border-radius: 14px;
        overflow: hidden;
        box-shadow: 0 24px 60px rgba(0, 0, 0, 0.25);
        width: 100%;
        border: 1px solid var(--pos-border);
    }

    .pos-modal-header {
        background: var(--pos-gradient);
        color: #ffffff;
        padding: 18px 22px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .pos-modal-warning {
        background: linear-gradient(135deg, #92400e, #d97706);
    }

    .pos-icon-badge {
        width: 38px;
        height: 38px;
        border-radius: 10px;
        background: rgba(255, 255, 255, 0.2);
        border: 1px solid rgba(255, 255, 255, 0.3);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 1.05rem;
        flex-shrink: 0;
    }

    .pos-icon-badge.warning {
        background: rgba(255, 255, 255, 0.2);
        border-color: rgba(255, 255, 255, 0.3);
    }

    .pos-icon-badge.success {
        background: rgba(255, 255, 255, 0.2);
        border-color: rgba(255, 255, 255, 0.3);
    }

    .pos-modal-body {
        padding: 22px;
        max-height: 65vh;
        overflow-y: auto;
    }

    .pos-modal-footer {
        padding: 14px 22px;
        border-top: 1px solid var(--pos-border);
        display: flex;
        justify-content: flex-end;
        gap: 8px;
        background: var(--pos-gold-bg);
    }

    .pos-btn-close {
        background: rgba(255, 255, 255, 0.15);
        color: #fff;
        border: none;
        border-radius: 8px !important;
        padding: 5px 10px;
        font-size: 0.78rem;
        transition: all .15s;
    }

    .pos-btn-close:hover {
        background: rgba(255, 255, 255, 0.3);
        color: #fff;
    }

    /* Button Styles */
    .pos-btn-gradient {
        background: var(--pos-gradient);
        color: #fff;
        border: none;
        border-radius: 8px !important;
        font-weight: 600;
        font-size: 0.84rem;
        padding: 8px 18px;
        transition: all .2s;
        box-shadow: 0 2px 8px rgba(138, 97, 20, 0.2);
    }

    .pos-btn-gradient:hover {
        background: linear-gradient(135deg, #d4a63d, #8a6114);
        color: #fff;
        box-shadow: 0 4px 14px rgba(138, 97, 20, 0.3);
        transform: translateY(-1px);
    }

    .pos-btn-secondary {
        background: var(--pos-surface);
        color: var(--pos-text);
        border: 1px solid var(--pos-border);
        border-radius: 8px !important;
        font-size: 0.84rem;
        font-weight: 500;
        padding: 8px 18px;
        transition: all .15s;
    }

    .pos-btn-secondary:hover {
        border-color: var(--pos-gold);
        color: var(--pos-gold-dark);
    }

    .pos-btn-outline {
        background: none;
        color: var(--pos-text);
        border: 1px solid var(--pos-border);
        border-radius: 8px !important;
        font-size: 0.84rem;
        padding: 8px 18px;
        transition: all .15s;
    }

    .pos-btn-outline:hover {
        border-color: var(--pos-gold);
        color: var(--pos-gold-dark);
    }


    /* ═══ Form Elements ═══ */
    .pos-label {
        font-size: 0.8rem;
        font-weight: 600;
        color: var(--pos-text);
        margin-bottom: 4px;
        display: block;
    }

    .pos-input {
        font-size: 0.82rem !important;
        border: 1px solid var(--pos-border) !important;
        border-radius: 8px !important;
        color: var(--pos-text) !important;
        padding: 8px 12px !important;
        background: var(--pos-surface) !important;
        width: 100%;
    }

    .pos-input:focus {
        border-color: var(--pos-gold) !important;
        box-shadow: 0 0 0 3px rgba(212, 166, 61, 0.12) !important;
    }

    .pos-input-sm {
        font-size: 0.78rem !important;
        border: 1px solid var(--pos-border) !important;
        border-radius: 8px !important;
        padding: 6px 10px !important;
        background: var(--pos-surface) !important;
        width: 100%;
    }

    .pos-input-sm:focus {
        border-color: var(--pos-gold) !important;
        outline: none;
    }

    .pos-input-lg {
        font-size: 2.2rem !important;
        border: 2px solid var(--pos-border) !important;
        border-radius: 0 10px 10px 0 !important;
        font-weight: 700 !important;
        text-align: center;
        padding: 20px !important;
    }

    .pos-input-lg:focus {
        border-color: var(--pos-gold) !important;
        box-shadow: 0 0 0 3px rgba(212, 166, 61, 0.12) !important;
    }

    .pos-input-prefix {
        background: var(--pos-gradient);
        color: #fff;
        font-weight: 700;
        border: none;
        border-radius: 10px 0 0 10px !important;
        font-size: 0.95rem;
        padding: 12px 16px;
    }

    /* Opening Cash Modal */
    .pos-cash-icon-wrap {
        width: 72px;
        height: 72px;
        border-radius: 18px;
        background: var(--pos-gold-bg);
        border: 2px solid var(--pos-gold-light);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2.2rem;
        color: var(--pos-gold);
    }

    .pos-info-box {
        background: var(--pos-gold-bg);
        border: 1px solid var(--pos-gold-light);
        border-radius: 10px;
        padding: 12px 16px;
        font-size: 0.8rem;
        color: #92400e;
    }

    .pos-field-error {
        font-size: 0.75rem;
        color: var(--pos-danger);
        margin-top: 4px;
    }


    /* ═══ Summary / Register Tables ═══ */
    .pos-summary-table {
        border: 1px solid var(--pos-border);
        border-radius: 10px;
        overflow: hidden;
    }

    .pos-summary-row {
        display: flex;
        justify-content: space-between;
        padding: 10px 16px;
        font-size: 0.84rem;
        border-bottom: 1px solid var(--pos-border);
    }

    .pos-summary-row:last-child {
        border-bottom: none;
    }

    .pos-summary-due {
        background: #fef2f2;
        color: var(--pos-danger);
        font-weight: 600;
    }

    .pos-success-text {
        color: var(--pos-success);
    }

    .pos-register-table {
        border: 1px solid var(--pos-border);
        border-radius: 10px;
        overflow: hidden;
    }

    .pos-reg-row {
        display: flex;
        justify-content: space-between;
        padding: 8px 16px;
        font-size: 0.82rem;
        border-bottom: 1px solid var(--pos-border);
        color: var(--pos-text);
    }

    .pos-reg-row:last-child {
        border-bottom: none;
    }

    .pos-reg-row.highlight {
        background: var(--pos-gold-bg);
    }

    .pos-reg-row.sub {
        background: #fafafa;
        color: var(--pos-muted);
        font-size: 0.78rem;
    }

    .pos-reg-row.total {
        background: var(--pos-gradient);
        color: #fff;
        font-size: 0.9rem;
        padding: 10px 16px;
    }

    .pos-alert {
        border-radius: 10px;
        padding: 11px 16px;
        font-size: 0.82rem;
        margin-top: 10px;
    }

    .pos-alert-warning {
        background: #fffbeb;
        border: 1px solid #fcd34d;
        color: #92400e;
    }

    .pos-alert-danger {
        background: #fef2f2;
        border: 1px solid #fca5a5;
        color: #7f1d1d;
    }




    .pos-invoice-label {
        font-size: 0.72rem;
        color: var(--pos-muted);
        text-transform: uppercase;
        letter-spacing: .05em;
        margin-bottom: 2px;
    }

    .pos-sig-line {
        border-bottom: 2px solid var(--pos-border);
        margin-bottom: 6px;
        height: 30px;
    }

    .pos-invoice-footer-note {
        background: var(--pos-gold-bg);
        border: 1px solid var(--pos-border);
        border-radius: 10px;
        padding: 14px 18px;
        font-size: 0.8rem;
        text-align: center;
    }

    .print-only-header,
    .print-header,
    .print-footer,
    .register-print-footer {
        display: none;
    }


    /* ═══ Responsive ═══ */
    @media (max-width: 1200px) {
        .pos-layout {
            grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
        }
    }

    @media (max-width: 992px) {
        .pos-wrapper {
            height: auto;
            min-height: 100vh;
            overflow: auto;
        }

        .pos-layout {
            grid-template-columns: 1fr;
            flex: none;
            overflow: visible;
        }

        .pos-cart-panel,
        .pos-products-panel {
            height: auto;
            min-height: 50vh;
        }
    }


    /* ═══ Invoice Print Layout (screen + print) ═══ */
    #saleReceiptPrintContent {
        padding: 8px;
        background: #fff;
    }

    .inv-wrap {
        font-family: 'Courier New', Courier, monospace;
        font-size: 8.5pt;
        color: #000;
        background: #fff;
        line-height: 1.3;
    }

    /* ── Header ── */
    .inv-hdr-tbl {
        width: 100%;
        border-collapse: collapse;
    }

    .inv-company-td {
        width: 66%;
        border: 1px solid #000;
        border-right: none;
        padding: 5px 8px;
        vertical-align: middle;
    }

    .inv-company-inner {
        width: 100%;
        border-collapse: collapse;
    }

    .inv-logo-td {
        width: 52px;
        padding-right: 8px;
        vertical-align: middle;
    }

    .inv-logo {
        height: 100px;
        width: auto;
        display: block;
    }

    .inv-shop-name {
        font-size: 13pt;
        font-weight: bold;
        letter-spacing: 0.5px;
        padding-bottom: 1px;
    }

    .inv-shop-tag {
        font-size: 7.5pt;
        font-style: italic;
        color: #444;
        padding-bottom: 1px;
    }

    .inv-shop-addr,
    .inv-shop-contact {
        font-size: 7.5pt;
    }

    .inv-infobox-td {
        width: 34%;
        border: 1px solid #000;
        padding: 0;
        vertical-align: top;
    }

    .inv-ib-tbl {
        width: 100%;
        border-collapse: collapse;
        height: 100%;
    }

    .inv-ib-lbl {
        border: 1px solid #000;
        padding: 2px 5px;
        font-size: 7.5pt;
        font-weight: bold;
        white-space: nowrap;
        width: 42%;
        background: #1a5276;
        color: #fff;
    }

    .inv-ib-val {
        border: 1px solid #000;
        border-left: none;
        padding: 2px 5px;
        font-size: 7.5pt;
    }

    /* ── Bill To ── */
    .inv-bto-tbl {
        width: 100%;
        border-collapse: collapse;
    }

    .inv-bto-td {
        border: 1px solid #000;
        border-top: none;
        padding: 4px 8px;
        font-size: 8pt;
    }

    /* ── Items Table ── */
    .inv-items-tbl {
        width: 100%;
        border-collapse: collapse;
        border-top: none;
    }

    .inv-items-tbl th {
        background: #1a5276;
        color: #fff;
        border: 1px solid #000;
        padding: 3px 5px;
        font-size: 8pt;
        font-weight: bold;
        text-align: left;
    }

    .inv-items-tbl td {
        border: 1px solid #000;
        padding: 2px 5px;
        font-size: 8pt;
    }

    .inv-filler td {
        height: 14px;
    }

    .inv-c-code {
        width: 11%;
    }

    .inv-c-qty {
        width: 7%;
    }

    .inv-c-price {
        width: 14%;
    }

    .inv-c-disc {
        width: 13%;
    }

    .inv-c-amt {
        width: 14%;
    }

    .inv-tc {
        text-align: center;
    }

    .inv-tr {
        text-align: right;
    }

    /* ── Bottom Row ── */
    .inv-bot-tbl {
        width: 100%;
        border-collapse: collapse;
    }

    .inv-bot-left {
        border: 1px solid #000;
        border-top: none;
        padding: 5px 8px;
        vertical-align: top;
    }

    .inv-out-lbl {
        font-weight: bold;
        font-size: 8pt;
        margin-bottom: 2px;
    }

    .inv-out-val {
        font-size: 8.5pt;
    }

    .inv-bot-right {
        width: 36%;
        border: 1px solid #000;
        border-top: none;
        border-left: none;
        padding: 0;
        vertical-align: top;
    }

    .inv-tot-tbl {
        width: 100%;
        border-collapse: collapse;
    }

    .inv-tot-lbl {
        border: 1px solid #000;
        padding: 2px 6px;
        font-size: 8pt;
        font-weight: bold;
        width: 48%;
        background: #1a5276;
        color: #fff;
    }

    .inv-tot-val {
        border: 1px solid #000;
        border-left: none;
        padding: 2px 6px;
        font-size: 8pt;
        text-align: right;
    }

    .inv-bal-row .inv-tot-lbl,
    .inv-bal-row .inv-tot-val {
        border-top: 2px solid #000;
        font-size: 9pt;
    }

    /* ── Signature Row ── */
    .inv-sig-tbl {
        width: 100%;
        border-collapse: collapse;
    }

    .inv-sig-td {
        width: 27%;
        border: 1px solid #000;
        border-top: none;
        padding: 6px 8px 4px;
        vertical-align: bottom;
    }

    .inv-note-td {
        border: 1px solid #000;
        border-top: none;
        border-left: none;
        border-right: none;
        padding: 6px 8px;
        font-size: 7.5pt;
        text-align: center;
        vertical-align: middle;
        font-style: italic;
    }

    .inv-sig-line {
        border-bottom: 1px solid #000;
        height: 22px;
        margin-bottom: 3px;
    }

    .inv-sig-lbl {
        font-size: 7.5pt;
        font-weight: bold;
        text-align: center;
    }

    /* ═══ Print Styles — A5 Landscape Dot Matrix ═══ */
    @media print {
        body * {
            visibility: hidden;
        }

        #saleReceiptPrintContent,
        #saleReceiptPrintContent * {
            visibility: visible !important;
        }

        #saleReceiptPrintContent {
            position: absolute !important;
            inset: 0 !important;
            padding: 0 !important;
            margin: 0 !important;
            background: white !important;
        }

        .modal-header,
        .modal-footer,
        .btn,
        .badge,
        .screen-only-header,
        .no-print {
            display: none !important;
        }

        .print-only-header {
            display: block !important;
            visibility: visible !important;
        }

        /* Dot matrix: strip colour fills so they print as plain borders */
        .inv-ib-lbl,
        .inv-items-tbl th,
        .inv-tot-lbl {
            background: none !important;
            color: #000 !important;
        }

        .inv-wrap {
            font-family: 'Courier New', Courier, monospace !important;
        }

        @page {
            size: A5 landscape;
            margin: 5mm;
        }
    }

    @media screen {
        .print-only-header {
            display: none !important;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    // ── POS Toast Helper ──────────────────────────────────────────
    function posShowToast(type, message) {
        const container = document.getElementById('posToastContainer');
        if (!container) return;
        const icons = {
            success: 'bi-check-circle-fill',
            error: 'bi-x-circle-fill',
            warning: 'bi-exclamation-triangle-fill',
            info: 'bi-info-circle-fill'
        };
        const colors = {
            success: '#2d7a3a',
            error: '#c0392b',
            warning: '#b7760d',
            info: '#1a5f9e'
        };
        const toast = document.createElement('div');
        toast.className = 'pos-toast pos-toast-' + type;
        toast.innerHTML = `<i class="bi ${icons[type] || icons.info} me-2"></i><span>${message}</span><button class="pos-toast-close" onclick="this.parentElement.remove()">&times;</button>`;
        container.appendChild(toast);
        requestAnimationFrame(() => toast.classList.add('pos-toast-show'));
        setTimeout(() => {
            toast.classList.remove('pos-toast-show');
            setTimeout(() => toast.remove(), 350);
        }, 3500);
    }

    document.addEventListener('livewire:initialized', () => {
        // Live clock
        function updateClock() {
            const el = document.getElementById('posLiveClock');
            if (el) {
                el.textContent = new Date().toLocaleTimeString('en-US', {
                    hour: '2-digit',
                    minute: '2-digit',
                    hour12: true
                });
            }
        }
        setInterval(updateClock, 30000);

        Livewire.on('toast', (event) => {
            const data = Array.isArray(event) ? event[0] : event;
            posShowToast(data.type || 'info', data.message || '');
        });

        Livewire.on('showModal', (event) => {
            const modalId = Array.isArray(event) ? event[0] : event;
            setTimeout(() => {
                const el = document.getElementById(modalId);
                if (el) {
                    const existing = bootstrap.Modal.getInstance(el);
                    if (existing) existing.dispose();
                    new bootstrap.Modal(el, {
                        backdrop: 'static',
                        keyboard: false
                    }).show();
                }
            }, 200);
        });
    });
</script>
@endpush

@push('styles')
<style>
    /* POS Toast Notifications */
    .pos-toast-container {
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 9999;
        display: flex;
        flex-direction: column;
        gap: 8px;
        pointer-events: none;
    }

    .pos-toast {
        display: flex;
        align-items: center;
        min-width: 280px;
        max-width: 420px;
        padding: 12px 16px;
        border-radius: 10px;
        background: #fff;
        color: #1a1a1a;
        font-size: 0.84rem;
        font-weight: 500;
        box-shadow: 0 6px 24px rgba(0, 0, 0, 0.15);
        border-left: 4px solid #ccc;
        opacity: 0;
        transform: translateX(30px);
        transition: opacity .3s ease, transform .3s ease;
        pointer-events: all;
    }

    .pos-toast.pos-toast-show {
        opacity: 1;
        transform: translateX(0);
    }

    .pos-toast-success {
        border-left-color: #2d7a3a;
    }

    .pos-toast-success i {
        color: #2d7a3a;
    }

    .pos-toast-error {
        border-left-color: #c0392b;
    }

    .pos-toast-error i {
        color: #c0392b;
    }

    .pos-toast-warning {
        border-left-color: #b7760d;
    }

    .pos-toast-warning i {
        color: #b7760d;
    }

    .pos-toast-info {
        border-left-color: #1a5f9e;
    }

    .pos-toast-info i {
        color: #1a5f9e;
    }

    .pos-toast span {
        flex: 1;
    }

    .pos-toast-close {
        background: none;
        border: none;
        font-size: 1.1rem;
        line-height: 1;
        color: #888;
        cursor: pointer;
        padding: 0 0 0 10px;
        margin-left: auto;
    }

    .pos-toast-close:hover {
        color: #333;
    }
</style>
@endpush
