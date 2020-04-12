@extends('layouts.layouts_auth')

@section('content')
    <div class="kt-grid kt-grid--ver kt-grid--root">
        <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v6 kt-login--signin" id="kt_login">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">
                <div class="kt-grid__item  kt-grid__item--order-tablet-and-mobile-2  kt-grid kt-grid--hor kt-login__aside">
                    <div class="kt-login__wrapper" style="">
                        <div class="kt-login__container">
                            <div class="kt-login__body">
                                <div class="kt-login__logo">
                                    <a href="#">
                                        <img src="{{asset('')}}/assets/media/company-logos/logo-2.png">
                                    </a>
                                </div>
                                <div class="kt-login__signin">
                                    <div class="kt-login__head">
                                        <h3 class="kt-login__title">Forgotten Password ?</h3>
                                        <div class="kt-login__desc">Enter New Password:</div>
                                    </div>
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <div class="kt-login__form">
                                        <form class="kt-form" method="post" action="{{ route('password.update') }}">
                                            @csrf
                                            <div class="form-group">
                                                <input class="form-control  @error('email') is-invalid @enderror" type="text" placeholder="Email" name="email" id="kt_email" autocomplete="email" value="{{ $email ?? old('email') }}" autofocus>
                                            </div>
                                            @error('email')
                                                <strong>{{ $message }}</strong>
                                            @enderror
                                            <div class="form-group">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" password="password" required placeholder="Password" autocomplete="password" autofocus>
                                            </div>
                                            @error('password')
                                                <strong>{{ $message }}</strong>
                                            @enderror
                                            <div class="form-group">
                                                <input class="form-control form-control-last" type="password" placeholder="Confirm Password" id="password_confirmation" name="password_confirmation">
                                            </div>
                                            <div class="kt-login__extra">
                                                <label class="kt-checkbox">
                                                    <input type="checkbox" id="agree" name="agree"> I Agree the <a href="#">terms and conditions</a>.
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class="kt-login__actions">
                                                <button type="submit" id="resetP" class="btn btn-brand btn-pill btn-elevate" disabled>Reset Password</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-grid__item kt-grid__item--fluid kt-grid__item--center kt-grid kt-grid--ver kt-login__content" style="background-image: url({{asset('')}}assets/media//bg/bg-4.jpg);">
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
    <!-- end:: Page -->
@endsection
@section('js')
    <script>
        var checker = document.getElementById('agree');
        var sendbtn = document.getElementById('resetP');
        // when unchecked or checked, run the function
        checker.onchange = function(){
            if(this.checked){
                sendbtn.disabled = false;
            } else {
                sendbtn.disabled = true;
            }
        }
    </script>
@endsection
