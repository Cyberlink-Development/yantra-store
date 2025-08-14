@extends('backend.layouts.master')
@section('content')
<div class="container">
    <form method="post" class="form-group" action="{{ route('admin.post.update', [$posttype->uri, $post->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <!-- general form elements -->
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Edit Post</h3>
                            </div>
                            <hr>

                            <div class="box-body">
                                <input type="hidden" name="post_type" value="{{ $posttype->id }}" />

                                {{-- Post Title --}}
                                <div class="form-group">
                                    <label>Post Title</label>
                                    <input type="text" id="post_title" name="post_title" class="form-control" 
                                        value="{{ old('post_title', $post->post_title) }}" />
                                </div>

                                {{-- Sub Title --}}
                                <div class="form-group">
                                    <label>Sub Title</label>
                                    <input type="text" name="sub_title" class="form-control" 
                                        value="{{ old('sub_title', $post->sub_title) }}" />
                                </div>

                                {{-- URI --}}
                                <div class="form-group">
                                    <label>URI</label>
                                    <input type="text" name="uri" class="form-control" 
                                        value="{{ old('uri', $post->uri) }}" readonly />
                                </div>

                                {{-- Post Order --}}
                                <div class="form-group">
                                    <label>Post Order</label>
                                    <input type="number" name="post_order" class="form-control" 
                                        value="{{ old('post_order', $post->post_order) }}" />
                                </div>

                                {{-- Banner --}}
                                <div class="form-group">
                                    <label>Banner</label>
                                    @if($post->banner)
                                        <div class="mb-2" id="post-banner">
                                            <div style="position: relative; display: inline-block;">
                                                <img src="{{ asset('uploads/banners/'.$post->banner) }}" alt="banner" height="80">

                                                <button type="button" class="btn btn-sm btn-danger" id="delete-banner" style="position: absolute; top: -10px; right: -10px; border-radius: 50%;">
                                                    &times;
                                                </button>
                                            </div>
                                        </div>
                                    @endif
                                    <input type="file" name="banner" class="form-control-file" />
                                </div>

                                {{-- Thumbnail --}}
                                <div class="form-group">
                                    <label>Thumbnail</label>
                                    @if($post->thumbnail)
                                        <div class="mb-2" id="post-thumbnail" >
                                            <div style="position: relative; display: inline-block;">
                                                <img src="{{ asset('uploads/thumbnails/'.$post->thumbnail) }}" alt="Thumbnail" height="80">

                                                <button type="button" class="btn btn-sm btn-danger" id="delete-thumbnail" style="position: absolute; top: -10px; right: -10px; border-radius: 50%;">
                                                    &times;
                                                </button>
                                            </div>
                                        </div>
                                    @endif
                                    <input type="file" name="thumbnail" class="form-control-file" />
                                </div>

                                {{-- Post Content --}}
                                <div class="form-group">
                                    <label>Content</label>
                                    <textarea name="post_content" class="form-control" rows="5">{{ old('post_content', $post->post_content) }}</textarea>
                                </div>

                                {{-- Post Excerpt --}}
                                <div class="form-group">
                                    <label>Post Excerpt</label>
                                    <textarea name="post_excerpt" class="form-control" rows="3">{{ old('post_excerpt', $post->post_excerpt) }}</textarea>
                                </div>

                                {{-- Meta Keyword --}}
                                <div class="form-group">
                                    <label>Meta Keyword</label>
                                    <input type="text" name="meta_keyword" class="form-control" 
                                        value="{{ old('meta_keyword', $post->meta_keyword) }}" />
                                </div>

                                {{-- Meta Description --}}
                                <div class="form-group">
                                    <label>Meta Description</label>
                                    <textarea name="meta_description" class="form-control" rows="3">{{ old('meta_description', $post->meta_description) }}</textarea>
                                </div>

                                {{-- Associated Title --}}
                                <div class="form-group">
                                    <label>Associated Title</label>
                                    <input type="text" name="associated_title" class="form-control" 
                                        value="{{ old('associated_title', $post->associated_title) }}" />
                                </div>

                                {{-- External Link --}}
                                <div class="form-group">
                                    <label>External Link</label>
                                    <input type="url" name="external_link" class="form-control" 
                                        value="{{ old('external_link', $post->external_link) }}" />
                                </div>
                                
                                {{-- Template --}}
                                <div class="form-group">
                                    <label>Template</label>
                                    <select name="template" class="form-control">
                                        @if($templates)                  
                                            @foreach($templates as $key=>$template)
                                                <option value="{{$key}}" {{ ($template == $post->template)?'selected':'' }}> {{ ucfirst($template)}}</option>
                                            @endforeach  
                                        @endif 
                                    </select>
                                </div>

                                {{-- Status --}}
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option value="1" {{ old('status', $post->status) == 1 ? 'selected' : '' }}>On</option>
                                        <option value="0" {{ old('status', $post->status) == 0 ? 'selected' : '' }}>Off</option>
                                    </select>
                                </div>

                                {{-- Show in Header --}}
                                <div class="form-group">
                                    <label>Show in Header</label>
                                    <select name="is_header" class="form-control">
                                        <option value="1" {{ old('is_header', $post->is_header) == 1 ? 'selected' : '' }}>Yes</option>
                                        <option value="0" {{ old('is_header', $post->is_header) == 0 ? 'selected' : '' }}>No</option>
                                    </select>
                                </div>

                                {{-- Show in Footer --}}
                                <div class="form-group">
                                    <label>Show in Footer</label>
                                    <select name="is_footer" class="form-control">
                                        <option value="1" {{ old('is_footer', $post->is_footer) == 1 ? 'selected' : '' }}>Yes</option>
                                        <option value="0" {{ old('is_footer', $post->is_footer) == 0 ? 'selected' : '' }}>No</option>
                                    </select>
                                </div>
                            </div>

                            <div class="box-footer">
                                <input class="btn btn-primary btn-xs pull-right" type="submit" value="Update">
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
    $('#delete-thumbnail').click(function() {
        if(!confirm('Are you sure you want to delete this thumbnail?')) return;
        
        $.ajax({
            url: '{{ route("admin.post.deleteThumbnail", $post->id) }}',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                _method: 'DELETE'
            },
            success: function(response) {
                if(response.success){
                    $('#post-thumbnail').remove();
                    $('#delete-thumbnail').remove();
                    toastr.success(response.message || 'Thumbnail deleted successfully.');
                } else {
                    toastr.error(response.message || 'Failed to delete thumbnail.');
                }
            },
            error: function(xhr) {
                toastr.error('Something went wrong.');
            }
        });
    });

    $('#delete-banner').click(function() {
        if(!confirm('Are you sure you want to delete this banner?')) return;
        
        $.ajax({
            url: '{{ route("admin.post.deleteBanner", $post->id) }}',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                _method: 'DELETE'
            },
            success: function(response) {
                if(response.success){
                    $('#post-banner').remove();
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