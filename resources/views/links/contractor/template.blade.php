@extends('layouts.app-custom')

@section('heading')
  @include('layouts.header')
  @include('layouts.navbar')
@endsection

@section('content')
  <section class="bg-links">
    <div class="container-fluid p-0">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
          <div class="banner-head mb-0">
            <img class="img-responsive img-fluid banner-bg" src="{{URL::to('/')}}/img/page-banner.jpg" alt="Page Banner"/>
            <div class="banner-overlay2">
              <h1 class="white text-title" style="margin-top: 4.2rem">Become a <span class="text-orange">Contractor</span></h1>
              <h6 class="text-center white">@</h6>
              <p class="text-center text-primary">Hausworth Nigeria Limited</p>
              <p class="text-center"><a href="{{route('register')}}" class="btn btn-sm btn-orange font-w-6">SIGNUP NOW</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
          <div class="my-3">
            <span class="mr-1"><a href="{{url('/')}}">Home</a></span>
            <i class="fa fa-angle-double-right"></i>
            <span class="mx-1"><a href="{{url('/contractors')}}">Contractor</a></span>
            <i class="fa fa-angle-double-right"></i>
            <span class="mx-1 text-orange">{{$contractors->company_name}}</span>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 bg-white p-2">
          <div class="inner-addon mb-5">
            <i class="fa fa-search text-orange"></i>
            <input type="search" placeholder="Search Category by Name..." style="color: white" class="bg-dark form-control searching" />
          </div>
          <ul>
            <button class="collapsible"><span class="mr-2"></span> ALL CATEGORIES</button>
            <div class="content">
            @foreach($categories as $category)
              <li class="text-white">{{$category->name}}</li>
              <div class="dropdown-divider"></div>
            @endforeach
            </div>
          </ul>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
          <div class="bg-white p-3">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h3 class="text-uppercase mb-2" style="font-weight: 600">{{$contractors->company_name}}</h3>
                <img src="{{$contractors->banner}}" class="img-responsive img-fluid height-400 w-100"/>
              </div>
            </div>
            <div class="row pb-5">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="my-4">
                  <h3 class="text-center">{{$contractors->desc_title}}</h3>
                  <p class="text-justify">{!! $contractors->description !!}</p>
                </div>
                <p>For more information about our products and services:</p>
                <p>Contact us on <span class="text-primary">{{$contractors->mobile_no}}</span></p>
                <p>Find us @ <span class="text-primary">{{$contractors->address}}</span> </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @include('layouts.footer-copyright')
@endsection

@section('footer')
  @include('layouts.footer')
@endsection 