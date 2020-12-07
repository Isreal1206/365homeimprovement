@extends('layouts.app-custom')

@section('heading')
  @include('layouts.header')
  @include('layouts.navbar')
@endsection

@section('content')
  <section class="bg-links" style="margin-top: 4rem">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
         	 <div class="bg-white box-shadow-custom p-3">
            <div class="row p-3">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                <h2 class="text-justify text-black mt-3">{{$trainings->name}}</h2>
                <span class="text-muted"></span>
              </div>
            </div>

            <div class="row p-3">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                <img src="{{$trainings->image_file}}" class="img-responsive img-fluid height-150 border-radius-custom" alt="Image">
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">            
                <p class="text-justify text-black mt-3">{{$trainings->description}}</p>
              </div>
            </div>

            <div class="row p-3">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              	<h4 class="text-orange">Trainer Information</h4>
                <div class="dropdown-divider mb-3"></div>
                	<p class="text-bold">Name: {{$trainings->fullnames}}</p>
                	<p class="text-bold">Organisation:{{$trainings->organization}}</p>
                	<p class="text-bold">Phone Number: {{$trainings->mobile_no}}</p>
                	<p class="text-bold">email:  {{$trainings->email}}</p>

				        <h4 class="text-orange">Training Information</h4>
                <div class="dropdown-divider"></div>
              	<p class="text-bold">Training:{{$trainings->name}}Training</p>
              	<p  class="text-bold">Venue:{{$trainings->address}}</p>
              	<p  class="text-bold">Phone Number: {{$trainings->mobile_no}}</p>
              	<p  class="text-bold">Description:</p>
              	<p  class="text-bold">Duration: {{$trainings->date}}</p>
              	<p  class="text-bold">Fee:</p>   
              </div>
  	        </div>
        
            <div class="row p-3">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="bg-white box-shadow-custom border-radius-custom p-2">
                  <p class="text-bold text-center mb-0 text-uppercase">Say something About this training</p>
                  <div class="dropdown-divider mb-3"></div>
                  <form method="post" action="{{route('newsletter.store')}}" role="form">
                    {{csrf_field()}}
                    <div class="pt-2">
                      <input type="text" name="name" placeholder="Name" class="form-control">
                      <small class="text-danger">{{ $errors->first('name') }}</small>
                    </div>
                    <div class="pt-2 pb-3">
                    <textarea class="form-control" placeholder="Add your comment"></textarea>
                		</div>
                    <input type="submit" class="btn btn-block btn-dark text-uppercase" value="post comment">
                  </form>  
                </div>
              </div> 
            </div>
          </div>
        </div> <!-- /col-lg-8 -->


        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 my-5">
          <div class="bg-white box-shadow-custom border-radius-custom p-2 mb-5">
            <p class="text-bold text-center mb-0">Related Trainings</p>
            <div class="dropdown-divider"></div>
            @foreach($training as $reltrn)
            @if($reltrn->job_title == $trainings->job_title)
            <div class="row p-1">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                <a href ="{{url('training/'.$reltrn->trainer_id)}}"><img src="{{$reltrn->image_file}}" class="w-100 img-responsive" height="100px" alt="Image"></a>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                <a href ="{{url('training/'.$reltrn->trainer_id)}}"><p class="">{{substr($reltrn->description,0,25)}} {{strlen($reltrn->description) > 25 ?"...":""}}</p></a>
                <small class="text-muted"><i class="text-muted fa fa-tag mr-1"></i>{{$reltrn->job_title}}</small>
                <p><small>{{$reltrn->created_at->format ('d M, Y.')}}</small></p>
              </div>
            </div>
            <div class="dropdown-divider"></div>
            @endif
            @endforeach
          </div>

          @if($flash = session('newsletter'))
          <div class="alert alert-success" role="alert">
            {{$flash}}
          </div>
          @endif
          <div class="bg-white box-shadow-custom border-radius-custom p-2">
            <p class="text-bold text-center mb-0">Newsletter Subscription</p>
            <div class="dropdown-divider"></div>
            <form method="post" action="{{route('newsletter.store')}}" role="form">
              {{csrf_field()}}
              <div class="pt-2">
                <input type="text" name="name" placeholder="Name" class="form-control">
                <small class="text-danger">{{ $errors->first('name') }}</small>
              </div>

              <div class="py-3">
                <input type="text" name="mobile" placeholder="Telephone" class="form-control">
                <small class="text-danger">{{ $errors->first('mobile') }}</small>
              </div>

              <div class="pb-3">
                <input type="email" name="email" placeholder="Email Address" class="form-control">
                <small class="text-danger">{{ $errors->first('email') }}</small>
              </div>

              <input type="submit" class="btn btn-block btn-orange text-uppercase" value="Subscribe">

              <small class="text-justify">
              I agree to the <a class="text-primary" target="_blank" href="{{route('tos')}}">Terms of Use</a> and <a class="text-primary" target="_blank" href="{{route('privacy')}}">Privacy Policy.</a></small>
            </form>
          </div>
        </div> <!-- /col-lg-4 -->
      </div> <!-- /row -->
    </div>
  </section>
  @include('layouts.footer-home')
@endsection

@section('footer')
  @include('layouts.footer')
@endsection
