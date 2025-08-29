@extends('backend.layouts.master')
@section('breadcrum')
    @include('backend.layouts.breadcrum', ['title' => 'Add Post','backLabel'=>'List','backLink'=>route('admin.post.index',$posttype->uri)])
@endsection
@section('content')
    <div class="container">
        <form method="post" class="form-group" action="{{ route('admin.post.store',Request::segment(3) )}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <!-- Left Column -->
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <input type="hidden" name="post_type" value="{{ $posttype->id }}" />

                            {{-- Post Title --}}
                            <div class="form-group">
                                <label>Post Title</label>
                                <input type="text" id="post_title" name="post_title" class="form-control" value="{{ old('post_title') }}" />
                            </div>

                            {{-- URI --}}
                            <div class="form-group">
                                <label>URI</label>
                                <input type="text" id="uri" name="uri" class="form-control" value="{{ old('uri') }}" readonly/>
                            </div>

                            @if(Request::segment(3) !== 'FAQs')
                                {{-- Sub Title --}}
                                <div class="form-group">
                                    <label>Sub Title</label>
                                    <input type="text" name="sub_title" class="form-control" value="{{ old('sub_title') }}" />
                                </div>

                                {{-- Associated Title --}}
                                <div class="form-group">
                                    <label>Associated Title</label>
                                    <input type="text" name="associated_title" class="form-control" value="{{ old('associated_title') }}" />
                                </div>

                                {{-- Post Excerpt --}}
                                <div class="form-group">
                                    <label>Post Excerpt</label>
                                    <textarea name="post_excerpt" class="form-control" rows="3">{{ old('post_excerpt') }}</textarea>
                                </div>

                                {{-- PRICE --}}
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="number" id="price" name="price" class="form-control" value="{{ old('price') }}"/>
                                </div>
                            @endif

                            {{-- Post Content --}}
                            <div class="form-group">
                                <label>Content</label>
                                <textarea name="post_content" class="form-control tiny-mce" rows="5">{{ old('post_content') }}</textarea>
                            </div>

                            {{-- External Link --}}
                            <!-- <div class="form-group">
                                <label>External Link</label>
                                <input type="url" name="external_link" class="form-control" value="{{ old('external_link') }}" />
                            </div> -->

                        </div>
                        
                    </div>
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Meta Data</h3>
                                </div>
                            </div>
                            <hr />
                            <div class="box">
                                <div class="form-group">
                                    <label>Meta Title</label>
                                    <input type="text" name="meta_keyword" id="meta_keyword" class="form-control" value="{{ old('meta_keyword') }}">
                                </div>
                                <div class="form-group">
                                    <label>Meta Description</label>
                                    <textarea name="meta_description" id="desc" rows="3" class="form-control">{{ old('meta_description') }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-md-4">
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body" style="padding:.5rem;">
                            <button class="btn btn-primary btn-xs pull-right">Save</button>
                        </div>
                    </div>
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="form-group m-0">
                                    <label for="status" class="control-label m-0">Status:</label>
                                    <input type="hidden" name="status" value="0">
                                    <input type="checkbox" id="status" name="status" value="1"
                                        {{ old('status', 1) ? 'checked' : '' }}>
                                </div>

                                <div class="form-group m-0">
                                    <label for="is_header" class="control-label m-0">Is Header?</label>
                                    <input type="hidden" name="is_header" value="0">
                                    <input type="checkbox" id="is_header" name="is_header" value="1"
                                        {{ old('is_header', 0) ? 'checked' : '' }}>
                                </div>

                                <div class="form-group m-0">
                                    <label for="is_footer" class="control-label m-0">Is Footer?</label>
                                    <input type="hidden" name="is_footer" value="0">
                                    <input type="checkbox" id="is_footer" name="is_footer" value="1"
                                        {{ old('is_footer', 0) ? 'checked' : '' }}>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body" style="padding:.5rem;">
                            <div class="form-group">
                                <label for="post_order">Ordering</label>
                                <input type="number" name="post_order" class="form-control" value="{{ $ordering }}">
                            </div>
                            <div class="form-group">
                                <label for="template">Template</label>
                                <select name="template" class="form-control">
                                    @if($templates)                  
                                        @foreach($templates as $key => $template)
                                            <option value="{{ $key }}" {{ old('template') == $key ? 'selected' : '' }}> 
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
                            <div class="form-group">
                                <label for="thumbnail">Thumbnail</label>
                                <input type="file" name="thumbnail" id="thumbnail" class="form-control" style="height:auto; padding:0;">
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
