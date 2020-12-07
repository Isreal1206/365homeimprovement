@extends('layouts.app-custom')

@section('heading')
  @include('layouts.header')
  @include('layouts.navbar')
@endsection

@section('content')
<div class="container intro-height vheight">
    <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
            @if($flash = session('admin_register'))
              <div class="alert alert-success text-center mb" role="alert">
                <i class="fa fa-check"></i> {{$flash}}
              </div>
            @endif
            @if($flash = session('admin_reset_password'))
              <div class="alert alert-success text-center mb" role="alert">
                <i class="fa fa-check"></i> {{$flash}}
              </div>
            @endif
            <div class="inner pb-5">
                <form method="POST" action="{{ route('admin.loginStore') }}">
                    @csrf
                    <h3>{{ __('Admin Login') }}</h3>

                    <div class="form-wrapper">
                        <small class="text-danger">{{ $errors->first('email') }}</small>
                        <input id="email" type="email" class="form-controll @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('Email Address') }}" required autocomplete="email">
                        <i class="zmdi zmdi-email"></i>
                    </div>

                    <div class="form-wrapper">
                        <small class="text-danger">{{ $errors->first('password') }}</small>
                        <input id="password" type="password" class="form-controll @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Password') }}" required autocomplete="current-password">
                        <i class="zmdi zmdi-lock"></i>
                    </div>

                    <div class="form-wrapper">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>

                            <small class="pull-right">
                              @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                            </small>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-orange d-block mx-auto my-3">{{ __('Login') }}
                        <i class="zmdi zmdi-arrow-right"></i>
                    </button>

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


