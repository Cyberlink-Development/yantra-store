@extends('backend.layouts.master')
@section('breadcrum')
    @include('backend.layouts.breadcrum', ['title' => 'Product Edit','backLabel'=>'List','backLink'=>route('product.index')])
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
        <form method="post" class="form-group" id="add_product" action="{{route('product.update',$data->id)}}" enctype="multipart/form-data">
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
                                            <input class="form-control" placeholder="Enter product name" name="product_name" type="text" value="{{$data->product_name}}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="name" class="control-label">SKU</label>
                                            <input class="form-control" placeholder="Enter product stock knowing unit" name="sku" type="text" value="{{$data->sku}}">
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="price" class="control-label">Price</label>
                                                <input class="form-control" placeholder="price" name="price" type="number" value="{{$data->price}}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="discount_price" class="control-label">Disocunt Price</label>
                                                <input class="form-control" placeholder="Discount price" name="discount_price" type="number" value="{{$data->discount_price}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="stock" class="control-label">Stock</label>
                                                <input class="form-control" placeholder="stock" name="stock" type="number" value="{{$data->stock}}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="model_name" class="control-label">Model Name</label>
                                                <input type="text" name="model_name" class="form-control" id="model_name" placeholder="Enter model name/number" value="{{$data->model_name}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="shortDescription" class="control-label">Specification</label>
                                            <textarea name="short_description" id="shortDescription" rows="3" class="form-control tiny-mce">{{ $data->short_description }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label id="longDescription" class="control-label">Description</label>
                                            <textarea name="long_description" id="longDescription" rows="3" class="form-control tiny-mce">{{ $data->long_description }}</textarea>
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
                                                @foreach($data->images as $img)
                                                    <tr>
                                                        <td style="text-align: left;">
                                                            <input type="button" class="tdAdd" value="Add Row"/>
                                                        </td>
                                                        <td>
                                                            @if($data->images->isNotempty())
                                                                <img src="{{asset('images/products/'.$img->image)}}" width="150px">
                                                            @else
                                                                <input type="file" name="image[]" disabled/>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <input value="" name="is_main" class="is_main radio1" type="radio" data-id="{{$img->id}}" {{$img->is_main == 1 ? 'checked' : ''}} />Is Main?
                                                        </td>
                                                        <td>
                                                            @if(count($data->images) > 1)
                                                                <button class="remove_image btn btn-danger" id="{{ $img->id }}">
                                                                    Remove
                                                                </button>
                                                            @else
                                                                -
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
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
                                        <input type="text" name="meta_title" id="meta_title" class="form-control" value="{{ $data->seo?->meta_title }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Meta Description</label>
                                        <textarea name="meta_description" id="desc" rows="3" class="form-control">{{ $data->seo?->meta_description }}</textarea>
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
                                Update
                            </button>
                        </div>
                    </div>
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="form-group m-0">
                                    <label for="status" class="control-label m-0">Status:</label>
                                    <input type="checkbox" id="status" name="status" {{$data->status == 1 ? 'checked' : ''}} />
                                </div>
                                <div class="form-group m-0">
                                    <label for="is_featured" class="control-label m-0">Is Feature?</label>
                                    <input type="checkbox" id="is_featured" name="is_featured" {{$data->is_featured == 1 ? 'checked' : ''}} />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="form-group m-0">
                                    <label for="hot" class="control-label m-0">Hot Deals?:</label>
                                    <input type="checkbox" id="hot" name="hot" {{$data->hot == 1 ? 'checked' : ''}} />
                                </div>
                                <div class="form-group m-0">
                                    <label for="latest" class="control-label m-0">Latest ?</label>
                                    <input type="checkbox" id="latest" name="latest" {{$data->latest == 1 ? 'checked' : ''}} />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="form-group m-0">
                                    <label for="on_sale" class="control-label m-0">Flash Sale:</label>
                                    <input type="checkbox" id="on_sale" name="on_sale" {{$data->on_sale == 1 ? 'checked' : ''}} />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="form-group m-0">
                                    <label for="is_popular" class="control-label m-0">Popular(Products for you)?:</label>
                                    <input type="checkbox" id="is_popular" name="is_popular" {{$data->is_popular == 'popular' ? 'checked' : ''}} />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="form-group m-0">
                                    <label for="is_special" class="control-label m-0">Special(Gone in seconds):</label>
                                    <input type="checkbox" id="is_special" name="is_special" {{ $data->is_special == 1 ? 'checked' : '' }} />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between" style="flex-direction: column;">
                                <label for="category" class="control-label mb-1">Category:</label>
                                <select class="form-control" name="category[]" id="category" multiple="multiple" required>
                                    <option disabled value="">Select Category</option>
                                    @php
                                        $assignedCategories = $data->categories->pluck('id')->toArray();
                                    @endphp
                                    @foreach($cat as $category)
                                        @include('backend.pages.category.category_dropdown', [
                                            'category' => $category,
                                            'depth' => 0,
                                            'assignedCategories' => $assignedCategories
                                        ])
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
                                    <option value="">Select Component Type</option>
                                    @foreach($comp_type as $value)
                                        <option value="{{ $value->id }}" {{ $data->component_type == $value->id ? 'selected' : '' }}>
                                            {{ $value->name }}
                                        </option>
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

        $(".valid-quantity").keyup(function (){
            if($(this).val()<0){
                $(this).val(0);
            }
          });
    </script>
    <script>
        $(document).ready(function () {

            var last = $('.rowadd tr:last').attr('data-id');
            var i = last ? parseInt(last) : 1;


            $("#add_row").click(function () {
                i++;

                $('#tab_logic').append('<tr id="addr' + i + '" data-id="' + i +
                    '" ></tr>'
                );
                $('#addr' + i).html("<td>" + (i + 1) + "</td><td><input name='title[title][bigtech-" + i + "]" + i + "' type='text' placeholder='Title' class='form-control input-md'  /> </td><td><input  name='description[desc][bigtech-" + i + "]" + i + "' type='text' placeholder='Description'  class='form-control input-md'></td>");

            });
            $("#delete_row").click(function () {
                if (i > 1) {
                    let id = $("#addr"+(i-1)).attr("data-desc-id");
                    delete_description(id);
                    $("#addr" + (i - 1)).html('');
                    i--;
                }
            });

        });

        function delete_description(id){
            var url = '{{ route("delete-description", ":id") }}';
            url = url.replace(':id', id);
            $.ajax({
                    type: 'GET',
                    url: url,
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data) {
                        toastr.success(data.message);
                        location.reload();
                    },
                    error: function (a) {//if an error occurs
                        // hideLoading();
                        alert("An error occured while uploading data.\n error code : " + a.statusText);
                    }

                });
        }

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
            column += '<td><input type="number" class="valid-quantity" name="color_stocks[]"  ' + counter + '"/></td>';
            column += '<td><input type="button" class="Del"  value="Delete"></td>';
            newRow.append(column);
            newRow.insertAfter($(this).closest("tr"));
        });

        $("table.table-colorstocks").on("click", ".Del", function (event) {
            $(this).closest("tr").remove();
        });

    </script>


    <script>
        // multiple stock-sizes
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
            column += '<td><input type="number" class="valid-quantity" name="size_stocks[]"  ' + counter + '"/></td>';
            column += '<td><input type="button" class="Del"  value="Delete"></td>';
            newRow.append(column);
            newRow.insertAfter($(this).closest("tr"));
        });

        $("table.table-stocks").on("click", ".Del", function (event) {
            $(this).closest("tr").remove();
        });

    </script>

    <script>

    </script>

    <script>
        $(document).on("click", '.tdAdd', function () {
            var counter = $('#myTable tbody tr').length + 1;
            var newRow = $("<tr>");
            var cols = "";
            cols += '<td><input type="button" value="Add Row" class="tdAdd"/></td>';
            cols += '<td><input type="file" name="image[]"  ' + counter + '"/></td>';

            cols += '<td><input value="' + counter + '" class="radio1" type="radio" name="is_main"/></td>';
            cols += '<td><input type="button" class="ibtnDel"  value="Delete"></td>';
            newRow.append(cols);
            newRow.insertAfter($(this).closest("tr"));
        });



    </script>


    <script>
        $(document).ready(function () {
            function showLoading() {
                document.getElementById("loading").style = "visibility: visible";
            }

            function hideLoading() {
                document.getElementById("loading").style = "visibility: hidden";
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('form').on('submit', function (e) {
                e.preventDefault();

                // let main_img=$("input[name='is_main']:checked").val();
                let myform = document.getElementById('add_product');
                let formData = new FormData(myform);
                formData.append('id',{{$data->id}});


                // showLoading();
                $.ajax({
                    type: 'POST',
                    url: '{{route('product.update')}}',
                    data: formData,
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function () {
                        $("#loading-image").show();
                    },
                    success: function (data) {
                        ajax_response(data);
                        if (data.success == true) {
                            // location.reload();
                            window.location.href = "{{ route('product.index') }}";
                        }
                        $("#loading-image").hide();
                    }
                });

            });

        });
    </script>

    <script>
        $(".table-images").on("click", ".remove_image", function (e) {
            e.preventDefault();
            let id = $(this).attr("id");
            var url = '{{ route("delete-img", ":id") }}';
            url = url.replace(':id', id);
            $.ajax(
                {
                    url: url,
                    type: 'GET',
                    dataType: "JSON",
                    success: function (response) {
                        toastr.success(response.message);
                        location.reload();
                    },
                    error: function (response) {
                        toastr.error(response.message);
                    }
                });

        });
    </script>

    <script>
        $(".table-images").on("click", ".is_main", function (event) {
            var id = $(this).attr("data-id");
            var url = '{{ route("change-main", ":id") }}';
            url = url.replace(':id', id);
            console.log(id);
            $.ajax(
                {
                    url: url,
                    type: 'GET',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (response) {
                        // $(".jumbotron-image").load(" .jumbotron-image");
                        toastr.success(response.message);
                        console.log(response);
                    },
                    error: function () {
                        alert("It failed");
                    }
                });
        });
    </script>




@endpush

