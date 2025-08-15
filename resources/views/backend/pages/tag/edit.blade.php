@extends('backend.layouts.master')
@section('breadcrum')
    @include('backend.layouts.breadcrum', ['title' => 'Category Edit','backLabel'=>'List','backLink'=>route('category.index')])
@endsection
@section('content')
    <div class="container">
        <form method="post" class="form-group" action="{{route('category.update',$data->id)}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <div class="card" style="box-shadow:none; border:none;">
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
                                        <input class="form-control" placeholder="Name" name="name" type="text" value="{{$data->name}}" required>
                                    </div>
                                    @if($category->count() > 0 )
                                        <div class="form-group">
                                            <label for="name" class="control-label">Parent Category</label>
                                            <!-- <select name="parent_id" id="parent"class="form-control select2">
                                                <option value="0">Select Parent Category
                                                </option>
                                                @foreach($category as $value)
                                                    <option
                                                        @if($data->parent_id==$value->id) selected
                                                        @endif value="{{$value->id}}">{{$value->name}}</option>
                                                            @include('backend.pages.category.category_dropdown',['category'=>$value, 'depth' => 0])

                                                @endforeach
                                            </select> -->

                                            <select name="parent_id" id="parent" class="form-control select2">
                                                <option value="0">Select Parent Category</option>
                                                @foreach($category as $value)
                                                    @include('backend.pages.category.category_dropdown',['category'=>$value, 'depth' => 0, 'dataId' => $data->id, 'parentId' => $data->parent_id])
                                                @endforeach
                                            </select>

                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea name="description"  id="desc" rows="3" class="form-control tiny-mce">{{$data->description}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body" style="padding:.5rem;">
                            <button class="btn btn-primary btn-xs pull-right">
                                Update
                            </button>
                        </div>
                    </div>
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body" style="padding:. 5rem;">
                            <div class="d-flex justify-content-between">
                                <div class="form-group m-0">
                                    <label for="status" class="control-label m-0">Status:</label>
                                    <input type="checkbox" id="status" name="status" {{$data->status == '1' ? 'checked' : ''}} />
                                </div>
                                <div class="form-group m-0">
                                    <label for="in_home" class="control-label m-0">In Home ?</label>
                                    <input type="checkbox" id="in_home" name="in_home" {{$data->in_home == '1' ? 'checked' : ''}} />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body" style="padding:. 5rem;">
                            <div class="d-flex justify-content-between">
                                <div class="form-group m-0">
                                    <label for="is_header" class="control-label m-0">Is Header:</label>
                                    <input type="checkbox" id="is_header" name="is_header" {{$data->is_header == '1' ? 'checked' : ''}} />
                                </div>
                                <div class="form-group m-0">
                                    <label for="is_footer" class="control-label m-0">Is Footer ?</label>
                                    <input type="checkbox" id="is_footer" name="is_footer" {{$data->is_footer == '1' ? 'checked' : ''}} />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body" style="padding:. 5rem;">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Banner:</label>
                                <input type="file" name="banner" class="form-control" id="formGroupExampleInput" style="height:auto; padding:0;">
                            </div>
                            @if($data->banner)
                                <div id="prev-banner" style="position:relative;">
                                    <button type="button" class="btn btn-danger" onclick="imageDelete(event,{{$data->id}},'{{getModelPathFromData($data)}}','banner','uploads/banners/')" style="border-radius:50%; position:absolute; right:5px; top:5px; padding: 2px 9px;">X</button>
                                    <img src="{{asset('uploads/banners/'. $data->banner)}}" style="height: 150px; width:100%;">
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body" style="padding:. 5rem;">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Thumbnail:</label>
                                <input type="file" name="image" class="form-control" id="formGroupExampleInput" style="height:auto; padding:0;">
                            </div>
                            @if($data->image)
                                <div id="prev-image" style="position:relative;">
                                    <img src="{{asset('images/categories/'. $data->image)}}" style="height: 150px; width:100%;">
                                    <button type="button" class="btn btn-danger" onclick="imageDelete(event,{{$data->id}},'{{getModelPathFromData($data)}}','image','images/categories/')" style="border-radius:50%; position:absolute; right:5px; top:5px; padding: 2px 9px;">X</button>
                                </div>
                            @endif
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
                                    <input type="text" name="meta_title" id="meta_title" class="form-control" value="{{$data->meta_title}}">
                                </div>
                                <div class="form-group">
                                    <label>Meta Description</label>
                                    <textarea name="meta_description" id="desc" rows="3" class="form-control">{{$data->meta_description}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@stop
