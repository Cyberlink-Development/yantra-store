@extends('backend.layouts.master')
@section('breadcrum')
    @include('backend.layouts.breadcrum', ['title' => 'Edit Posttype','backLabel'=>'List','backLink'=>route('type.posttype.index')])
@endsection
@section('content')

<div class="container">
    <form method="post" class="form-group" action="{{ route('type.posttype.update', $postType->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <!-- LEFT SIDE -->
            <div class="col-md-8">
                <div class="card" style="box-shadow:none; border:none;">
                    <div class="card-body">
                        <div class="box">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Post Type Name</label>
                                    <input type="text" id="post_type" name="post_type" class="form-control" 
                                           value="{{ old('post_type', $postType->post_type) }}">
                                </div>

                                <div class="form-group">
                                    <label>URI</label>
                                    <input type="text" id="uri" name="uri" class="form-control" 
                                           value="{{ old('uri', $postType->uri) }}" readonly>
                                </div>

                                <div class="form-group">
                                    <label>Caption</label>
                                    <input type="text" name="caption" class="form-control" 
                                           value="{{ old('caption', $postType->caption) }}">
                                </div>

                                <div class="form-group">
                                    <label>Content</label>
                                    <textarea name="posttype_content" class="form-control tiny-mce" rows="5">{{ old('posttype_content', $postType->posttype_content) }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT SIDE -->
            <div class="col-md-4">
                <div class="card" style="box-shadow:none; border:none;">
                    <div class="card-body" style="padding:.5rem;">
                        <button class="btn btn-primary btn-xs pull-right">Update</button>
                    </div>
                </div>

                <div class="card" style="box-shadow:none; border:none;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="form-group m-0">
                                <label for="status" class="control-label m-0">Status:</label>
                                <input type="checkbox" id="status" name="status" value="1" 
                                       {{ old('status', $postType->status) ? 'checked' : '' }}>
                            </div>
                            <div class="form-group m-0">
                                <label for="is_header" class="control-label m-0">Is Header?</label>
                                <input type="checkbox" id="is_header" name="is_header" value="1" 
                                       {{ old('is_header', $postType->is_header) ? 'checked' : '' }}>
                            </div>
                            <div class="form-group m-0">
                                <label for="is_footer" class="control-label m-0">Is Footer?</label>
                                <input type="checkbox" id="is_footer" name="is_footer" value="1" 
                                       {{ old('is_footer', $postType->is_footer) ? 'checked' : '' }}>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card" style="box-shadow:none; border:none;">
                    <div class="card-body" style="padding:.5rem;">
                        <div class="form-group">
                            <label for="ordering">Ordering</label>
                            <input type="number" name="ordering" class="form-control" 
                                   value="{{ old('ordering', $postType->ordering) }}">
                        </div>
                        <div class="form-group">
                            <label for="template">Template</label>
                            <select name="template" class="form-control">
                                @if($templates)                  
                                    @foreach($templates as $key => $template)
                                        <option value="{{ $key }}" 
                                            {{ old('template', $postType->template) == $key ? 'selected' : '' }}> 
                                            {{ ucfirst($template) }}
                                        </option>
                                    @endforeach  
                                @endif 
                            </select>
                        </div>
                    </div>
                </div>

                <div class="card" style="box-shadow:none; border:none;">
                    <div class="card-body" style="padding:.5rem;">
                        <div class="form-group">
                            <label for="banner">Banner</label>
                            <input type="file" name="banner" id="banner" class="form-control" style="height:auto; padding:0;">
                        </div>

                        @if(!empty($postType->banner))
                            <div id="posttype-banner" style="position:relative; border:1px dashed #00000073;">
                                <img src="{{ asset('uploads/banners/' . $postType->banner) }}" style="height:150px; width:auto;">
                                <button type="button" class="btn btn-sm btn-danger" id="delete-banner" style="position: absolute; top: -10px; right: -10px; border-radius: 50%;">&times;
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
$(document).ready(function() {
    $('#delete-banner').click(function() {
        if(!confirm('Are you sure you want to delete this banner?')) return;
        
        $.ajax({
            url: '{{ route("type.posttype.deleteBanner", $postType->id) }}',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                _method: 'DELETE'
            },
            success: function(response) {
                if(response.success){
                    $('#posttype-banner').remove();
                    $('#delete-banner').remove();
                    toastr.success(response.message || 'Banner deleted successfully.');
                } else {
                    toastr.error(response.message || 'Failed to delete banner.');
                }
            },
            error: function(xhr) {
                toastr.error('Something went wrong.');
            }
        });
    });
});
</script>
@stop