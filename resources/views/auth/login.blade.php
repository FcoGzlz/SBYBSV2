<!DOCTYPE html>
<html lang="es" style="height: 100%; min-height: 100%;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Proyecto - Seguridad ByB</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body
    style="height: 100%;min-height: 100%;background: url(&quot;assets/img/Background.png&quot;) no-repeat fixed;background-size: cover;">
    <div class="row justify-content-center align-items-center rowlogin">
        <div class="col-5 col-sm-7 col-md-8 col-lg-9 col-xl-11"></div>
        <div class="col-sm-7 col-md-5 col-lg-4 col-xl-3 offset-xl-0" style="max-width: 336px;">
            <div class="card border rounded">
                <div class="card-body cardlogin">
                    <div class="text-center divimglogin"><img class="imglogin" src="assets/img/logologin.png">
                    </div>
                    <div>
                        <h4 class="subLogin">Portal Web</h4>
                    </div>
                    <form method="POST" action="{{route('login')}}">
                        @csrf
                        <div class="form-group"><input class="form-control @error('email') is-invalid @enderror" type="email" placeholder="Email" name="email">
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group"><input class="form-control @error('password') is-invalid @enderror" type="password" placeholder="Clave" name="password">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ "El campo clave es obligatorio" }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group"><button class="btn btn-primary btn-block" type="submit"
                                style="background: #009cde;">Iniciar Sesion</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-5 col-sm-7 col-md-8 col-lg-9 col-xl-11"></div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
</body>

</html>

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
