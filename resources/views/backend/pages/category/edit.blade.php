@extends('backend.layouts.master')
@section('content')
    <div class="container">
        <form method="post" class="form-group" action="{{route('edit-category',$value->id)}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- general form elements -->
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Edit Category</h3>
                                </div>
                                <hr>
                                <!-- form start -->
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Category</label>
                                        <input class="form-control" placeholder="Name" name="name" type="text" value="{{$value->name}}">

                                    </div>

                                    <div class="form-group">
                                        <label for="name" class="control-label">Parent Category</label>
                                        <select name="parent_id" id="parent"class="form-control select2">
                                        <option value="0">Select Parent Category
                                         </option>
                                        @foreach($category as $value1)
                                            <option
                                                @if($value->parent_id==$value1->id) selected
                                                @endif value="{{$value1->id}}">{{$value1->name}}</option>
                                            @include('backend.pages.category.category_dropdown',['category'=>$value1])

                                        @endforeach
                                    </select>

                                    </div>
                                    
                                    @if($value->banner)
                                    <div id="prev-banner">
                                        <button type="button" class="btn btn-danger" data-url="{{route('category-banner-delete', $value->id)}}" id="banner-delete">X</button>
                                        <p class="mt-4">
                                            <img src="{{asset('images/categories/'. $value->banner)}}" width=350px>
                                        </p>
                                    </div>
                                    @endif
                                    <div class="form-group">
                                       <label for="formGroupExampleInput">Banner:</label>
                                       <input type="file" name="banner" class="form-control" id="formGroupExampleInput">
                                    </div>
                                    
                                    @if($value->image)
                                    <div id="prev-img">
                                        <button type="button" class="btn btn-danger" data-url="{{route('category-image-delete', $value->id)}}" id="image-delete">X</button>
                                        <p class="mt-4">
                                            <img src="{{asset('images/categories/'. $value->image)}}" width=350px>
                                        </p>
                                    </div>
                                    @endif
                                    <div class="form-group">
                                       <label for="formGroupExampleInput">Thumbnail:</label>
                                       <input type="file" name="image" class="form-control" id="formGroupExampleInput">
                                    </div>

                                    <div class="form-group special-link">
                                        <label for="name" class="control-label">Show in Home:</label>
                                        <select class="form-control" name="is_special" id="isSpecial">
                                        <option
                                            @if($value->is_special==0) selected
                                            @endif  value="0">No
                                        </option>
                                        <option
                                            @if($value->is_special==1) selected
                                            @endif value="1">Yes
                                        </option>
                                    </select>
                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                  Choose if this is in home page </span>
                                    </div>

                                    
                                    <div class="form-group special-link">
                                        <label for="name" class="control-label">Show in Menu:</label>
                                        <select class="form-control" name="is_menu" id="isSpecial">
                                        <option
                                            @if($value->is_menu==0) selected
                                            @endif  value="0">No
                                        </option>
                                        <option
                                            @if($value->is_menu==1) selected
                                            @endif value="1">Yes
                                        </option>
                                    </select>
                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                  Choose if this is in navigation menu </span>
                                    </div>

                                    <div class="form-group special-link">
                                        <label for="name" class="control-label">Is Featured:</label>
                                        <select class="form-control" name="is_featured" id="is_featured">
                                        <option
                                            @if($value->is_featured==0) selected
                                            @endif  value="0">No
                                        </option>
                                        <option
                                            @if($value->is_featured==1) selected
                                            @endif value="1">Yes
                                        </option>
                                    </select>
                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                  Choose if this is features category </span>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea name="description"  id="desc" rows="3" class="form-control tiny-mce">{{$value->description}}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>SEO Keyword</label>
                                        <input type="text" value="{{$value->seo_keyword}}" name="seo_keyword" id="seo_keyword" class="form-control">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>SEO Description</label>
                                        <textarea name="seo_description"  id="desc" rows="3" class="form-control">{{$value->seo_description}}</textarea>
                                    </div>

                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <input class="btn btn-danger btn-xs pull-right" type="submit" value="Save">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /.box -->
        </form>


@stop

@push('scripts')

<script>
    $("#image-delete").click(function (e){
        e.preventDefault();
        let dataUrl = $(this).attr("data-url");
        
         $.ajax({
                type: 'GET',
                url: dataUrl,
                success: function (data) {
                    // console.log(data);
                    if (!data.errors) {
                        toastr.success(data.message);
                        $("#prev-img").remove();
                    }
                    jQuery.each(data.errors, function (key, value) {
                        toastr.error(value);
                        // hideLoading();
                    })
                },
                error: function (a) {//if an error occurs
                    // hideLoading();
                    alert("An error occured while uploading data.\n error code : " + a.statusText);
                }
            });
    });
</script>

<script>
    $("#banner-delete").click(function (e){
        e.preventDefault();
        let dataUrl = $(this).attr("data-url");
        
         $.ajax({
                type: 'GET',
                url: dataUrl,
                success: function (data) {
                    // console.log(data);
                    if (!data.errors) {
                        toastr.success(data.message);
                        $("#prev-banner").remove();
                    }
                    jQuery.each(data.errors, function (key, value) {
                        toastr.error(value);
                        // hideLoading();
                    })
                },
                error: function (a) {//if an error occurs
                    // hideLoading();
                    alert("An error occured while uploading data.\n error code : " + a.statusText);
                }
            });
    });
</script>

@endpush