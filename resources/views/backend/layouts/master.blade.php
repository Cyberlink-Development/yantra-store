
@include('backend.layouts.header')

@include('backend.layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper m-0" style="height:100vh!important; overflow-y:scroll; width:100%;">
    <!-- Content Header (Page header) -->
    <!-- <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Mountain Handicraft</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Mountain Handicraft</li>
                    </ol>
                </div>
            </div>
        </div>
    </div> -->
    @include('backend/layouts/flash-message')
    <!-- /.content-header -->
    <div class="content" style="padding:0;">
        @yield('breadcrum')
        @yield('content')
        @include('backend.layouts.footer')
    </div>
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
@stack('scripts')
