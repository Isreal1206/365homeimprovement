<!DOCTYPE html>
<html lang="en">
<head>
  @include('layouts.header')
  @include('layouts.navbar')
  <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
  <link href="{{ asset('css/sweetalert2.min.css') }}" rel="stylesheet">
</head>

<body class="bg-links">
  @guest
  <section style="min-height: 520px">
    <div class="container">
      <div class="row my-4">
        <div class="col-12">
          <h4>Please Login to access this Page.</h4>
        </div>
      </div>
    </div>
  </section>

  @else
  <section class="roboto intro-banner">
    <div class="container-fluid p-0">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
          <div class="border-right sidenav">
            @include('layouts.sidebar')
          </div>
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9">
          <div class="container mb-5">
            <div class="row my-4">
              <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                @if ($flash = session('success'))
                  <div class="alert alert-success" role="alert">
                      {{$flash}}
                  </div>
                @endif
                @include('inc.messages')
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="box-shadow bg-white">
                  <div class="py-1 px-3">
                    <h5 class="text-bold pt-2"> COSTGUIDE RECORDS </h5>
                  </div>
                  <div class="border-warning" style="border-top: 5px solid"></div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 mx-auto">
                {!! Form::open(['name' => 'details', 'route' => 'cost.store', 'method' => 'POST']) !!}

                  {{ Form::text('name', null, ['class' => 'form-control mt-1', 'placeholder' => 'Enter Name']) }}

                  {{ Form::text('title', null, ['class' => 'form-control my-2', 'placeholder' => 'Enter Title']) }}

                  {{ Form::text('category', null, ['class' => 'form-control mt-1', 'placeholder' => 'Enter Category']) }}

                  {{ Form::text('slug', null, ['class' => 'form-control my-2', 'placeholder' => 'Enter Slug']) }}

                  {{ Form::textarea('body', null, ['id' => 'article-ckeditor', 'class' => 'form-control my-2', 'placeholder' => 'Content Goes Here...', 'rows' => '7']) }}

                  {{ Form::submit('Submit', ['class' => 'btn btn-success btn-block my-2']) }}

                {!! Form::close() !!}
              </div> <!-- end of .col-8 -->
            </div>

            <div class="row my-5">
              <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h5 class="text-center text-uppercase">All Costguide</h5>
                <div class="table-responsive">
                  <table class="table table-bordered table-striped">
                    <thead class="bg-dark text-white">
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Slug</th>
                        <th>Body</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($costguides as $costguide)
                      <tr>
                        <th>{{$costguide->id}}</th>
                        <td>{{$costguide->name}}</td>
                        <td>{{$costguide->title}}</td>
                        <td>{{$costguide->category}}</td>
                        <td>{{$costguide->slug}}</td>
                        <td>
                          {!! substr($costguide->body, 0, 100)!!}{!! strlen($costguide->body) > 100 ? "..." : "" !!}
                        </td>
                        <td>
                          <a href="/cost/{{$costguide->id}}/edit"><i class="fa fa-edit text-success"></i></a>
                          <form action="{!! action('CostGuideController@destroy', $costguide->id) !!}" method="POST" name="deletePost" class="pull-right">
                          <input type="hidden" name="_method" value="DELETE">
                          {{csrf_field()}}
                          <a href="#" onclick="delPost()" class="fa fa-trash text-danger"></a>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="d-flex justify-content-center">
                  {!! $costguides->links(); !!}
                </div>
              </div> <!-- end of .col-12 -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endguest

<!--/ footer Star /-->
  @include('layouts.footer')
<!--/ Footer End /-->

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
  CKEDITOR.replace( 'article-ckeditor' );
</script>

{!! Html::script('js/sweetalert2.min.js') !!}
<script>
  function delPost() {
    event.preventDefault();
    var form = document.forms["deletePost"];
      Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!',
      cancelButtonText: 'Cancel'
      }).then((result) => {
      if (result.value) {
        form.submit();
        Swal.fire('Deleted!', 'Your post has been deleted.', 'success')
      } else { 
        Swal.fire('Cancelled', 'Your post is safe.', 'error')
      }
    })
  }
</script>

</body>
</html>