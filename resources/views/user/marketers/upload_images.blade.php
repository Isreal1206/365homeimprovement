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
        <div class="row">
          
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row content-panel">
              <div class="profile-text">
                <h3>Gallery</h3>
              </div>
              <!-- /panel-heading -->
              <div class="panel-body">
                <div class="tab-content">
                  <!-- /tab-pane -->
                  <div id="edit" class="tab-pane active">
                    <div class="row site-min-height">
                      <div class="col-lg-8 col-lg-offset-2 detailed">
                        <h4 class="mb">Upload Products</h4>
                        @if($flash = session('success'))
                          <div class="alert alert-success" role="alert">
                            {{$flash}}
                          </div>
                        @endif

                        <form method="POST" action="{{route('marketer.upload_images')}}" role="form" class="form-horizontal" enctype="multipart/form-data">
                        {{csrf_field()}}
                          <div class="form-group">
                            <label class="col-lg-3 control-label"> First Product:</label>
                            <div class="col-lg-7">
                              <input type="file" id="products1" class="file-pos" name="products1">
                              <small class="text-danger">{{ $errors->first('products1') }}</small>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-3 control-label"> Second Product:</label>
                            <div class="col-lg-7">
                              <input type="file" id="products2" class="file-pos" name="products2">
                              <small class="text-danger">{{ $errors->first('products2') }}</small>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-3 control-label"> Third Product:</label>
                            <div class="col-lg-7">
                              <input type="file" id="products3" class="file-pos" name="products3">
                              <small class="text-danger">{{ $errors->first('products3') }}</small>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-lg-offset-3 col-lg-7">
                              <button class="btn btn-theme" type="submit">Save</button>
                              <button class="btn btn-theme04" type="reset">Cancel</button>
                            </div>
                          </div>
                        </form>

                        <h4 class="mt-100">Display Products</h4>
                        <div class="col-lg-4 height-200 border-custom">
                          <img src="" class="img-responsive img-fluid">
                        </div>
                        <div class="col-lg-4 height-200 border-custom">
                          <img src="" class="img-responsive img-fluid">
                        </div>
                        <div class="col-lg-4 height-200 border-custom">
                          <img src="" class="img-responsive img-fluid">
                        </div>
                      </div>
                      <!-- /col-lg-8 -->
                    </div>
                    <!-- /row -->
                  </div>
                  <!-- /tab-pane -->
                </div>
                <!-- /tab-content -->
              </div>
              <!-- /panel-body -->
            </div>
            <!-- /col-lg-12 -->
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    
    <!--footer start-->
    @include('layouts.backend.footer-copyright')
    <!--footer end-->
  </section>

  <!-- js placed at the end of the document so the pages load faster -->
  @include('layouts.backend.footer')

</body>

</html>
