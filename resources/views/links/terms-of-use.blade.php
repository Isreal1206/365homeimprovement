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
          <h1 class="title-page text-center">TERMS <span class="text-orange">OF</span> USE</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-justify">
          <p>It is important that our clients read and understand our terms of use before using the product and services offered on our website. We provide these terms of use so that our users <strong>YOU</strong> will have an idea of the various policies that guides our product and services.</p>
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-justify">
          <p>We would update these terms of use from time to time. If we make any material changes in the ways we may collect, use, or share information, we will notify you by posting notice of the changes on our site.</p>
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-justify">
          <p>Hausworth Nigeria Limited owners of www.365homeimprovement.ng makes no representations about the suitability, reliability, availability, timeliness, and accuracy of the information, software, products, services and related graphics contained on our website to the maximum extent permitted by applicable law, all such information, software, products, services and related graphics are provided "as is" without warranty or condition of any kind.</p>
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2 text-justify">
          <p> By signing up to use our services, you have agreed to our terms of services stated below: </p> 

          <ul class="custom-bullet-list">
            <li class="bullet-list"> That all the information provided are correct, accurate and up-to-date. </li> <br>

            <li class="bullet-list"> That you agree not to defame, abuse, harass, stalk, threaten or otherwise violate the legal rights (such as rights of privacy and publicity) of other users. </li> <br>

            <li class="bullet-list"> That you would not publish, post, upload, distribute or disseminate any inappropriate, profane, defamatory, infringing, obscene, indecent or unlawful topic, name, material or information. </li> <br>

            <li class="bullet-list"> That you would not advertise or offer to sell any scam product/services. </li> <br>

            <li class="bullet-list"> That you would not upload files that contain viruses, corrupted files, or any other similar software or programs that may damage the operation of another's computer. </li> <br>

            <li class="bullet-list"> That you would not harvest or otherwise collect information about others, including telephone numbers and e-mail addresses, without their consent. </li> <br>

            <li class="bullet-list"> That you would not restrict or inhibit any other user from using and enjoying the communication services. </li> <br>
            
            <li class="bullet-list"> That you would only maintain one account. </li>
          </ul>
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-justify">
          Hausworth Nigeria Limited reserves to the right to terminate your membership to the site if you violate any of these terms.
        </div>
      </div>
    </div>
  </section>

  @include('layouts.footer-copyright')
@endsection

@section('footer')
  @include('layouts.footer')
@endsection
