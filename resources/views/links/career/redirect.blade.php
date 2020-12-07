@extends('layouts.app-custom')

@section('heading')
  @include('layouts.header')
  @include('layouts.navbar')
@endsection

@section('content')
  <section class="intro-height vheight">
    <div class="container">
      <div class="row text-center">
        <div class="col-12">
          <h2>THANK YOU!</h2>
        </div>
        <div class="col-12 mt-2">
  			  <h4>Thanks for submitting your application.</h4>
  		    <h4>We would process your request as soon as possible and get back to you via email.</h4>
  		    <p class="mt-2">From the <strong class="text-primary">Hausworth Nigeria Limited Team</strong></p>
  		    <p>You will be redirected to the homepage After</p>
          <p class="timer" style="font-size: 4rem">5</p>
          <p> seconds.</p>
        </div>
  	  </div>
    </div>
  </section>

  @include('layouts.footer-copyright')

  <script>
    $(function(){
      var time = 10;

      function redirect(){
        setTimeout(redirect, 1000); // function will fired for every one second
        $(".timer").html(time);
        if (time == 0){
          // if time is zero redirect
          window.location.href="/";
        }
        time--; // the time decreases
      }
      // Call the function redirect
      redirect();
    });
  </script>
@endsection

@section('footer')
  @include('layouts.footer')
@endsection
