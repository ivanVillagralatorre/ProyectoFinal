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
                                  <input type="hidden" name="idP" value="{{$_COOKIE['idProyecto']}}">
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

      <div  id="contenedorTareas" class="d-flex justify-content-center flex-wrap w-100">
          @foreach($listatareas as $tarea)
              <div class="accordion-item tstyle rounded id="tarea{{$tarea->id}}">
                  <h2 class="accordion-header" >
                      <button class=" text-center accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#t{{$tarea->id}}" aria-expanded="false" aria-controls="t{{$tarea->id}}">
                          <p class=" text-uppercase">{{$tarea->titulo}}</p>
                      </button>
                  </h2>
                  <div id="t{{$tarea->id}}" class="accordion-collapse  rounded collapse" aria-labelledby="tarea{{$tarea->id}}" data-bs-parent="#contenedorTareas">
                      <div class="accordion-body w-100 d-flex flex-wrap p-2">

                          @if($tarea->estado==0)
                          <p>Estado:</p><span>En procesp</span>
                          @else
                          <p>estado:</p><span>Finalizada</span>
                          @endif

                              <div class="w-100">
                                  <p>Autor: {{$tarea->datosAutor['name']}}</p>
                              </div>

                          <div class="w-50 justify-content-center p-1">
                              <!-- Button trigger modal -->
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#listapart{{$tarea->id}}">
                                  Participantes
                              </button>

                              <!-- Modal -->
                              <div class="modal fade" id="listapart{{$tarea->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">Lista de participantes de la tarea</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                          <div class="modal-body">
                                              @foreach($tarea->participantes as $participante)
                                                  <ul>
                                                      <li>{{$participante->name}}</li>
                                                  </ul>
                                              @endforeach
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                          </div>
                              <div class="w-50 d-flex justify-content-center p-1">
                                  <!-- Button trigger modal -->
                                  <button type="button"  class="btn w-75 btn-dark" data-toggle="modal" data-target="#modal{{$tarea->id}}">
                                      Añadir
                                  </button>


                                  <!-- Modal -->
                                  <div class="modal fade" id="modal{{$tarea->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">Añadir participante a la tarea {{$tarea->id}}</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                  </button>
                                              </div>


                                              <form id="formProyecto" method="post" action="{{route('addPtarea')}}">
                                                  @csrf
                                                  <div class="modal-body">
                                                      <!--FORMULARIO PARA LA CREACIÓN DE PROYECTOS-->
                                                      <div class="form-group d-flex">
                                                          <input type="hidden" value="{{$tarea->id}}" name="idT">
                                                          <input type="email" name="email" class="form-control" id="titulo" placeholder="antonio@siwo.com">
                                                          <input type="submit" class="btn btn-dark ml-2" value="Añadir">
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


                      </div>


                  </div>
              </div>


          @endforeach


      </div>

  </main>
@endsection

