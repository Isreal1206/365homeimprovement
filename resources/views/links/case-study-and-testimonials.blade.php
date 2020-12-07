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
            <h1 class="white text-center" style="font-size: 1.4rem; font-weight: 700">SHARE YOUR <span class="text-orange">VIEWS </span>ABOUT US</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-testimonials nav-arrow-a">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
          <div class="alert alert-dark mt-3 mb-5">
            <span class="mr-2"><a href="{{url('/')}}">Home</a></span>
            <i class="fa fa-angle-double-right"></i>
            <span class="mx-2"><a href="{{url('#')}}">Case Study and Testimonials</a></span>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Case Study</h2>
            </div>
          </div>
        </div>
      </div>

      <div id="case-study-carousel" class="owl-carousel owl-arrow">
        <div class="carousel-item-a">
          <div class="case-study-box">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="case-study-img">
                  <img src="img/socials/case_study_flat_screen_monitor_on_wall.jpg" alt="" class="img-fluid">
                </div>
                <div class="roboto">
                  <p class="py-2 text-center">Wall Flat Screen Monitor</p>
                </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="case-study-img">
                  <img src="img/socials/case_study_outside_decor_grass_house.jpg" alt="" class="img-fluid">
                </div>
                <div class="roboto">
                  <p class="py-2 text-center">Outside Decor - Grass House</p>
                </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="case-study-img">
                  <img src="img/socials/case_study_desk_beside_bed_and_window.jpg" alt="" class="img-fluid">
                </div>
                <div class="roboto">
                  <p class="py-2 text-center">White and Black Desk Beside Bed and Window</p>
                </div>
              </div>
	        </div>
	      </div>
	  	</div>

	  	<div class="carousel-item-a">
        <div class="case-study-box">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
              <div class="case-study-img">
                <img src="img/socials/case_study_black_fabrics_sectional_sofa_near_glass_window.jpg" alt="" class="img-fluid">
              </div>
              <div class="roboto">
                <p class="text-center py-2">Black Fabrics Sectional Sofa Design</p>
              </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
              <div class="case-study-img">
                <img src="img/socials/case_study_apartment-bath-bathroom-interior.jpg" alt="" class="img-fluid">
              </div>
              <div class="roboto">
                <p class="text-center py-2">Bathroom Apartment Interior</p>
              </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
              <div class="case-study-img">
                <img src="img/socials/case_study_brown_and_white_wooden_kitchen_furniture.jpg" alt="" class="img-fluid">
              </div>
              <div class="roboto">
                <p class="text-center py-2">Brown and White Wooden Kitchen Furniture</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-testimonials my-5 nav-arrow-a">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Testimonials</h2>
            </div>
          </div>
        </div>
      </div>
      <div id="testimonial-carousel" class="owl-carousel owl-arrow">
        <div class="carousel-item-a">
          <div class="testimonials-box">
            <div class="row">
              <div class="col-sm-12 col-md-6 mb-3">
                <div class="testimonial-img">
                  <img src="img/socials/mr_austin_testimonial.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="testimonial-ico">
                  <span class="ion-ios-quote"></span>
                </div>
                <div class="testimonials-content">
                  <p class="testimonial-text">Hausworth Nigeria Limited is a professional company that will provide exceptional work I had my roof done in March 2019. They showed up on time for both the estimate and work.<br><br>
				          The crew was professional, hard working and polite. It took them 2 days to remove 3 layers and when they were done you wouldn't know they were there. Highly recommend for roofing. Have already recommended to family. Great job guys.</p>
                </div>
                <div class="testimonial-author-box">
                  <img src="img/socials/mr_austin_icon.jpg" alt="Mr Austin Image" class="rounded-circle w-25 mb-3">
                  <h5 class="testimonial-author">Mr A. Chukwuemeka</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-a">
          <div class="testimonials-box">
            <div class="row">
              <div class="col-sm-12 col-md-6  mb-3">
                <div class="testimonial-img">
                  <img src="img/socials/mr_and_mrs_philips_testimonial.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="testimonial-ico">
                  <span class="ion-ios-quote"></span>
                </div>
                <div class="testimonials-content">
                  <p class="testimonial-text">
                    They did everything they said they would do, in the time they said it would be done. We were very pleased with the work. We have already recommended them to a friend who needs a new Bathroom Accessories.
                  </p>
                </div>
                <div class="testimonial-author-box">
                  <img src="img/socials/mr_and_mrs_philips_icon.jpg" alt="" class="rounded-circle w-25 mb-3">
                  <h5 class="testimonial-author">Mr and Mrs Philips</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-a">
          <div class="testimonials-box">
            <div class="row">
              <div class="col-sm-12 col-md-6  mb-3">
                <div class="testimonial-img">
                  <img src="img/socials/mrs_ayorinde_testimonial.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="testimonial-ico">
                  <span class="ion-ios-quote"></span>
                </div>
                <div class="testimonials-content">
                  <p class="testimonial-text">
                    COMPLETELY SATISFIED! How often does anyone get to write those words these days? They completely removed and replaced my kitchen and dining furniture in one day. Their work was efficient, professional, precise, knowledgeable and the crew was very friendly.<br><br> 
                    I obtained three estimates and Hausworth Nigeria Limited was the best in terms of same materials, procedure, trash removal, etc. I'm happy to have selected them and happy to give them a well-deserved 5 star rating.
                  </p>
                </div>
                <div class="testimonial-author-box">
                  <img src="img/socials/mrs_ayorinde_icon.jpg" alt="" class="rounded-circle w-25 mb-3">
                  <h5 class="testimonial-author">Mrs K. Ayorinde</h5>
                </div>
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
