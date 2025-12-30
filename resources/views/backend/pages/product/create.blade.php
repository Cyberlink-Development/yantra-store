@extends('backend.layouts.master')
@section('breadcrum')
    @include('backend.layouts.breadcrum', ['title' => 'Product Create','backLabel'=>'List','backLink'=>route('product.index')])
@endsection
@section('content')
    <style>
        .select2-container--default .select2-selection--multiple .select2-selection__choice{
            color:#000!important;
        }
        .control-label{
            font-weight: 500!important;
            font-size: 1rem;
        }
        #productFormNav .nav .nav-item{
            border-right: 1px solid #dee2e6;
            padding: .6rem 0px;
        }
        #productFormNav .nav .nav-item.active {
            color: #2a2b2cff;
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            box-shadow: inset 0 2px 6px rgba(0, 0, 0, 0.08);
            font-weight: 600;
            transition: all 0.3s ease-in-out;
        }
    </style>
    <div class="container">
        <form method="post" class="form-group" id="add_product" action="{{route('product.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <div class="card" id="productFormNav" style="box-shadow:none; border:none;">
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-general-tab" data-toggle="tab" href="#nav-general" role="tab" aria-controls="nav-home" aria-selected="true">General</a>
                            <a class="nav-item nav-link" id="nav-media-tab" data-toggle="tab" href="#nav-media" role="tab" aria-controls="nav-media" aria-selected="false">Media</a>
                            <a class="nav-item nav-link" id="nav-seo-tab" data-toggle="tab" href="#nav-seo" role="tab" aria-controls="nav-seo" aria-selected="false">SEO</a>
                        </div>
                    </div>
                    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent" style="padding-top:0px!important;">
                        <!-- <div class="tab-pane fade show active" id="nav-general" role="tabpanel" aria-labelledby="nav-general-tab"></div> -->
                        <div class="card tab-pane fade show active" id="nav-general" role="tabpanel" aria-labelledby="nav-general-tab" style="box-shadow:none; border:none;">
                            <div class="card-body">
                                <!-- general form elements -->
                                <div class="box">
                                    <!-- form start -->
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="name" class="control-label">Product Name</label>
                                            <input class="form-control" placeholder="Enter product name" name="product_name" type="text" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="name" class="control-label">SKU</label>
                                            <input class="form-control" placeholder="Enter product stock knowing unit" name="sku" type="text">
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="price" class="control-label">Price</label>
                                                <input id="price" class="form-control" placeholder="Price" name="price" type="number" step="0.01" min="0">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="discount_percent" class="control-label">Discount Percent</label>
                                                <input id="discount_percent" class="form-control" placeholder="Percentage" name="discount_percent" type="number" step="0.01" min="0" max="100">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="discount_price" class="control-label">Discount Price</label>
                                                <input id="discount_price" class="form-control" placeholder="Discount price" name="discount_price" type="number" readonly>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="stock" class="control-label">Stock</label>
                                                <input class="form-control" placeholder="stock" name="stock" type="number">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="model_name" class="control-label">Model Name</label>
                                                <input type="text" name="model_name" class="form-control" id="model_name" placeholder="Enter model name/number" value="{{old('model_name')}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="shortDescription" class="control-label">Specification</label>
                                            <textarea name="short_description" id="shortDescription" rows="3" class="form-control tiny-mce"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label id="longDescription" class="control-label">Description</label>
                                            <textarea name="long_description" id="longDescription" rows="3" class="form-control tiny-mce"></textarea>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                            </div>
                        </div>
                        <div class="card tab-pane fade" id="nav-media" role="tabpanel" aria-labelledby="nav-media-tab" style="box-shadow:none; border:none;">
                            <div class="card-body">
                                <h6><span style="color: red;">*</span><label for=""> Enter Images of the
                                Product </label></h6>
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-bordered table-images"  id="myTable" width="100%">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Image</th>
                                                    <th>Main</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="text-align: left;">
                                                        <input type="button" class="tdAdd" value="Add Row" />
                                                    <td>
                                                        <input type="file" name="image[]"/>
                                                    </td>
                                                    <td>
                                                        <input value="1" class="radio1" type="radio" checked name="is_main"/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left;">
                                                        <input type="button" class="tdAdd" value="Add Row" />
                                                    <td>
                                                        <input type="file" name="image[]"/>
                                                    </td>
                                                    <td>
                                                        <input value="1" class="radio1" type="radio"  name="is_main"/>
                                                    </td>
                                                    <td>
                                                        <input type="button" value="Delete" class="ibtnDel"/>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card tab-pane fade" id="nav-seo" role="tabpanel" aria-labelledby="nav-seo-tab" style="box-shadow:none; border:none;">
                            <div class="card-body">
                                <div class="box">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Meta Data</h3>
                                    </div>
                                </div>
                                <hr />
                                <div class="box">
                                    <div class="form-group">
                                        <label>Meta Title</label>
                                        <input type="text" name="meta_title" id="meta_title" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Meta Description</label>
                                        <textarea name="meta_description" id="desc" rows="3" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body" style="padding:.5rem;">
                            <button class="btn btn-danger btn-xs pull-right" style="padding: .1rem .75rem;">
                                Save
                            </button>
                        </div>
                    </div>
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="form-group m-0">
                                    <label for="status" class="control-label m-0">Status:</label>
                                    <input type="checkbox" id="status" name="status" checked />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <!-- <div class="form-group m-0">
                                    <label for="hot" class="control-label m-0">Hot Deals?:</label>
                                    <input type="checkbox" id="hot" name="hot" />
                                </div> -->
                                <div class="form-group m-0">
                                    <label for="is_featured" class="control-label m-0">Is Feature?</label>
                                    <input type="checkbox" id="is_featured" name="is_featured" />
                                </div>
                                <div class="form-group m-0">
                                    <label for="latest" class="control-label m-0">Latest ?</label>
                                    <input type="checkbox" id="latest" name="latest" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="form-group m-0">
                                    <label for="on_sale" class="control-label m-0">Flash Sale:</label>
                                    <input type="checkbox" id="on_sale" name="on_sale" />
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="form-group m-0">
                                    <label for="is_popular" class="control-label m-0">Popular(Products for you)?:</label>
                                    <input type="checkbox" id="is_popular" name="is_popular" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="form-group m-0">
                                    <label for="is_special" class="control-label m-0">Special(Gone in seconds):</label>
                                    <input type="checkbox" id="is_special" name="is_special" />
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between" style="flex-direction: column;">
                                <label for="category" class="control-label mb-1">Category:</label>
                                <select name="category[]" id="category" class="form-control select2" multiple>
                                    @foreach($categories as $category)
                                        @include('backend.pages.category.category_dropdown', [
                                            'category' => $category,
                                            'depth' => 0,
                                            'excludeIds' => [],
                                            'assignedCategories' => $assignedCategories ?? []
                                        ])
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between" style="flex-direction: column;">
                                <label for="brand_id" class="control-label mb-1">Brands:</label>
                                <select class="form-control" name="brand_id">
                                    <option selected="selected" value="">Select Brand</option>
                                    @foreach($brands as $row)
                                        <option value="{{$row->id}}">{{$row->brand_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between" style="flex-direction: column;">
                                <label for="offer_id" class="control-label mb-1">Offers:</label>
                                <select class="form-control" name="offer_id">
                                    <option selected="selected" value="">Select offers</option>
                                    @foreach($offers as $row)
                                        <option value="{{$row->id}}">{{$row->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between" style="flex-direction: column;">
                                <label for="component_type" class="control-label mb-1">Component Type:</label>
                                <select class="form-control" name="component_type">
                                    <option selected="selected" value="">Select Component Type</option>
                                    @foreach($comp_type as $value)
                                        <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@stop
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#category').select2();
        });
    </script>
    <script>
        $(document).ready(function () {
            var i = 1;

            $("#add_row").click(function () {
                $('#addr' + i).html("<td>" + (i + 1) + "</td><td><input name='title[]" + i + "' type='text' placeholder='Title' class='form-control input-md'  /> </td><td><input  name='description1[]" + i + "' type='text' placeholder='Description'  class='form-control input-md'></td>");

                $('#tab_logic').append('<tr id="addr' + (i + 1) + '"></tr>');
                i++;
            });
            $("#delete_row").click(function () {
                if (i > 1) {
                    $("#addr" + (i - 1)).html('');
                    i--;
                }
            });

        });
    </script>
    <script>
        // multiple stock-colors free size
        jQuery(document).on('click', '.btn-delete-stocks', function (e) {
            e.preventDefault();
            var $this = $(this);
            $this.closest("tr").remove();
        });
        $(document).on("click", '.colorStock', function () {
            var counter = $('#color_table tbody tr').length + 1;
            var newRow = $("<tr>");
            var column = "";
            column += '<td><input type="button" value="Add Row" class="colorStock"/></td>';
            column += '<td><select name="free_size_color[]" required>' + counter + ' + ' +
                '@foreach($color as $value)' +
                '<option value="{{ $value->id}}">{{ $value->title}}</option>' +
                '@endforeach' + '</select></td>';
            column += '<td><input type="number" name="color_stocks[]"  '+ counter + '"/></td>';
            column += '<td><input type="button" class="Del"  value="Delete"></td>';
            newRow.append(column);
            newRow.insertAfter( $(this).closest("tr") );
        });
        $("table.table-colorstocks").on("click", ".Del", function (event) {
            $(this).closest("tr").remove();
        });
    </script>
    <script>
        jQuery(document).on('click', '.btn-delete-stocks', function (e) {
            e.preventDefault();
            var $this = $(this);
            $this.closest("tr").remove();
        });
        $(document).on("click", '.tdAddStock', function () {
            var counter = $('#size_table tbody tr').length + 1;
            var newRow = $("<tr>");
            var column = "";
            column += '<td><input type="button" value="Add Row" class="tdAddStock"/></td>';
            column += '<td><select name="size[]" required>' + counter + ' + ' +
                '@foreach($size as $value)' +
                '<option value="{{ $value->id}}">{{ $value->title}}</option>' +
                '@endforeach' + '</select></td>';
            column += '<td><select name="color[]" required>' + counter + ' + ' +
                '@foreach($color as $value)' +
                '<option value="{{ $value->id}}">{{ $value->title}}</option>' +
                '@endforeach' + '</select></td>';
            column += '<td><input type="number" name="size_stocks[]"  '+ counter + '"/></td>';
            column += '<td><input type="button" class="Del"  value="Delete"></td>';
            newRow.append(column);
            newRow.insertAfter( $(this).closest("tr") );
        });
        $("table.table-stocks").on("click", ".Del", function (event) {
            $(this).closest("tr").remove();
        });
    </script>
    <script>
        $('input[type=radio][name=size_type]').change(function () {
            if (this.value == '0') {
                $('.different_size_form').hide();
                $('.no_size_form').show();
            }
            else if (this.value == '1') {
                $('.no_size_form').hide();
                $('.different_size_form').show();
            }
        });
    </script>

    <script>
        $(document).on("click", '.tdAdd', function () {
            var counter = $('#myTable tbody tr').length + 1;
            var newRow = $("<tr>");
            var cols = "";
            cols += '<td><input type="button" value="Add Row" class="tdAdd"/></td>';
            cols += '<td><input type="file" name="image[]"  '+ counter + '"/></td>';

            cols += '<td><input value="'+ counter + '" class="radio1" type="radio"  name="is_main"/></td>';
            cols += '<td><input type="button" class="ibtnDel"  value="Delete"></td>';
            newRow.append(cols);
            newRow.insertAfter( $(this).closest("tr") );
        });

        $("table.table-images").on("click", ".ibtnDel", function (event) {
            $(this).closest("tr").remove();
        });
    </script>
    <script>
        $(".valid-quantity").keyup(function (){
            if($(this).val()<1){
                $(this).val(1);
            }
        });
        $(document).ready(function () {
            function showLoading() {
                document.getElementById("loading").style = "visibility: visible";
            }

            function hideLoading() {
                document.getElementById("loading").style = "visibility: hidden";
            }

            $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });

            $('form').on('submit',function (e) {
                e.preventDefault();
                // let main_img=$("input[name='is_main']:checked").val();
                let myform = document.getElementById('add_product');
                let formData = new FormData(myform);
                // showLoading();
                $.ajax({
                    type: 'POST',
                    url: '{{route('product.store')}}',
                    data:formData,
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend:function() {
                        $("#loading-image").show();
                    },
                    success: function (data) {
                        ajax_response(data);
                        if (data.success == true) {
                            document.getElementById("add_product"). reset();
                            window.location.href = "{{ route('product.index') }}";
                        }
                        $("#loading-image").hide();
                    }
                });
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const priceInput = document.getElementById('price');
            const discountPercentInput = document.getElementById('discount_percent');
            const discountPriceInput = document.getElementById('discount_price');

            function calculateDiscountPrice() {
                const price = parseFloat(priceInput.value) || 0;
                const discountPercent = parseFloat(discountPercentInput.value) || 0;

                // Ensure discount percent is <= 100
                const validDiscount = discountPercent > 100 ? 100 : discountPercent;

                const discountPrice = price - (price * validDiscount / 100);
                discountPriceInput.value = discountPrice.toFixed(2);
            }

            priceInput.addEventListener('input', calculateDiscountPrice);
            discountPercentInput.addEventListener('input', calculateDiscountPrice);
        });
    </script>
@endpush
