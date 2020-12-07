@extends('layouts.app-custom')

@section('heading')
  @include('layouts.header')
  @include('layouts.navbar')
@endsection

@section('content')
<div class="container intro-height vheight">
    <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
            <div class="inner">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <h3>{{ __('Reset Password') }}</h3>
                    
                    <div class="form-wrapper">
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <input id="email" type="email" class="form-controll @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email">
                        <i class="zmdi zmdi-email"></i>
                    </div>

                    <div class="form-wrapper">
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <input id="password" type="password" class="form-controll @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Password') }}" required autocomplete="new-password">
                        <i class="zmdi zmdi-lock"></i>
                    </div>

                    <div class="form-wrapper">
                        <input id="password-confirm" type="password" class="form-controll" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" required autocomplete="new-password">
                        <i class="zmdi zmdi-lock"></i>
                    </div>

                    <button type="submit" class="btn btn-orange d-block mx-auto mb-3">{{ __('Reset Password') }}
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
