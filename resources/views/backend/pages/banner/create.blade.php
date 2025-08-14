@extends('backend.layouts.master')
@section('breadcrum')
    @include('backend.layouts.breadcrum', ['title' => 'Banner Create','backLabel'=>'List','backLink'=>route('banner.index')])
@endsection
@section('content')
    <div class="container">
        <form method="post" class="form-group" action="{{ route('banner.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <!-- general form elements -->
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Add Banner</h3>
                                </div>
									<hr>
                                <!-- form start -->
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Title</label>
                                        <input class="form-control" placeholder="Title" name="title" type="text">
                                    </div>
                                    <!-- <div class="form-group">
                                        <label for="name" class="control-label">Caption</label>
                                        <input class="form-control" placeholder="Caption" name="caption" type="text">
                                    </div> -->
                                    <!-- <div class="form-group">
                                        <label for="name" class="control-label">Content</label>
                                         <textarea class="form-control" id="textArea2" name="content" rows="3"></textarea>
                                    </div> -->
                                    <div class="form-group">
                                        <label for="name" class="control-label">Link</label>
                                        <input class="form-control" placeholder="Link" name="link" type="text">
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
                                Save
                            </button>
                        </div>
                    </div>
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body" style="padding:. 5rem;">
                            <div class="form-group">
                                <label for="picture">Picture:</label>
                                <input type="file" name="picture" class="form-control" id="picture" style="height:auto; padding:0;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
