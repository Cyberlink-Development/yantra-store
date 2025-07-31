@php
    $currentRoute = Route::currentRouteName();
@endphp
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" target="_blank" class="brand-link" style="background-color: #ffffff;">
        <img src="{{ asset('images/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8;"><br>
        <!--<span class="brand-text font-weight-light"> {{ config('app.name') }}</span>-->
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <?php /*?> ?>
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('images/user.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="" class="d-block">Admin</a>
            </div>
        </div>
        <?php */?>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ in_array($currentRoute, ['dashboard']) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <!-- <i class="right fas fa-angle-left"></i> -->
                        </p>
                    </a>
                </li>

                <li class="nav-header">PRODUCTS</li>
                <li class="nav-item has-treeview {{ in_array($currentRoute, ['add-size', 'add-color']) ? 'menu-open' : '' }}">
                    <a href="" class="nav-link {{ in_array($currentRoute, ['add-size', 'add-color']) ? 'active' : '' }}">
                        <i class="nav-icon fa fa-sliders"></i>
                        <p>
                            Product Attributes
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('add-size') }}" class="nav-link ml-3 {{ $currentRoute == 'add-size' ? 'active' : '' }}">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Add Size</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('add-color') }}" class="nav-link ml-3 {{ $currentRoute == 'add-color' ? 'active' : '' }}">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Add Color</p>
                            </a>
                        </li>

                    </ul>
                </li>



                <li class="nav-item has-treeview {{ in_array($currentRoute, ['brand-index', 'brand-discounts.index']) ? 'menu-open' : '' }}">
                    <a href="" class="nav-link {{ in_array($currentRoute, ['brand-index', 'brand-discounts.index']) ? 'active' : '' }}">
                        <i class="nav-icon fa fa-briefcase"></i>
                        <p>
                            Brand
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('brand-index') }}" class="nav-link ml-3 {{ $currentRoute == 'brand-index' ? 'active' : '' }}">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Add Brand</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('brand-discounts.index') }}" class="nav-link ml-3 {{ $currentRoute == 'brand-discounts.index' ? 'active' : '' }}">
                                <i class="fa fa-list nav-icon"></i>
                                <p>Brand Discount</p>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="nav-item has-treeview {{ in_array($currentRoute, ['add-category', 'category.index']) ? 'menu-open' : '' }}">
                    <a href="" class="nav-link {{ in_array($currentRoute, ['add-category', 'category.index']) ? 'active' : '' }}">
                        <i class="nav-icon fa fa-tags"></i>
                        <p>
                            Category
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('add-category') }}" class="nav-link ml-3 {{ $currentRoute == 'add-category' ? 'active' : '' }}">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Add Category</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('category.index') }}" class="nav-link ml-3 {{ $currentRoute == 'category.index' ? 'active' : '' }}">
                                <i class="fa fa-list nav-icon"></i>
                                <p>All Category</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item has-treeview {{ in_array($currentRoute, ['add-componenttype', 'show-componenttype']) ? 'menu-open' : '' }}">
                    <a href="" class="nav-link {{ in_array($currentRoute, ['add-componenttype', 'show-componenttype']) ? 'active' : '' }}">
                        <i class="nav-icon fa fa-puzzle-piece"></i>
                        <p>
                            Component Type
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview {{ in_array($currentRoute, ['add-componenttype', 'show-componenttype']) ? 'active' : '' }}">
                        <li class="nav-item">
                            <a href="{{ route('add-componenttype') }}" class="nav-link ml-3 {{ $currentRoute == 'add-componenttype' ? 'active' : '' }}">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Add Component Type</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('show-componenttype') }}" class="nav-link ml-3 {{ $currentRoute == 'show-componenttype' ? 'active' : '' }}">
                                <i class="fa fa-list nav-icon"></i>
                                <p>View Component Types</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item has-treeview {{ in_array($currentRoute, ['add-product', 'all-product']) ? 'menu-open' : '' }}">
                    <a href="" class="nav-link {{ in_array($currentRoute, ['add-product', 'all-product']) ? 'active' : '' }}">
                        <i class="nav-icon fa fa-cube"></i>
                        <p>
                            Product
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('add-product') }}" class="nav-link ml-3 {{ $currentRoute == 'add-product' ? 'active' : '' }}">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Add Product</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('all-product') }}" class="nav-link ml-3 {{ $currentRoute == 'all-product' ? 'active' : '' }}">
                                <i class="fa fa-list nav-icon"></i>
                                <p>All Products</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ url('admin/banner') }}" class="nav-link">
                        <i class="nav-icon fa fa-image"></i>
                        <p>
                            Banners
                            <!-- <i class="fas fa-angle-left right"></i> -->
                        </p>
                    </a>
                </li>


                {{--                <li class="nav-header">USERS</li> --}}
                {{--                <li class="nav-item has-treeview"> --}}
                {{--                    <a href="" class="nav-link"> --}}
                {{--                        <i class="nav-icon fa fa-user"></i> --}}
                {{--                        <p> --}}
                {{--                            Wholesale Users --}}
                {{--                            <i class="fas fa-angle-left right"></i> --}}
                {{--                        </p> --}}
                {{--                    </a> --}}
                {{--                    <ul class="nav nav-treeview"> --}}
                {{--                        <li class="nav-item"> --}}
                {{--                            <a href="{{route('wholesale-user')}}" class="nav-link"> --}}
                {{--                                <i class="fa fa-paper-plane"></i> --}}
                {{--                                <p>Add User</p> --}}
                {{--                            </a> --}}
                {{--                        </li> --}}
                {{--                    </ul> --}}
                {{--                </li> --}}

                
                <li class="nav-header">BUILD CUSTOM PC</li>
                <li class="nav-item has-treeview">
                    <a href="" class="nav-link">
                        <i class="nav-icon fa fa-microchip"></i>
                        <p>
                            Component
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('add-componenttype') }}" class="nav-link ml-3">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Add Component</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('show-componenttype') }}" class="nav-link ml-3">
                                <i class="fa fa-list nav-icon"></i>
                                <p>View Components</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-header">ORDERS</li>

                <!-- <li class="nav-item has-treeview">
                    <a href="" class="nav-link">
                        <i class="nav-icon fa fa-money"></i>
                        <p>
                           Payment Methods
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('payment.method') }}" class="nav-link">
                                <i class="fa fa-paper-plane"></i>
                                <p>Payment Methods</p>
                            </a>
                        </li>
                    </ul>
                </li> -->

                {{-- <li class="nav-item has-treeview">
                    <a href="" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Shipping Rates
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('add-location')}}" class="nav-link">
                                <i class="fa fa-paper-plane"></i>
                                <p>Add Shipping Location</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('add-country')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Country</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('add-city')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add City</p>
                            </a>
                        </li>
                    </ul>
                </li> --}}
                <li class="nav-item has-treeview">
                    <a href="" class="nav-link">
                        <i class="nav-icon fa fa-dollar-sign"></i>
                        <p>
                            Shipping Rates
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('add-price') }}" class="nav-link ml-3">
                                <i class="fa fa-paper-plane"></i>
                                <p>Add Shipping Price</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('add-medium') }}" class="nav-link ml-3">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Shipping Medium</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('add-weight') }}" class="nav-link ml-3">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Weight Category</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="" class="nav-link">
                        <i class="nav-icon fa fa-shopping-cart"></i>
                        <p>
                            Orders
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('view-orders') }}" class="nav-link ml-3">
                                <i class="fa fa-paper-plane"></i>
                                <p>All Orders</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-header">MISCELLANEOUS</li>

                <li class="nav-item has-treeview">
                    <a href="" class="nav-link">
                        <i class="nav-icon fa fa-newspaper-o"></i>
                        <p>
                            Blog
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('add-blog') }}" class="nav-link ml-3">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Blog</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('all-blogs') }}" class="nav-link ml-3">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Blogs</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ route('quotation-all') }}" class="nav-link">
                        <i class="fas fa-sticky-note"></i>
                        <p>Quotations</p>
                    </a>
                </li>

                <!--<li class="nav-item">-->
                <!--    <a href="{{ route('faq') }}" class="nav-link">-->
                <!--        <i class="fa fa-question"></i>-->
                <!--        <p>FAQ'S</p>-->
                <!--    </a>-->
                <!--</li>-->

                <li class="nav-item">
                    <a href="{{ route('setting-page') }}" class="nav-link">
                        <i class="fa fa-wrench"></i>
                        <p>Setting</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin-password') }}" class="nav-link">
                        <i class="fa fa-key"></i>
                        <p>Change Password</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link">
                        <i class="fa fa-power-off"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>

        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
