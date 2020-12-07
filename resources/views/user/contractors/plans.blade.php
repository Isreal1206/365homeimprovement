<!DOCTYPE html>
<html lang="en">

<head>
  <!--header start-->
  @include('layouts.backend.header')
  <!--header end-->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--navbar start-->
    @include('layouts.backend.navbar')
    <!--navbar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    @include('layouts.backend.sidebar')
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row site-min-height">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h4 class="title-a text-center mb-15">OUR PLANS</h4>
            <p> 365 Home Improvement's core features are free for home owners / tenants and contractors. There are no limits on the number of trade leads to post or access to trade leads.
            Posting a trade lead or company profile on 365 Home Improvement is free, but we give contractors the option to increase their visibility and receive more inquiries by offering a variety of options. </p>
          </div>

            
            <!-- Free Tier -->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 mb">
              <div class="bg-white plans">
                <div class="bg-red centered pady-2">
                  <h4 class="title-sub text-uppercase">Basic</h4>
                  <h6 class="title-a">&#8358;0/<span class="font-sm-8">year</span></h6>
                  <h6 class="title-a">&#8358;0/<span class="font-sm-8">month</span></h6>
                </div>
                <div class="pady-2">
                  <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span><strong>Unlimited</strong> Categories</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span><strong>Unlimited</strong> Service Areas <br> (States and LGA)</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span>Priority Listing <br> (Normal)</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span>Trade Lead Visibility <br> (72 hours after posting)</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span>Logo</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span>Company Profile</li>
                    <li><span class="fa-li"><i class="fa fa-times text-danger"></i></span>Premium Label</li>
                    <li><span class="fa-li"><i class="fa fa-times text-danger"></i></span>Account Verification</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span>Listed Phone Number</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span>Website Link</li>
                    <li class="text-muted"><span class="fa-li"><i class="fa fa-times text-danger"></i></span>E- Mail &SMS Notifications on Trade Leads</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span>In-Mailing</li>
                    <li class="text-muted"><span class="fa-li"><i class="fa fa-times text-danger"></i></span>Home Owners Contact Details</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span><strong>Unlimited</strong> Reviews</li>
                  </ul>
                  <div class="padx-1">
                    <button class="btn btn-block btn-danger">FREE</button>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 mb">
              <div class="bg-white plans">
                <div class="bg-primary centered pady-2">
                  <h6 class="title-sub text-uppercase">Classic</h6>
                  <h6 class="title-a">&#8358;60,000/<span class="font-sm-8">year</span></h6>
                  <h6 class="title-a">&#8358;6,000/<span class="font-sm-8">month</span></h6>
                </div>
                <div class="pady-2">
                  <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span><strong>Unlimited</strong> Categories</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span><strong>Unlimited</strong> Service Areas <br> (States and LGA)</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span>Priority Listing <br> (3x more clients than basic plan)</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span>Trade Lead Visibility <br> (Immediate)</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span>Logo</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span>Company Profile</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span>Premium Label</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span>Account Verification</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span>Listed Phone Number</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span>Website Link</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span>E- Mail &SMS Notifications on Trade Leads</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span>In-Mailing</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span>Home Owners Contact Details</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span><strong>Unlimited</strong> Reviews</li>
                  </ul>
                  <div class="padx-1">
                    <td>
                      <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                        <input type="hidden" name="email" value="{{$contractors->email}}"> {{-- required --}}
                        <input type="hidden" name="orderID" value="classic">
                        <input type="hidden" name="amount" value="6000000"> {{-- required in kobo --}}
                        <input type="hidden" name="quantity" value="1">
                        <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                        {{--<input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">--}} {{-- required --}}
                        <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
                        {{ csrf_field() }} 
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                        <button type="submit" class="btn btn-primary btn-block" value="Pay Now!">BUY NOW</button>
                     </form>
                    </td>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-12 col-sm-12 col-md-12 col-lg-3 mb">
              <div class="bg-white plans">
                <div class="bg-orange centered pady-2">
                  <h6 class="title-sub text-uppercase">Enterprise</h6>
                  <h6 class="title-a">&#8358;75,000/<span class="font-sm-8">year</span></h6>
                  <h6 class="title-a">&#8358;7,500/<span class="font-sm-8">month</span></h6>
                </div>
                <div class="pady-2">
                  <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span><strong>Unlimited</strong> Categories</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span><strong>Unlimited</strong> Service Areas <br> (States and LGA)</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span>Priority Listing <br> (5x more clients than basic plan)</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span>Trade Lead Visibility <br> (Immediate)</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span>Logo</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span>Company Profile</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span>Premium Label</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span>Account Verification</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span>Listed Phone Number</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span>Website Link</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span>E- Mail &SMS Notifications on Trade Leads</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span>In-Mailing</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span>Home Owners Contact Details</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span><strong>Unlimited</strong> Reviews</li>
                  </ul>
                  <div class="padx-1">
                    <td>
                      <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                        <input type="hidden" name="email" value="{{$contractors->email}}"> {{-- required --}}
                        <input type="hidden" name="orderID" value="enterprise">
                        <input type="hidden" name="amount" value="7500000"> {{-- required in kobo --}}
                        <input type="hidden" name="quantity" value="1">
                        <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                        {{--<input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">--}} {{-- required --}}
                        <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
                        {{ csrf_field() }} 
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">  
                        <button type="submit" class="btn btn-orange btn-block text-white" value="Pay Now!">BUY NOW</button>
                      </form>
                    </td>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 mb">
              <div class="bg-white plans">
                <div class="bg-success centered pady-2">
                  <h6 class="title-sub text-uppercase">Premium</h6>
                  <h6 class="title-a">&#8358;85,000/<span class="font-sm-8">year</span></h6>
                  <h6 class="title-a">&#8358;8,500/<span class="font-sm-8">month</span></h6>
                </div>
                <div class="pady-2">
                  <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span><strong>Unlimited</strong> Categories</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span><strong>Unlimited</strong> Service Areas <br> (States and LGA)</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span>Priority Listing <br> (7x more clients than basic plan)</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span>Trade Lead Visibility <br> (Immediate)</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span>Logo</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span>Company Profile</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span>Premium Label</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span>Account Verification</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span>Listed Phone Number</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span>Website Link</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span>E- Mail &SMS Notifications on Trade Leads</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span>In-Mailing</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span>Home Owners Contact Details</li>
                    <li><span class="fa-li"><i class="fa fa-check text-success"></i></span><strong>Unlimited</strong> Reviews</li>
                  </ul>
                  <div class="padx-1">
                    <td>
                      <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                        <input type="hidden" name="email" value="{{$contractors->email}}"> {{-- required --}}
                        <input type="hidden" name="orderID" value="premium">
                        <input type="hidden" name="amount" value="8500000"> {{-- required in kobo --}}
                        <input type="hidden" name="quantity" value="1">
                        <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                        {{--<input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">--}} {{-- required --}}
                        <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
                        {{ csrf_field() }}

                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                        <button type="submit" class="btn btn-success btn-block" value="Pay Now!">
                            BUY NOW
                        </button>
                      </form>
                    </td>
                  </div>
                </div>
              </div>
            </div>
          </div>
            
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->

    <!--footer start-->
    @include('layouts.backend.footer-copyright')
    <!--footer end-->
  </section>

  <!-- js placed at the end of the document so the pages load faster -->
  @include('layouts.backend.footer')

</body>

</html>