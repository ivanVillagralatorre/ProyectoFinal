@extends('layouts.authLayout')

@section('content')


    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="d-none d-md-flex col-md-4 col-lg-6 " id="fondo1"><a href="/"></a></div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto d-flex flex-column  ">
                                <img src="/media/Solo_dibujo.png " class="d-block d-md-none  align-self-center mb-5">
                                <h3 class="login-heading mb-4 text-center">Introduce tu nueva contraseña</h3>
                                <form method="POST" action="{{ route('password.update') }}" onsubmit="return validarLogin()">
                                    @csrf

                                    <input type="hidden" name="token" value="{{ $token }}">

                                    <div class="form-label-group">


                                        <input id="inputEmail" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  value="{{ $email ?? old('email') }}" readonly required autocomplete="email" autofocus>

                                        <label for="inputEmail">Email</label>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>


                                    <div class="form-label-group ">

                                        <input id="inputPassword" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        <label for="inputPassword">Nueva contraseña</label>

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>



                                    <div class="form-label-group ">


                                            <input id="inputPassword2" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">


                                        <label for="inputPassword2">Repita la contraseña</label>
                                    </div>

                                    <button class="btn btn-lg btn-dark btn-block btn-login text-uppercase col-12  align-self-center font-weight-bold mb-2" id="b-login1" type="submit">Enviar</button>
                                    <div class="text-center">
                                        <a href="/">Login</a>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

