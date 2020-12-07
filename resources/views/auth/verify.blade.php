@extends('layouts.app-custom')

@section('heading')
  @include('layouts.header')
  @include('layouts.navbar')
@endsection

@section('content')
<div class="container intro-height">
    <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
            <div class="inner p-5">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h3>{{ __('Verify Your Email Address') }}</h3>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h6>Welcome to 365HOMEIMPROVEMENT, <span class="text-subtitle"> {{Auth::user()->username}}</span></h6>
                        <p>{{ __('Your registered email-id is')}} {{Auth::user()->email}}. {{('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
