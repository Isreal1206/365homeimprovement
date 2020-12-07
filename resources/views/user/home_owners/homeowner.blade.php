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

            <div class="row content-panel">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="panel-heading">
                <ul class="nav nav-tabs nav-justified">
                  <li class="active">
                    <a data-toggle="tab" href="#overview">Overview</a>
                  </li>
                  <li>
                    <a data-toggle="tab" href="#contact" class="contact-map">Contact</a>
                  </li>
                  <li>
                    <a data-toggle="tab" href="#edit">Edit</a>
                  </li>
                </ul>
              </div>
              <!-- /panel-heading -->
              <div class="panel-body">
                <div class="tab-content">
                  <div id="overview" class="tab-pane active">
                    <div class="row site-min-height">
                      <div class="col-md-10 col-md-offset-1 detailed">
                        @if($flash = session('homeowner_update'))
                          <div class="alert alert-success text-center" role="alert">
                            <i class="fa fa-check"></i> {{$flash}}
                          </div>
                        @endif
                        <!-- detailed -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 table-responsive mt">
                          <table class="table table-striped">
                          <tr>
                            <th width="30%">HOMEOWNER ID:</th>
                            <td width="70%">{{$homeowner->homeowner_id}}</td>
                          </tr>

                          <tr>
                            <th width="30%">FULLNAMES:</th>
                            <td width="70%">{{$homeowner->fullnames}}</td>
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

                  <div id="contact" class="tab-pane">
                    <div class="row site-min-height">
                      <div class="col-md-6">
                        <div id="map"></div>
                      </div>
                      <!-- /col-md-6 -->
                      <div class="col-md-6 detailed">
                        <h4>Location</h4>
                        <div class="col-md-8 col-md-offset-2 mt mb">
                          <p><strong>Address:</strong> {{$homeowner->address}}</p>
                        </div>
                        <h4>Contacts</h4>
                        <div class="col-md-8 col-md-offset-2 mt">
                          <p><strong>Mobile Number:</strong> {{$homeowner->mobile_no}}</p>
                          <p><strong>Email:</strong> {{$homeowner->email}}</p>
                        </div>
                      </div>
                      <!-- /col-md-6 -->
                    </div>
                    <!-- /row -->
                  </div>
                  <!-- /tab-pane -> CONTACT-->

                  <div id="edit" class="tab-pane">
                    <div class="row site-min-height">
                      <div class="col-md-10 col-md-offset-1 detailed mt">
                        <form method="POST" action="{{route('homeowner.update')}}" role="form" class="form-horizontal col-md-12">
                        {{csrf_field()}}

                        <div class="form-group">
                          <label class="col-lg-3 control-label">Fullnames:</label>
                          <div class="col-lg-9">
                            <input id="fullnames" class="form-control text-capitalize" placeholder="{{$homeowner->fullnames}}" type="text" name="fullnames" readonly>
                            <small class="text-danger">{{ $errors->first('fullnames') }}</small>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label">Mobile Number:</label>
                          <div class="col-lg-9">
                            <input id="mobile_no" class="form-control" placeholder="{{$homeowner->mobile_no}}" type="text" name="mobile_no">
                            <small class="text-danger">{{ $errors->first('mobile_no') }}</small>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label">Address:</label>
                          <div class="col-lg-9">
                            <input id="address" class="form-control" placeholder="{{$homeowner->address}}" type="text" name="address">
                            <small class="text-danger">{{ $errors->first('address') }}</small>
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="col-lg-offset-3 col-lg-9">
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

                </div>
                <!-- /tab-content -->
              </div>
              <!-- /panel-body -->
              </div>
              <!-- /col-12 -->
            </div>
            <!-- /row content-panel -->
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
