<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <style type="text/css">
            @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,700italic,900);
            body { font-family: 'Roboto', Arial, sans-serif !important; }
            a[href^="tel"]{
                color:inherit;
                text-decoration:none;
                outline:0;
            }
            a:hover, a:active, a:focus{
                outline:0;
            }
            a:visited{
                color:#FFF;
            }
            span.MsoHyperlink {
                mso-style-priority:99;
                color:inherit;
            }
            span.MsoHyperlinkFollowed {
                mso-style-priority:99;
                color:inherit;
            }
        </style>
    </head>

    <body style="margin: 0; padding: 0;background-color:#EEEEEE;">
        <div style="display:none;font-size:1px;color:#333333;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;">
            Shopping Details
        </div>
        <table cellspacing="0" width="100%" style="margin:0 auto; border-collapse:collapse; background-color:#EEEEEE; font-family:'Roboto', Arial, sans-serif;">
            <tbody>
                <tr>
                    <td align="center" style="padding:20px 0;">
                        <!-- Main Container -->
                        <table width="600" style="background-color:#FFF; border-radius:5px; border:2px solid #000; margin:0 auto; border-collapse:collapse;">
                            <tbody>
                                <!-- Header / Logo -->
                                <tr>
                                    <td align="center" style="padding:20px 0;">
                                        <a href="{{ url('/') }}" target="_blank">
                                            <img src="{{ asset('theme-assets/img/logo-white.jpg') }}" alt="Yantra Store" style="max-height:40px;">
                                        </a>
                                        <p style="margin:10px 0 0 0; font-size:18px; color:#000;">Thank You For Shopping With Us!</p>
                                    </td>
                                </tr>

                                <!-- Order & Shipping Details -->
                                <tr>
                                    <td style="padding:20px;">
                                        <table width="100%" style="border-collapse:collapse; background-color:#f9f9f9; border:1px solid #E5E5E5;">
                                            <tbody>
                                                <tr>
                                                    <!-- Order Details -->
                                                    <td width="50%" style="vertical-align:top; padding:15px; border-right:1px solid #E5E5E5;">
                                                        <p style="font-size:16px; font-weight:900; text-transform:uppercase; margin:0 0 10px 0;">Order Details</p>
                                                        <table width="100%" style="border-collapse:collapse;">
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
                                                                    <td colspan="2" style="color:#bc0101; font-weight:bold;">You saved Rs.{{ $content['order']->discount }}!</td>
                                                                </tr>
                                                            @endif
                                                        </table>
                                                        
                                                        <p style="font-size:16px; font-weight:900; text-transform:uppercase; margin:10px 0 10px 0;">Shipping Address</p>
                                                        <p style="margin:0 0 5px 0;">[{{ $content['order']->shippings->shipping_location ?? '' }}]</p>
                                                    </td>

                                                    <!-- Shipping Details -->
                                                    <td width="50%" style="vertical-align:top; padding:15px;">
                                                        <p style="font-size:16px; font-weight:900; text-transform:uppercase; margin:0 0 10px 0;">User Details</p>
                                                        <p style="margin:0;">Name: {{ $content['user']->first_name }}</p>
                                                        <p style="margin:0;">Phone: {{ $content['user']->phone }}</p>
                                                        <p style="margin:0;">Email: {{ $content['user']->email }}</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>

                                <!-- Items Header -->
                                <tr>
                                    <td style="padding:10px 20px;">
                                        <table width="100%" style="border-collapse:collapse; background-color:#f9f9f9; border:1px solid #E5E5E5; table-layout:fixed;">
                                            <tr>
                                                <td style="padding:10px; width:10%; font-weight:900; text-align:center;">
                                                    SN
                                                </td>
                                                <td style="padding:10px; width:45%; font-weight:900; text-align:left;">
                                                    Item(s)
                                                </td>
                                                <td style="padding:10px; width:20%; font-weight:900; text-align:center;">
                                                    Quantity
                                                </td>
                                                <td style="padding:10px; width:25%; font-weight:900; text-align:center;">
                                                    Price
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                                <!-- Loop through products -->
                                @foreach($content['order']->getOrderDataForModal()['products'] as $index => $product)
                                    <tr>
                                        <td style="padding:10px 20px;">
                                            <table width="100%" style="border-collapse:collapse; border-bottom:1px solid #E5E5E5; table-layout:fixed;">
                                                <tr>
                                                    <td style="padding:5px; width:10%; text-align:center;">
                                                        {{ $index + 1 }}
                                                    </td>
                                                    <!-- Product Name -->
                                                    <td style="padding:5px; width:45%; word-wrap:break-word; overflow-wrap:break-word;">
                                                        <a href="{{ route('product-single', $product['slug']) }}" target="_blank"
                                                        style="color:#000000; text-decoration:underline;"
                                                        onmouseover="this.style.color='#007BFF'"
                                                        onmouseout="this.style.color='#000000'"
                                                        onclick="this.style.color='#000000'">
                                                            {{ $product['name'] }}
                                                        </a>
                                                    </td>

                                                    <td style="padding:5px; width:20%; text-align:center; white-space:nowrap;">
                                                        {{ $product['quantity'] }}
                                                    </td>
                                                    <td style="padding:5px; width:25%; text-align:center; white-space:nowrap;">
                                                        Rs. {{ $product['price'] }}
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                @endforeach


                                <!-- Summary -->
                                <tr>
                                    <td style="padding:20px;">
                                        <table width="100%" style="border-collapse:collapse;">
                                            <tr>
                                                <td style="text-align:right; font-weight:900; font-size:16px;">Sub Total:</td>
                                                <td style="text-align:right; color:#bc0101; font-weight:bold; font-size:16px;">Rs. {{ $content['order']->subtotal }}</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align:right; font-weight:900; font-size:16px;">Shipping Price:</td>
                                                <td style="text-align:right; color:#bc0101; font-weight:bold; font-size:16px;">Rs. {{ $content['order']->shippings->shipping_price ?? 0 }}</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align:right; font-weight:900; font-size:16px;">Grand Total:</td>
                                                <td style="text-align:right; color:#bc0101; font-weight:bold; font-size:16px;">Rs. {{ $content['order']->grand_total }}</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                                <!-- Footer -->
                                <tr>
                                    <td align="center" style="padding:20px; font-size:12px; color:#555;">
                                        &copy; {{ date('Y') }} Yantra Store. All Rights Reserved.
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>

    </body>
</html>
