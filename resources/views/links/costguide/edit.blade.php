<!DOCTYPE html>
<html lang="en">
<head>
  @include('layouts.header')
  @include('layouts.navbar')
  <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
</head>

<body class="bg-links">
  <section class="roboto intro-banner">
    <div class="container-fluid p-0">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
          <div class="border-right sidenav">
            @include('layouts.sidebar')
          </div>
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9">
          <div class="container mb-3">
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
                    <h5 class="text-bold pt-2"> EDIT COSTGUIDE </h5>
                  </div>
                  <div class="border-warning" style="border-top: 5px solid"></div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 mx-auto">
                {!! Form::model($costguides, ['route' => ['cost.update', $costguides->id], 'method' => 'PUT', 'files' => true]) !!}

                  {{ Form::text('name', null, ['class' => 'form-control mt-1', 'placeholder' => 'Enter Name']) }}

                  {{ Form::text('title', null, ['class' => 'form-control my-2', 'placeholder' => 'Enter Title']) }}

                  {{ Form::text('category', null, ['class' => 'form-control mt-1', 'placeholder' => 'Enter Category']) }}

                  {{ Form::text('slug', null, ['class' => 'form-control my-2', 'placeholder' => 'Enter Slug']) }}

                  {{ Form::textarea('body', null, ['id' => 'article-ckeditor', 'class' => 'form-control my-2', 'placeholder' => 'Content Goes Here...', 'rows' => '7']) }}

                  {{ Form::submit('Save', ['class' => 'btn btn-success btn-block mb-1']) }}

                {!! Form::close() !!}
              </div> <!-- end of .col-8 -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--/ footer Star /-->
  @include('layouts.footer-copyright')
<!--/ Footer End /-->

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
  CKEDITOR.replace( 'article-ckeditor' );
</script>

</body>
</html>