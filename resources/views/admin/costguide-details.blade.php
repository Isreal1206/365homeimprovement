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
            <h4 class ="text-center mt">Cost Guide Edit</h4>
            @foreach($errors->all() as $error)
            <div class="alert alert-danger">
              <ul>
                <li>{{ $error }}</li>
              </ul>
            </div>
            @endforeach
            <form method="POST" action="{{route('admin.costguide.update', $acostguide->id)}}" role="form" enctype="multipart/form-data" class="form-horizontal col-md-12">
            {{csrf_field()}}
              <div class="form-group">
                <label class="col-lg-2 control-label">Author</label>
                <div class="col-lg-10">
                  <input type="text" name="author" placeholder="{{$acostguide->author}}" class="form-control bord">
                  <small class="text-danger">{{ $errors->first('author') }}</small>
                </div>
              </div>
                    
              <div class="form-group">
                <label class="col-lg-2 control-label">title</label>
                <div class="col-lg-10">
                  <input type="text" name="title" placeholder="{{$acostguide->title}}" class="form-control bord">
                  <small class="text-danger">{{ $errors->first('title') }}</small>
                </div>
              </div>

              <div class="form-group">
                <label class="col-lg-2 control-label">Category</label>
                <div class="col-lg-10">
                  <select class="form-control" name="category">
                    <option value="">-- Please Select a Category --</option>
                    @foreach($categories as $category)
                      <option value="{{$category->name}}">{{$category->name}}</option>
                    @endforeach
                  </select>
                  <small class="text-danger">{{ $errors->first('category') }}</small>
                </div>
              </div>
          
              <div class="form-group">
                <label class="col-lg-2 control-label">Content</label>
                <div class="col-lg-10">
                  <textarea class="form-control" rows="7" name="body">{{$acostguide->body}} </textarea>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-10 col-lg-offset-2 text-primary"><small>Upload Image of file size not more than 2KB</small></label>
                <label class="col-lg-2 control-label">Change Image:</label>
                <div class="col-lg-10">
                  <input type= "file" class="file-pos" id="image" name="image_file">
                  <small class="text-danger">{{ $errors->first('banner') }}</small>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"></label>
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary btn-lg btn-block">Update <i class="fa fa-update"></i></button>
                </div>
              </div>
            </form>                                              
          </div>

          <!-- /col-lg-9 END -->
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
                      <input type= "file" placeholder="select image" id="image"name="image_file">
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
