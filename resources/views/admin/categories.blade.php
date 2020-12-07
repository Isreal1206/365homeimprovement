<!DOCTYPE html>
<html lang="en">

<head>
  <!--header start-->
  @include('layouts.backend.admin-header')
  <!--header end-->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--navbar start-->
    @include('layouts.backend.admin-navbar')
    <!--navbar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    @include('layouts.backend.admin-sidebar')
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
            <!--CUSTOM CHART START -->
            <div class="row content-panel site-min-height">
              <div class="panel-heading">
                <ul class="nav nav-tabs nav-justified">
                  <li  class="active">
                    <a data-toggle="tab" href="#categories">All Categories</a>
                  </li>
                  <li>
                    <a data-toggle="tab" href="#edit">Edit</a>
                  </li>
                </ul>
              </div>

              <div class="panel-body">
                <div class="tab-content">
                  <div id="categories" class="tab-pane active">
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb">
                        <div class="table-responsive">
                          <table class="table table-bordered table-striped">
                            <thead>
                              <tr class="text-center">
                                <th>#</th>
                                <th>Names</th>
                                <th>Slug</th>
                                <th>Action</th>
                              </tr>
                            </thead>

                            <tbody>
                              @foreach ($categories as $category)
                              <tr>
                                <th>{{$category->id}}</th>
                                <td>{{$category->name}}</td>
                                <td>{{$category->slug}}</td>
                                <td class="text-center">
                                  <form action="{!! action('Admin\CategoriesController@delete', $category->id) !!}" method="PUT" class="delete">
                                  <input type="hidden" name="_method" value="DELETE">
                                  {{csrf_field()}}

                                  <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                  </form>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>

                        <div class="d-flex justify-content-center">
                          {!! $categories->links(); !!}
                        </div>
                      </div>
                    </div>
                  </div>

                  <div id="edit" class="tab-pane">
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="table-responsive">
                          <table class="table table-bordered table-striped">
                            <thead>
                              <tr class="text-center">
                                <th>#</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th colspan="2">Action</th>
                              </tr>
                            </thead>

                            <tbody>
                              @foreach ($categories as $category)
                              <form action="{{route('admin.category.edit', $category->id)}}" method="POST">
                              @csrf
                              <tr>
                                <th>{{$category->id}}</th>
                                <td>
                                  <input type="text" name="name" value="{{$category->name}}" class="form-control bord">
                                  <small class="text-danger">{{ $errors->first('name') }}</small>
                                </td>
                                <td>
                                  <input type="text" name="slug" value="{{$category->slug}}" class="form-control bord">
                                  <small class="text-danger">{{ $errors->first('slug') }}</small>
                                </td>
                                <td class="text-center"><button type="submit" class="btn btn-sm btn-success"><i class="fa fa-save"></i></button></td>
                              </tr>
                              </form>
                              @endforeach
                            </tbody>
                          </table>
                        </div>

                        <div class="d-flex justify-content-center">
                          {!! $categories->links(); !!}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>           
          </div>
          <!-- /col-lg-9 END SECTION MIDDLE -->
          <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT
              *********************************************************************************************************************************************************** -->
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 ds">
            <!--RIGHT SIDEBAR-->
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                @if(session('success'))
                  <div class="alert alert-success text-center">
                    <i class='fa fa-check'></i> {{session('success')}}
                  </div>
                @endif
                <div class="bg-primary" style="padding: 10px">
                  <form action = "{{route('admin.category.store')}}" method = "POST" >
                  @csrf
                    <h4 class="text-center">Create Category</h4>
                    <div class="form-group">
                      <input type="text" placeholder="Enter Name" id="name" class="form-control" name="name" autocomplete="name">
                      <small class="text-danger">{{ $errors->first('name') }}</small>
                    </div>
                    <div class="form-group">
                      <input type="text" placeholder="Enter Slug" id="slug" class="form-control" name="slug" autocomplete="slug">
                      <small class="text-danger">{{ $errors->first('slug') }}</small>
                    </div>
                    <div class="form-group">
                      <button class="btn btn-block btn-orange" type="submit">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <div class="row mt">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="calc">
                  <p class="calc-label">365HI CALC</p>
                  <p class="screen"><input type="text" name="" class="form-control" id="d" readonly></p>
                  <div class="keys">
                    <p>
                      {{--X&#94<sup>2</sup>--}}
                      <button onclick='sqr()'>X<sup>2</sup></button>
                      <button onclick='sqrt()'>&#8730</button>
                      <button onclick='back()'>&#8592</button>
                      <button onclick='c("")'>AC</button>
                    </p>
                    <p>
                      <button onclick='math("7")'>7</button>
                      <button onclick='math("8")'>8</button>
                      <button onclick='math("9")'>9</button>
                      <button onclick='math("/")'>/</button>
                    </p>
                    <p>
                      <button onclick='math("4")'>4</button>
                      <button onclick='math("5")'>5</button>
                      <button onclick='math("6")'>6</button>
                      <button onclick='math("*")'>*</button>
                    </p>
                    <p>
                      <button onclick='math("1")'>1</button>
                      <button onclick='math("2")'>2</button>
                      <button onclick='math("3")'>3</button>
                      <button onclick='math("-")'>-</button>
                    </p>
                    <p>
                      <button onclick='math("0")'>0</button>
                      <button onclick='math(".")'>.</button>
                      <button onclick='e()'>=</button>
                      <button onclick='math("+")'>+</button>
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <!-- CALENDAR-->
            <div id="calendar">
              <div class="green-panel mt">
                <div class="panel-body">
                  <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                    <div class="arrow"></div>
                    <h3 class="popover-title" style="disadding: none;"></h3>
                    <div id="date-popover-content" class="popover-content"></div>
                  </div>
                  <div id="my-calendar"></div>
                </div>
              </div>
            </div>
            <!-- / calendar -->
          </div>
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->

    <!--footer start-->
    @include('layouts.backend.footer-copyright')
    <!--footer end-->
  </section>

  <!-- js placed at the end of the document so the pages load faster -->
  @include('layouts.backend.footer')
  <script>
    $(".delete").on("submit", function() {
      return confirm("Are you sure you want to delete this item?");
    })
  </script>

  <script type="text/javascript">
    function modus(x, y) {
      //square function.
      var x = document.getElementById("d").value;
      var y = document.getElementById("d").value;
      document.getElementById("d").value = Math.floor(x / y), x % y;
    }
    function sqr() {
      //square function.
      var num = document.getElementById("d").value;
      document.getElementById("d").value = Math.pow(num, 2);
    }
    function sqrt() {
      //square function.
      var num = document.getElementById("d").value;
      document.getElementById("d").value = Math.sqrt(num);
    }
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
