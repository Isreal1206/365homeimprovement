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

    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
          <div class="alert alert-dark mt-3 mb-5">
            <span class="mr-2"><a href="{{url('/')}}">Home</a></span>
            <i class="fa fa-angle-double-right"></i>
            <span class="mx-2"><a href="{{route('market')}}">Market</a></span>
            <i class="fa fa-angle-double-right"></i>
            <span class="mx-2"><a href="{{url('#')}}">{{$subcategories->name}}</a></span>
          </div>
        </div>
      </div>
    </div>
    
    <div class ="container">
      <div class="row mb-5">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h1 class="text-center">{{$subcategories->sub_name}}</h1>
        </div>
      </div>

      <!--  recent article list row begins -->
      <div class="row mb-5">
        <!-- dynamic col-lg-3 begins -->
        @foreach($products as $product)
        @if()
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
            <div class="bg-white ">
              <div class="row p-2">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <a href="/market_place/{{$subcategories->slug}}/{{$product->id}}"><img src="{{$product->image_file}}" class="img-responsive img-fluid w-100 height-150 border-radius-custom" alt="Image"></a>
                  <div class="height-100">
                  <h6 class="height-40 text-uppercase text-bold my-2"><a href="/market_place/{{$subcategories->slug}}/{{$product->id}}">{{substr($product->description, 0, 48)}} {{strlen($product->description) > 45 ? "..." : ""}}</a></h6>
                  <small class="text-muted text-capitalize">Manufactured By: {{$product->manufacturer}}</small>
                  <p><small class="text-muted">Price: N{{$product->price}}</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach

        <!-- other col-lg-3 begins -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 mb-3">
          <div class="bg-white box-shadow-custom border-radius-custom">
            <div class="row p-2">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <a href ="#"><img src="/img/kitchen-design.jpg" class="img-responsive img-fluid height-150 border-radius-custom" alt="Image"></a>
                <div class="height-100">
                <h6 class="height-40 text-uppercase text-bold my-2"><a href="#">get the best out of your appliances</a></h6>
                <small class="text-muted text-capitalize">Manufactured By: David Villa</small>
                <p><small class="text-muted">Price: N</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 mb-3">
          <div class="bg-white box-shadow-custom border-radius-custom">
            <div class="row p-2">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <a href ="#"><img src="/img/kitchen-design.jpg" class="img-responsive img-fluid height-150 border-radius-custom" alt="Image"></a>
                <div class="height-100">
                <h6 class="height-40 text-uppercase text-bold my-2"><a href="#">Want to know the cost of asbestos removal?</a></h6>
                <small class="text-muted text-capitalize">Manufactured By: David Villa</small>
                <p><small class="text-muted">Price: N</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- recent article list row end -->

      <div class="row mb-5">
        <!-- first col-lg-3 begins -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 mb-3">
          <div class="bg-white box-shadow-custom border-radius-custom">
            <div class="row p-2">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <a href ="#"><img src="/img/kitchen-design.jpg" class="img-responsive img-fluid height-150 border-radius-custom" alt="Image"></a>
                <div class="height-100">
                <h6 class="height-40 text-uppercase text-bold my-2"><a href="#">Want to know the cost of asbestos removal?</a></h6>
                <small class="text-muted text-capitalize">Manufactured By: David Villa</small>
                <p><small class="text-muted">Price: N</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- second col-lg-3 begins -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 mb-3">
          <div class="bg-white box-shadow-custom border-radius-custom">
            <div class="row p-2">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <a href ="#"><img src="/img/kitchen-design.jpg" class="img-responsive img-fluid height-150 border-radius-custom" alt="Image"></a>
                <div class="height-100">
                <h6 class="height-40 text-uppercase text-bold my-2"><a href="#">Want to know the cost of asbestos removal?</a></h6>
                <small class="text-muted text-capitalize">Manufactured By: David Villa</small>
                <p><small class="text-muted">Price: N</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- third col-lg-3 begins -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 mb-3">
          <div class="bg-white box-shadow-custom border-radius-custom">
            <div class="row p-2">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <a href ="#"><img src="/img/kitchen-design.jpg" class="img-responsive img-fluid height-150 border-radius-custom" alt="Image"></a>
                <div class="height-100">
                <h6 class="height-40 text-uppercase text-bold my-2"><a href="#">Want to know the cost of asbestos removal?</a></h6>
                <small class="text-muted text-capitalize">Manufactured By: David Villa</small>
                <p><small class="text-muted">Price: N</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- fourth col-lg-3 begins -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 mb-3">
          <div class="bg-white box-shadow-custom border-radius-custom">
            <div class="row p-2">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <a href ="#"><img src="/img/kitchen-design.jpg" class="img-responsive img-fluid height-150 border-radius-custom" alt="Image"></a>
                <div class="height-100">
                <h6 class="height-40 text-uppercase text-bold my-2"><a href="#">Want to know the cost of asbestos removal?</a></h6>
                <small class="text-muted text-capitalize">Manufactured By: David Villa</small>
                <p><small class="text-muted">Price: N</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- end of row div -->
    </div> <!-- end of container div -->
  </section>

  @include('layouts.footer-home')
@endsection

@section('footer')
  @include('layouts.footer')
@endsection
