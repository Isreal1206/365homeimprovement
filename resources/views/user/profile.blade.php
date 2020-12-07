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
                <h3>Edit Profile</h3>
              </div>
              <!-- /panel-heading -->
              <div class="panel-body">
                <div class="tab-content">
                  <!-- /tab-pane -->
                  <div id="edit" class="tab-pane active">
                    <div class="row site-min-height">
                      <div class="col-lg-8 col-lg-offset-2 detailed">
                        <h4 class="mb">Personal Information</h4>
                        @if($flash = session('success'))
                          <div class="alert alert-success" role="alert">
                            {{$flash}}
                          </div>
                        @endif

                        @if(Auth::user()->role_id == 1)
                        <form method="POST" action="{{route('contractor.profile.update')}}" role="form" class="form-horizontal" enctype="multipart/form-data">
                        @elseif(Auth::user()->role_id == 2)
                        <form method="POST" action="{{route('homeowner.profile.update')}}" role="form" class="form-horizontal" enctype="multipart/form-data">
                        @elseif(Auth::user()->role_id == 3)
                        <form method="POST" action="{{route('marketer.profile.update')}}" role="form" class="form-horizontal" enctype="multipart/form-data">
                        @else
                        <form method="POST" action="{{route('trainer.profile.update')}}" role="form" class="form-horizontal" enctype="multipart/form-data">
                        @endif
                        {{--<input type="hidden" name="_method" value="PUT">--}}
                        {{csrf_field()}}
                          <div class="form-group">
                            <label class="col-lg-3 control-label"> Avatar:</label>
                            <div class="col-lg-7">
                              <input type="file" id="avatar" class="file-pos" name="avatar">
                              <small class="text-danger">{{ $errors->first('avatar') }}</small>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-3 control-label">Username:</label>
                            <div class="col-lg-7">
                              <input type="text" placeholder="{{Auth::user()->username}}" id="username" class="form-control" name="username" readonly>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-3 control-label">Email Address:</label>
                            <div class="col-lg-7">
                              <input type="email" placeholder="{{Auth::user()->email}}" id="email" class="form-control" name="email" readonly>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-lg-offset-3 col-lg-7">
                              <button class="btn btn-theme" type="submit">Save</button>
                              <button class="btn btn-theme04" type="reset">Cancel</button>
                            </div>
                          </div>
                        </form>

                        <h4 class="mb mt-100">Reset Password</h4>
                        @if ($error = session('error'))
                          <div class="alert alert-danger" role="alert">
                              {{$error}}
                          </div>
                        @endif
                        @if($flash = session('resetPassword'))
                          <div class="alert alert-success" role="alert">
                            {{$flash}}
                          </div>
                        @endif

                        @if(Auth::user()->role_id == 1)
                        <form method="POST" action="{{route('contractor.password.reset')}}" role="form" class="form-horizontal" enctype="multipart/form-data">
                        @elseif(Auth::user()->role_id == 2)
                        <form method="POST" action="{{route('homeowner.password.reset')}}" role="form" class="form-horizontal" enctype="multipart/form-data">
                        @elseif(Auth::user()->role_id == 3)
                        <form method="POST" action="{{route('marketer.password.reset')}}" role="form" class="form-horizontal" enctype="multipart/form-data">
                        @else
                        <form method="POST" action="{{route('trainer.password.reset')}}" role="form" class="form-horizontal" enctype="multipart/form-data">
                        @endif
                        {{csrf_field()}}
                        <div class="form-group">
                          <label class="col-lg-3 control-label">Current Password:</label>
                          <div class="col-lg-7">
                            <input type="password" placeholder="" id="cpassword" class="form-control" name="cpassword" required autocomplete="old-password">
                            <small class="text-danger">{{ $errors->first('cpassword') }}</small>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-3 control-label">Password:</label>
                          <div class="col-lg-7">
                            <input type="password" placeholder="" id="password" class="form-control" name="password" required autocomplete="new-password">
                            <small class="text-danger">{{ $errors->first('password') }}</small>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-3 control-label">Confirm Password:</label>
                          <div class="col-lg-7">
                            <input type="password" placeholder="" id="confirm-password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            <small class="text-danger">{{ $errors->first('password_confirmation') }}</small>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-lg-offset-3 col-lg-7">
                            <button class="btn btn-theme" type="submit">Confirm</button>
                            <button class="btn btn-theme04" type="reset">Cancel</button>
                          </div>
                        </div>
                        </form>
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
