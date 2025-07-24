@guest
@include('frontend.include.header')
@else
@include('frontend.include.header-login')
@endguest

@include('frontend/include/flash-message')
@yield('content')
@include('frontend.include.footer')
@stack('scripts')

