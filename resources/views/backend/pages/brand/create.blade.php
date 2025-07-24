@extends('backend.layouts.master')
@section('content')
    <div class="container">
        <form method="post" class="form-group" action="{{ route('add-brand') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <!-- general form elements -->
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Add Brand</h3>
                                </div>
                                <hr>
                                <!-- form start -->
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="brand_name" class="control-label">Brand Name</label>
                                        <input class="form-control" placeholder="Enter brand name" name="brand_name"
                                            type="text" id="brand_name">
                                    </div>
                                    <div class="form-group">
                                        <label for="status" class="control-label">Status</label>
                                        <select name="status" class="form-control" id="status">
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="image" class="control-label">Logo</label>
                                        <input type="file" name="image" class="form-control" id="image">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-plus-circle"></i> Save
                                    </button>
                                </div>
                                <!-- /.box-body -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-footer">
                        <a href="{{ route('brand-index') }}" class="btn btn-primary">List</a>
                    </div>

                </div>
            </div>
        </form>
    </div>
@endsection
