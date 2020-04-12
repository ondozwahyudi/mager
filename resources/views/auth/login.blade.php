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
                                <div class="kt-login__signin">
                                    <div class="kt-login__head">
                                        <h3 class="kt-login__title">Sign In To Mager</h3>
                                    </div>
                                    <div class="kt-login__form">
                                        <form class="kt-form" method="post" action="{{ route('login') }}">
                                            @csrf
                                            <div class="form-group">
                                                <input class="form-control  @error('email') is-invalid @enderror" type="text" placeholder="Email" name="email" value="{{ old('email') }}" autocomplete="on">
                                            </div>
                                            @error('email')
                                                <strong>{{ $message }}</strong>
                                            @enderror

                                            <div class="form-group">
                                                <input class="form-control @error('password') is-invalid @enderror"  type="password" placeholder="Password" name="password">
                                            </div>
                                            @error('password')
                                                <strong>{{ $message }}</strong>
                                            @enderror
                                            <div class="kt-login__extra">
                                                <label class="kt-checkbox">
                                                    <input type="checkbox" name="remember"> Remember me
                                                    <span></span>
                                                </label>
                                                <a href="{{route('password.request')}}" >Forget Password ?</a>
                                            </div>
                                            <div class="kt-login__actions">
                                                <button type="submit"  class="btn btn-brand btn-pill btn-elevate">Sign In</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="kt-login__divider">
                                    <div class="kt-divider">
                                        <span></span>
                                        <span>OR</span>
                                        <span></span>
                                    </div>
                                </div>

                                <div class="kt-login__options">
                                    <div class="row d-flex justify-content-between align-items-center">
                                        <div class="col-md-6 d-flex">
                                        <a href="{{ route('login.provider', 'google') }}" style="border-radius: 5px;  margin-bottom: 10px;"  class="btn btn-block btn-outline-secondary  btn-xs "><img src="https://img.icons8.com/color/20/000000/google-logo.png"/>
                                            {{ __(' Google') }}</a>
                                        </div>
                                        <div class="col-md-6 d-flex">
                                        <a href="{{ route('login.provider', 'github') }}" style="border-radius: 5px;margin-bottom: 10px;"  class="btn btn-block btn-outline-secondary btn-xs"><img src="https://img.icons8.com/ios-glyphs/20/000000/github.png"/>
                                                {{ __(' GitHub') }}</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="kt-login__account">
                            <span class="kt-login__account-msg">
                                Don't have an account yet ?
                            </span>&nbsp;&nbsp;
                            <a href="{{route('register')}}" class="kt-login__account-link">Sign Up!</a>
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
