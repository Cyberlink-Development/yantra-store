@extends('backend.layouts.master')
@section('breadcrum')
    @include('backend.layouts.breadcrum', ['title' => 'Ads Edit','backLabel'=>'List','backLink'=>route('ads.index')])
@endsection
@section('content')
    <div class="container">
        <form method="post" class="form-group" action="{{route('ads.update',$data->id)}}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-md-8">
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body">
                            <!-- general form elements -->
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Add Edit</h3>
                                </div>
                                <hr>
                                <!-- form start -->
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="title" class="control-label">Title</label>
                                        <input type="text" name="title"  class="form-control" placeholder="Title" value="{{ $data->title }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="client_name" class="control-label">Client Name</label>
                                        <input type="text" name="client_name" class="form-control" placeholder="Client Name"  value="{{ $data->client_name }}" >
                                    </div>
                                    <div class="form-group">
                                        <label for="link" class="control-label">Link</label>
                                        <input type="url" name="link" class="form-control" placeholder="Ad Url" value="{{ $data->link }}">
                                    </div>
                                    <!-- <div class="d-flex justify-content-between">
                                        <div class="form-group">
                                            <label for="start_date" class="control-label">Start Date</label>
                                            <input name="start_date" type="date" class="form-control" placeholder="Ad Start Date" value={{ $data->start_date }}>
                                        </div>
                                        <div class="form-group">
                                            <label for="end_date" class="control-label">End Date</label>
                                            <input name="end_date" type="date" class="form-control" placeholder="Ad End Date" value={{ $data->end_date }}>
                                        </div>
                                    </div> -->
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea name="description" id="desc-norm" rows="3" class="form-control tiny-mce">{{ $data->description }}</textarea>
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
                                Update
                            </button>
                        </div>
                    </div>
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body" style="padding:. 5rem;">
                            <div class="d-flex justify-content-between">
                                <div class="form-group m-0">
                                    <label for="status" class="control-label m-0">Status:</label>
                                    <input type="checkbox" id="status" name="status" {{$data->status == 1 ? 'checked' : ''}} />
                                </div>
                                <div class="form-group m-0">
                                    <label for="newTab" class="control-label m-0">New Tab:</label>
                                    <input type="checkbox" id="newTab" name="open_in_new_tab" {{ $data->open_in_new_tab == 1 ? 'checked' : '' }}  />
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
                                        <option value="single" {{ $data->ad_layout == 'single' ? 'selected' : '' }}>Single</option>
                                        <option value="two_column" {{ $data->ad_layout == 'two_column' ? 'selected' : '' }}>Two Column</option>
                                        <option value="sidebar_stack" {{ $data->ad_layout == 'sidebar_stack' ? 'selected' : '' }}>Sidebar Stack</option>
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
                                        <option value="after_hot_deals" {{ $data->ad_position == 'after_hot_deals' ? 'selected' : '' }}>After Hot Deals</option>
                                        <option value="after_categories" {{ $data->ad_position == 'after_categories' ? 'selected' : '' }}>After Categories</option>
                                        <option value="gone_in_seconds_sidebar" {{ $data->ad_position == 'gone_in_seconds_sidebar' ? 'selected' : '' }}>Gone In Seconds Sidebar</option>
                                        <option value="after_brands" {{ $data->ad_position == 'after_brands' ? 'selected' : '' }}>After Brands</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body" style="padding:. 5rem;">
                            <div class="form-group m-0">
                                <!-- <label for="ordering" class="control-label m-0">Order:</label> -->
                                <input type="number" class="form-control" id="ordering" name="ordering" placeholder="Data order" value="{{ $data->ordering }}" />
                            </div>
                        </div>
                    </div>
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body" style="padding:. 5rem;">
                            <div class="form-group">
                                <label for="image">Image:</label>
                                <input type="file" name="image" class="form-control" id="image" style="height:auto; padding:0;">
                            </div>
                            @if($data->image)
                                <div id="prev-image" style="position:relative;">
                                    <button type="button" class="btn btn-danger" onclick="imageDelete(event,{{$data->id}},'{{getModelPathFromData($data)}}','image','uploads/ads/')" style="border-radius:50%; position:absolute; right:5px; top:5px; padding: 2px 9px;">X</button>
                                    <img src="{{asset('uploads/ads/'. $data->image)}}" style="height: 150px; width:100%;">
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@stop
