@extends('layouts.app-custom')

@section('heading')
  @include('layouts.header')
  @include('layouts.navbar')
@endsection

@section('content')
  <section class="bg-links">
    <div class="container-fluid p-0">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
          <div class="banner-head">
            <img class="img-responsive img-fluid banner-bg" src="{{URL::to('/')}}/img/page-banner.jpg" alt="Page Banner"/>
            <div class="banner-overlay pb-0">
            <h1 class="white text-center" style="font-size: 1.4rem; font-weight: 700">NEWS <span class="text-orange">AND </span>PRESS RELEASE</h1>
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
            <span class="mx-2"><a href="{{url('#')}}">News and Press Release</a></span>
          </div>
        </div>
      </div>
        
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
          <p>Get Access to the very latest news and press release from 365homeimprovement.</p>
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-8 mb-5">
          <div class="bg-white box-shadow-custom p-3">
            <img class="img-responsive img-fluid height-400 w-100" src="{{URL::to('/')}}/img/post-single.jpg" alt="Image"/>
            <div class="text-center my-3 text-uppercase">
              <h4 class="text-bold">Fast and Accurate Bids For Leads</h4>
            </div>
            <div class="news-content text-justify">
              <p>You have a small team or own a large company, having a constant stream of high-quality prospects is the key to maintaining a consistent cash flow and a healthy business.</p>

              <p>The challenge is – where are your customers? What’s the best way to get in front of them when they’re looking for a home improvement contractor?</p>

              <p>Most of today’s consumers search for local service providers online. They’d find the name of a few local contractors on Google, read some online reviews, visit their websites, and request a quote.</p>

              <p>The key to getting found by prospects is to make sure that your website shows up on the first page of relevant local search results.</p>

              <p>Unfortunately, many home improvement contractors fall behind in their prospecting efforts because they don’t have the time and resources to spend on online marketing.</p>

              <p>Thankfully, there are many lead generation services to which you can outsource your marketing activities.</p>

              <p>Some of these vendors drive traffic to your website, on which potential clients submit their inquiries.</p>

              <p>Others use online marketing techniques to attract prospects to their platforms, on which the visitors submit project details. These vendors will then verify the leads and sell them to contractors.</p>
            </div>
            <div class="news-footer">
              <p class="mb-0">Posted by Sebastian Desmond</p>
              <p class="text-muted mb-0"> April 4, 2019.</p>
              <a href="#"><i class="text-muted fa fa-tags"></i> <span class="text-orange"> Leads</span></a>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-5">

          <div class="card box-shadow-custom py-2 mb-5">
            <p class="title-sub mb-0">Latest Articles</p>

            <div class="dropdown-divider"></div>
            
            <a class="np-articles px-4 text-black" href="{{url('#')}}">Finding the right contractor is fast, easy and free!</a>

            <div class="dropdown-divider"></div>

            <a class="np-articles px-4 text-black" href="{{url('#')}}">Best Way to Design your Home</a>

            <div class="dropdown-divider"></div>

            <a class="np-articles px-4 text-black" href="{{url('#')}}">NAF loses airman in parachuting accident in Kaduna</a>

            <div class="dropdown-divider"></div>

            <a class="np-articles px-4 text-black" href="{{url('#')}}">Subscribe to our Newsletter Report</a>
            
            <div class="dropdown-divider"></div>

            <a class="np-articles px-4 text-black" href="{{url('#')}}">Online Marketing Techniques</a>

            <div class="dropdown-divider"></div>

            <a class="np-articles px-4 text-black" href="{{url('#')}}">FG slashes unity schools’ tuition fees</a>

            <div class="dropdown-divider"></div>

            <a class="np-articles px-4 text-black" href="{{url('#')}}">Nigerian Women Warned Not To Come To Britain In Government Campaign</a>

            <div class="dropdown-divider"></div>

            <a class="np-articles px-4 text-black" href="{{url('#')}}"> How To Become President Without WAEC Certificate - Festus Keyamo</a>

            <div class="dropdown-divider"></div>

            <a class="np-articles px-4 text-black" href="{{url('#')}}">Get real-time updates about local jobs</a>

            <div class="dropdown-divider"></div>

            <a class="np-articles px-4 text-black" href="{{url('#')}}">Discover how 365homeimprovement can help your business grow</a>

            <div class="dropdown-divider"></div>

            <a class="np-articles px-4 text-black" href="{{url('#')}}">Find answers to basic questions about 365homeimprovement</a>

            <div class="dropdown-divider"></div>

            <a class="np-articles px-4 text-black" href="{{url('#')}}">Get the Best Quotes from our Contractors</a>
          </div>

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