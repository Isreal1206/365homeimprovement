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
              <h1 class="white text-title" style="margin-top: 4.5rem">Become a <span class="text-orange">Marketer</span></h1>
              <h6 class="text-center white">@</h6>
              <p class="text-center text-primary">Hausworth Nigeria Limited</p>
              <p class="text-center"><a href="/3/signup" class="btn btn-sm btn-orange font-w-6">signup now</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container mb-5">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
          <div class="alert alert-dark mt-3 mb-5">
            <span class="mr-2"><a href="{{url('/')}}">Home</a></span>
            <i class="fa fa-angle-double-right"></i>
            <span class="mx-2"><a href="{{url('#')}}">Market</a></span>
          </div>
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
          <h3 class="text-title mb-4">SELL ON 365 HOME IMPROVEMENT</h3>
          <p class="text-jusify">Millions of home owners can’t wait to see what you have in store. Hausworth Nigeria Limited owners of 365 Home Improvementseeks to work with leading building materials producers and sellers in Nigeria and beyond in the marketing and sales of their products on our platform.
          Published online, 365Home Improvement is the one stop shop for property listing, building materials sales and removers industry in Nigeria.
          </p>
        </div>

        <div class ="col-xs-12 col-sm-12 col-md-12 col-lg-12 my-5">
          <h4 class="text-center mb-4"> BENEFITS OF BECOMING A CONTENT PROVIDER ON OUR PLATFORM</h4>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 mb-3">
              <img src="img/bg-img/money.jpg" alt="Image" class="d-block img-responsive img-fluid trainer_sidebar_image mb-2">
              <p class="text-center">MORE EARNINGS</p>
              <p class="text-jusify">Supplier set their price and earns ninety percent (90%) of the cost price of their product on our platform. </p>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 mb-3">
              <img src="img/bg-img/market.jpg" alt="Image" class="d-block img-responsive img-fluid trainer_sidebar_image mb-2">
              <p class="text-center">GREATER MARKETING AND PUBLICITY</p>
              <p class="text-jusify">Hausworth Nigeria Limited would ensure maximum marketing and publicity of your products on different platforms both online and offline.</p>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 mb-3">
              <img src="img/bg-img/payment.jpg" alt="Image" class="d-block img-responsive img-fluid trainer_sidebar_image mb-2">
               <p class="text-center">PAYMENT</p>
               <p class="text-jusify">The amount earned can be easily seen along with your payment and earning history (transaction history).
              Payment would be made into your account once the threshold of thirty thousand (N 30,000) is met.
              </p>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 mb-3">
              <img src="img/bg-img/others.jpg" alt="Image" class="d-block img-responsive img-fluid trainer_sidebar_image mb-2">
              <p class="text-center">OTHER BENEFITS INCLUDES</p>
              <p class="text-jusify">
              <i class="fa fa-check"></i> Be represented by knowledgeable sales professionals who know your products and the customers. <br>
              <i class="fa fa-check"></i> Pay no fees to join.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row my-5">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h4 class="text-title mb-2">Our Services</h4>
          <div class="line-title-8 mx-auto"></div>
        </div>
      </div>

      <div id="market-carousel" class="owl-carousel owl-arrow">
        <div class="carousel-item-a bg-white p-3">
          <div class="case-study-box">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 mb-5">
                <h5 class="mb-2"><strong>Bath Products</strong></h5>
                @foreach($marketers1 as $marketer)
                  <p class="py-1"><a href="/market_place/{{$marketer->slug}}">{{$marketer->sub_name}}</a></p>
                @endforeach
              </div>
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 mb-5">
                <h5 class="mb-2"><strong>Bedroom Products</strong></h5>
                @foreach($marketers2 as $marketer)
                  <p class="py-1"><a href="/market_place/{{$marketer->slug}}">{{$marketer->sub_name}}</a></p>
                @endforeach
              </div>
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 mb-5">
                <h5 class="mb-2"><strong>Furniture</strong></h5>
                @foreach($marketers3 as $marketer)
                  <p class="py-1"><a href="/market_place/{{$marketer->slug}}">{{$marketer->sub_name}}</a></p>
                @endforeach
              </div>
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 mb-5">
                <h5 class="mb-2"><strong>Holiday Decor</strong></h5>
                @foreach($marketers4 as $marketer)
                  <p class="py-1"><a href="/market_place/{{$marketer->slug}}">{{$marketer->sub_name}}</a></p>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      

        <div class="carousel-item-a bg-white p-3">
          <div class="case-study-box">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 mb-5">
                <h5 class="mb-2"><strong>Home Decor</strong></h5>
                @foreach($marketers5 as $marketer)
                  <p class="py-1"><a href="/market_place/{{$marketer->slug}}">{{$marketer->sub_name}}</a></p>
                @endforeach
              </div>
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 mb-5">
                <h5 class="mb-2"><strong>Home Improvement</strong></h5>
                @foreach($marketers6 as $marketer)
                  <p class="py-1"><a href="/market_place/{{$marketer->slug}}">{{$marketer->sub_name}}</a></p>
                @endforeach
              </div>
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 mb-5">
                <h5 class="mb-2"><strong>Housekeeping and Laundry</strong></h5>
                @foreach($marketers7 as $marketer)
                  <p class="py-1"><a href="/market_place/{{$marketer->slug}}">{{$marketer->sub_name}}</a></p>
                @endforeach
              </div>
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 mb-5">
                <h5 class="mb-2"><strong>Kitchen and Dining</strong></h5>
                @foreach($marketers8 as $marketer)
                  <p class="py-1"><a href="/market_place/{{$marketer->slug}}">{{$marketer->sub_name}}</a></p>
                @endforeach
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item-a bg-white p-3">
          <div class="case-study-box">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 mb-5">
                <h5 class="mb-2"><strong>Living Room Products</strong></h5>
                @foreach($marketers9 as $marketer)
                  <p class="py-1"><a href="/market_place/{{$marketer->slug}}">{{$marketer->sub_name}}</a></p>
                @endforeach
              </div>
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 mb-5">
                <h5 class="mb-2"><strong>Lighting</strong></h5>
                @foreach($marketers10 as $marketer)
                  <p class="py-1"><a href="/market_place/{{$marketer->slug}}">{{$marketer->sub_name}}</a></p>
                @endforeach
              </div>
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 mb-5">
                <h5 class="mb-2"><strong>Outdoor Products</strong></h5>
                @foreach($marketers11 as $marketer)
                  <p class="py-1"><a href="/market_place/{{$marketer->slug}}">{{$marketer->sub_name}}</a></p>
                @endforeach
              </div>
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 mb-5">
                <h5 class="mb-2"><strong>Storage and Organization</strong></h5>
                @foreach($marketers12 as $marketer)
                  <p class="py-1"><a href="/market_place/{{$marketer->slug}}">{{$marketer->sub_name}}</a></p>
                @endforeach
              </div>
            </div>
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
