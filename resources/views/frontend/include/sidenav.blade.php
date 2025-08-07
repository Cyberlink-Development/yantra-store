<div class="cz-sidebar-static rounded-lg box-shadow-lg px-0 pb-0 mb-5 mb-lg-0 sticky">
    <div class="px-4 mb-4">
        <div class="media align-items-center">
            <div class="img-thumbnail rounded-circle position-relative" style="width: 6.375rem;"><img class="rounded-circle" src="img/team/01.jpg" alt="John Doe"></div>
            <div class="media-body pl-3">
                <h3 class="font-size-base mb-0">John Doe</h3><span class="text-accent font-size-sm">admin@gmail.com</span>
            </div>
        </div>
    </div>
    <div class="bg-secondary px-4 py-3">
        <h3 class="font-size-sm mb-0 text-white">Dashboard</h3>
    </div>
    <ul class="list-unstyled mb-0">
        <li class="border-bottom mb-0">
            <a href="{{ route('user-dashboard') }}" class="nav-link-style d-flex align-items-center px-4 py-3"><i class="czi-user opacity-60 mr-2"></i>Profile info
            </a>
        </li>
        <li class="border-bottom mb-0">
            <a href="{{ route('user-orders') }}" class="nav-link-style d-flex align-items-center px-4 py-3" href="orders.php">
                <i class="czi-bag opacity-60 mr-2"></i>Orders<span class="font-size-sm text-muted ml-auto">1</span>
            </a>
        </li>
        <li class="border-bottom mb-0">
            <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ route('user-wishlist') }}">
                <i class="czi-heart opacity-60 mr-2"></i>Wishlist<span class="font-size-sm text-muted ml-auto">3</span>
            </a>
        </li>
        <li class=" border-top mb-0">
            <a class="nav-link-style d-flex align-items-center px-4 py-3" href="index.php">
                <i class="czi-sign-out opacity-60 mr-2"></i>Sign out
            </a>
        </li>
    </ul>
</div>