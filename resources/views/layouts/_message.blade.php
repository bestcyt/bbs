@inject('session','\Illuminate\Support\Facades\Session')
@if ($session::has('message'))
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{ $session::get('message') }}
    </div>
@endif

@if ($session::has('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{ $session::get('success') }}
    </div>
@endif

@if ($session::has('danger'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{ $session::get('danger') }}
    </div>
@endif