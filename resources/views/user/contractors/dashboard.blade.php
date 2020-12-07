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
          <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 main-chart">
            <div class="row mt">
              <div class="col-lg-10 col-md-offset-1">
                @if($flash = session('contractor_register'))
                  <div class="alert alert-success text-center mb" role="alert">
                    <i class="fa fa-check"></i> {{$flash}}
                  </div>
                @endif
                @if($flash = session('verify'))
                  <div class="alert alert-success text-center mb" role="alert">
                    <i class="fa fa-check"></i> {{$flash}}
                  </div>
                @endif
              </div>
              <!--/ col-md-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mb">
                <div class="panel-box">
                  <p class="banner">365Homeimprovement</p>
                  <i class="fa fa-user fa-4x text-light"></i>
                  <h3 class="title">EDIT PROFILE</h3>
                  <p>To change your profile image or Reset your password.</p>
                  <a href="{{route('contractor.profile')}}" class="btn btn-orange">Click here</a>
                </div>
              </div>
              <!-- /col-md-6 -->
              
              @if(Auth::user()->status == 0)
              <!--/ col-md-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mb">
                <div class="panel-box">
                  <p class="banner">365Homeimprovement</p>
                  <div class="pad">
                    <i class="fa fa-building-o fa-4x text-light"></i>
                    <h3 class="title">CONTRACTOR</h3>
                    <p>To become a Contractor</p>
                    <a href="{{route('contractor.register')}}" class="btn btn-orange">Click here</a>
                  </div>
                </div>
              </div>
              @else
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mb">
                <div class="panel-box">
                  <p class="banner">365Homeimprovement</p>
                  <div class="pad">
                    <i class="fa fa-building-o fa-4x text-light"></i>
                    <h3 class="title">CONTRACTOR</h3>
                    <p>Update your profile or Ignore if already done.</p>
                    <a href="{{route('contractor.index')}}" class="btn btn-orange">Click here</a>
                  </div>
                </div>
              </div>
              <!-- /col-md-6 -->
              @endif
            </div>
            <!-- /row -->

            <div class="row mt">
              <!-- WEATHER PANEL -->
              <!-- col-12 -->
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb">
                <!-- INSTAGRAM PANEL -->
                <div class="instagram-panel pn">
                  <i class="fa fa-instagram fa-4x"></i>
                  <p>@THISISYOU<br/> 5 min. ago
                  </p>
                  <p><i class="fa fa-comment"></i> 18 | <i class="fa fa-heart"></i> 49</p>
                </div>
              </div>
              <!-- /col-12 -->
            </div>
            <!-- /row -->            
          </div>
          <!-- /col-lg-9 END SECTION MIDDLE -->
          <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT
              *********************************************************************************************************************************************************** -->
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 ds">
            <!-- RECENT ACTIVITIES SECTION -->
            <h4 class="centered mt">RECENT ACTIVITY</h4>
            <!-- First Activity -->
            <div class="desc">
              <div class="thumb">
                <span class="badge bg-info"><i class="fa fa-clock-o"></i></span>
              </div>
              <div class="details">
                <p>
                  <muted>Just Now</muted>
                  <br/>
                  <a href="#">Paul Rudd</a> purchased an item.<br/>
                </p>
              </div>
            </div>
            <!-- Second Activity -->
            <div class="desc">
              <div class="thumb">
                <span class="badge bg-info"><i class="fa fa-clock-o"></i></span>
              </div>
              <div class="details">
                <p>
                  <muted>2 Minutes Ago</muted>
                  <br/>
                  <a href="#">James Brown</a> subscribed to your newsletter.<br/>
                </p>
              </div>
            </div>
            <!-- Third Activity -->
            <div class="desc">
              <div class="thumb">
                <span class="badge bg-info"><i class="fa fa-clock-o"></i></span>
              </div>
              <div class="details">
                <p>
                  <muted>3 Hours Ago</muted>
                  <br/>
                  <a href="#">Diana Kennedy</a> purchased a year subscription.<br/>
                </p>
              </div>
            </div>
            
            <!-- CALENDAR-->
            <div id="calendar">
              <div class="panel green-panel no-margin">
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
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to 365homeimprovement!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
        // (string | optional) the image to display on the left
        image: '/img/365logo.png',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 5000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>

</body>

</html>
