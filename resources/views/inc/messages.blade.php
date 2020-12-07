{{-- If the page has any errors passed to it --}}
@if(count($errors) > 0)

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Errors:</strong>

        <ul>
            @foreach($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach
        </ul>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

@endif

@if (Session::has('post_store_success'))

    <div class="alert alert-success" role="alert">
        {{ Session::get('post_store_success')}}
    </div>

@endif

@if (Session::has('post_update_success'))

    <div class="alert alert-success" role="alert">
        {{ Session::get('post_update_success')}}
    </div>

@endif

@if (Session::has('post_delete_success'))

    <div class="alert alert-success" role="alert">
        {{ Session::get('post_delete_success')}}
    </div>

@endif