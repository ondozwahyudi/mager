
@extends('layouts.layouts_auth')

@section('content')
    <div class="kt-grid kt-grid--ver kt-grid--root">
        <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v6 kt-login--signin" id="kt_login">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">
                <div class="kt-grid__item  kt-grid__item--order-tablet-and-mobile-2  kt-grid kt-grid--hor kt-login__aside">
                    <div class="kt-login__wrapper">
                        <div class="kt-login__container">
                            <div class="kt-login__body">
                                <div class="kt-login__logo">
                                    <a href="#">
                                        <img src="./assets/media/company-logos/logo-2.png">
                                    </a>
                                </div>

                                <div class="kt-login__head">
                                    <h3 class="kt-login__title">Sign Up</h3>
                                    <div class="kt-login__divider mb-3">
                                        <div class="row d-flex justify-content-between align-items-center">
                                            <div class="col-md-6">
                                            <a href="{{ route('login.provider', 'google') }}" style="border-radius: 5px"  class="btn btn-block btn-outline-secondary  btn-xs "><img src="https://img.icons8.com/color/20/000000/google-logo.png"/>
                                                {{ __(' Google') }}</a>
                                            </div>
                                            <div class="col-md-6">
                                            <a href="{{ route('login.provider', 'github') }}" style="border-radius: 5px"  class="btn btn-block btn-outline-secondary btn-xs"><img src="https://img.icons8.com/ios-glyphs/20/000000/github.png"/>
                                                    {{ __(' GitHub') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-divider">
                                        <span></span>
                                        <span>OR</span>
                                        <span></span>
                                    </div>
                                    <div class="kt-login__desc">Enter your details to create your account:</div>
                                </div>
                                <div class="kt-login__form">
                                    <form class="kt-form"  method="POST" action="{{ route('register') }}">
                                    @csrf
                                        <div class="form-group">
                                            <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required placeholder="Name Full"autofocus>
                                        </div>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Email" autofocus>
                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" password="password" value="{{ old('password') }}" required placeholder="Password" autocomplete="password" autofocus>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control form-control-last" type="password" placeholder="Confirm Password" id="password_confirmation" name="password_confirmation">
                                        </div>
                                        <div class="kt-login__extra">
                                            <label class="kt-checkbox">
                                                <input type="checkbox" name="agree"> I Agree the <a href="#">terms and conditions</a>.
                                                <span></span>
                                            </label>
                                        </div>
                                        <div class="kt-login__actions">
                                            <button id="kt_login_signup_submit" class="btn btn-brand btn-pill btn-elevate signup">Sign Up</button>
                                            <a href="{{route('login')}}" class="btn btn-outline-brand btn-pill">Cancel</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-grid__item kt-grid__item--fluid kt-grid__item--center kt-grid kt-grid--ver kt-login__content" style="background-image: url(./assets/media//bg/bg-4.jpg);">
                    <div class="kt-login__section">
                        <div class="kt-login__block">
                            <h3 class="kt-login__title">Join Our Community</h3>
                            <div class="kt-login__desc">
                                Lorem ipsum dolor sit amet, coectetuer adipiscing
                                <br>elit sed diam nonummy et nibh euismod
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

