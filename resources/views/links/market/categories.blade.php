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
            @if($cat->name == $cat1->name)
            <span class="mx-2"><a href="{{url('#')}}">{{$cat1->name}}</a></span>
            @elseif($cat->name == $cat2->name)
            <span class="mx-2"><a href="{{url('#')}}">{{$cat2->name}}</a></span>
            @elseif($cat->name == $cat3->name)
            <span class="mx-2"><a href="{{url('#')}}">{{$cat3->name}}</a></span>
            @elseif($cat->name == $cat4->name)
            <span class="mx-2"><a href="{{url('#')}}">{{$cat4->name}}</a></span>
            @elseif($cat->name == $cat5->name)
            <span class="mx-2"><a href="{{url('#')}}">{{$cat5->name}}</a></span>
            @elseif($cat->name == $cat6->name)
            <span class="mx-2"><a href="{{url('#')}}">{{$cat6->name}}</a></span>
            @elseif($cat->name == $cat7->name)
            <span class="mx-2"><a href="{{url('#')}}">{{$cat7->name}}</a></span>
            @elseif($cat->name == $cat8->name)
            <span class="mx-2"><a href="{{url('#')}}">{{$cat8->name}}</a></span>
            @elseif($cat->name == $cat9->name)
            <span class="mx-2"><a href="{{url('#')}}">{{$cat9->name}}</a></span>
            @elseif($cat->name == $cat10->name)
            <span class="mx-2"><a href="{{url('#')}}">{{$cat10->name}}</a></span>
            @elseif($cat->name == $cat11->name)
            <span class="mx-2"><a href="{{url('#')}}">{{$cat11->name}}</a></span>
            @elseif($cat->name == $cat12->name)
            <span class="mx-2"><a href="{{url('#')}}">{{$cat12->name}}</a></span>
            @endif
          </div>
        </div>
      </div>
    </div>
    
    <div class ="container">
      <div class="row mb-5">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          @if($cat->name == $cat1->name)
          <h2 class="text-center">{{$cat1->name}}</h2>
          @elseif($cat->name == $cat2->name)
          <h2 class="text-center">{{$cat2->name}}</h2>
          @elseif($cat->name == $cat3->name)
          <h2 class="text-center">{{$cat3->name}}</h2>
          @elseif($cat->name == $cat4->name)
          <h2 class="text-center">{{$cat4->name}}</h2>
          @elseif($cat->name == $cat5->name)
          <h2 class="text-center">{{$cat5->name}}</h2>
          @elseif($cat->name == $cat6->name)
          <h2 class="text-center">{{$cat6->name}}</h2>
          @elseif($cat->name == $cat7->name)
          <h2 class="text-center">{{$cat7->name}}</h2>
          @elseif($cat->name == $cat8->name)
          <h2 class="text-center">{{$cat8->name}}</h2>
          @elseif($cat->name == $cat9->name)
          <h2 class="text-center">{{$cat9->name}}</h2>
          @elseif($cat->name == $cat10->name)
          <h2 class="text-center">{{$cat10->name}}</h2>
          @elseif($cat->name == $cat11->name)
          <h2 class="text-center">{{$cat11->name}}</h2>
          @elseif($cat->name == $cat12->name)
          <h2 class="text-center">{{$cat12->name}}</h2>
          @endif
        </div>
      </div>

      <!--  recent article list row begins -->
      <div class="row mb-5">
        <!-- dynamic col-lg-3 begins -->
        @foreach($categories as $category)
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 mb-3">
            <div class="bg-white ">
              <div class="row p-2">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <a href="#"><img src="/img/slide-3.jpg" class="img-responsive img-fluid w-100 height-150 border-radius-custom" alt="Image"></a>
                  <div class="height-100">
                  <h6 class="height-40 text-uppercase text-bold my-2"><a href="/market_place/{{$category->slug}}">{{$category->sub_name}}</a></h6>
                  <small class="text-muted text-capitalize"><i class="fa fa-check mr-2"></i>Hausworth Nigeria Limited</small>
                  <p><small class="text-muted"><i class="fa fa-list-alt mr-2"></i>{{$category->name}}</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div><!-- recent article list row end -->
    </div> <!-- end of container div -->
  </section>

  @include('layouts.footer-home')
@endsection

@section('footer')
  @include('layouts.footer')
@endsection
