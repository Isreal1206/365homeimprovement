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
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
            <h2>Payment Details</h2>
            @if($flash = session('payment'))
              <div class="alert alert-success text-center mb" role="alert">
                <i class="fa fa-check"></i> {{$flash}}
              </div>
            @endif
            @guest
            <p> You are not Logged in as a user. please <a href="{{route('login')}}">Login</a> or <a href="/1/signup">Register</a> as a Contractor.
            @else
            <table class="table">
              <tr>
                <th>Payment ID:</th>
                <td>{{$payment->payment_id}}</td>
              </tr>

              <tr>
                <th>Plan:</th>
                <td>{{$payment->plan}}</td>
              </tr>

              <tr>
                <th>Status:</th>
                <td>{{$payment->status}}</td>
              </tr>

              <tr>
                <th>Email:</th>
                <td>{{$payment->email}}</td>
              </tr>

              <tr>
                <th>Currency:</th>
                <td>{{$payment->currency}}</td>
              </tr>

              <tr>
                <th>Amount:</th>
                <td>{{$payment->amount}}</td>
              </tr>

              <tr>
                <th>Fees:</th>
                <td>{{$payment->fees}}</td>
              </tr>

              <tr>
                <th>Channel:</th>
                <td>{{$payment->channel}}</td>
              </tr>

              <tr>
                <th>Message:</th>
                <td>{{$payment->message}}</td>
              </tr>

              <tr>
                <th>Paid At:</th>
                <td>{{$payment->paid_at}}</td>
              </tr>
            </table>

            <p>Click on the button below to proceed to dashboard.</p>

            <a href="{{route('contractor.dashboard')}}"><button class="btn btn-primary d-block justify-content-center">Continue</button></a>

            @endguest
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

</body>

</html>