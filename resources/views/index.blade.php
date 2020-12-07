@extends('layouts.app-custom')

@section('heading')
  @include('layouts.header')
  @include('layouts.navbar')
  @include('layouts.carousel')
@endsection

@section('content')
  <section class="section-t8">
    <div class="container">
      <div class="row my-3">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <h1 class="text-center">Let's make your House a <strong class="text-orange"><i class="fa fa-home"></i>ome</strong></h1>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h3 class="text-center"><em>Fast, Easy and Free to <span class="text-orange">get quotes</span> from the right <span class="text-orange">contractors!</span></em></h3>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 my-5 d-flex mx-auto">
          <a href="/2/signup" class="btn btn-block btn-orange">Get Started</a>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <p class="text-center"><strong>Our Partners and Sister Company:</strong>
          365 Property Portal --- <a href="#" class="text-primary">www.365propertyportal.com</a> (Nigeria’s One Stop Property Portal)</p>
        </div>
      </div>

    </div>
  </section>

  <section class="section-border">
    <div class="container-fluid bg-image mt-5" style="background-image:url({{url('img/bg-img/contractor-homepage.jpg')}})">
      <div class="transparent py-2">
        <div class="row m-4">
          <div class="title-box col-sm-12 col-md-12 col-lg-12">
            <h4 class="title-list text-center">HOW IT WORKS</h4>
          </div>
        </div>
        <div class="row my-0">
          <div class="col-sm-3 col-md-3 col-lg-3">
            <div class="py-2">
              <div class="mb-4">
                <img class="img-fluid d-block mx-auto" src="{{URL::to('/')}}/img/sign-up.png" alt=""/>
              </div>
              <div>
                <h4 class="contractor-head text-white mb-2">1. Sign Up</h4>
                <p class="text-center text-white text-shadow">Register as a premium member <br>and start receiving leads</p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3 col-lg-3">
            <div class="py-2">
              <div class="mb-4">
                <img class="img-fluid d-block mx-auto" src="{{URL::to('/')}}/img/eoi.png" alt=""/>
              </div>
              <div>
                <h4 class="contractor-head text-white mb-2">2. Expression of Interest</h4>
                <p class="text-center text-white text-shadow">Pick and choose from leads in<br> your area</p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3 col-lg-3">
            <div class="py-2">
              <div class="mb-4">
                <img class="img-fluid d-block mx-auto" src="{{URL::to('/')}}/img/get-shortlisted.png" alt=""/>
              </div>
              <div>
                <h4 class="contractor-head text-white mb-2">3. Get Shortlisted</h4>
                <p class="text-center text-white text-shadow">Contact details are exchanged</p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3 col-lg-3">
            <div class="py-2">
              <div class="mb-4">
                <img class="img-fluid d-block mx-auto" src="{{URL::to('/')}}/img/earn-feedback.png" alt=""/>
              </div>
              <div>
                <h4 class="contractor-head text-white mb-2">4. Earn Feedback</h4>
                <p class="text-center text-white text-shadow">Win work and build your portfolio</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row m-3 d-flex justify-content-center">
          <a href="/1/signup" class="btn btn-orange">Get Started<i class="ml-2 ion-ios-arrow-forward"></i></a>
        </div>
      </div>

    </div>
  </section>
<!--/ Contractor Ends /-->

<!--/ Market Starts /-->
  <section class="section-border section-t8 nav-arrow-a">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Market Place</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid px-0 mb-5">
      <div class="main-content-wrapper d-flex clearfix">
        <!-- Product Catagories Area Start -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 market-gallery clearfix">
            <div class="amado-pro-catagory clearfix">
                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="/market/Kitchen and Dining">
                        <img src="img/bg-img/kitchen-and-dining.jpg" alt="" class="height-200">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p></p>
                            <h4>Kitchen</h4>
                            <h4>and Dining</h4>
                        </div>
                    </a>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="/market/Bath Products">
                        <img src="img/bg-img/bathroom-products.jpg" alt="" class="height-200">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p></p>
                            <h4>Bathroom</h4>
                            <h4>Products</h4>
                        </div>
                    </a>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="/market/Bedroom Products">
                        <img src="img/bg-img/bedroom-products.jpg" alt="" class="height-200">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p></p>
                            <h4>Bedroom</h4> 
                            <h4>Products</h4>
                        </div>
                    </a>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="/market/Living Products">
                        <img src="img/bg-img/livingroom-products.jpg" alt="" class="height-200">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p></p>
                            <h4>Living Room</h4> 
                            <h4>Products</h4>
                        </div>
                    </a>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="/market/Lighting">
                        <img src="img/bg-img/lighting.jpg" alt="" class="height-200">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p></p>
                            <h4>Lighting</h4>
                        </div>
                    </a>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="/market/Furniture">
                        <img src="img/bg-img/furniture.jpg" alt="" class="height-200">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p></p>
                            <h4>Furniture</h4>
                        </div>
                    </a>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="/market/Home Decor">
                        <img src="img/bg-img/home-decor.jpg" alt="" class="height-200">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p></p>
                            <h4>Home</h4> 
                            <h4>Decor</h4>
                        </div>
                    </a>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="/market/Home Improvement">
                        <img src="img/bg-img/home-improvement.jpg" alt="" class="height-200">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p></p>
                            <h4>Home</h4>
                            <h4>Improvement</h4>
                        </div>
                    </a>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="/market/Outdoor Products">
                        <img src="img/bg-img/outdoor-products.jpg" alt="" class="height-200">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p></p>
                            <h4>Outdoor</h4> 
                            <h4>Products</h4>
                        </div>
                    </a>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="/market/Storage and Organization">
                        <img src="img/bg-img/storage-and-organization.jpg" alt="" class="height-200">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p></p>
                            <h4>Storage and</h4> 
                            <h4>Organization</h4>
                        </div>
                    </a>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="/market/Housekeeping and Laundry">
                        <img src="img/bg-img/housekeeping-and-laundry.jpg" alt="" class="height-200">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p></p>
                            <h4>Housekeeping</h4>
                            <h4>and Laundry</h4>
                        </div>
                    </a>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="/market/Holiday Decor">
                        <img src="img/bg-img/holiday-decor.jpg" alt="" class="height-200">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p></p>
                            <h4>Holiday</h4> 
                            <h4>Decor</h4>
                        </div>
                    </a>
                </div>

            </div>

            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <p class="text-center mt-3"><a href="{{route('market')}}" class="font-sm-12 gallery">View All <i class="fa fa-angle-double-right"></i></a></p>
              </div>
            </div>

        </div>
        <!-- Product Catagories Area End -->
      </div>

    </div>
  </section>
