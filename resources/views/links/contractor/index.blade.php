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
            <span class="mx-1 text-orange">Contractors</span>
          </div>
        </div>
      </div>
    </div>

    <div class="container pb-5">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 bg-white p-2">
          <div class="inner-addon mb-5">
            <i class="fa fa-search text-orange"></i>
            <input type="search" placeholder="Search Category by Name..." style="color: white" class="bg-dark form-control searching" />
          </div>
          <ul>
            <!-- <li>ALL CATEGORIES</li> -->
           <button class="collapsible"><span class="mr-2"></span> ALL CATEGORIES</button>
            <div class="content">
            @foreach($categories as $category)
              <li>{{$category->name}}</li>
              <div class="dropdown-divider"></div>
            @endforeach
          </div>
          </ul>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
          <div class="bg-white">
            @foreach($contractors as $contractor)
            <div class="row p-3">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                <img src="{{$contractor->banner}}" class="img-responsive img-fluid height-150 border-radius-custom" alt="Image">
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                <a href="/contractors/{{$contractor->contractor_id}}"><h5 class="text-bold text-orange mb-0">{{$contractor->company_name}}</h5></a>
                <span class="text-muted">{{$contractor->created_at->format ('M d, Y.')}} {{$contractor->fullname}}</span>
                <p class="text-justify text-black my-2">{!! substr($contractor->description, 0, 60) !!}{!! strlen($contractor->description) > 60 ? "..." : "" !!}
                <small><a href="/contractors/{{$contractor->contractor_id}}" class="text-primary"> Read More</a></small></p>
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
