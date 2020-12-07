@extends('layouts.app-custom')

@section('heading')
  @include('layouts.header')
  @include('layouts.navbar')
@endsection

@section('content')
  <section class="bg-links py-5" style="margin-top: 4.2rem">
    @if(count($contractors)>0)
    <div class="container-fluid">
      <div class="row border mb-5 bg-white">
        <h3 class="py-2 px-5">{{$categories->name}}</h3>
      </div> <!-- end of row-->
    </div>

    <div class="container vheight">
      @foreach($contractors as $contractor)
      <div class="row bg-white py-3">
        <div class="col-12 col-sm-12 col-md-12 col-lg-2">
          <img src="{{$contractor->banner}}" class="img-responsive img-fluid w-100 height-100 border-radius-custom" />
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-10">
          <h3>{{$contractor->company_name}}</h3>
          <p>{!! substr($contractor->description, 0, 70) !!}{!! strlen($contractor->description) > 60 ? "..." : "" !!} <small><a href="/contractors/{{$contractor->contractor_id}}" class="text-primary"> Read More</a></small></p>
          <p>
            <small><i class="fa fa-map-marker mr-1"></i>{{$contractor->address}} {{$contractor->state}}</small>
          </p>
        </div>
      </div>
      <div class="dropdown-divider"></div>
      @endforeach
    </div>

    @else
    <div class="row border mb-3 bg-white mtop">
      <h3 class="py-2 px-5">{{$categories->name}}</h3>
    </div> <!-- end of row-->
    
    <div class="container vheight">
      <p class="text-center text-danger">No Record Available Yet!</p>
    </div>
    @endif
  </section>
  @include('layouts.footer-copyright')
@endsection

@section('footer')
  @include('layouts.footer')
@endsection 