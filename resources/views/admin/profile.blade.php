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
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row content-panel">
              <div class="panel-heading">
                <ul class="nav nav-tabs nav-justified">
                  <li  class="active">
                    <a data-toggle="tab" href="#edit">Edit Profile</a>
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
                        <form method="POST" action="{{route('admin.editProfile')}}" role="form" class="form-horizontal" enctype="multipart/form-data">
                          {{csrf_field()}}
                          <div class="form-group">
                            <label class="col-lg-3 control-label"> Avatar:</label>
                            <div class="col-lg-7">
                              <input type="file" id="avatar" class="file-pos" name="avatar">
                              <small class="text-danger">{{ $errors->first('avatar') }}</small>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-3 control-label">Firstname:</label>
                            <div class="col-lg-7">
                              <input type="text" placeholder="{{Auth::user()->firstname}}" id="firstname" class="form-control" name="firstname">
                              <small class="text-danger">{{ $errors->first('firstname') }}</small>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-3 control-label">Lastname:</label>
                            <div class="col-lg-7">
                              <input type="text" placeholder="{{Auth::user()->lastname}}" id="lastname" class="form-control" name="lastname">
                              <small class="text-danger">{{ $errors->first('lastname') }}</small>
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
                            <label class="col-lg-3 control-label">Mobile Number:</label>
                            <div class="col-lg-7">
                              <input type="text" placeholder="{{Auth::user()->mobile}}" id="mobile" class="form-control" name="mobile">
                              <small class="text-danger">{{ $errors->first('mobile') }}</small>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-3 control-label">Home Address:</label>
                            <div class="col-lg-7">
                              <input type="text" placeholder="{{Auth::user()->address}}" id="address" class="form-control" name="address">
                              <small class="text-danger">{{ $errors->first('address') }}</small>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-lg-offset-3 col-lg-7">
                              <button class="btn btn-theme" type="submit">Save</button>
                              <button class="btn btn-theme04" type="reset">Cancel</button>
                            </div>
                          </div>
                        </form>

                        <h4 class="mt-100">Reset Password</h4>
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
                        <form method="POST" action="{{route('admin.resetPassword')}}" role="form" class="form-horizontal">
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
                    </div>
                    <!-- /row -->
                  </div>
                  <!-- /tab-pane -->

                  <div id="contact" class="tab-pane">
                    <div class="row site-min-height">
                      <div class="col-md-6">
                        <div id="map"></div>
                      </div>
                      <!-- /col-md-6 -->
                      <div class="col-md-6 detailed">
                        <h4>Location</h4>
                        <div class="col-md-8 col-md-offset-2 mt">
                          <p><strong>Home Address:</strong> {{Auth::user()->address}}</p>
                          <p><strong>Company Address:</strong> Headquarters 844 Sutter Ave 9003, New York.</p>
                        </div>
                        <h4>Contacts</h4>
                        <div class="col-md-8 col-md-offset-2 mt">
                          <p><strong>Mobile Number:</strong> {{Auth::user()->mobile}}</p>
                          <p><strong>Email:</strong> {{Auth::user()->email}}</p>
                        </div>
                      </div>
                      <!-- /col-md-6 -->
                    </div>
                    <!-- /row -->
                  </div>
                  <!-- /tab-pane -->

                  <div id="overview" class="tab-pane">
                    <div class="row site-min-height mt">

                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-offset-2">
                        <textarea rows="3" class="form-control" placeholder="Whats on your mind?"></textarea>
                        <div class="grey-style">
                          <div class="pull-left">
                            <button class="btn btn-sm btn-theme"><i class="fa fa-camera"></i></button>
                            <button class="btn btn-sm btn-theme"><i class="fa fa-map-marker"></i></button>
                          </div>
                          <div class="pull-right">
                            <button class="btn btn-sm btn-theme03">POST</button>
                          </div>
                        </div>

                        <!-- detailed -->
                        <div class="detailed mt-100">
                          <!-- recent-activity -->
                          <h4 class="text-primary text-center">PERSONAL INFORMATION</h4>
                          <table>
                          <tr>
                            <th class="pady">FIRSTNAME:</th>
                            <td class="pady padx">{{Auth::user()->firstname}}</td>
                          </tr>
                          
                          <tr>
                            <th>LASTNAME:</th>
                            <td class="padx">{{Auth::user()->lastname}}</td>
                          </tr>
                          
                          <tr>
                            <th class="pady">USERNAME:</th>
                            <td class="pady padx">{{Auth::user()->username}}</td>
                          </tr>

                          <tr>
                            <th>EMAIL ADDRESS:</th>
                            <td class="padx">{{Auth::user()->email}}</td>
                          </tr>
                          </table>
                          <!-- /recent-activity -->
                        </div>
                        <!-- /detailed -->                        
                      </div>
                      <!-- /col-md-12 -->
                      
                    </div>
                    <!-- /OVERVIEW -->
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
