@extends('layouts.app-custom')

@section('heading')
  @include('layouts.header')
  @include('layouts.navbar')
@endsection

@section('content')
  <section>
    <div class="container-fluid p-0">  
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
          <div class="banner-head">
            <img class="img-responsive img-fluid banner-bg" src="{{URL::to('/')}}/img/page-banner.jpg" alt="Page Banner"/>
            <div class="banner-overlay pb-0">
            <h1 class="white text-center" style="font-size: 1.4rem; font-weight: 700">CONTACT <span class="text-orange">US</span></h1>
            </div>
          </div>
        </div>
      </div>
    </div>          
       
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
          <div class="alert alert-dark mt-3 mb-5">
            <span class="mr-2"><a href="{{url('/')}}">Home</a></span>
            <i class="fa fa-angle-double-right"></i>
            <span class="mx-2"><a href="{{url('#')}}">Contact</a></span>
          </div>
        </div>

        <div class="col-12 col-sm-12 col-md-7 col-lg-7">
          <div class="bg-white p-3">
            <div class="mb-2">
              <p>Thank you for your interest in 365HomeImprovement. Please feel free to fill out our information request form or use any of the methods at the right hand side of this page to get in touch with us.</p>
            </div>
            @if($flash = session('contact'))
            <div class="alert alert-success">
              <i class="fa fa-check"></i> {{$flash}}
            </div>
            @endif
          
            <form action="" method="post" role="form" class="roboto">
              {{ csrf_field() }}            
              <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 form-group my-3 {{ $errors->has('name') ? ' has-error' : '' }}">
                  <input type="text" name="name" class="form-control form-control-lg" placeholder="Name">
                  <small class="text-danger">{{ $errors->first('name') }}</small>  
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-6 form-group my-3">
                  <input name="mobile" type="text" class="form-control form-control-lg" placeholder="Mobile Number">
                  <small class="text-danger">{{ $errors->first('mobile') }}</small>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 form-group my-3">
                  <input name="email" type="email" class="form-control form-control-lg" placeholder="Email Address">
                  <small class="text-danger">{{ $errors->first('email') }}</small>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 form-group my-3">
                  <input type="text" name="subject" class="form-control form-control-lg" placeholder="Subject">
                  <small class="text-danger">{{ $errors->first('subject') }}</small>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 form-group my-3">
                  <textarea name="comment" class="form-control form-control-lg noresize" name="message" rows="6" placeholder="Comment"></textarea>
                  <small class="text-danger">{{ $errors->first('comment') }}</small>
                </div>
                <div class="col-md-12 form-group my-3">
                  <button type="submit" class="btn btn-lg btn-orange">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>

        <div class="col-12 col-sm-12 col-md-4 offset-md-1 col-lg-4 offset-lg-1">
          <div class="icon-box section-b2">
            <div class="icon-box-icon">
              <span class="ion-ios-paper-plane"></span>
            </div>
            <div class="icon-box-content table-cell">
              <div class="icon-box-title">
                <h4 class="icon-title">Say Hello</h4>
              </div>
              <div class="icon-box-content">
                <p class="mb-1">Email:
                  <span class="color-a">hello@365homeimprovement.ng</span>
                </p>
                <p class="mb-1">Phone:
                  <span class="color-a">+234 (0) 8033782777; +234 (01) 29 52 413</span>
                </p>
              </div>
            </div>
          </div>
          <div class="icon-box section-b2">
            <div class="icon-box-icon">
              <span class="ion-ios-pin"></span>
            </div>
            <div class="icon-box-content table-cell">
              <div class="icon-box-title">
                <h4 class="icon-title">Find us in</h4>
              </div>
              <div class="icon-box-content">
                <p class="mb-1">
                  61-65 Egbe- Isolo Road, Iyana Ejigbo Shopping Arcade.
                  <br><br> Block C, Suite 39, Iyana Ejigbo Bus Stop, Ejigbo, Lagos.
                </p>
              </div>
            </div>
          </div>
        </div>

        {{-- <div class="col-sm-12 mt-5">
          <div class="contact-map box">
            <div id="map" class="contact-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.98731968482413!3d40.75889497932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes+Square!5e0!3m2!1ses-419!2sve!4v1510329142834"
                width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </div> --}}

        <div class="col-12 col-sm-12 col-md-12 col-lg-12 my-5">
          <div class="contact-map box border border-light">
            <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=iyana%20ejigbo%20bus%20stop&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" allowfullscreen></iframe><a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{text-align:right;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @include('layouts.footer-home')
@endsection

@section('footer')
  @include('layouts.footer')
@endsection 
