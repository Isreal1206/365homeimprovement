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
            <h1 class="white text-center" style="font-size: 1.4rem; font-weight: 700">COST <span class="text-orange">GUIDE</span></h1>
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
            <span class="mx-2"><a href="{{url('#')}}">Costguide</a></span>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h5>Top Aritcles</h5>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
          <div class="bg-white height-250 border-left-custom border-orange box-shadow-custom border-radius-custom p-2">
            <img src="/img/kitchen-design.jpg" class="img-responsive img-fluid height-150" alt="Image">
            <div class="height-100 pt-2">
              <p class="mb-0">Interior Design</p>
              <h6 class="text-orange text-bold text-justify">Cost of Interior Design</h6>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
          <div class="bg-white height-250 border-left-custom border-orange box-shadow-custom border-radius-custom p-2">
            <img src="/img/kitchen-design.jpg" class="img-responsive img-fluid height-150" alt="Image">
            <div class="height-100 pt-2">
              <p class="mb-0">Kitchen Design</p>
              <h6 class="text-orange text-bold text-justify">Cost of Kitchen Design</h6>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
          <div class="bg-white height-250 border-left-custom border-orange box-shadow-custom border-radius-custom p-2">
            <img src="/img/kitchen-design.jpg" class="img-responsive img-fluid height-150" alt="Image">
            <div class="height-100 pt-2">
              <p class="mb-0">Bathroom Accessories</p>
              <h6 class="text-orange text-bold text-justify">Cost of Bathroom Accessories</h6>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
          <div class="bg-white height-250 border-left-custom border-orange box-shadow-custom border-radius-custom p-2">
            <img src="/img/kitchen-design.jpg" class="img-responsive img-fluid height-150" alt="Image">
            <div class="height-100 pt-2">
              <p class="mb-0">Wardrobes</p>
              <h6 class="text-orange text-bold text-justify">Cost of Wardrobes</h6>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h4 class="">Latest articles from 365homeimprovement</h4>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
          <div class="bg-white box-shadow-custom border-radius-custom">
            <div class="row p-3">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                <img src="/img/kitchen-design.jpg" class="img-responsive img-fluid height-150 border-radius-custom" alt="Image">
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                <a href="#"><h5 class="text-bold text-orange mb-0">Get to know the cost price of concrete resurfacing.</h5></a>
                <span class="text-muted">Sept 20, 2019. Daniel Wilson</span>
                <p class="text-justify text-black mt-3">Want to know how much it will cost you to resurface your concrete? You are currently at the right place because we deliver the best services...</p>
                <a href="#"><i class="text-muted fa fa-building-o"></i> <span class="text-orange"> Concrete Resurfacing</span></a>
              </div>
            </div>

            <div class="dropdown-divider"></div>

            <div class="row p-3">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                <img src="/img/kitchen-design.jpg" class="img-responsive img-fluid height-150 border-radius-custom" alt="Image">
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                <a href="#"><h5 class="text-bold text-orange mb-0">Get to know the cost price of asbestos removal.</h5></a>
                <span class="text-muted">Sept 17, 2019. John Adewale</span>
                <p class="text-justify text-black mt-3">Want to know how much it will cost you to remove your asbestos? You are currently at the right place because we deliver the best services...</p>
                <a href="#"><i class="text-muted fa fa-tags"></i> <span class="text-orange"> Asbestos Removal</span></a>
              </div>
            </div>

            <div class="dropdown-divider"></div>

            <div class="row p-3">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                <img src="/img/kitchen-design.jpg" class="img-responsive img-fluid height-150 border-radius-custom" alt="Image">
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                <a href="#"><h5 class="text-bold text-orange mb-0">Get to know the cost price of window repairs.</h5></a>
                <span class="text-muted">Sept 16, 2019. Daniel Wilson</span>
                <p class="text-justify text-black mt-3">Want to know how much it will cost you to repair your window(s)? You are currently at the right place because we deliver the best services...</p>
                <a href="#"><i class="text-muted fa fa-tags"></i> <span class="text-orange"> Window Repairs</span></a>
              </div>
            </div>

            <div class="dropdown-divider"></div>

            <div class="row p-3">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                <img src="/img/kitchen-design.jpg" class="img-responsive img-fluid height-150 border-radius-custom" alt="Image">
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                <a href="#"><h5 class="text-bold text-orange mb-0">Get to know the cost price of shower repairs.</h5></a>
                <span class="text-muted">Aug 30, 2019. Mike Badmus</span>
                <p class="text-justify text-black mt-3">Want to know how much it will cost you to repair your shower? You are currently at the right place because we deliver the best services...</p>
                <a href="#"><i class="text-muted fa fa-tags"></i> <span class="text-orange"> Shower Repairs</span></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
          <div class="bg-white box-shadow-custom border-radius-custom p-3 mb-5">
            <p class="text-bold">Search articles</p>
            <input type="text" name="search" placeholder="Search all articles" class="form-control mb-3">
            <button class="btn btn-block btn-orange">Search</button>
          </div>

          @if($flash = session('newsletter'))
          <div class="alert alert-success" role="alert">
            {{$flash}}
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
