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
              <h1 class="white text-title mb-1" style="margin-top: 4rem">Become a <span class="text-orange">Writer</span></h1>
              <pre class="text-center white mb-0">We want to help you turn your passion of writing and sharing your knowledge into something that can earn you money.</pre> 
              <pre class="text-center white">Make friends and get clients along the way.</pre>
              <p class="text-center"><a href="{{route('create-article')}}" class="btn btn-sm btn-orange font-w-6">Start Writing</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container mb-5">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
          <div class="mt-3 mb-5">
            <span class="mr-2"><a href="{{url('/')}}">Home</a></span>
            <i class="fa fa-angle-double-right"></i>
            <span class="mx-2 text-orange">Blog</span>
          </div>
        </div>
      </div>
  
      <div class="row mb-5">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h2 class="text-center">Recent  Aritcles</h2>
        </div>
      </div>

      <!--  recent article list row begins -->
      <div class="row">
        @foreach($blogs as $blog)
        <!-- col-lg-3 begins -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 mb-3">
          <div class="bg-white box-shadow-custom border-radius-custom">
            <div class="row p-2">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <a href ="{{url('/blog/blog-single/'.$blog->id)}}"><img src="{{$blog->image_file}}" class="img-responsive img-fluid w-100 height-150 border-radius-custom" alt="Image"></a>
              
                <div class="height-100">
                <h6 class="height-40 text-uppercase text-bold my-2"><a href="{{url('/blog/blog-single/'.$blog->id)}}" class="text-orange">{{substr($blog->title, 0, 48)}} {{strlen($blog->title) > 45 ? "..." : ""}}</a></h6>
                <small class="text-muted text-capitalize">By {{$blog->fullnames}}</small>
                <p class="mb-2"><small><i class="text-muted fa fa-comment"></i> 4365
                <i class="ml-2 text-muted fa fa-thumbs-up"></i> 2435</small></p>
                </div>
              </div>
            </div>
          </div>
        </div><!-- col-lg-3 ends -->
        @endforeach

        <!-- Fourth col-lg-3 begins -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 mb-3">
          <div class="bg-white box-shadow-custom border-radius-custom">
            <div class="row p-2">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <a href ="#"><img src="/img/kitchen-design.jpg" class="img-responsive img-fluid height-150 border-radius-custom" alt="Image"></a>
              
                <div class="height-100">
                <h6 class="height-40 text-uppercase text-bold my-2"><a href="#">get the best out of your appliances</a></h6>
                <small class="text-muted text-capitalize">By David, villa</small>
                <p class="mb-2"><small><i class="text-muted fa fa-comment"></i> 4365
                <i class="ml-2 text-muted fa fa-thumbs-up"></i> 2435</small></p>
                </div>
              </div>
            </div>
          </div>
        </div><!-- Fourth col-lg-3 ends -->
      </div><!-- row -->
      <!-- recent article list row end -->

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 mb-3">
          <div class="bg-white box-shadow-custom border-radius-custom">
            <div class="row p-2">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <a href ="#"><img src="/img/kitchen-design.jpg" class="img-responsive img-fluid height-150 border-radius-custom" alt="Image"></a>
              
                <div class="height-100">
                <h6 class="height-40 text-uppercase text-bold my-2"><a href="#">get the best out of your appliances</a></h6>
                <small class="text-muted text-capitalize">By David, villa</small>
                <p class="mb-2"><small><i class="text-muted fa fa-comment"></i> 4365
                <i class="ml-2 text-muted fa fa-thumbs-up"></i> 2435</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- second col-lg-3 begins -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 mb-3">
          <div class="bg-white box-shadow-custom border-radius-custom">
            <div class="row p-2">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <a href ="#"><img src="/img/kitchen-design.jpg" class="img-responsive img-fluid height-150 border-radius-custom" alt="Image"></a>
              
                <div class="height-100">
                <h6 class="height-40 text-uppercase text-bold my-2"><a href="#">get the best out of your appliances</a></h6>
                <small class="text-muted text-capitalize">By David, villa</small>
                <p class="mb-2"><small><i class="text-muted fa fa-comment"></i> 4365
                <i class="ml-2 text-muted fa fa-thumbs-up"></i> 2435</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- third col-lg-3 begins -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 mb-3">
          <div class="bg-white box-shadow-custom border-radius-custom">
            <div class="row p-2">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <a href ="#"><img src="/img/kitchen-design.jpg" class="img-responsive img-fluid height-150 border-radius-custom" alt="Image"></a>
              
                <div class="height-100">
                <h6 class="height-40 text-uppercase text-bold my-2"><a href="#">get the best out of your appliances</a></h6>
                <small class="text-muted text-capitalize">By David, villa</small>
                <p class="mb-2"><small><i class="text-muted fa fa-comment"></i> 4365
                <i class="ml-2 text-muted fa fa-thumbs-up"></i> 2435</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- fourth col-lg-3 begins -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 mb-3">
          <div class="bg-white box-shadow-custom border-radius-custom">
            <div class="row p-2">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <a href ="#"><img src="/img/kitchen-design.jpg" class="img-responsive img-fluid height-150 border-radius-custom" alt="Image"></a>
              
                <div class="height-100">
                <h6 class="height-40 text-uppercase text-bold my-2"><a href="#">get the best out of your appliances</a></h6>
                <small class="text-muted text-capitalize">By David, villa</small>
                <p class="mb-2"><small><i class="text-muted fa fa-comment"></i> 4365
                <i class="ml-2 text-muted fa fa-thumbs-up"></i> 2435</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- row -->
    </div><!-- end of container div -->
  </section>

  @include('layouts.footer-home')
@endsection

@section('footer')
  @include('layouts.footer')
@endsection
