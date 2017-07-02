@if (session()->has('flash_message'))
    <div class="alert alert-{{ session('flash_message_level') }} alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>{{ session('flash_message') }}
    </div>
@endif
