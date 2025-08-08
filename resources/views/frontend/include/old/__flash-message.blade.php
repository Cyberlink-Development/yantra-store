@if ($message = Session::get('success'))
    <div class="uk-alert-success">
    <a class="uk-alert-close" uk-close></a>
        <strong>{{ $message }}</strong>
    </div>

@endif

@if ($message = Session::get('error'))
    <div class="uk-alert-danger">
    <a class="uk-alert-close" uk-close></a>
        <strong>{{ $message }}</strong>
    </div>
@endif





@if ($errors->any())
    <div class="uk-alert-danger">
    <a class="uk-alert-close" uk-close></a>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@push('scripts')
<script>
    $(document).ready(function (){
        $('.uk-alert').hide(3500);
    });
</script>
@endpush
