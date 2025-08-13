@extends('backend.layouts.master')
@section('breadcrum')
    @include('backend.layouts.breadcrum', ['title' => 'Site Settings'])
@endsection
@section('content')
    <div class="container">
        <form class="form-group" action="{{route('setting.update',$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body">
                            <!-- general form elements -->
                            <div class="box">
                                <div class="box-header with-border">
                                    <ul class="nav" role="tablist">
                                        <li class="nav-item custom-nav-item">
                                            <a class="custom-nav-btn active" data-toggle="tab" href="#general" role="tab">Site Setting</a>
                                        </li>
                                        <li class="nav-item custom-nav-item">
                                            <a class="custom-nav-btn" data-toggle="tab" href="#social" role="tab">Social Media Info</a>
                                        </li>
                                    </ul>

                                </div>
                                <hr style="margin-top:0">
                                <!-- form start -->
                                <div class="box-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="general" role="tabpanel">
                                            <div class="form-group">
                                                <label for="title" class="control-label">Title</label>
                                                <input id="title" class="form-control" placeholder="Site name" name="title" type="text" value="{{ $data->title }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="phone1" class="control-label">Phone1</label>
                                                <input type="number" name="phone1" id="phone1" class="form-control" placeholder="Phone number" value="{{ $data->phone1 }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="phone2" class="control-label">Phone2</label>
                                                <input type="number" name="phone2" id="phone2" class="form-control" placeholder="Phone number" value="{{ $data->phone2 }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="emailPrimary" class="control-label">Email Primary</label>
                                                <input type="email" name="email_primary" id="emailPrimary" class="form-control" placeholder="Primary email" value="{{ $data->email_primary }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="emailSecondary" class="control-label">Email Secondary</label>
                                                <input type="email" name="email_secondary" id="emailSecondary" class="form-control" placeholder="Secondary email" value="{{ $data->email_secondary }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="address" class="control-label">Address</label>
                                                <input type="text" name="address" id="addresss" class="form-control" placeholder="Address" value="{{ $data->address }}">
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="social" role="tabpanel">
                                            <div class="form-group">
                                                <label for="twitterLink" class="control-label">Twitter Link</label>
                                                <input class="form-control" id="twitterLink" placeholder="Twitter link" name="twitter_link" type="url" value="{{ $data->twitter_link }}">
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <label for="instagramLink" class="control-label">Instagram Link</label>
                                                <input class="form-control" id="instagramLink" placeholder="Intagram link" name="instagram_link" type="url" value="{{ $data->instagram_link }}">
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <label for="facebookLink" class="control-label">Facebook Link</label>
                                                <input class="form-control" id="facebookLink" placeholder="Facebook link" name="twitter_link" type="url" value="{{ $data->twitter_link }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
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
                                    <input type="text" name="meta_title" id="meta_title" class="form-control" value="{{ $data->meta_title }}">
                                </div>
                                <div class="form-group">
                                    <label>Meta Description</label>
                                    <textarea name="meta_description" id="desc" rows="3" class="form-control">{{ $data->meta_description }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body" style="padding:.5rem;">
                            <button class="btn btn-primary btn-xs pull-right">
                                Update
                            </button>
                        </div>
                    </div>
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body" style="padding:. 5rem;">
                            <div class="form-group">
                                <label for="logoWhite">Logo:</label>
                                <input type="file" name="logo_white" class="form-control" id="logoWhite" style="height:auto; padding:0;">
                            </div>
                            @if($data->logo_white)
                                <div id="logoWhitePrev" style="position:relative;border:1px dashed #00000073;">
                                    <img src="{{asset('theme-assets/img/logo/'. $data->logo_white)}}" style="height: 150px; width:auto;">
                                    <button type="button" class="btn btn-danger logoDelete" data-url="{{route('logo.delete',  ['field' => 'logo_white'])}}" data-field-id="logoWhitePrev" style="border-radius:50%; position:absolute; right:5px; top:5px;    padding: 2px 9px;">X</button>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body" style="padding:. 5rem;">
                            <div class="form-group">
                                <label for="welcomeText">Welcome Text</label>
                                <textarea name="welcome_text" id="welcomeText" rows="2" class="form-control tiny-mce-1">{{ $data->welcome_text }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body" style="padding:. 5rem;">
                            <div class="form-group">
                                <label for="copyright">Copyright Text</label>
                                <textarea name="copyright_text" id="copyright" rows="2" class="form-control tiny-mce">{{ $data->copyright_text }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <style>
        .custom-nav-item:not(:first-child) {
            padding-left: 5px!important;
            border-left: 1px solid #00000073;
        }
        .custom-nav-item {
            padding: 5px 0px 5px 0px;
        }
        .custom-nav-btn {
            font-size: 1.2rem;
            font-weight: 700;
            margin-right: 5px;
        }
        .custom-nav-btn:hover{
            text-decoration: none;
        }
        .custom-nav-btn.active {
            /* border-bottom: 1px solid #0000001a; */
            color: #212529 !important;
        }
    </style>

    <script>
        $(".logoDelete").click(function (e){
            e.preventDefault();
            let dataUrl = $(this).attr("data-url");
            let divId = $(this).attr("data-field-id");
            $.ajax({
                type: 'GET',
                url: dataUrl,
                success: function (data) {
                    ajax_response(data);
                    if(data.success == true){
                        $("#"+divId).remove();
                    }
                }
            });
        });
    </script>
@endsection
@section('custom-scripts')
    <script>
        tinymce.remove('.tiny-mce'); // remove global init
        tinymce.init({
            selector: '.tiny-mce-1',
            height: 200,
        });
        tinymce.init({
            selector: '.tiny-mce',
            height: 200,
            menubar: false,
            toolbar: 'code',
            plugins: 'code'
        });
    </script>
@endsection
