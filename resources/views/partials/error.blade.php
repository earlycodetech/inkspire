<div class="toast-container position-fixed error_container" style="right: 10px; top:10%;">
    @if ($errors->any())
        @foreach ($errors->all() as $key => $error)
            <div class="toast show  text-bg-danger" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header text-bg-danger">
                    <img src="{{ asset('logo.png') }}" width="20" class="rounded me-2" alt="...">
                    <strong class="me-auto">Error</strong>
                    <small class="  ">just now</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ $error }}
                </div>
            </div>
        @endforeach
    @endif

    @if ($error = Session::get('error'))
        <div class="toast show  text-bg-danger" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header text-bg-danger">
                <img src="{{ asset('logo.png') }}" width="20" class="rounded me-2" alt="...">
                <strong class="me-auto">Error</strong>
                <small class="  ">just now</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                {{ $error }}
            </div>
        </div>
    @endif
    @if ($success = Session::get('success'))
        <div class="toast show  text-bg-success" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header text-bg-success">
                <img src="{{ asset('logo.png') }}" width="20" class="rounded me-2" alt="...">
                <strong class="me-auto">Success</strong>
                <small class="  ">just now</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                {{ $success }}
            </div>
        </div>
    @endif
    @if ($warning = Session::get('warning'))
        <div class="toast show  text-bg-warning" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header text-bg-warning">
                <img src="{{ asset('logo.png') }}" width="20" class="rounded me-2" alt="...">
                <strong class="me-auto">Warning</strong>
                <small class="  ">just now</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                {{ $warning }}
            </div>
        </div>
    @endif
    @if ($resent = Session::get('resent'))
        <div class="toast show  text-bg-success" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header text-bg-success">
                <img src="{{ asset('logo.png') }}" width="20" class="rounded me-2" alt="...">
                <strong class="me-auto">Verification Mail Resent</strong>
                <small class="  ">just now</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                {{ __('A fresh verification link has been sent to your email address.') }}
            </div>
        </div>
    @endif
</div>
