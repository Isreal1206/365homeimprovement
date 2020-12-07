@extends('layouts.app-custom')

@section('heading')
  @include('layouts.header')
  @include('layouts.navbar')
@endsection

@section('content')
  <section class="intro-height">
    <div class="container my-5">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
          <h1 class="title-page text-center">DISCLAIMER <span class="text-orange">AND</span> PHISHING CLAIMS</h1>
        </div>
      </div>
      <div class="row my-4 text-justify">
        <ul class="custom-bullet-list">
          <li class="bullet-list"> 365 home improvements is only an intermediary offering its platform to facilitate the sharing of information and is not and cannot be a party to or control in any manner any transactions between users on our platform. </li> <br>

          <li class="bullet-list"> The articles and reports on our website is based upon information from various sources that we believe are reliable; however no representation is made that it is accurate or complete. While reasonable care has been taken in preparing the articles and reports, no responsibility or liability is accepted for errors of fact or for any opinion expressed herein. The articles and reports are for information purposes only. </li> <br>

          <li class="bullet-list"> Hausworth Nigeria Limited accepts no liability whatsoever for any direct or consequential loss arising from any use of the report / articles or its contents.
          The articles and reports are for private circulation only. The articles and reports may only be distributed freely in its entire form. Any other use without the prior express consent of Hausworth Nigeria Limited is prohibited. </li> <br>

          <li class="bullet-list"> Hausworth Nigeria Limitedshall neither be responsible nor liable to mediate or resolve any disputes or disagreements between users and both parties shall settle all such disputes without involving Hausworth Nigeria Limitedor any of our agents in any manner. </li> <br>

          <li class="bullet-list"> All trademarks, logos and names are properties of their respective owners. All Rights Reserved. <strong>Copyright © 2019 Hausworth Nigeria Limited.</strong> </li> <br>

          <!-- Breaking Point -->
          <li class="bullet-list"> The articles and reports on our website is based upon information from various sources that we believe are reliable; however, no representation is made that it is accurate or complete. While reasonable care has been taken in preparing the articles and reports, no responsibility or liability is accepted for errors of fact or for any opinion expressed herein. </li> <br>

          <li class="bullet-list"> The articles and reports are for information purposes only. 365HomeImprovement accepts no liability whatsoever for any direct or consequential loss arising from any use of the report / articles or its contents. </li> <br>

          <li class="bullet-list"> The articles and reports are for private circulation only. The articles and reports may only be distributed freely in its entire form. Any other use without the prior express consent of 365 Property is prohibited. </li> <br>

          <li class="bullet-list"> In the same vein, 365 Home Improvement / Hausworth Nigeria Limited would never send e-mails requesting for vital information about you or your company. </li> <br>

          <li class="bullet-list"> Please do contact us at <span class="text-orange text-bold">hello@365homeimprovement.ng </span> with such claims. </li>
        </ul>
      </div> 
  	</div>
  </section>

  @include('layouts.footer-copyright')
@endsection

@section('footer')
  @include('layouts.footer')
@endsection

