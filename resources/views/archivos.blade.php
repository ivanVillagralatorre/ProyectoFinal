@extends('layouts.layoutProyecto')
@section('content')
    <div class="container-fluid d-flex flex-column">
        <form action="#" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="d-flex">
                <button type="submit" class="btn btn-dark" id="subirArchivo" data-bs-toggle="collapse" data-bs-target="#select-archivo" >
                    Subir arhivo
                </button>
                <div id="select-archivo">
                    <input type="file" name="archivo" id="archivo"><span class="fa fa-check-circle" id="iconoArchivo"></span>
                </div>
            </div>
        </form>
    </div>

@endsection
