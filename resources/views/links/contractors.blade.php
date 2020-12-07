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
              <h1 class="text-white text-title" style="margin-top: 5rem">Become a <span class="text-orange">Contractor</span></h1>
              <h6 class="text-center text-white">@</h6>
              <p class="text-center text-primary">Hausworth Nigeria Limited</p>
              <p class="text-center"><a href="/1/signup" class="btn btn-sm btn-orange font-w-6">signup now</a></p>
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
            <span class="mx-2"><a href="{{url('#')}}">Contractors</a></span>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 p-3 bg-white border border-right">
          <div class="inner-addon mb-5">
            <i class="fa fa-search text-orange"></i>
            <input type="search" placeholder="Search Category by Name..." style="color: white" class="bg-dark form-control searching" />
          </div>
          <ul>
            <li>ALL CATEGORIES</li>
            <div class="dropdown-divider"></div>
            @foreach($categories as $category)
              <li>{{$category->name}}</li>
              <div class="dropdown-divider"></div>
            @endforeach
          </ul>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
          <div class="bg-white">
            @foreach($contractors as $contractor)
            <div class="row p-3">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                <img src="{{$contractor->logo}}" class="img-responsive img-fluid height-150 border-radius-custom" alt="Image">
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                <a href="/contractors/{{$contractor->slug}}"><h5 class="text-bold text-orange mb-0">{{$contractor->company_name}}</h5></a>
                <span class="text-muted">{{$contractor->created_at->format ('M d, Y.')}} {{$contractor->firstname}} {{$contractor->lastname}}</span>
                <p class="text-justify text-black my-2">
                {!! substr($contractor->description, 0, 50) !!}{!! strlen($contractor->description) > 45 ? "..." : "" !!} 
                <small><a href="/contractors/{{$contractor->slug}}" class="text-primary"> Read More</a></small></p>
                <p class="my-0"><i class="fa fa-map-marker mr-1"></i>{{$contractor->address}}</p>
                <a href="#"><i class="text-muted fa fa-building-o"></i> <span class="text-orange"> {{$contractor->job_category}}</span></a>
              </div>
            </div>

            <div class="dropdown-divider"></div>

            @endforeach
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
