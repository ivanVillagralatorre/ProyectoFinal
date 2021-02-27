@extends('layouts.layoutProyecto')
@section('content')
    <div class="container-fluid d-flex flex-column py-4">
        <!--BOTÓN PARA SUBIR ARCHIVOS-->
        <form action="#" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="d-flex">
                <button type="submit" class="btn btn-dark" id="subirArchivo" data-bs-toggle="collapse" data-bs-target="#select-archivo" >
                    Subir arhivo
                </button>
                <div id="select-archivo" class="p-2">
                    <input type="file" name="archivo" id="archivo">
                    <span class="fa fa-check-circle" id="iconoArchivo"></span>
                </div>
            </div>
        </form>
        <!-- TABLA CON LOS ARCHIVOS -->
        <div>
            <p class="h3">Archivos del proyecto</p>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Fecha de creación</th>
                    <th scope="col">¿Descargar?</th>
                </tr>
                </thead>
                <tbody>

{{--                @foreach($listaArchivos as $archivo)--}}
                        <tr>
{{--                        <input type="hidden" name="idProyecto" value="{{$proyecto->id}}">--}}
                            <th scope="row">nombre archivo</th>
                            <td>creador del archivo</td>
                            <td>fecha en la que se subió</td>
                            <td><a class="btn btn-dark" href="#">Descargar</a></td>
                        </tr>
{{--                @endforeach--}}
                </tbody>
            </table>
        </div>
    </div>

@endsection
