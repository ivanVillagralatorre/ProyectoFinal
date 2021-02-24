<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>siwo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="media/Solo_dibujo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css" type="text/css">

</head>
<body>
<div class="container-fluid">
    <div class="row no-gutter">
        <div class="d-none d-md-flex col-md-4 col-lg-6 " id="fondo1"> </div>
        <div class="col-md-8 col-lg-6">
            <div class="login d-flex align-items-center py-5">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-9 col-lg-8 mx-auto d-flex flex-column  ">
                            <img src="media/Solo_dibujo.png " class="d-block d-md-none  align-self-center mb-5">
                            <h3 class="login-heading mb-4 text-center">Inicia se sesión en siwo</h3>
                            <form class="d-flex flex-column " method="POST" action="{{ route('login') }}" onsubmit=" return validarLogin()">
                                @csrf
                                <div class="form-label-group">

                                    <input id="inputEmail" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder=" introduce tu Email">

                                    <label for="inputEmail">introduce tu Email</label>
                                </div>

                                <div class="form-label-group ">

                                    <input id="inputPassword" type="password" class="form-control" name="password" required autocomplete="current-password" autofocus placeholder=" introduce tu contraseña">

                                    <label for="inputPassword">Password</label>
                                </div>


                                <button class="btn btn-lg btn-dark btn-block btn-login text-uppercase col-12  align-self-center font-weight-bold mb-2" id="b-login1" type="submit">Sign in</button>
                                <div class="text-center">
                                    <a class="small" href="#">¿Olvidaste tu contrsaeña?</a></div>


                            </form>
                            <div id='alert' class="alert   alert-danger alert-dismissible fade show mt-3" role="alert">
                                <strong>Formato incorrecto!</strong> <br>
                                ejemplo de contraseña: Jm123456
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script></body>
<script src="js/validaciones.js"></script>

</html>
