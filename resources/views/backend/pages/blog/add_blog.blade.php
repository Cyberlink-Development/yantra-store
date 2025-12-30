@extends('backend.layouts.master')
@section('content')
    <div class="container">
        <form method="post" class="form-group" action="{{route('add-blog')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- general form elements -->
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Add Blog</h3>
                                </div>
                                <hr>
                                <!-- form start -->
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="title" class="control-label">Title</label>
                                        <input class="form-control" placeholder="Title" name="title" type="text">

                                    </div>

                                    <div class="form-group" id="contentdiv">
                                        <label for="name" class="control-label">Content:</label>
                                        <textarea id="content"
                                          name="content"
                                          class="form-control tiny-mce"
                                          rows="20"></textarea>

                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Image:</label>
                                        <input type="file" name="image" class="form-control" id="formGroupExampleInput">
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
