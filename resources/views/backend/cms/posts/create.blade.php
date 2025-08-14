@extends('backend.layouts.master')
@section('content')
<div class="container">
    <form method="post" class="form-group" action="{{ route('admin.post.store',Request::segment(3) )}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <!-- general form elements -->
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Add Post</h3>
                            </div>
                            <hr>

                            <div class="box-body">
                                <input type="hidden" name="post_type" class="form-control" value="{{$posttype->id }}" />
                                {{-- Post Title --}}
                                <div class="form-group">
                                    <label>Post Title</label>
                                    <input type="text" id="post_title" name="post_title" class="form-control" value="{{ old('post_title') }}" />
                                </div>

                                {{-- Sub Title --}}
                                <div class="form-group">
                                    <label>Sub Title</label>
                                    <input type="text" name="sub_title" class="form-control" value="{{ old('sub_title') }}" />
                                </div>

                                {{-- URI --}}
                                <div class="form-group">
                                    <label>URI</label>
                                    <input type="text" id="uri" name="uri" class="form-control" value="{{ old('uri') }}" readonly/>
                                </div>

                                {{-- Post Order --}}
                                <div class="form-group">
                                    <label>Post Order</label>
                                    <input type="number" name="post_order" class="form-control" value="{{ $ordering }}" />
                                </div>

                                {{-- Banner --}}
                                <div class="form-group">
                                    <label>Banner</label>
                                    <input type="file" name="banner" class="form-control-file" />
                                </div>

                                {{-- Thumbnail --}}
                                <div class="form-group">
                                    <label>Thumbnail</label>
                                    <input type="file" name="thumbnail" class="form-control-file" />
                                </div>

                                {{-- Post Content --}}
                                <div class="form-group">
                                    <label>Content</label>
                                    <textarea name="post_content" class="form-control" rows="5">{{ old('post_content') }}</textarea>
                                </div>

                                {{-- Post Excerpt --}}
                                <div class="form-group">
                                    <label>Post Excerpt</label>
                                    <textarea name="post_excerpt" class="form-control" rows="3">{{ old('post_excerpt') }}</textarea>
                                </div>

                                {{-- Meta Keyword --}}
                                <div class="form-group">
                                    <label>Meta Keyword</label>
                                    <input type="text" name="meta_keyword" class="form-control" value="{{ old('meta_keyword') }}" />
                                </div>

                                {{-- Meta Description --}}
                                <div class="form-group">
                                    <label>Meta Description</label>
                                    <textarea name="meta_description" class="form-control" rows="3">{{ old('meta_description') }}</textarea>
                                </div>

                                {{-- Associated Title --}}
                                <div class="form-group">
                                    <label>Associated Title</label>
                                    <input type="text" name="associated_title" class="form-control" value="{{ old('associated_title') }}" />
                                </div>

                                {{-- External Link --}}
                                <div class="form-group">
                                    <label>External Link</label>
                                    <input type="url" name="external_link" class="form-control" value="{{ old('external_link') }}" />
                                </div>
                                
                                {{-- Template --}}
                                <div class="form-group">
                                    <label>Template</label>
                                    <select name="template" class="form-control">
                                        @if($templates)                  
                                            @foreach($templates as $key=>$template)
                                                <option value="{{$key}}"> {{ ucfirst($template)}}</option>
                                            @endforeach  
                                        @endif 
                                    </select>
                                </div>

                                {{-- Status --}}
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option value="1" {{ old('status') == 1 ? 'selected' : '' }}>On</option>
                                        <option value="0" {{ old('status') == 0 ? 'selected' : '' }}>Off</option>
                                    </select>
                                </div>

                                {{-- Show in Header --}}
                                <div class="form-group">
                                    <label>Show in Header</label>
                                    <select name="is_header" class="form-control">
                                        <option value="1" {{ old('is_header') == 1 ? 'selected' : '' }}>Yes</option>
                                        <option value="0" {{ old('is_header') == 0 ? 'selected' : '' }}>No</option>
                                    </select>
                                </div>

                                {{-- Show in Footer --}}
                                <div class="form-group">
                                    <label>Show in Footer</label>
                                    <select name="is_footer" class="form-control">
                                        <option value="1" {{ old('is_footer') == 1 ? 'selected' : '' }}>Yes</option>
                                        <option value="0" {{ old('is_footer') == 0 ? 'selected' : '' }}>No</option>
                                    </select>
                                </div>
                            </div>

                            <div class="box-footer">
                                <input class="btn btn-danger btn-xs pull-right" type="submit" value="Save">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@stop

@push('scripts')
<script type="text/javascript">
  $(document).ready(function(){
    $('#post_title').on('keyup', function(){
      let post_title = $(this).val();
      post_title = post_title.replace(/[^a-zA-Z0-9 ]+/g,"");
      post_title = post_title.replace(/\s+/g, "-");
      $('#uri').val(post_title.toLowerCase());
    });
  });   
</script>
@endpush
