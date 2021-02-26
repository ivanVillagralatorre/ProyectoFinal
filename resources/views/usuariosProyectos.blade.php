@extends('layouts.layoutProyecto')

@section('content')

    <!-- TABLA CON TODOS LOS USUARIOS -->
    <div class="d-flex flex-column align-items-center w-100">
        <p class="h3">Lista de usuarios</p>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Email</th>
                <th scope="col">¿Invitar?</th>
            </tr>
            </thead>
            <tbody>

            @foreach($listaUsuarios as $usuario)

                <form method="post" action="{{route('abrirProyecto')}}">
                    @csrf
                    <tr>
                        <input type="hidden" name="idProyecto" value="{{$usuario->id}}">
                        <th scope="row">{{$x++}}</th>
                        <td>{{$usuario->name}}</td>
                        <td>{{$usuario->apellidos}}</td>
                        <td>{{$usuario->email}}</td>
                        <td><input type="submit" class="btn btn-dark" value="Invitar"></td>
                    </tr>
                </form>

            @endforeach

            </tbody>
        </table>
    </div>

@endsection
