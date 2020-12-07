<!DOCTYPE html>
<html lang="en">
<head>
  @include('layouts.header')
  @include('layouts.navbar') 
</head>

<body class="bg-links">
  <section class="roboto flex-height">
    <div class="container-fluid p-0">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
          <div class="banner-head">
            <img class="img-responsive img-fluid banner-bg" src="{{URL::to('/')}}/img/kitchen-and-dining-furniture.jpg" alt="CostGuide Page Banner"/>
            <div class="banner-overlay">
              <h3 class="title-page2 white text-center">{{$costguides->name}}</h3>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-8 mt-5 mb-3">
          <div class="card p-2">
            <h4 class="text-uppercase text-center text-bold my-3">{{$costguides->title}}</h4>
            <p class="text-justify px-3">The kitchen, besides being the heart of the house in many cases, is also the room that usually keeps up with technology and design trends. In other words, kitchens get updated more often and modern and contemporary furniture is what you expect to find there. So let’s see what your options could be if you decide to give your kitchen a modern makeover.</p>
            
            <p class="text-justify px-3">The best dining table for you will be one that works for your budget, is solidly constructed, fits in your space and has a style you’ll love for years. There are some core factors you should consider when choosing a good one.</p>

            <p class="text-justify px-3">First, be wary of giving into trends, said Christophe Pourny, a master furniture restorer and the author of <em>The Furniture Bible,</em> who noted that a good table should last at least five to 10 years. “If you get something too funky, with too many weird details, one day you may wake up and wonder what you were thinking,” he said. <strong>Keep it simple and sturdy.</strong></p>

            <p class="text-justify px-3">Along with affordability and a timeless style, stability and construction are important to look for when inspecting tables at furniture stores. Think about how it feels to sit at one of those tables, whether it will be comfortable for long periods, and examine floor models for signs of wear. Look for nicks and scratches that may indicate how the tables would endure through serious use at home. </p>

            <p class="px-3"> Share:
              <a href="{{url('https://facebook.com')}}"><i><img class="img-responsive thumbnail" src="{{URL::to('/')}}/img/socials/icon_facebook.jpg" alt="Facebook image icon"/></i></a>
              <a href="{{url('https://instagram.com')}}"><i><img class="img-responsive thumbnail" src="{{URL::to('/')}}/img/socials/icon_instagram.jpg" alt="Instagram image icon"/></i></a>
              <a href="{{url('https://linkedin.com')}}"><i><img class="img-responsive thumbnail" src="{{URL::to('/')}}/img/socials/icon_linkedin.jpg" alt="Linkedin image icon"/></i></a>
              <a href="{{url('https://twitter.com')}}"><i><img class="img-responsive thumbnail" src="{{URL::to('/')}}/img/socials/icon_twitter.jpg" alt="Twitter image icon"/></i></a>
            </p>
          </div>
          
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-5">
          <div class="card bg-links border-0">
            <div class="mt-5 mb-3 d-flex justify-content-center">
              <input class="py-1 col-8" type="text" placeholder="Search..."/>
              <button class="btn btn-orange col-3">Search</button>
            </div>

            <div class="card border bg-links mt-2 mb-4 mx-3">
              <h6 class="border-bottom bg-dark text-center text-white py-3"><span class="pl-2 text-bold">Kitchen & Dining Furniture Cost Guide</span></h6>
              <h6 class="border-bottom px-2 pb-2">Install a Light Switch <span class="bg-light box-shadow py-1 px-2 pull-right">&#8358;5,000 - &#8358;50,000</span> </h6>
              <h6 class="border-bottom px-2 pb-2">Dining Furniture <span class="bg-light box-shadow py-1 px-2 pull-right">&#8358;20,000 - &#8358;200,000</span> </h6>
              <h6 class="px-2">Install a GFCI Outlet <span class="bg-light box-shadow py-1 px-2 pull-right">&#8358;10,000 - &#8358;70,000</span> </h6>
            </div>

            <div class ="col-12">
              <div class ="card">
                <h6 class="border-bottom text-bold p-2">Related Articles</h6>
                <a class="cost-articles pb-2 px-4" href="{{url('#')}}">Kitchen Fixtures</a>
                <a class="np-articles py-2 px-4" href="{{url('#')}}">Kitchen Appliances</a>
                <a class="np-articles py-2 px-4" href="{{url('#')}}">Kitchen Tiles</a>
              </div>
            </div>

            <div class="col-12 my-4">
              <div class="card bg-light p-3">
                <a href="{{url('newsletter')}}"><i class="fa fa-newspaper-o mr-2"></i> Join Our Newsletter</a>
              </div>
            </div>

            <div class="col-12 mb-4">
              <div class="card bg-light p-3">
                <a href="{{url('request-quote')}}"><i class="fa fa-file-text-o mr-2"></i> Request for your Quote</a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
<!--/ footer Star /-->
  @include('layouts.footer-copyright')
<!--/ Footer End /-->

</body>
</html>

