@extends('layouts.layoutProyecto')




@section('content')



    <div id="descripcion" class=" p-2  order-0  flow-md-grow-5  order-md-1 bg-secondary  border d-flex  flex-column rounded order-0 order-md-1 align-items-center">


        <h1 class="mb-3 text-light">{{$proyecto->titulo}}</h1>
        <span id="titulospan" class="mb-3 text-uppercase">informacion del proyecto</span>

        <button type="button" class="btn text-uppercase btnEnviar btn-outline-danger" data-toggle="modal" data-target="#exampleModal">
            Informacion
        </button>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Informacion proyecto</h5>
                    </div>
                    <div class="modal-body">
                            <div class="sn-field ">
                                <span class="text-break">Descripcion: {{$proyecto->descripcion}}</span>
                                <p></p>
                                <span class="text-break">Fecha de creacion: {{$proyecto->created_at}}</span>
                                <p></p>
                                <span>Autor: {{$aut->name}}</span>
                                <p></p>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary text-uppercase" data-dismiss="modal">cerrar</button>
                            </div>
                    </div>

                </div>
            </div>
        </div>


    </div>


    <div id='over' class="bg-dark order-1 order-md-0 p-2 border border-4 rounded    d-flex flex-column   ">

        <div id="over2" class="d-flex flex-column bg-light align-items-start p-2   overflow-auto border">

            @forelse($mensajes as $mensaje)
                @if($mensaje->datosAutor['name']==auth()->user()->name)

                <div class="  w-100 d-flex flex-column   justify-content-center">

                    <div id="mensaje" class=" w-75 bg-light border border-4 mt-4 p-3 border-dark rounded-right align-self-end ">
                        <p class=" text-dark text-break font-italic">{{$mensaje->texto}}</p>
                    </div>
                    <div class="d-flex ml-2   align-self-center ">
                        <p class="mr-1 ">{{$mensaje->datosAutor['name']}} </p><p>|</p> <span class="ml-1">{{$mensaje->created_at}}</span>

                    </div>
                </div>
                @else
                    <div class=" w-100 d-flex flex-column justify-content-center mb-2">

                        <div class="  w-75 bg-light mt-4 border border-4 p-3 border-dark rounded-right align-self-start ">
                            <p class=" text-dark text-break font-italic">{{$mensaje->texto}}</p>
                        </div>
                        <div class="d-flex ml-2 ">
                            <p class="mr-1 ">{{$mensaje->datosAutor['name']}} </p><p>|</p> <span class="ml-1">{{$mensaje->created_at}}</span>

                        </div>
                    </div>

                @endif

            @empty
                <h1>no hay mensajes</h1>
            @endforelse


        </div>

        <div class=" bg-secondary rounded   order-2 border">


            <form    method="post" action="{{route('crearComentario')}}">
                @csrf
                <div class="d-flex justify-content-center  align-items-center h-100">
                    <input type="hidden" value="{{$proyecto->id}}" name="idP">
                    <textarea name="mensaje" placeholder="Escribe tu mensaje"class="rounded    overflow-hidden "></textarea>
                    <button  id="btn" class="btn  btn-dark">Enviar
                        mensaje
                    </button>

                </div>

            </form>
        </div>

    </div>



@endsection
