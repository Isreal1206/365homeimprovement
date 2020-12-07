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
          <h1 class="title-page text-center">PRIVACY <span class="text-orange">POLICY</span></h1>
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
          <ul class="custom-bullet-list text-justify">
            <li class="bullet-list mb-3"> At Hausworth Nigeria Limited, we respect the privacy of our users and the importance of the information they entrust to us. We provide this privacy policy so that our users <strong>YOU</strong> will know what information is being collected about you through our website www.365homeimprovement.ng, how that information is being used, and with whom it is being shared. </li>
          
            <li class="bullet-list mb-3"> By using our site and services, you are agreeing to the collection and use of certain information about you in the manner described in this privacy policy. </li>
            
            <li class="bullet-list mb-3"> We update this privacy policy from time to time. If we make any material changes in the ways we may collect, use, or share information, we will notify you by posting notice of the changes on our site. </li>

            <li class="bullet-list mb-3"> Like most web servers we use cookies / web beacons on users’ browser to collect information. </li>

            <li class="bullet-list mb-3"> Each time you visit our website, we collect the limited information that your browser makes available. This information includes: 
              <ul class="sub-custom-bullet-list"> 
                <li class="sub-bullet-list"> Your Internet Protocol (IP) address. </li>
                <li class="sub-bullet-list"> The address of the last URL you visited before clicking through to the Site. </li>
                <li class="sub-bullet-list"> Your browser and platform type (e.g., a Netscape browser on a Macintosh platform) </li>
                <li class="sub-bullet-list"> Your browser language and </li>
                <li class="sub-bullet-list"> The data in any undeleted "cookies" that your browser previously accepted from us. </li>
              </ul>
            </li>
            <li class="bullet-list mb-3"> This information apart from being useful in administering service, are used to store information about a visitor's preferences and history in order to better serve the visitor and/or present the visitor with customized content. Advertising partners and other third parties may also use cookies, scripts and/or web beacons to track visitors to our site in order to display advertisements and other useful information. Such tracking is done directly by the third parties through their own servers and is subject to their own privacy policies. </li>
            
            <li class="bullet-list mb-3"> We do everything possible to protect the integrity of the data’s submitted through our website www.365homeimprovement.ng for the purpose of registering as a user and performing other functions on our platform. </li>
            
            <li class="bullet-list mb-3"> We use such data’s so generated to enable us administer your account and forward our promotional items. </li>

            <li class="bullet-list mb-3"> Under no circumstance would we sell, rent or distribute to a third party without the approval of the owner. </li>

            <li class="bullet-list mb-3"> Note that you can change your browser settings to disable cookies if you have privacy concerns. Disabling cookies for all sites is not recommended as it may interfere with your use of some sites. The best option is to disable or enable cookies on a per-site basis. Consult your browser documentation for instructions on how to block cookies and other tracking mechanisms. </li>

            <li class="bullet-list mb-3"> Please do contact if you have any concerns at <span class="text-orange">hello@365homeimprovement.ng</span> </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  @include('layouts.footer-copyright')
@endsection

@section('footer')
  @include('layouts.footer')
@endsection
