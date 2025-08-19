@extends('backend.layouts.master')
@section('breadcrum')
    @include('backend.layouts.breadcrum', ['title' => 'Category Create','backLabel'=>'List','backLink'=>route('category.index')])
@endsection
@section('content')
    <div class="container">
        <form method="post" class="form-group" action="{{route('category.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body">
                            <!-- general form elements -->
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Add Category</h3>
                                </div>
                                <hr>
                                <!-- form start -->
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Category</label>
                                        <input class="form-control" placeholder="Name" name="name" type="text" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="caption" class="control-label">Caption</label>
                                        <input class="form-control" placeholder="Caption" name="caption" type="text">
                                    </div>
                                    @if($category)
                                        <div class="form-group">
                                            <label for="name" class="control-label">Parent Category</label>
                                            <select name="parent_id" id="parent" class="form-control select2">
                                                <option value="0">Select Parent Category</option>
                                                @foreach($category as $value)
                                                    @include('backend.pages.category.category_dropdown',['category'=>$value, 'depth' => 0])
                                                @endforeach
                                            </select>
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea name="description" id="desc-norm" rows="3" class="form-control tiny-mce"></textarea>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body" style="padding:.5rem;">
                            <button class="btn btn-danger btn-xs pull-right">
                                Save
                            </button>
                        </div>
                    </div>
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body" style="padding:. 5rem;">
                            <div class="d-flex justify-content-between">
                                <div class="form-group m-0">
                                    <label for="status" class="control-label m-0">Status:</label>
                                    <input type="checkbox" id="status" name="status" checked />
                                </div>
                                <div class="form-group m-0">
                                    <label for="in_home" class="control-label m-0">In Home ?</label>
                                    <input type="checkbox" id="in_home" name="in_home" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body" style="padding:. 5rem;">
                            <div class="d-flex justify-content-between">
                                <div class="form-group m-0">
                                    <label for="is_header" class="control-label m-0">Is Header:</label>
                                    <input type="checkbox" id="is_header" name="is_header" />
                                </div>
                                <div class="form-group m-0">
                                    <label for="is_footer" class="control-label m-0">Is Footer ?</label>
                                    <input type="checkbox" id="is_footer" name="is_footer" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body" style="padding:. 5rem;">
                            <div class="d-flex justify-content-between">
                                <div class="form-group m-0">
                                    <label for="in_slider" class="control-label m-0">In Slider:</label>
                                    <input type="checkbox" id="in_slider" name="in_slider" />
                                </div>
                                <div class="form-group m-0">
                                    <label for="in_moving_text" class="control-label m-0">In Moving Text ?</label>
                                    <input type="checkbox" id="in_moving_text" name="in_moving_text" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body" style="padding:. 5rem;">
                            <div class="form-group">
                                <label for="banner">Banner:</label>
                                <input type="file" name="banner" class="form-control" id="banner" style="height:auto; padding:0;">
                                <small style="color:red"><i><b>**Banner is used for slider**</b></i></small>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body" style="padding:. 5rem;">
                            <div class="form-group">
                                <label for="thumbnail">Thumbnail:</label>
                                <input type="file" name="image" class="form-control" id="thumbnail" style="height:auto; padding:0;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="card" style="box-shadow:none; border:none;">
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
        </form>
@stop
