@extends('layouts.app-custom')

@section('heading')
  @include('layouts.header')
  @include('layouts.navbar')
@endsection

@section('content')
 <div class="container intro-height vheight">
    <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
            <div class="inner pb-5">
                <form method="POST" action="{{ route('admin.regStore') }}">
                    @csrf
                    <h3>{{ __('Admin Register') }}</h3>
                    <div class="form-wrapper">
                        <small class="text-danger">{{ $errors->first('username') }}</small>
                        <input type="text" placeholder="Username" class="form-controll  @error('username') is-invalid @enderror" name="username" value= "{{ old('username') }}">
                        <i class="fa fa-user"></i>
                    </div>
                    
                    <div class="form-wrapper">
                        <small class="text-danger">{{ $errors->first('email') }}</small>
                        <input type="text" placeholder="Email Address" class="form-controll" name="email" value="{{ old('email') }}">
                        <i class="zmdi zmdi-email"></i>
                    </div>
                    
                    <div class="form-wrapper">
                        <small class="text-danger">{{ $errors->first('password') }}</small>
                        <input type="password" placeholder="Password" class="form-controll" name="password" >
                        <i class="zmdi zmdi-lock"></i>
                    </div>
                    
                    <div class="form-wrapper">
                        <small class="text-danger">{{ $errors->first('password_confirmation') }}
                        <input type="password" placeholder="Confirm Password" class="form-controll" name="password_confirmation">
                        <i class="zmdi zmdi-lock"></i>
                    </div>

                    <button type="submit" class="btn btn-orange d-block mx-auto my-3">{{ __('Register') }}
                        <i class="zmdi zmdi-arrow-right"></i>
                    </button>

                    <div class="form-wrapper text-center mt-3">
                        <small class="text-dark">Already have an account? <a href="{{route('admin.login')}}">Login</a></small>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>        
      
@include('layouts.footer-copyright')
@endsection

@section('footer')
    @include('layouts.footer')
@endsection

