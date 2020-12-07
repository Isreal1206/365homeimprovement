<!DOCTYPE html>
<html lang="en">

<head>
  <!--header start-->
  @include('layouts.backend.header')
  <!--header end-->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--navbar start-->
    @include('layouts.backend.navbar')
    <!--navbar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    @include('layouts.backend.sidebar')
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row site-min-height">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            @foreach($marketers as $marketer)
              @if(Auth::user()->email == $marketer->email)
              <div class="row content-panel">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel-heading">
                  <ul class="nav nav-tabs nav-justified">
                    <li class="active">
                      <a data-toggle="tab" href="#edit">Edit</a>
                    </li>
                    <li>
                      <a data-toggle="tab" href="#contact" class="contact-map">Contact</a>
                    </li>
                    <li>
                      <a data-toggle="tab" href="#overview">Overview</a>
                    </li>
                  </ul>
                </div>
                <!-- /panel-heading -->
                <div class="panel-body">
                  <div class="tab-content">
                    <div id="edit" class="tab-pane  active">
                      <div class="row site-min-height">
                        <div class="col-md-10 col-md-offset-1 detailed mt">
                          @if($flash = session('marketer_update'))
                            <div class="alert alert-success text-center" role="alert">
                              <i class="fa fa-check"></i> {{$flash}}
                            </div>
                          @endif
                          <form method="POST" action="{{route('marketer.update')}}" role="form" enctype="multipart/form-data" class="form-horizontal col-md-12">
                          {{csrf_field()}}
                          
                          <div class="form-group">
                            <label class="col-lg-3 control-label">Firstname:</label>
                            <div class="col-lg-7">
                              <input id="firstname" class="form-control" placeholder="{{$marketer->fullnames}}" type="text" name="firstname" readonly>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-3 control-label">Email Address:</label>
                            <div class="col-lg-7">
                              <input id="email" class="form-control" placeholder="{{$marketer->email}}" type="text" name="email" readonly>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-3 control-label">Organization:</label>
                            <div class="col-lg-7">
                              <input id="company_name" class="form-control" placeholder="{{$marketer->company_name}}" type="text" name="company_name">
                              <small class="text-danger">{{ $errors->first('company_name') }}</small>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-3 control-label">Category:</label>
                            <div class="col-lg-7">
                              <input id="category" class="form-control" placeholder="{{$marketer->category}}" type="text" name="category" readonly>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-3 control-label">Address:</label>
                            <div class="col-lg-7">
                              <input id="address" class="form-control" placeholder="{{$marketer->address}}" type="text" name="address">
                              <small class="text-danger">{{ $errors->first('address') }}</small>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-3 control-label">Mobile Number:</label>
                            <div class="col-lg-7">
                              <input id="mobile_no" class="form-control" placeholder="{{$marketer->mobile_no}}" type="text" name="mobile_no">
                              <small class="text-danger">{{ $errors->first('mobile_no') }}</small>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-3 control-label">Website:</label>
                            <div class="col-lg-7">
                              <input id="url" class="form-control" placeholder="{{$marketer->website}}" type="text" name="url">
                              <small class="text-danger">{{ $errors->first('url') }}</small>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-lg-offset-4 col-lg-8">
                              <button class="btn btn-theme" type="submit">Save</button>
                              <button class="btn btn-theme04" type="reset">Reset</button>
                            </div>
                          </div>
                          </form>
                        </div>
                        <!-- /col-lg-8 -->
                      </div>
                      <!-- /row -->
                    </div>
                    <!-- /tab-pane -> EDIT -->

                    <div id="contact" class="tab-pane">
                      <div class="row site-min-height">
                        <div class="col-md-6">
                          <div id="map"></div>
                        </div>
                        <!-- /col-md-6 -->
                        <div class="col-md-6 detailed">
                          <h4>Location</h4>
                          <div class="col-md-8 col-md-offset-2 mt mb">
                            <p><strong>Address:</strong> {{$marketer->address}}</p>
                          </div>
                          <h4>Contacts</h4>
                          <div class="col-md-8 col-md-offset-2 mt">
                            <p><strong>Mobile Number:</strong> {{$marketer->mobile_no}}</p>
                            <p><strong>Email:</strong> {{$marketer->email}}</p>
                          </div>
                        </div>
                        <!-- /col-md-6 -->
                      </div>
                      <!-- /row -->
                    </div>
                    <!-- /tab-pane -> CONTACT-->

                    <div id="overview" class="tab-pane">
                      <div class="row site-min-height">
                        <div class="col-md-10 col-md-offset-1 detailed">
                          <!-- detailed -->
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 table-responsive mt-100">
                            <table class="table table-striped box-shadow">
                            <tr>
                              <th width="30%">MARKETER ID:</th>
                              <td width="70%">{{$marketer->marketer_id}}</td>
                            </tr>

                            <tr>
                              <th width="30%">MARKETER NAME:</th>
                              <td width="70%">{{$marketer->fullnames}}</td>
                            </tr>

                            <tr>
                              <th>ORGANIZATION:</th>
                              <td>{{$marketer->company_name}}</td>
                            </tr>

                            <tr>
                              <th>CATEGORY:</th>
                              <td>{{$marketer->category}}</td>
                            </tr>

                            <tr>
                              <th>WEBSITE:</th>
                              <td>{{$marketer->website}}</td>
                            </tr>
                            </table>
                          </div>
                          <!-- /detailed -->
                        </div>
                        <!-- /col-md-12 -->
                      </div>
                      <!-- row -->
                    </div>
                    <!-- /tab-pane -> OVERVIEW -->
                  </div>
                  <!-- /tab-content -->
                </div>
                <!-- /panel-body -->
                </div>
                <!-- /col-12 -->
              </div>
              <!-- /row content-panel -->
              @endif
            @endforeach
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->

    <!--footer start-->
    @include('layouts.backend.footer-copyright')
    <!--footer end-->
  </section>

  <!-- js placed at the end of the document so the pages load faster -->
  @include('layouts.backend.footer')
  <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
  <script>
    CKEDITOR.replace( 'article-ckeditor' );
  </script>

</body>

</html>
