@extends('backend.layouts.master')
@section('breadcrum')
    @include('backend.layouts.breadcrum', ['title' => 'Ad Create','backLabel'=>'List','backLink'=>route('ads.index')])
@endsection
@section('content')
    <div class="container">
        <form method="post" class="form-group" action="{{route('ads.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body">
                            <!-- general form elements -->
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Add Ad</h3>
                                </div>
                                <hr>
                                <!-- form start -->
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="title" class="control-label">Title</label>
                                        <input class="form-control" placeholder="Title" name="title" type="text" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="client_name" class="control-label">Client Name</label>
                                        <input class="form-control" placeholder="Client Name" name="client_name" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="link" class="control-label">Link</label>
                                        <input class="form-control" placeholder="Ad Url" name="link" type="url">
                                    </div>
                                    <!-- <div class="d-flex justify-content-between">
                                        <div class="form-group">
                                            <label for="start_date" class="control-label">Start Date</label>
                                            <input class="form-control" placeholder="Ad Start Date" name="start_date" type="date">
                                        </div>
                                        <div class="form-group">
                                            <label for="end_date" class="control-label">End Date</label>
                                            <input class="form-control" placeholder="Ad End Date" name="end_date" type="date">
                                        </div>
                                    </div> -->
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
                                    <label for="newTab" class="control-label m-0">New Tab:</label>
                                    <input type="checkbox" id="newTab" name="open_in_new_tab" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body" style="padding:. 5rem;">
                            <div class="d-flex justify-content-between">
                                <div class="form-group">
                                    <label for="ad_layout" class="control-label">Ad Layout</label>
                                    <br>
                                    <select class="form-control" name="ad_layout" required>
                                        <option value="">Choose Ad Position</option>
                                        <option value="single" selected>Single</option>
                                        <option value="two_column">Two Column</option>
                                        <option value="sidebar_stack">Sidebar Stack</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body" style="padding:. 5rem;">
                            <div class="d-flex justify-content-between">
                                <div class="form-group">
                                    <label for="ad_position" class="control-label">Ad Position</label>
                                    <br>
                                    <select class="form-control" name="ad_position" required>
                                        <option value="">Choose Ad Position</option>
                                        <option value="after_hot_deals">After Hot Deals</option>
                                        <option value="after_categories">After Categories</option>
                                        <option value="gone_in_seconds_sidebar">Gone In Seconds Sidebar</option>
                                        <option value="after_brands">After Brands</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body" style="padding:. 5rem;">
                            <div class="form-group m-0">
                                <!-- <label for="ordering" class="control-label m-0">Order:</label> -->
                                <input type="number" class="form-control" id="ordering" name="ordering" placeholder="Data order" value="{{ $maxOrder }}" />
                            </div>
                        </div>
                    </div>
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body" style="padding:. 5rem;">
                            <div class="form-group">
                                <label for="image">Image:</label>
                                <input type="file" name="image" class="form-control" id="image" style="height:auto; padding:0;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@stop
