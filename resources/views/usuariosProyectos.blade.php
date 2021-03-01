@extends('layouts.layoutProyecto')

@section('content')

    <!-- TABLA CON TODOS LOS USUARIOS -->
    <div class="d-flex flex-column align-items-center w-100">
        <p class="h3">Lista de participantes</p>



        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Email</th>
                @if($propietario->id == Auth::user()->id)
                    <th scope="col">Acción</th>
                @endif
            </tr>
            </thead>
            <tbody>

            @foreach($listaUsuarios as $usuario)

                <form method="post" action="{{route("eliminarUsuarioProyecto")}}">
                    @csrf
                    <tr>
                        <input type="hidden" name="idUsuario" value="{{$usuario->id}}">
                        <th scope="row">{{$x++}}</th>
                        <td>{{$usuario->name}}</td>
                        <td>{{$usuario->apellidos}}</td>
                        <td>{{$usuario->email}}</td>
                        @if($propietario->id == Auth::user()->id)
                            @if($usuario->id == $propietario->id)
                                <td><input type="submit" class="btn btn-dark" value="Eliminar" disabled></td>
                            @else
                                <td><input type="submit" class="btn btn-dark" value="Eliminar"></td>
                            @endif
                        @endif
                    </tr>
                </form>

            @endforeach

            </tbody>
        </table>

        @if($propietario->id == Auth::user()->id)
            <button type="button" class="btn btn-dark align-self-start ml-3" data-toggle="modal" data-target="#AnadirParticipante">
                Añadir participante
            </button>
        @endif


        <!-- Modal -->
        <div class="modal fade" id="AnadirParticipante" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Añadir participante</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>


                    <form id="formProyecto" method="post" action="{{route("AnadirUsuarioProyecto")}}">
                        @csrf
                        <div class="modal-body">
                            <!--FORMULARIO PARA LA CREACIÓN DE PROYECTOS-->
                            <div class="form-group d-flex">
                                <input type="email" name="email" class="form-control" id="titulo" placeholder="antonio@siwo.com">
                                <input type="submit" class="btn btn-dark ml-2" value="Enviar invitación">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>

@endsection
