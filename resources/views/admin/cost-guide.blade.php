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
                  
                  <li>
                    <h4 data-toggle="tab" href="#edit">All Costguides</h4>
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
                                <th>Author</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Content</th>
                                <th>Image</th>
                                <th>Action</th>
                              </tr>
                            </thead>

                            <tbody>
                              @foreach ($costguides as $key => $costguide)
                              <tr>
                                <th>{{$key +1}}</th>
                                <th>{{$costguide->author}}</th>
                                <td>{{$costguide->title}}</td>
                                <td>{{$costguide->category}}</td>
                                <td>{!! substr($costguide->body, 0, 50) !!}{!! strlen($costguide->body) > 45 ? "..." : "" !!}</td>
                                <td><img src="{{$costguide->image_file}}" class="img-fluid" width="60px" height="60px"></td>
                                <td class="text-center">                                  
<a href="{{url('admin/costguide-details/'.$costguide->id)}}" class="text-success"><i class="fa fa-edit"></i></a>
<a href="{{url('admin/costguide/' . $costguide->id . '/delete')}}" class="text-danger" onclick="return confirm('Are you sure you wana delete this item?')"><i class="fa fa-trash"></i></a>

                               </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>

                        <div class="d-flex justify-content-center">
                          {!! $costguides->links(); !!}
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
                                <th>author</th>
                                <th>title</th>
                                 <th>category</th>
                                <th colspan="2">Action</th>
                              </tr>
                            </thead>

                            <tbody>
                              @foreach ($costguides as $key=> $costguide)
                              <form action="" method="POST">
                              @csrf
                              <tr>
                                <th>{{$key+1}}</th>
                                <td>
                                  <input type="text" name="author" value="{{$costguide->author}}" class="form-control bord">
                                  <small class="text-danger">{{ $errors->first('author') }}</small>
                                </td>
                                <td>
                                  <input type="text" name="title" value="{{$costguide->title}}" class="form-control bord">
                                  <small class="text-danger">{{ $errors->first('title') }}</small>
                                </td>
                                 <td>
                                  <input type="text" name="category" value="{{$costguide->category}}" class="form-control bord">
                                  <small class="text-danger">{{ $errors->first('category') }}</small>
                                </td>
                                <td class="text-center"><button type="submit" class="btn btn-sm btn-success"><i class="fa fa-save"></i></button></td>
                              </tr>
                              </form>
                              @endforeach
                            </tbody>
                          </table>
                        </div>

                        <div class="d-flex justify-content-center">
                          {!! $costguides->links(); !!}
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
                  <form action = "{{route('admin.costguide.store')}}" method = "POST" enctype="multipart/form-data" >
                  @csrf
                    <h4 class="text-center">Create CostGuide</h4>
                    <div class="form-group">
                      <input type="text" placeholder="Enter Author" id="name" class="form-control" name="author" autocomplete="name">
                      <small class="text-danger">{{ $errors->first('author') }}</small>
                    </div>

                    <div class="form-group">
                      <input type="text" placeholder="Enter title" id="slug" class="form-control" name="title">
                      <small class="text-danger">{{ $errors->first('title') }}</small>
                    </div>

                    <div class="form-group">
                      <select class="form-control" name="category">
                        @foreach($categories as $category)
                        <option value="{{$category->name}}">{{$category->name}}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <textarea class="form-control" rows="4" name ="body">Write cost guide article</textarea>
                    </div>

                    <div class="form-group">
                      <input type="file" placeholder="select image" id="image" name="image_file">
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
