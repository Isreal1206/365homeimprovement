@extends('layouts.app-custom')

@section('heading')
  @include('layouts.header')
  @include('layouts.navbar')
@endsection

@section('content')
  <section class="bg-links pb-5">
    <div class="container-fluid p-0">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
          <div class="banner-head">
            <img class="img-responsive img-fluid banner-bg" src="{{URL::to('/')}}/img/page-banner.jpg" alt="Page Banner"/>
            <div class="banner-overlay pb-0">
            <h1 class="white text-center" style="font-size: 1.4rem; font-weight: 700">GET <span class="text-orange">NEWSLETTER </span>FROM 365HOMEIMPROVEMENT</h1>
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
            <span class="mx-2"><a href="{{url('#')}}">Newsletter</a></span>
          </div>
        </div>
        
        <div class="col-12 col-sm-12 col-md-10 col-lg-10 mx-auto">
          <p class="text-center">Join 365homeimprovement Newsletter today and never miss out on new updates from our website.</p>
        </div>

        <div class="col-12 col-sm-12 col-md-4 col-lg-4 mx-auto">
          @if($flash = session('newsletter'))
          <div class="alert alert-success" role="alert">
            <i class="fa fa-check"></i> {{$flash}}
          </div>
          @endif

          <div class="bg-white box-shadow-custom border-radius-custom p-2">
            <p class="text-bold text-center mb-0">Newsletter Subscription</p>
            <div class="dropdown-divider"></div>
            <form method="post" action="{{route('newsletter.store')}}" role="form">
              {{csrf_field()}}
              <div class="pt-2">
                <input type="text" name="name" placeholder="Name" class="form-control">
                <small class="text-danger">{{ $errors->first('name') }}</small>
              </div>

              <div class="py-3">
                <input type="text" name="mobile" placeholder="Telephone" class="form-control">
                <small class="text-danger">{{ $errors->first('mobile') }}</small>
              </div>

              <div class="pb-3">
                <input type="email" name="email" placeholder="Email Address" class="form-control">
                <small class="text-danger">{{ $errors->first('email') }}</small>
              </div>

              <input type="submit" class="btn btn-block btn-orange text-uppercase" value="Subscribe">

              <p class="text-center text-justify"><small>
              I agree to the <a class="text-primary" target="_blank" href="{{route('tos')}}">Terms of Use</a> and <a class="text-primary" target="_blank" href="{{route('privacy')}}">Privacy Policy.</a></small></p>
            </form>
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