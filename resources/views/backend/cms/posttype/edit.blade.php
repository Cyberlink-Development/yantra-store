@extends('backend.layouts.master')
@section('content')

<div class="container">
    <form method="post" class="form-group" action="{{ route('type.posttype.update', $postType->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Edit Post Type</h3>
                            </div>
                            <hr>

                            <div class="box-body">
                                <div class="form-group">
                                    <label>Post Type Name</label>
                                    <input type="text" id="post_type" name="post_type" class="form-control" 
                                           value="{{ old('post_type', $postType->post_type) }}" />
                                </div>

                                <div class="form-group">
                                    <label>URI</label>
                                    <input type="text" id="uri" name="uri" class="form-control" 
                                           value="{{ $postType->uri }}" readonly/>
                                </div>

                                <div class="form-group">
                                    <label>Caption</label>
                                    <input type="text" name="caption" class="form-control" 
                                           value="{{ old('caption', $postType->caption) }}" />
                                </div>

                                <div class="form-group">
                                    <label>Banner</label>
                                    @if($postType->banner)
                                        <div class="mb-2" id="posttype-banner">
                                            <div style="position: relative; display: inline-block;">
                                                <img src="{{ asset('uploads/banners/' . $postType->banner) }}" alt="Banner" height="80">

                                                <button type="button" class="btn btn-sm btn-danger" id="delete-banner" style="position: absolute; top: -10px; right: -10px; border-radius: 50%;">
                                                    &times;
                                                </button>
                                            </div>
                                        </div>
                                    @endif
                                    <input type="file" name="banner" class="form-control-file" />
                                </div>

                                <div class="form-group">
                                    <label>Content</label>
                                    <textarea name="posttype_content" class="form-control" rows="5">{{ old('posttype_content', $postType->posttype_content) }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>Ordering</label>
                                    <input type="number" name="ordering" class="form-control" 
                                           value="{{ old('ordering', $postType->ordering) }}" />
                                </div>
                                
                                <div class="form-group">
                                    <label>Template</label>
                                    <select name="template" class="form-control">
                                        <option value="1" {{ old('template', $postType->template) == 1 ? 'selected' : '' }}>On</option>
                                        <option value="0" {{ old('template', $postType->template) == 0 ? 'selected' : '' }}>Off</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option value="1" {{ old('status', $postType->status) == 1 ? 'selected' : '' }}>On</option>
                                        <option value="0" {{ old('status', $postType->status) == 0 ? 'selected' : '' }}>Off</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Show in Header</label>
                                    <select name="is_header" class="form-control">
                                        <option value="1" {{ old('is_header', $postType->is_header) == 1 ? 'selected' : '' }}>Yes</option>
                                        <option value="0" {{ old('is_header', $postType->is_header) == 0 ? 'selected' : '' }}>No</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Show in Footer</label>
                                    <select name="is_footer" class="form-control">
                                        <option value="1" {{ old('is_footer', $postType->is_footer) == 1 ? 'selected' : '' }}>Yes</option>
                                        <option value="0" {{ old('is_footer', $postType->is_footer) == 0 ? 'selected' : '' }}>No</option>
                                    </select>
                                </div>
                            </div>

                            <div class="box-footer">
                                <input class="btn btn-primary" type="submit" value="Update">
                                <a href="{{ route('type.posttype.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </div>
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