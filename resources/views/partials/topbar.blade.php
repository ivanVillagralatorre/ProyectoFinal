<head>
    <title>@yield("titulo", "Se te a olvidao el título.")</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>


<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img style="max-height: 40px" src="images/logo.png">
    </a>

    <a class="navbar-brand" href="#" data-toggle="modal" data-target="#perfil">
        <img style="max-height: 40px" src="images/userDefault.png">
    </a>

</nav>

<!--PERFIL-->

<div>

    <!-- Modal -->
    <div class="modal fade" id="perfil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Datos de tu perfil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nombre</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre" disabled>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Apellidos</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Apellido" disabled>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" disabled>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Contraseña</label>
                            <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="*******" disabled>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Editar</button>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
