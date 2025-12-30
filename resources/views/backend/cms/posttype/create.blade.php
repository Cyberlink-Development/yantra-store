@extends('backend.layouts.master')
@section('breadcrum')
    @include('backend.layouts.breadcrum', ['title' => 'Create Posttype','backLabel'=>'List','backLink'=>route('type.posttype.index')])
@endsection
@section('content')
<div class="container">
    <form method="post" class="form-group" action="{{ route('type.posttype.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <!-- LEFT SIDE -->
            <div class="col-md-8">
                <div class="card" style="box-shadow:none; border:none;">
                    <div class="card-body">
                        <div class="box">

                            <div class="box-body">
                                <div class="form-group">
                                    <label>Post Type Name</label>
                                    <input type="text" id="post_type" name="post_type" class="form-control" value="{{ old('post_type') }}">
                                </div>

                                <div class="form-group">
                                    <label>URI</label>
                                    <input type="text" id="uri" name="uri" class="form-control" value="{{ old('uri') }}" readonly>
                                </div>

                                <div class="form-group">
                                    <label>Caption</label>
                                    <input type="text" name="caption" class="form-control" value="{{ old('caption') }}">
                                </div>

                                <div class="form-group">
                                    <label>Content</label>
                                    <textarea name="posttype_content" class="form-control tiny-mce" rows="5">{{ old('posttype_content') }}</textarea>
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
                            <label for="ordering">Ordering</label>
                            <input type="number" name="ordering" class="form-control" value="{{ $ordering }}">
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
    var post_type;
    $('#post_type').on('keyup', function(){
      post_type = $('#post_type').val();
      post_type=post_type.replace(/[^a-zA-Z0-9 ]+/g,"");
      post_type=post_type.replace(/\s+/g, "-");
      $('#uri').val(post_type);
    });
  });   
</script>
@endpush