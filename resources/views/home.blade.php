@extends('layout')

@section("titulo", "Inicio")

@section('content')

    <div class="container-fluid d-flex flex-column">

        <br>

        <div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#CrearProyecto">
                Crear un nuevo proyecto
            </button>

            <!-- Modal -->
            <div class="modal fade" id="CrearProyecto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Crear proyecto</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Título del proyecto</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Mi proyecto">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Descripción</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-dark">Crear</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <br>

        <!-- TABLA CON LOS PROYECTOS -->
        <div>
            <p class="h3">Lista de proyectos</p>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Título</th>
                    <th scope="col">Fecha de inicio</th>
                    <th scope="col">Número de participantes</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mi proyecto</td>
                    <td>05/02/2021</td>
                    <td>5</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Gestor de empleados</td>
                    <td>13/01/2021</td>
                    <td>13</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>El proyecto final</td>
                    <td>26/01/2021</td>
                    <td>2</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Ayuntamiento vitoria</td>
                    <td>22/01/2021</td>
                    <td>7</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Diccionario digital</td>
                    <td>25/02/2021</td>
                    <td>4</td>
                </tr>

                </tbody>
            </table>
        </div>


    </div>

@endsection
