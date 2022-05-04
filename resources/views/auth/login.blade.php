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
                        <div class="form-group"><input class="form-control @error('nombre') is-invalid @enderror" type="text" placeholder="Usuario" name="nombre">
                            @error('nombre')
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