<!--/ Market Ends /-->

<!--/ Training Starts /-->
  <section class="border-line section-t8 mb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12 title-wrap d-flex justify-content-between">
          <div class="title-box">
            <h2 class="title-a">Training</h2>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 text-justify">
          <div class="mb-3">
            {{--<h3 class="text-title mb-3">Training Programs</h3>--}}
            <p class="text-training">365HomeImprovement is the one stop solution for human resource development in the home improvement industry in Nigeria. Click the button below to get started.
            </p>
          </div>
          <div class="d-flex justify-content-center">
            <a href="{{ route('training') }}" class="btn btn-orange">Get Started<i class="ml-2 ion-ios-arrow-forward"></i></a>
          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 mb-4">
          <div class="main-content-wrapper d-flex clearfix">
            <!-- Product Catagories Area Start -->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">
              <div class="training-pro-catagory clearfix">
                <!-- Single Catagory -->
                <div class="training-products-catagory clearfix">
                  <a href="#">
                    <img src="img/bg-img/tr.jpg" alt="" class="height-150">
                    <!-- Hover Content -->
                    <div class="hover-content p-2">
                      <div class="line"></div>
                      <p></p>
                      <h4>Training</h4>
                      <h4>101</h4>
                    </div>
                  </a>
                </div>

                <!-- Single Catagory -->
                <div class="training-products-catagory clearfix">
                  <a href="#">
                    <img src="img/bg-img/tr.jpg" alt="" class="height-150">
                    <!-- Hover Content -->
                    <div class="hover-content p-2">
                      <div class="line"></div>
                      <p></p>
                      <h4>Training</h4>
                      <h4>110</h4>
                    </div>
                  </a>
                </div>

                <!-- Single Catagory -->
                <div class="training-products-catagory clearfix">
                  <a href="#">
                    <img src="img/bg-img/tr.jpg" alt="" class="height-150">
                    <!-- Hover Content -->
                    <div class="hover-content p-2">
                      <div class="line"></div>
                      <p></p>
                      <h4>Training</h4>
                      <h4>121</h4>
                    </div>
                  </a>
                </div>

                <!-- Single Catagory -->
                <div class="training-products-catagory clearfix">
                  <a href="#">
                    <img src="img/bg-img/tr.jpg" alt="" class="height-150">
                    <!-- Hover Content -->
                    <div class="hover-content p-2">
                      <div class="line"></div>
                      <p></p>
                      <h4>Training</h4>
                      <h4>122</h4>
                    </div>
                  </a>
                </div>

                <!-- Single Catagory -->
                <div class="training-products-catagory clearfix">
                  <a href="#">
                    <img src="img/bg-img/tr.jpg" alt="" class="height-150">
                    <!-- Hover Content -->
                    <div class="hover-content p-2">
                      <div class="line"></div>
                      <p></p>
                      <h4>Training</h4>
                      <h4>123</h4>
                    </div>
                  </a>
                </div>

                <!-- Single Catagory -->
                <div class="training-products-catagory clearfix">
                  <a href="#">
                    <img src="img/bg-img/tr.jpg" alt="" class="height-150">
                    <!-- Hover Content -->
                    <div class="hover-content p-2">
                      <div class="line"></div>
                      <p></p>
                      <h4>Training</h4>
                      <h4>131</h4>
                    </div>
                  </a>
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
