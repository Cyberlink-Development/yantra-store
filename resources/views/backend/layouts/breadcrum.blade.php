<div class="content-header" style="background:white;margin-bottom:20px; box-shadow: 1px 4px 5px 0px rgba(230,195,195,0.44);">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center">
            @if(!empty($title))
                <div>
                    <h3 class="m-0 text-dark">{{ $title }}</h3>
                </div>
            @endif
            @if(!empty($actionLabel) || !empty($backLabel))
                <div class="ml-auto">
                     @if(!empty($backLabel))
                        <a href="{{ !empty($backLink) ? $backLink : '#' }}" class="btn btn-secondary btn-sm me-2">
                            {{ $backLabel }}
                        </a>
                    @endif
                    @if(!empty($actionLabel))
                        <a href="{{ !empty($actionLink) ? $actionLink : '#' }}" class="btn btn-primary btn-sm">
                            {{ $actionLabel }}
                        </a>
                    @endif
                </div>
            @endif
        </div>
    </div>
</div>
