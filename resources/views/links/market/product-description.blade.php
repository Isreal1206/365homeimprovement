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
            <span class="mx-2"><a href="{{url('/market_place/' . $subcategories->slug)}}">{{$subcategories->name}}</a></span>
            <i class="fa fa-angle-double-right"></i>
            <span class="mx-2"><a href="{{url('#')}}">{{$subcategories->sub_name}}</a></span>
          </div>
        </div>
      </div>
    </div>

    <div class ="container">
      <div class="row mb-5">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h2 class="text-center text-uppercase">{{$products->name}}</h2>
        </div>
      </div>

      <div class="row mb-5">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          
        </div>
      </div>
    </div>
  </section>
  @include('layouts.footer-home')
@endsection

@section('footer')
  @include('layouts.footer')
@endsection
