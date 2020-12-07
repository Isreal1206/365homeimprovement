@extends('layouts.app-custom')

@section('heading')
  @include('layouts.header')
  @include('layouts.navbar')
@endsection

@section('content')
  <section class="intro-height vheight">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
          <div class="alert alert-dark mt-3 mb-5">
            <span class="mr-2"><a href="{{url('/')}}">Home</a></span>
            <i class="fa fa-angle-double-right"></i>
            <span class="mr-2"><a href="{{route('career')}}">Career</a></span>
            <i class="fa fa-angle-double-right"></i>
            <span class="mx-2"><a href="{{url('#')}}">Analyst</a></span>
          </div>
        </div>
      </div>

      <div class="row mb-5">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-5">
          <p>To help us get started, please do fill the form below. It’s the first step to securing a job with us.</p>

          <div class="bg-light p-3">
            <h4 class="text-center" style="font-weight: 600">Fill this Form</h4>
            @include('inc.messages')
            <form action="#" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
              <label for="name">Name:</label>
              <input type="text" name="name" class="form-control mb-3">
              <label for="email">Email:</label>
              <input type="email" name="email" class="form-control mb-3">
              <label for="name">Upload Resume:</label>
              <input type="file" class="form-control-file mb-3" name="file" aria-describedby="fileHelpId">
              <button type="submit" name="" id="" class="btn btn-success btn-md">Submit</button>
            </form>
          </div>
        </div>

        <div class="col-12 col-sm-12 col-md-5 col-lg-5 offset-md-1">
          <div> 
            <h6 style="font-size: 1.0rem; font-weight: 600">HOW IT WORKS</h6>
            <p>Step 1:</p>
            <p>Fill in the form at your left hand side and click the submit button if you're an Analyst or your profession is related to an Analyst job.</p>
            <hr>
            <p>Step 2:</p>
            <p>You will get a message from us via email if you are shortlisted or not.</p>
            <hr>
            <p>Step 3:</p>
            <p>If you are shortlisted, you move to the next stage.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  @include('layouts.footer-copyright')
@endsection

@section('footer')
  @include('layouts.footer')
@endsection 
