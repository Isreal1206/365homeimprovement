@extends('layouts.app-custom')

@section('heading')
  @include('layouts.header')
  @include('layouts.navbar')
@endsection

@section('content')
<div class="container intro-height vheight">
    <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="inner">
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <h3>{{ __('Reset Password') }}</h3>
                    
                    <div class="form-wrapper">
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <input id="email" type="email" class="form-controll @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" autocomplete="email" placeholder="{{ __('Email Address') }}" autofocus>
                        <i class="zmdi zmdi-email"></i>
                    </div>

                    <button type="submit" class="btn btn-orange d-block mx-auto mb-3">{{ __('Send Reset Link') }}
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
