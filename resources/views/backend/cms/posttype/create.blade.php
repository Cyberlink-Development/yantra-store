@extends('backend.layouts.master')
@section('content')
<div class="container">
    <form method="post" class="form-group" action="{{ route('type.posttype.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <!-- general form elements -->
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Add Post Type</h3>
                            </div>
                            <hr>

                            <div class="box-body">
                                <div class="form-group">
                                    <label>Post Type Name</label>
                                    <input type="text" id="post_type" name="post_type" class="form-control" value="{{ old('post_type') }}" />
                                </div>

                                <div class="form-group">
                                    <label>URI</label>
                                    <input type="text" id="uri" name="uri" class="form-control" value="{{ old('uri') }}" readonly/>
                                </div>

                                <div class="form-group">
                                    <label>Caption</label>
                                    <input type="text" name="caption" class="form-control" value="{{ old('caption') }}" />
                                </div>

                                <div class="form-group">
                                    <label>Banner</label>
                                    <input type="file" name="banner" class="form-control-file" />
                                </div>

                                <div class="form-group">
                                    <label>Content</label>
                                    <textarea name="posttype_content" class="form-control" rows="5">{{ old('content') }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>Ordering</label>
                                    <input type="number" name="ordering" class="form-control" value="{{ $ordering }} " />
                                </div>
                                
                                <div class="form-group">
                                    <label>Template</label>
                                    <select name="template" class="form-control">
                                        <option value="1" {{ old('template') == 1 ? 'selected' : '' }}>On</option>
                                        <option value="0" {{ old('template') == 0 ? 'selected' : '' }}>Off</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option value="1" {{ old('status') == 1 ? 'selected' : '' }}>On</option>
                                        <option value="0" {{ old('status') == 1 ? 'selected' : '' }}>Off</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Show in Header</label>
                                    <select name="is_header" class="form-control">
                                        <option value="1" {{ old('is_header') == 1 ? 'selected' : '' }}>Yes</option>
                                        <option value="0" {{ old('is_header') == 0 ? 'selected' : '' }}>No</option>
                                    </select>
                                </div>

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