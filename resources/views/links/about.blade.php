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
            <h1 class="white text-center" style="font-size: 1.4rem; font-weight: 700"><span class="text-orange">ABOUT</span> 365HOMEIMPROVEMENT</h1>
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
            <span class="mx-2"><a href="{{url('#')}}">About</a></span>
          </div>
        </div>
      </div>
        
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h1 class="text-title mb-4">About Us</h1>
          <ul class="custom-bullet-list">
            <li class="bullet-list mb-3"> 365 Home Improvement is a lead generation company, designed to help home improvement contractors grow their businesses by putting them in contact with homeowners looking for work, with the hope this will lead to contractors landing jobs and seeing returns on their investment.</li>
            <li class="bullet-list mb-3">365 Home Improvement also stocks the very largest and latest home improvement products in Nigeria.</li>
            <li class="bullet-list mb-3"> 365 Home Improvement is own by Hausworth Nigeria Limited. The firm was registered with the Corporate Affairs Commission, Federal Republic of Nigeria on 7thday of January, 2015 in accordance with Companies and Allied Matters Act 1990 (pursuant to section 659).
            <li class="bullet-list mb-3">Our perspective is unique and our approach is refreshing. </li>
            <li class="bullet-list mb-3"> www.365homeimprovement.ng is part of the Hausworth Nigeria Limited family of businesses, which includes several brands such as </li>
            <li class="bullet-list mb-3"> 365 Property Portal --- www.365propertyportal.com (Property listing, building materials sales and movers in Nigeria) </li>
            <li class="bullet-list mb-3"> Our vision is to be a strong and visible global brand in the industries we operate in by providing services that adds value to our client’s business and resources to develop their business into a strong and visible global brand. </li>
          </ul>
        </div>
      </div>
    
      <div class="row my-4">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
          <h3 class="text-center" style="font-weight: 600">Meet Our Team</h3>
        </div>
      </div>
    
      <div class="row mb-5 d-flex justify-content-around">
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-3">
          <div class="team-box px-3">
            <img class="img-responsive d-block mx-auto rounded-circle" src="{{URL::to('/')}}/img/mot1.jpg" alt=""/>
            <div>
              <h4 class="text-bold">Victor Obi</h4>
              <i class="text-center">Managing Director</i>
              <p class="text-justify mt-3">Victor is a specialist in Marketing & Sales. He is an expert in advising clients on both online and offline marketing...</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-3">
          <div class="team-box px-3">
            <img class="img-responsive d-block mx-auto rounded-circle" src="{{URL::to('/')}}/img/mot2.jpg" alt=""/>
            <div>
              <h4 class="text-bold">Stella Okeke</h4>
              <i class="text-center">Client Service Director</i>
              <p class="text-justify mt-3">Stella advises companies on emerging online opportunities and how to embrace media & digital marketing solutions...</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-3">
          <div class="team-box px-3">
            <img class="img-responsive d-block mx-auto rounded-circle" src="{{URL::to('/')}}/img/mot3.jpg" alt=""/>
            <div>
              <h4 class="text-bold">Sunday Williams</h4>
              <i class="text-center">Creative Director</i>
              <p class="text-justify mt-3">Sunday is a highly experience Web Design & Development expert having delivered hundreds of successful projects over the years...</p>
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
