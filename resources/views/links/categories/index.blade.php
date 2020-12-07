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
          <div class="container mb-5">
            <div class="row my-4">
              <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                @if ($flash = session('success'))
                  <div class="alert alert-success" role="alert">
                      {{$flash}}
                  </div>
                @endif
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="box-shadow bg-white">
                  <div class="py-1 px-3">
                    <h5 class="text-bold pt-2"> ALL CATEGORIES </h5>
                  </div>
                  <div class="border-warning" style="border-top: 5px solid"></div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9">
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Slug</th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach ($categories as $category)
                    <tr>
                      <th>{{$category->id}}</th>
                      <td>{{$category->name}}</td>
                      <td>{{$category->slug}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <div class="d-flex justify-content-center">
                  {!! $categories->links(); !!}
                </div>
              </div> <!-- end of col-9 .col-9 -->

              <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                <div class="well border border-links">
                  {!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}
                  <div class="border-bottom pt-2">
                    <h5 class="text-center">Create New Category</h5>
                  </div>
                  <div class="p-3"> 
                    {{ Form::text('name', null, ['class' => 'form-control mt-2', 'placeholder' => 'Enter Name']) }}

                    {{ Form::text('slug', null, ['class' => 'form-control my-3', 'placeholder' => 'Enter Slug']) }}

                    {{ Form::submit('Submit', ['class' => 'btn btn-success btn-block mb-2']) }}

                  {!! Form::close() !!}
                  </div>
                </div>

                <div class="box border bg-success my-5 p-2" style="width: 192px">
                  <div class="mb-2"><input type="text" name="" class="form-control" id="d" readonly></div>
                  <div class="keys">
                    <p>
                      <button style="width: 40px; height: 40px" onclick='c("not defined ")'>%</button>
                      <button style="width: 40px; height: 40px" onclick='c("not defined ")'>&#8730</button>
                      <button style="width: 40px; height: 40px" onclick='back()'>&#8592</button>
                      <button style="width: 40px; height: 40px" onclick='math("/")'>/</button>
                    </p>
                    <p>
                      <button style="width: 40px; height: 40px" onclick='math("7")'>7</button>
                      <button style="width: 40px; height: 40px" onclick='math("8")'>8</button>
                      <button style="width: 40px; height: 40px" onclick='math("9")'>9</button>
                      <button style="width: 40px; height: 40px" onclick='math("*")'>*</button>
                    </p>
                    <p>
                      <button style="width: 40px; height: 40px" onclick='math("4")'>4</button>
                      <button style="width: 40px; height: 40px" onclick='math("5")'>5</button>
                      <button style="width: 40px; height: 40px" onclick='math("6")'>6</button>
                      <button style="width: 40px; height: 40px" onclick='math("-")'>-</button>
                    </p>
                    <p>
                      <button style="width: 40px; height: 40px" onclick='math("1")'>1</button>
                      <button style="width: 40px; height: 40px" onclick='math("2")'>2</button>
                      <button style="width: 40px; height: 40px" onclick='math("3")'>3</button>
                      <button style="width: 40px; height: 40px" onclick='math("+")'>+</button>
                    </p>
                    <p class="mb-0">
                      <button style="width: 40px; height: 40px" onclick='math("0")'>0</button>
                      <button style="width: 40px; height: 40px" onclick='math(".")'>.</button>
                      <button style="width: 40px; height: 40px" onclick='c("")'>C</button>
                      <button style="width: 40px; height: 40px" onclick='e()'>=</button>
                    </p>
                  </div>
                </div>
              </div> <!-- end of col-9 .col-3 -->
            </div> <!-- end of col-9 .row -->
          </div> <!-- end of content height -->
        </div> <!-- end of col-9 -->
      </div> <!-- end of row -->
    </div> <!-- end of container fluid -->
  </section>
<!--/ footer Star /-->
  @include('layouts.footer')
<!--/ Footer End /-->

<script type="text/javascript">
  function c(val) {
    document.getElementById("d").value=val;
  }
  function math(val) {
    document.getElementById("d").value+=val;
  }
  function back() {
    //delete last letter function.
    var value = document.getElementById("d").value;
    document.getElementById("d").value = value.substr(0, value.length - 1);
  }
  function e() { 
    try { 
      c(eval(document.getElementById("d").value)) 
    } 
    catch(e) {
      c('Error') 
    } 
  }
</script>

</body>
</html>