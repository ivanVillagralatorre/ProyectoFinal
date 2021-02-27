@extends('layouts.layoutProyecto')

@section('content')
  <main class="d-flex flex-column p-4 w-100">
      <div class="mb-3  d-flex justify-content-center">
          <button type="button" class="btn text-uppercase btnEnviar btn-dark" data-toggle="modal" data-target="#exampleModal">
              Crear Tarea
          </button>

          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Nueva Tarea</h5>
                      </div>
                      <div class="modal-body">
                          <div class="sn-field ">
                              <form id="formTarea" method="post" action="{{route('crearTareas')}}">
                              @csrf
                              <div class="modal-body">
                                  <!--FORMULARIO PARA LA CREACIÓN DE PROYECTOS-->
                                  <div class="form-group">
                                      <label for="exampleFormControlInput1">Título de la tarea</label>
                                      <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Tarea1">
                                  </div>

                                  <div class="form-group">
                                      <label for="exampleFormControlTextarea1">Descripción</label>
                                      <textarea name="descripcion" class="form-control w-100" id="descripcion" rows="3"></textarea>
                                  </div>
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                  <input type="submit" class="btn btn-dark" value="Crear">
                              </div>
                              </form>



                          </div>

                      </div>

                  </div>
              </div>
          </div>


      </div>

      <div  id="contenedorTareas" class="d-flex  flex-wrap w-100">
          <div class="tarea border border-dark w-25 rounded p-2 m-md-4">
              <div class="titulo-obra d-flex   justify-content-between " id="obra1" data-toggle="collapse" href="#obraCompleta1" aria-controls="obraCompleta1">
                  <p><b>ID: 123123123</b></p>
                  <div>
                      <span><b>Estado:</b> <span>confirmada</span></span>
                  </div>
              </div>

              <div id="obraCompleta1" class="collapse cuerpo-obra ">

                  <div>
                      <p><b>Descripción: </b>cosascosas</p>
                  </div>
              </div>
          </div>

          <div class="tarea border border-dark  w-25  rounded p-2 m-md-4">
              <div class="titulo-obra d-flex   justify-content-between " id="obra1" data-toggle="collapse" href="#obraCompleta1" aria-controls="obraCompleta1">
                  <p><b>ID: 123123123</b></p>
                  <div>
                      <span><b>Estado:</b> <span>confirmada</span></span>
                  </div>
              </div>

              <div id="obraCompleta1" class="collapse cuerpo-obra ">

                  <div>
                      <p><b>Descripción: </b>cosascosas</p>
                  </div>
              </div>
          </div>


      </div>

  </main>
@endsection
