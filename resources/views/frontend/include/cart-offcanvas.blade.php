<!-- cart offcanvas -->
            <div id="cart" uk-offcanvas="mode: none; flip: true; overlay: true">
                <div
                    class="uk-offcanvas-bar bg-white text-black uk-padding-remove  uk-flex uk-flex-between uk-flex-column">
                    <div>
                        <div class="uk-cart-header uk-flex uk-flex-between">
                            <div>Shopping Cart</div>
                            <button class="uk-offcanvas-close" type="button" uk-close="uk-close"></button>
                        </div>
                        <div class="uk-cart-body">
                            <!-- remove hidden form h1 tag below when cart is empty -->
                            <h4 class="text-black uk-padding" hidden>You have no items in your shopping cart.</h4>
                              <!-- END -->
                            <ul class="uk-cart-list">
                                <!-- -->
                                <li>
                                    <div class="uk-width-1-1">
                                        <div class="uk-grid-small uk-flex-middle" uk-grid="uk-grid">
                                            <div class="uk-width-auto">
                                                <div class="uk-cart-img">
                                                    <a href="">
                                                        <img src="assets/images/products/1.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="uk-width-expand@m">
                                                <div class="uk-margin-remove f-11">
                                                    <a href="shop-single.php" class="text-black">Cashmere Color Shawl (MHCS03)
                                                    </a>
                                                </div>
                                                <div class="uk-flex-middle uk-margin-small uk-grid-small" uk-grid>
                                                    <div>
                                                        <span class="f-14">Color: <b>Red</b></span>
                                                    </div>
                                                    <div>
                                                    <h5 class="uk-margin-remove text-secondary">$60
                                                        <del class="f-12">$75</del>
                                                    </h5>
                                                    </div>
                                                </div>
                                                <div class="uk-margin-remove uk-width-medium uk-flex uk-flex-middle">
                                                    <label class=" f-w-600 uk-margin-right f-12" for="size">Qty:</label>
                                                    <div class="number-input-small">
                                                        <button
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                                            class="minus small"></button>
                                                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                        <button
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                                            class="plus small"></button>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="uk-width-auto@m">
                                                <button class="uk-cart-list-remove" uk-tooltip="Remove" uk-icon="icon:close;"></button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- -->
                                <!-- -->
                                <li>
                                    <div class="uk-width-1-1">
                                        <div class="uk-grid-small uk-flex-middle" uk-grid="uk-grid">
                                            <div class="uk-width-auto@m">
                                                <div class="uk-cart-img">
                                                    <a href="">
                                                        <img src="assets/images/products/2.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="uk-width-expand@m">
                                                <div class="uk-margin-remove f-11">
                                                    <a href="shop-single.php" class="text-black">Cashmere Color Shawl (MHCS06)</a>
                                                </div>
                                                <div class="uk-flex-middle uk-margin-small uk-grid-small" uk-grid>
                                                    <div>
                                                        <span class="f-14">Color: <b>Shady</b></span>
                                                    </div>
                                                    <div>
                                                    <h5 class="uk-margin-remove text-secondary">$55
                                                    <del class="f-12">$66</del>
                                                    </h5>
                                                    </div>
                                                </div> 
                                                <div class="uk-margin-remove uk-width-medium uk-flex uk-flex-middle">
                                                    <label class=" f-w-600 uk-margin-right f-12" for="size">Qty:</label>
                                                    <div class="number-input-small">
                                                        <button
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                                            class="minus small"></button>
                                                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                        <button
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                                            class="plus small"></button>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="uk-width-auto@m">
                                                <button class="uk-cart-list-remove" uk-tooltip="Remove" uk-icon="icon:close;"></button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- -->
                                <!-- -->
                                <li>
                                    <div class="uk-width-1-1">
                                        <div class="uk-grid-small uk-flex-middle" uk-grid="uk-grid">
                                            <div class="uk-width-auto@m">
                                                <div class="uk-cart-img">
                                                    <a href="">
                                                        <img src="assets/images/products/3.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="uk-width-expand@m">
                                                <div class="uk-margin-remove f-11">
                                                    <a href="shop-single.php" class="text-black">Cashmere Color shawl (MHCS10)</a>
                                                </div>
                                                <div class="uk-flex-middle uk-margin-small uk-grid-small" uk-grid>
                                                    <div>
                                                        <span class="f-14">Color: <b>Ocean Blue</b></span>
                                                    </div>
                                                    <div>
                                                    <h5 class="uk-margin-remove text-secondary">$60
                                                    <del class="f-12">$75</del>
                                                    </h5>
                                                    </div>
                                                </div>
                                                <div class="uk-margin-remove uk-width-medium uk-flex uk-flex-middle">
                                                    <label class=" f-w-600 uk-margin-right f-12" for="size">Qty:</label>
                                                    <div class="number-input-small">
                                                        <button
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                                            class="minus small"></button>
                                                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                        <button
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                                            class="plus small"></button>
                                                    </div>
                                                </div>
                                            </div>
                                             
                                            <div class="uk-width-auto@m">
                                                <button class="uk-cart-list-remove" uk-tooltip="Remove" uk-icon="icon:close;"></button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- -->
                                <!-- -->
                                <li>
                                    <div class="uk-width-1-1">
                                        <div class="uk-grid-small uk-flex-middle" uk-grid="uk-grid">
                                            <div class="uk-width-auto@m">
                                                <div class="uk-cart-img">
                                                    <a href="">
                                                        <img src="assets/images/products/5.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="uk-width-expand@m">
                                                <div class="uk-margin-remove f-11">
                                                    <a href="shop-single.php" class="text-black">Woolen Jacket (MHWJK-01)</a>
                                                </div>
                                                <div class="uk-flex-middle uk-margin-small uk-grid-small" uk-grid>
                                                    <div>
                                                        <span class="f-14">Color: <b>Blue</b></span>
                                                    </div>
                                                    <div>
                                                    <h5 class="uk-margin-remove text-secondary">$135
                                                    <del class="f-12">$185</del>
                                                    </h5>
                                                    </div>
                                                </div> 
                                                
                                                <div class="uk-margin-remove uk-width-medium uk-flex uk-flex-middle">
                                                    <label class=" f-w-600 uk-margin-right f-12" for="size">Qty:</label>
                                                    <div class="number-input-small">
                                                        <button
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                                            class="minus small"></button>
                                                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                        <button
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                                            class="plus small"></button>
                                                    </div>
                                                </div>
                                            </div>
                                          
                                            <div class="uk-width-auto@m">
                                                <button class="uk-cart-list-remove" uk-tooltip="Remove" uk-icon="icon:close;"></button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- -->
                            </ul>
                        </div>
                    </div>
                    <div class="uk-cart-footer bg-grey">
                    <div class="cart-sub-total">
                    <table class="uk-table">
                        <tbody>
                            <tr>
                                <td class="text-left">Sub-Total :</td>
                                <td class="text-right">$300.00</td>
                            </tr>
                            <tr>
                                <td class="text-left">VAT (20%) :</td>
                                <td class="text-right">$60.00</td>
                            </tr>
                            <tr>
                                <td class="text-left">Total :</td>
                                <td class="text-right primary-color">$360.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                        <a href="{{route('cart-item')}}" class="uk-button uk-btn-secondary uk-width-1-1 uk-margin-small-bottom">Expand Cart</a>
                        <a href="checkout-if-loggedin.php" class="uk-button uk-btn-primary uk-width-1-1">Checkout</a> 
                    </div>
                </div>
            </div>
            <!-- end cart offcanvas -->