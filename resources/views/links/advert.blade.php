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
            <h1 class="white text-center" style="font-size: 1.4rem; font-weight: 700">ADVERTISE <span class="text-orange">WITH US</span></h1>
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
                <span class="mx-2"><a href="{{url('#')}}">Advertisement</a></span>
              </div>
            </div>

    		<div class="col-12 col-sm-12 col-md-12 col-lg-12">
    			<p>We are pleased to offer advert space to corporate, individual and government agencies to use our network which attract different segment of the business community from regulators, captains of industries, and corporate organizations to high net worth individuals.</p>
    			<p>Our rates are modest and placement of banners with standard hyper link to your websites, are in different categories to meet various requirements of our clients.</p>
    			<p>To advertise/showcase their banner/product on our website using banners, the minimum exposure time allowed is one (1) week.</p>
    		</div>
    	</div>

    	<div class="row mt-5">
    		<div class="col-12">
    			<caption>ADVERT RATES:</caption>
    			<table class="table table-bordered table-striped">
    				<tr>
    					<th>Position</th>
    					<th>Banner Size</th>
    					<th>Position</th>
    					<th>Weekly</th>
    					<th>Monthly</th>
    				</tr>
    				<tr>
    					<td>Home Page</td>
    					<td>200 * 200</td>
    					<td>TRH</td>
    					<td>$3,200</td>
    					<td>$6,400</td>
    				</tr>
    			</table>
    		</div>
    	</div>

    	<div class="row my-5">
    		<div class="col-12">
    			<p>Choose any of the packages and simply pay through cheque, bank deposit or transfer.</p>
    			<h6 class="text-bold mt-5">PAYMENT DETAILS</h6>
    			<table>
    				<tr>
    					<td class="py-2 pr-5">Bank:</td>
    					<td class="py-2 pr-5">United Bank for Africa (UBA) PLC</td>
    				</tr>
    				<tr>
    					<td class="py-2 pr-5">Account Name:</td>
    					<td class="py-2 pr-5">Hausworth Nigeria Limited</td>
    				</tr>
    				<tr>
    					<td class="py-2 pr-5">Account Number:</td>
    					<td class="py-2 pr-5"></td>
    				</tr>
    			</table>

    			<h6 class="mt-5 mb-3 text-bold">ADVERT REQUIREMENTS</h6>
    			<p>Required payment</p>

    			<p>Artwork to be provided by advertisers, saved in JPEG, GIF or SWF format.
    			Webpage / link to be advertised</p>

    			<p>We require at least three (3) working days after payment to place the advert on our network.</p>

    			<p>Please do contact us at hello@365homeimprovement.ng or on +234 (0) 803 3782 777; +234 (01) 29 52 413 for advert placement.</p>

    			<p>All adverts displayed on our website come with a standard hyperlink to your website. Artworks to be provided by advertisers, saved in JPEG, GIF or SWF format.</p>
    		</div>
    	</div>
    </div>
  </section>

  @include('layouts.footer-home')
@endsection

@section('footer')
  @include('layouts.footer')
@endsection 
