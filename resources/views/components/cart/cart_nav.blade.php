
    <a class="navbar-tool-icon-box bg-secondary dropdown-toggle" href="{{ route('cart-item') }}">
        <span class="navbar-tool-label">{{ Cart::count() }}</span>
        <i class="navbar-tool-icon czi-cart"></i>
    </a>
    <a class="navbar-tool-text" href="{{ route('cart-item') }}">
        <small>My Cart</small>Rs. {{ Cart::subtotal() }}
    </a>
    <div class="dropdown-menu dropdown-menu-right" style="width: 20rem;">
                  <div class="widget widget-cart px-3 pt-2 pb-3">
                    <div style="height: 15rem;" data-simplebar data-simplebar-auto-hide="false">
                      <div class="widget-cart-item pb-2 border-bottom">
                        <button class="close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                        <div class="media align-items-center"><a class="d-block mr-2" href="detail.php"><img width="64" src="img/computer/computer1.webp" alt="Product"/></a>
                          <div class="media-body">
                            <h6 class="widget-product-title"><a href="detail.php">Dell XPS 16 9640 2024</a></h6>
                            <div class="widget-product-meta"><span class="text-accent mr-2">Rs. 10,000</span><span class="text-muted">x 1</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="widget-cart-item py-2 border-bottom">
                        <button class="close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                        <div class="media align-items-center"><a class="d-block mr-2" href="detail.php"><img width="64" src="img/computer/computer2.webp" alt="Product"/></a>
                          <div class="media-body">
                            <h6 class="widget-product-title"><a href="detail.php">Dell XPS 16 9640 2024</a></h6>
                            <div class="widget-product-meta"><span class="text-accent mr-2">Rs. 10,000</span><span class="text-muted">x 1</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="widget-cart-item py-2 border-bottom">
                        <button class="close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                        <div class="media align-items-center"><a class="d-block mr-2" href="detail.php"><img width="64" src="img/computer/computer3.webp" alt="Product"/></a>
                          <div class="media-body">
                            <h6 class="widget-product-title"><a href="detail.php">Dell XPS 16 9640 2024</a></h6>
                            <div class="widget-product-meta"><span class="text-accent mr-2">Rs. 10,000</span><span class="text-muted">x 1</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="widget-cart-item py-2 border-bottom">
                        <button class="close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                        <div class="media align-items-center"><a class="d-block mr-2" href="detail.php"><img width="64" src="img/computer/computer4.webp" alt="Product"/></a>
                          <div class="media-body">
                            <h6 class="widget-product-title"><a href="detail.php">Dell XPS 16 9640 2024</a></h6>
                            <div class="widget-product-meta"><span class="text-accent mr-2">Rs. 10,000</span><span class="text-muted">x 1</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex flex-wrap justify-content-between align-items-center py-3">
                      <div class="font-size-sm mr-2 py-2"><span class="text-muted">Subtotal:</span><span class="text-accent font-size-base ml-1">Rs. 50,000</span></div><a class="btn btn-outline-secondary btn-sm" href="cart.php">Expand cart<i class="czi-arrow-right ml-1 mr-n1"></i></a>
                    </div><a class="btn btn-primary btn-sm btn-block" href="checkout.php"><i class="czi-card mr-2 font-size-base align-middle"></i>Checkout</a>
                  </div>
                </div>
