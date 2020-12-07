@extends('layouts.app-custom')

@section('heading')
  @include('layouts.header')
  @include('layouts.navbar')
@endsection

@section('content')
  <section class="bg-links pb-5">
    <div class="container-fluid p-0">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
          <div class="banner-head mb-0">
            <img class="img-responsive img-fluid banner-bg" src="{{URL::to('/')}}/img/page-banner.jpg" alt="Page Banner"/>
            <div class="banner-overlay2">
              <h1 class="white text-title" style="margin-top: 5rem">Become a <span class="text-orange">Trainer</span></h1>
              <h6 class="text-center white">@</h6>
              <p class="text-center text-primary">Hausworth Nigeria Limited</p>
              <p class="text-center"><a href="/4/signup" class="btn btn-sm btn-orange font-w-6">signup now</a></p>
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
            <span class="mx-2"><a href="{{url('#')}}">Training</a></span>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h3 class="text-title mb-4">BECOME A TRAINER</h3>
          <p class="text-jusify">Hausworth Nigeria Limited owners of 365 home improvements seeks human resource development firms in different areas of home improvement with a view towards working with them in the provision of quality training services to our users.</p>
        </div>
      </div>
        
      <div class="row my-5">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h4 class="text-center mb-4"> BENEFITS OF BECOMING A TRAINER</h4>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
          <img src="img/bg-img/money.jpg" alt="Earnings_Image" width ="600px" height="400px">
          <p class="text-center">MORE EARNINGS</p>
          <p class="text-justify">Training company and trainer’s earns seventy percent (70%) of the cost price of the subscription on our platform. We take care of all the marketing and earn thirty percent (30%).</p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
          <img src="img/bg-img/market.jpg" alt="Marketing_Image"  width ="600px" height="400px">
          <p class="text-center">GREATER MARKETING AND PUBLICITY</p>
          <p class="text-justify">Hausworth Nigeria Limited would ensure maximum marketing and publicity of your trainings on different platforms both online and offline.
          Because we work with other training providers specializing in the different areas of interest, we would be able to attract different subscribers with possible interest in your contents.</p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
          <img src="img/bg-img/payment.jpg" alt="Payment_Image" width ="600px" height="400px">
          <p class="text-center">PAYMENT</p>
          <p class="text-justify">The amount earned can be easily seen along with your payment and earning history (transaction history).
          The payment would be remitted upon completion of the training. Payment would be made into your account directly.
          In order to become a training provider on our platform, please do provide us with the following details</p>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h4 class="text-title text-left mb-2">Latest trainings</h4>
          <div class="line-title-8"></div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
          @if(count($trainings) > 0)
          <div class="bg-white box-shadow-custom border-radius-custom">
            @foreach($trainings as $trainer)
            <div class="row p-3">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                <a href ="/training/{{$trainer->trainer_id}}"><img src="{{$trainer->image_file}}" class="img-responsive img-fluid height-100 w-100 border-radius-custom" alt="Image"></a>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                <a href="/training/{{$trainer->trainer_id}}"><h5 class="text-bold text-orange mb-0">{{$trainer->organization}}</h5></a>
                <span class="text-muted">{{$trainer->created_at->format ('M, d Y.')}} {{$trainer->fullnames}}</span>
                <p class="text-justify text-black mb-0"><i class="fa fa-map-marker mr-1"> {{$trainer->address}} {{$trainer->city}}.</i></p>
                 <span class="text-orange"><i class="text-muted fa fa-building-o"> {{$trainer->job_title}}</i></span>
              </div>
            </div>
            <div class="dropdown-divider"></div>
            @endforeach
          </div>
          @else
            <div class="row p-3">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                <h4>Post not Found!</h4>
              </div>
            </div>
          @endif
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
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

              <small class="text-justify">
              I agree to the <a class="text-primary" target="_blank" href="{{route('tos')}}">Terms of Use</a> and <a class="text-primary" target="_blank" href="{{route('privacy')}}">Privacy Policy.</a></small>
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

{{--<div class="row">
  @foreach($trainings as $trainer)
  <div class="col-12 col-sm-12 col-md-12 col-lg-4">
    <div class="position-relative text-center mb-2">
      <img class="img-responsive img-fluid" src="{{URL::to('/')}}/img/page-banner.jpg" alt="Page Banner" style="height: 30vh" />
      <div class="banner-overlay2 py-5">
        <h4 class="text-footer text-uppercase">{{$trainer->organization}}</h4>
        <h6 class="text-white"><i class="fa fa-map-marker mr-1"></i>{{$trainer->address}}, {{$trainer->city}}.</h6>
        <h6 class="text-white"><i class="fa fa-envelope mr-1"></i>{{$trainer->email}}</h6>
        <a href="training/trainer/{{$trainer->id}}" class="btn btn-primary btn-sm text-blink">Click here<i class="fa fa-angle-double-right ml-1"></i></a>
      </div>
    </div>
  </div>
  @endforeach
</div>--}}
