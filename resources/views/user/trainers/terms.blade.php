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
          <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 main-chart">
            @if(!empty($trainers))
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb">
                <div class="profile-text mb">
                  <h3>Trainer Registration</h3>
                </div>
                <h4 class="text-center">SALES AND MARKETING AGREEMENT FOR THE PROVISION OF TRAINING SERVICES</h4> 
                <h4 class="text-center">THIS AGREEMENT IS MADE THIS DAY</h4>
                <h5 class="text-center">{{$trainers->created_at -> format ('D, d M Y @ H:iA')}}</h5>
                <h5 class="text-center text-bold">BETWEEN</h5>

                <div class="table-responsive">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th scope="col">COMPANY:</th>
                        <td>Hausworth Nigeria Limited</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">ADDRESS:</th>
                        <td>61-65 Egbe- Isolo Road, Iyana Ejigbo Shopping Arcade,<br>
                        Block C, Suite 39, Iyana Ejigbo Bus Stop, Ejigbo, Lagos.</td>
                      </tr>
                      <tr>
                        <th scope="row">REPESENTED BY:</th>
                        <td>Anaekwe Everistus Nnamdi</td>
                      </tr>
                      <tr>
                        <th scope="row">JOB TITLE:</th>
                        <td>MD/CEO</td>
                      </tr>
                      <tr>
                        <th scope="row">PHONE:</th>
                        <td>+234 -1- 29 52 413</td>
                      </tr>
                      <tr>
                        <th scope="row">URL:</th>
                        <td>www.365homeimprovement.ng</td>
                      </tr>
                      <tr>
                        <th scope="row">E-MAIL ADDRESS:</th>
                        <td>hello@365homeimprovement.ng</td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <h4 class="text-center text-bold mb">AND</h4>

                <div class="table-responsive">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>COMPANY:</th>
                        <td>{{$trainers->organization}}</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th>ADDRESS:</th>
                        <td>{{$trainers->address}}</td>
                      </tr>
                      <tr>
                        <th>REPESENTED BY:</th>
                        <td>{{$trainers->title}} {{$trainers->fullnames}}</td>
                      </tr>
                      <tr>
                        <th>JOB TITLE:</th>
                        <td>{{$trainers->job_title}}</td>
                      </tr>
                      <tr>
                        <th>PHONE:</th>
                        <td>{{$trainers->mobile_no}}</td>
                      </tr>
                      <tr>
                        <th>URL:</th>
                        <td class="text-lowercase">{{$trainers->url}}</td>
                      </tr>
                      <tr>
                        <th>E-MAIL ADDRESS:</th>
                        <td>{{$trainers->email}}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <h4 class="text-center text-bold">TRAINING COMPANY</h4>

                <p>365 Home Improvement is a lead generation company, designed to help home improvement contractors grow their businesses by putting them in contact with homeowners looking for work, with the hope this will lead to contractors landing jobs and seeing returns on their investment.</p>
                <p>We also serve as a hub for the provision of training services in the home improvement industry in Nigeria.</p>
                <p>365 Home Improvement desires to add the training services of the training company to it title collection and the training company wishes to provide its training services for marketing and they both agree to conduct same under the following terms and condition.</p>

                <div>
                  <h5 class="text-bold">The Service</h5>
                  <p>Hausworth Nigeria Limited accepts the advertisement of training services from training companies. Such training services must meet the following criteria.</p>

                  <h5 class="text-primary">Certification and Educational Competence</h5>
                  <p>The training company confirms resource persons has the educational experience and certification to handle the training been offered.</p>
                  <p>Warranties and Permissions</p>
                  <ol class="roman">
                    <li>The training company agrees that it has the permission to offer training services and grants Hausworth Nigeria Limited the rights under this agreement.</li>
                    <li>The training company confirms that the trainings do not contain any libelous material and shall not infringe any intellectual property right of a third party.</li>
                    <li>Where there is a claim of an infringement of the intellectual property right of a third party, the training company shall bear the losses, claims, damages, liabilities, cost and expenses as a result of such claim.</li>
                  </ol>

                  <h5 class="text-primary">Marketing and Promotion</h5>
                  <p>Both parties agree to abide by the following terms in the marketing, promotion and order fulfillment.</p>
            
                  <p>Roles of Hausworth Nigeria Limited</p>
                  <ol class="roman">
                    <li>Market the trainings of the training company in the best manner possible.</li>
                    <li>Receive payment on behalf of the training company.</li>
                    <li>Make payment to the training company as agreed under the commercial and financial section of this agreement.</li>
                  </ol>

                  <p>Roles of the Training Company</p>
                  <ol class="roman">
                    <li>Supply relevant promotional and marketing materials to Hausworth Nigeria Limited in the marketing of the training.</li>
                    <li>Provide the details of the training service to be marketed.</li>
                    <li>Provide venue and training centres for the training</li>
                    <li>Forward invoice to KYNELI Business Support Services for payment.</li>
                  </ol>

                  <h5 class="text-primary">Duration of Agreement</h5>
                  <p>This agreement would last for sixty (60) calendar months from the date of signing and would be automatically renewed.</p>

                  <h5 class="text-primary">Commercial and Financial section</h5>
                  <p>Offer Price</p>
                    The offer price of the training on our platform is the sole right of the training company.

                  <p>Royalty/ Sales Commission</p>
                    Hausworth Nigeria Limited agrees to pay seventy percent (70%) of the offer price to the training company from the sales of training tickets while Hausworth Nigeria Limited would be entitled to the balance of thirty percent (30%).
                    
                  <p>Payment</p>
                  <ol class="roman">
                    <li>Hausworth Nigeria Limited would remit seventy percent (70%) being the share of the training company within twenty four (24) hours receiving invoice from the training company.</li>
                    <li>The payment would be remitted upon completion of the training. Payment would be made    into your account directly.</li>
                    <li>Such payment could be through bank transfer, credit card or any means considered suitable by both parties.</li>
                  </ol>

                  <h5 class="text-primary">Termination of Contract</h5>
                  <p>This agreement would last for sixty (60) months and would be automatically renewed thereafter. To terminate this agreement, the training company shall give at least thirty (30) days’ notice and on the termination of the agreement, Hausworth Nigeria Limited would stop the marketing and sales of the training services.</p>

                  <h4>General:</h4>
                  <h5>Force Majeure</h5>
                  <p>Neither party to this agreement shall be held responsible for breach of contract caused by an act of God, Insurrection, Civil War, Military Operations or Local Emergency. The parties do hereby accept the international provision of “Force Majeure” as published by the International Chamber of Commerce.</p>

                  <h5 class="text-primary">Governing Law</h5>
                  <p>This agreement shall be governed and construed in accordance with the law of the federal republic of Nigeria. The parties hereby accept the court of jurisdiction to be in Nigeria in case of disputes, claims or matters which may arise in connection with this agreement.</p>

                  <h5 class="text-primary">Dispute Resolution</h5>
                  <p>Hausworth Nigeria Limited is only an intermediary offering its platform to facilitate the transactions between trainers / training company (sellers) and trainee/customer/buyer/user and is not and cannot be a party to or control in any manner any transactions between the trainers / training company (sellers) and trainee, customer/buyer/user. </p>

                  <p>Hausworth Nigeria Limited shall neither be responsible nor liable to mediate or resolve any disputes or disagreements between the trainers / training company (sellers) and trainee, customer/buyer/user shall settle all such disputes without involving Hausworth Nigeria Limited in any manner.</p>

                  <h5 class="text-primary">Contract Signatories:</h5>
                  <h6>IN WITNESS THEREOF, THE PARTIES HAVE SIGNED BELOW AND BY DOING SO HAVE ACCEPTED AND APPROVED ALL THE TERMS AND CONDITIONS OF THIS AGREEMENT.</h6>

                  <div>
                    <span>Training Company | {{$trainers->organization}}</span>
                    <span class="pull-right">365HomeImprovement |   - AGREED.</span>
                    <p class="text-center"><input type="checkbox" name="agree" id="terms" class="form-check-input mt-2" required> I agree to the terms and conditions.</p>
                  </div>

                  <form method="POST" action="{{route('trainer.storeTerms')}}" role="form" class="form-horizontal">
                  {{csrf_field()}}
                    <center><button id="send" class="btn btn-theme" type="submit">Submit</button></center>
                    {{--<input type="button" value="Submit" name="submit" id="send" class="btn btn-orange" onclick="window.location.href='../../trainer'" />--}}
                  </form>
                </div>
              </div>
            </div>
            @else

            <p>No Information Found, Click <a href="{{route('trainer.register')}}">here</a> to Register as a Trainer</p>

            @endif
          </div>
          <!-- /col-lg-9 END SECTION MIDDLE -->
          <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT
              *********************************************************************************************************************************************************** -->
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 ds">
            <!-- RECENT ACTIVITIES SECTION -->
            <h4 class="centered mt">RECENT ACTIVITY</h4>
            <!-- First Activity -->
            <div class="desc">
              <div class="thumb">
                <span class="badge bg-info"><i class="fa fa-clock-o"></i></span>
              </div>
              <div class="details">
                <p>
                  <muted>Just Now</muted>
                  <br/>
                  <a href="#">Paul Rudd</a> purchased an item.<br/>
                </p>
              </div>
            </div>
            <!-- Second Activity -->
            <div class="desc">
              <div class="thumb">
                <span class="badge bg-info"><i class="fa fa-clock-o"></i></span>
              </div>
              <div class="details">
                <p>
                  <muted>2 Minutes Ago</muted>
                  <br/>
                  <a href="#">James Brown</a> subscribed to your newsletter.<br/>
                </p>
              </div>
            </div>
            <!-- Third Activity -->
            <div class="desc">
              <div class="thumb">
                <span class="badge bg-info"><i class="fa fa-clock-o"></i></span>
              </div>
              <div class="details">
                <p>
                  <muted>3 Hours Ago</muted>
                  <br/>
                  <a href="#">Diana Kennedy</a> purchased a year subscription.<br/>
                </p>
              </div>
            </div>

            <!-- CALENDAR-->
            <div id="calendar">
              <div class="panel green-panel no-margin">
                <div class="panel-body">
                  <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                    <div class="arrow"></div>
                    <h3 class="popover-title" style="disadding: none;"></h3>
                    <div id="date-popover-content" class="popover-content"></div>
                  </div>
                  <div id="my-calendar"></div>
                </div>
              </div>
            </div>
            <!-- / calendar -->
          </div>
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->

    <!--footer start-->
    @include('layouts.backend.footer-copyright')
    <!--footer end-->
  </section>

  <!-- js placed at the end of the document so the pages load faster -->
  @include('layouts.backend.footer')
  <script>
    $(function(){
      var button = $('#send');
      button.attr('disabled', 'disabled');
      $('#terms').change(function(e){
        if (this.checked){
          button.removeAttr('disabled');
        } else {
          button.attr('disabled', 'disabled');
        }
      });
    });
  </script>

</body>

</html>
