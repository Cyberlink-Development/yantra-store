<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Email</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="m-0 p-[2rem] bg-gray-200 font-[monospace]">
    <div class="py-[2rem] px-[3rem] bg-[#ffffff] space-y-[1rem]">
        <div>
            <a href="{{ url('/') }}" target="_blank" class="flex gap-[10px] flex-wrap items-center">
                <img src="{{ asset('theme-assets/img/logo-white.jpg') }}" alt="Yantra Store" class="h-[5rem]">
                <h1 class="font-bold text-[2rem]">Yantra Store</h1>
            </a>
        </div>
        <hr />
        <div class="flex flex-wrap justify-between">
            <div class="w-1/2 align-top p-4 border-r border-gray-300">
                <p class="text-base font-extrabold uppercase mb-2 underline">Order Details</p>

                <table class="w-full">
                    <tr>
                        <td>Order Code:</td>
                        <td>{{ $content['order']->order_track }}</td>
                    </tr>
                    <tr>
                        <td>Total:</td>
                        <td>Rs. {{ $content['order']->grand_total }}</td>
                    </tr>
                    @if($content['order']->discount > 0)
                        <tr>
                            <td colspan="2" class="text-red-700 font-bold">You saved Rs. {{ $content['order']->discount }}!</td>
                        </tr>
                    @endif
                </table>
                <p class="text-base font-extrabold uppercase mt-3 mb-1 underline">Shipping Address</p>
                <p class="m-0">
                    [
                        {{ implode(', ', array_filter([
                            $content['order']?->shippings?->shipping_location,
                            $content['order']?->addresses?->city,
                            $content['order']?->addresses?->province,
                            $content['order']?->addresses?->zip_code,
                        ])) }}
                    ]
                </p>
            </div>
            <!-- User Details -->
            <div class="w-1/2 align-top p-4">
                <p class="text-base font-extrabold uppercase mb-2 underline">User Details</p>
                <p class="m-0">Name: {{ $content['user']->first_name }}</p>
                <p class="m-0">Phone: {{ $content['user']->phone }}</p>
                <p class="m-0">Email: {{ $content['user']->email }}</p>

                @if($content['used_msg'] === 1)
                    <p class="text-base font-extrabold uppercase mt-3">Note</p>
                    <p class="text-red-700">Promo code already used — it can only be applied once per customer.</p>
                @endif
            </div>
        </div>
        <hr />
        <div>
            <table>
                <tr>
                    <td class="px-5 py-2">
                        <table class="w-full bg-gray-50 border border-gray-300 table-fixed" cellspacing="0" cellpadding="0">
                            <tr class="font-extrabold">
                                <td class="p-2 w-[10%] text-center">SN</td>
                                <td class="p-2 w-[45%] text-left">Item(s)</td>
                                <td class="p-2 w-[20%] text-center">Quantity</td>
                                <td class="p-2 w-[25%] text-center">Price</td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <!-- Products Loop -->
                @foreach($content['order']->getOrderDataForModal()['products'] as $index => $product)
                    <tr>
                        <td class="px-5 py-2">
                            <table class="w-full border-b border-gray-300 table-fixed" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td class="p-1 w-[10%] text-center">{{ $index + 1 }}</td>
                                    <td class="p-1 w-[45%] break-words">
                                        <a href="{{ route('product-single', $product['slug']) }}" target="_blank"
                                            class="text-black underline hover:text-blue-600">
                                            {{ $product['name'] }}
                                        </a>
                                    </td>
                                    <td class="p-1 w-[20%] text-center whitespace-nowrap">{{ $product['quantity'] }}</td>
                                    <td class="p-1 w-[25%] text-center whitespace-nowrap">Rs. {{ $product['price'] }}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                @endforeach

                <!-- Summary -->
                <tr>
                    <td class="p-5">
                        <table class="w-full" cellspacing="0" cellpadding="0">
                            <tr>
                                <td class="text-right font-extrabold text-base">Sub Total:</td>
                                <td class="text-right text-red-700 font-bold text-base">Rs. {{ $content['order']->subtotal }}</td>
                            </tr>
                            <tr>
                                <td class="text-right font-extrabold text-base">Discount:</td>
                                <td class="text-right text-red-700 font-bold text-base">Rs. {{ $content['order']->discount }}</td>
                            </tr>
                            <tr>
                                <td class="text-right font-extrabold text-base">Shipping Price:</td>
                                <td class="text-right text-red-700 font-bold text-base">Rs. {{ $content['order']->shippings->shipping_price ?? 0 }}</td>
                            </tr>
                            <tr>
                                <td class="text-right font-extrabold text-base">Grand Total:</td>
                                <td class="text-right text-red-700 font-bold text-base">Rs. {{ $content['order']->grand_total }}</td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <!-- Footer -->
                <tr>
                    <td class="text-center py-5 text-xs text-gray-600">
                        &copy; {{ date('Y') }} Yantra Store. All Rights Reserved.
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
