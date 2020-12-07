@extends('layouts.app-custom')

@section('heading')
  @include('layouts.header')
  @include('layouts.navbar')
@endsection

@section('content')
  <section>
    <div class="container-fluid p-0">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
          <div class="banner-head">
            <img class="img-responsive img-fluid banner-bg" src="{{URL::to('/')}}/img/page-banner.jpg" alt="Page Banner"/>
            <div class="banner-overlay pb-0">
            <h1 class="white text-center" style="font-size: 1.4rem; font-weight: 700">BUILD YOUR <span class="text-orange">CAREER</span></h1>
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
            <span class="mx-2"><a href="{{url('#')}}">Career</a></span>
          </div>
        </div>
        
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        @include('inc.messages')
          <h4 class="text-center text-uppercase" style="font-weight: 600">Career Opportunities</h4>
          <p class="mt-3 mb-5">If you thrive on challenge, passionate about ideas, love solving problems, and truly enjoy connecting with people, we encourage you to explore job opportunity available through <a href="{{url('/')}}"><strong>www.365homeimprovement.ng</strong></a>  (Hausworth Nigeria Limited).</p>

          <h5 class="text-center">We are interested in receiving CVs from the following professionals </h5>
          <ol>
            <li>ACCOUNTANTS</li>
            <li>SEO EXPERTS AND MARKETERS</li>
            <li>ANALYST AND ECONOMIST</li>
          </ol>

          <p class="mt-5">Career opportunities at <a href="{{url('/')}}"><strong>www.365homeimprovement.ng</strong></a> are not limited to the aforementioned professions only. We would be glad to receive CVs from applicants in other profession relevant to our core business units.</p>

          <p>It is important to state that some of the position would be available on part-time basis or as at when we need such.</p>

          <h5 class="text-center mt-5">To help us get started, click on your preferred job link below.</h5>
        </div>
      </div>

      <div class="row mb-5">
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 p-5">
          <div class="card border">
            <a href="{{ route('accountant') }}">
              <img class="img-responsive d-block mx-auto" src="{{url('img/bg-img/accountant.jpg')}}" alt="Accounting Icon"/>
              <p class="text-center text-bold bg-light mb-0 p-2">Accountant CV Upload</p>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 p-5">
          <div class="card border">
            <a href="{{ route('seo') }}">
              <img class="img-responsive d-block mx-auto" src="{{url('img/bg-img/seo.jpg')}}" alt="SEO Icon"/>
              <p class="text-center text-bold bg-light mb-0 p-2">SEO E&M CV Upload</p>
            </a>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 p-5">
          <div class="card border">
            <a href="{{ route('analyst') }}">
              <img class="img-responsive d-block mx-auto" src="{{url('img/bg-img/analyst.jpg')}}" alt="Analyst and Economist Icon"/>
              <p class="text-center text-bold bg-light mb-0 py-2">Analyst and Economist CV Upload</p>
            </a>
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


{{--<div>
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link" href="#account" role="tab" data-toggle="tab">Accountants</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#seo" role="tab" data-toggle="tab">SEO Experts and Marketers</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#analyst" role="tab" data-toggle="tab">Analyst and Economist</a>
    </li>
  </ul>
</div>

<!-- Tab panes -->
<div class="tab-content">
  <div role="tabpanel" class="tab-pane fade" id="account"></div>
  <div role="tabpanel" class="tab-pane fade" id="seo">@include('career.seo')</div>
  <div role="tabpanel" class="tab-pane fade" id="analyst">@include('career.analyst')</div>
</div>--}}
