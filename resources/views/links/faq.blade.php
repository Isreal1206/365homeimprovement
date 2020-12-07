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
            <h1 class="white text-center" style="font-size: 1.4rem; font-weight: 700">FIND ANSWERS TO YOUR <span class="text-orange">QUESTIONS </span>HERE</h1>
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
            <span class="mx-2"><a href="{{url('#')}}">FAQ</a></span>
          </div>
        </div>

        <div class="col-md-12 col-lg-12 mb-3">
          <div class="text-head">
            <h1 class="title-page text-black text-center">Frequently Asked <span class="text-orange">Questions</span></h1>
          </div>
        </div>

        <div class="col-md-12 col-lg-12 mb-3">
          <p>Here you can find answers to basic questions about the site and troubleshoot some common issues. If there is anything we missed, or for any other questions, please do contact us using any of the means below</p>
        </div>

        <div class="col-sm-8 col-md-8 col-lg-8 mb-3">
          <p class="collapsible"><span class="mr-2">1.</span> 365 Home Improvement Policies</p>
          <div class="content mb-1">
            <p>No Content.</p>
          </div>
          <p class="collapsible"><span class="mr-2">2.</span> About 365 Home Improvement</p>
          <div class="content mb-1">
            <p>No Content.</p>
          </div>
          <p class="collapsible"><span class="mr-2">3.</span> Account Registration</p>
          <div class="content mb-1">
            <p>No Content.</p>
          </div>
          <p class="collapsible"><span class="mr-2">4.</span> General Queries</p>
          <div class="content mb-1">
            <p>No Content.</p>
          </div>
          <p class="collapsible"><span class="mr-2">5.</span> Contractors</p>
          <div class="content mb-1">
            <p>No Content.</p>
          </div>
          <p class="collapsible"><span class="mr-2">6.</span> Home Owners</p>
          <div class="content mb-1">
            <p>No Content.</p>
          </div>
          <p class="collapsible"><span class="mr-2">7.</span> Suppliers</p>
          <div class="content mb-1">
            <p>No Content.</p>
          </div>
          <p class="collapsible"><span class="mr-2">8.</span> Trainings</p>
          <div class="content mb-1">
            <p>No Content.</p>
          </div>
        </div>

        <div class="col-md-12 col-lg-12">
          <p>For more informations about your questions:</p>
          <p> <strong> E-mail: </strong> hello@365homeimprovement.ng </p>
          <p> <strong> Call Us: </strong> +2348033782777 </p>
        </div>
      </div>
    </div>
  </section>

  @include('layouts.footer-home')
@endsection

@section('footer')
  @include('layouts.footer')
@endsection 
