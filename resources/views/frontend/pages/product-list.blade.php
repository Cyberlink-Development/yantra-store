@extends('frontend.include.master')
@section('meta-keywords') {!! strip_tags($category->first()->seo_keyword) !!} @endsection
@section('meta-description') {!! strip_tags($category->first()->seo_description) !!} @endsection
@section('title', $category->first()->name)
@section('image')
    @if ($category->first()->image)
        {{ asset('images/categories/' . $category->first()->image) }}
    @else
        {{ asset('images/logo.png') }}
    @endif
@endsection
@section('short_description', strip_tags($category->first()->description))<!-- Page Title-->
@section('content')
    <div class=" bg-primary pt-4 pb-4">
        <div class="container py-2 py-lg-3">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center align-item-center  mb-3 mb-lg-0 pt-lg-2 ">
                    <div>
                        <nav aria-label="breadcrumb text-center">
                            <ol class="breadcrumb  flex-lg-nowrap justify-content-center">
                                <li class="breadcrumb-item">
                                    <a class="text-nowrap text-white" href="{{ route('index') }}">
                                        <i class="czi-home"></i>Home
                                    </a>
                                </li>
                                <li class="breadcrumb-item text-nowrap active text-white" aria-current="page">
                                    {{ $category->name }}
                                </li>
                            </ol>
                        </nav>
                        <div class=" pr-lg-4 text-center">
                            <h1 class="h3 mb-0 text-white"> {{ $category->name }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Content-->
    <div class="container-fluid  px-4 px-md-5">
        <div class="row">
            <!-- Sidebar-->
            <aside class="col-lg-3  mt-n5">
                @include('frontend.include.sidebar')
            </aside>
            <!-- Content  -->
            <section class="col-lg-9" id="productList">
                <x-product.product_list :products="$products" />
            </section>
        </div>
    </div>

    <!-- Toolbar for handheld devices-->
    @include('frontend.include.toolbar')
    <script>
        document.querySelectorAll('.image-hover-box').forEach(box => {
            const mainImg = box.querySelector('.main-img');
            const hoverImg = box.querySelector('.hover-img');

            if (mainImg && hoverImg && hoverImg.getAttribute('src')) {
                box.classList.add('has-hover');
            }
        });
    </script>
    <script>
        function addToCart(e,productId){
            e.preventDefault();
            $.ajax({
                url: "{{ route('cart-add') }}",
                type:'POST',
                data: {
                    'product_id' : productId,
                    'quantity' : 1,
                    '_token': '{{ csrf_token() }}'
                },
                success:function(res){
                    ajax_response(res);
                    $('#cartNav').html(res.view);
                }
            });
        }
        function sorting(sorting){
            const url = new URL(window.location.href);
            url.searchParams.set('sort', $(sorting).val());
            url.searchParams.delete('page'); // reset to first page on sorting change
            loadProducts(url.toString());
        }
        function loadProducts(url){
            $.ajax({
                url: url,
                success: function(data){
                    ajax_response(data);
                    $('#productList').html(data.view);
                    if(data.success == true){
                        history.pushState(null,'',url);
                    }
                }
            })
        }
        $(document).on('click', '.pagination a', function(e){
            e.preventDefault();
            const url = $(this).attr('href');
            loadProducts(url);
        });
        window.addEventListener('popstate', function() {
            loadProducts(window.location.href);
        });
        // $('.filter-input').on('change', function() {
        //     const url = new URL(window.location.href);
        //     $('.filter-input').each(function(){
        //         const name = $(this).attr('name');
        //         if(this.type === 'checkbox' || this.type === 'radio'){
        //             if(this.checked){
        //                 url.searchParams.append(name, this.value);
        //             } else {
        //                 url.searchParams.delete(name);
        //             }
        //         } else {
        //             url.searchParams.set(name, $(this).val());
        //         }
        //     });

        //     url.searchParams.delete('page');
        //     loadProducts(url.toString());
        // });

    </script>
@stop
