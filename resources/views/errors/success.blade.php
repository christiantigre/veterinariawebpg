@if (session()->has('success'))
    <div class="alert alert-success text-center animated fadeIn">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>
            {!! session()->get('success') !!}
        </strong>
    </div>
@endif

@if (session()->has('warning'))
    <div class="alert alert-warning text-center animated fadeIn">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>
            {!! session()->get('warning') !!}
        </strong>
    </div>
@endif