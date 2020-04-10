
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dore jQuery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('') }}/font/iconsmind/style.css" />
    <link rel="stylesheet" href="{{ asset('') }}/font/simple-line-icons/css/simple-line-icons.css" />

    <link rel="stylesheet" href="{{ asset('') }}/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('') }}/css/vendor/bootstrap-float-label.min.css" />
    <link rel="stylesheet" href="{{ asset('') }}/css/main.css" />
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body class="background show-spinner">
    <div class="fixed-background"></div>
    <main>
        <div class="container">
            <div class="row h-100">
                <div class="col-12 col-md-10 mx-auto my-auto">
                    <div class="card auth-card" style="border-radius: 10px">
                        <div class="position-relative image-side" style="border-radius: 9px">
                            <p class=" text-white h2">MAGER CLASS</p>
                            <p class="white mb-5">
                                Sudah Punya Akun
                            </p>
                            <a type="button" href="{{route('login')}}" style="border-radius: 5px" class="btn btn-block default btn-sm btn-primary mb-3">Login</a>
                            <p class="white mb-2">
                                atau Daftar Dengan
                                </p>
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="col-md-6">
                                    <a href="{{ route('login.provider', 'google') }}" style="border-radius: 5px"  class="btn default btn-block btn-light btn-shadow btn-xs "><img src="https://img.icons8.com/color/20/000000/google-logo.png"/>
                                        {{ __(' Google') }}</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{ route('login.provider', 'github') }}" style="border-radius: 5px"  class="btn default btn-block btn-light btn-shadow btn-xs "><img src="https://img.icons8.com/ios-glyphs/20/000000/github.png"/>
                                            {{ __(' GitHub') }}</a>
                                        </div>
                                </div>
                        </div>
                        <div class="form-side">
                            <a href="Dashboard.Default.html">
                                <span class="logo-single"></span>
                            </a>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <label class="form-group has-float-label mb-4">
                                    <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    <span>Nama</span>
                                </label>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                <label class="form-group has-float-label mb-4">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    <span>E-mail</span>
                                </label>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                <label class="form-group has-float-label mb-4">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
                                    <span>Password</span>
                                </label>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                <label class="form-group has-float-label mb-4">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    <span>{{ __('Confirm Password') }}</span>
                                </label>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="{{ asset('') }}/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('') }}/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('') }}/js/dore.script.js"></script>
    <script src="{{ asset('') }}/js/scripts.js"></script>
</body>

</html>

