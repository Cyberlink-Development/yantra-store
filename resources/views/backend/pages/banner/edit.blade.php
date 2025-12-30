@extends('backend.layouts.master')
@section('breadcrum')
    @include('backend.layouts.breadcrum', ['title' => 'Banner Edit','backLabel'=>'List','backLink'=>route('banner.index')])
@endsection
@section('content')
    <div class="container">
        <form method="post" class="form-group" action="{{ route('banner.update', $data->id) }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <!-- general form elements -->
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Edit Banner</h3>
                                </div>
                                <hr>
                                <!-- form start -->
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Title</label>
                                        <input class="form-control" placeholder="Title" name="title" type="text" value="{{ $data->title }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="control-label">Caption</label>
                                        <input class="form-control" placeholder="Caption" name="caption" type="text" value="{{ $data->caption }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="control-label">Content</label>
                                        <textarea class="form-control" id="textArea2" name="content" rows="3">{{ $data->content }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="control-label">Link</label>
                                        <input class="form-control" placeholder="Link" name="link" type="text" value="{{ $data->link }}">
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
                            <button class="btn btn-primary btn-xs pull-right">
                                Update
                            </button>
                        </div>
                    </div>
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body" style="padding:. 5rem;">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Picture:</label>
                                <input type="file" name="picture" class="form-control" id="formGroupExampleInput" style="height:auto; padding:0;">
                            </div>
                            @if($data->picture)
                                <div id="prev-picture" style="position:relative;">
                                    <button type="button" class="btn btn-danger" onclick="imageDelete(event,{{$data->id}},'{{getModelPathFromData($data)}}','picture','uploads/banners/')" style="border-radius:50%; position:absolute; right:5px; top:5px; padding: 2px 9px;">X</button>
                                    <img src="{{asset('uploads/banners/'. $data->picture)}}" style="height: 150px; width:100%;">
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@stop
