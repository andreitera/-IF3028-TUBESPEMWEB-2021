@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show mg-t-20" role="alert">
        {!! session('success') !!}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@elseif(session('danger'))
    <div class="alert alert-danger alert-dismissible fade show mg-t-20" role="alert">
        {!! session('danger') !!}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif