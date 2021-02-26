@extends('layouts.layoutProyecto')




@section('content')
{{var_dump($mensajes)}}


    <div id="descripcion"class="  order-0  flow-md-grow-5  order-md-1 bg-secondary  border d-flex  flex-column rounded order-0 order-md-1 align-items-center">


        <h1 class="mb-3 text-light">{{$proyecto->titulo}}</h1>

        <div class="bg-light rounded-0 ">
            <h2 class="align-self-start">Descripcion:</h2>

        </div>

    </div>


    <div id='over' class="bg-dark order-1 order-md-0 p-2 border border-4 rounded    d-flex flex-column   ">

        <div id="over2" class="d-flex flex-column bg-light align-items-start p-2   overflow-auto border">


            <div class=" w-100 d-flex flex-column justify-content-center">

                <div class=" w-75 bg-secondary border border-4 p-3 border-dark rounded-pill ">
                    <p class="text-light">uno dos tres cuatro cinco seis siete ocho.</p>
                </div>
                <div class="d-flex ml-2 border-bottom ">
                    <p class="mr-1"> Autor</p><p>|</p> <span class="ml-1">14/02/1999</span>

                </div>
            </div>



        </div>

        <div class=" bg-secondary rounded   order-2 border">


            <form class="d-flex  flex-column"  method="post" action="{{route('crearComentario')}}">
                @csrf
                <input type="hidden" value="{{$proyecto->id}}" name="idP">
                <textarea name="mensaje" placeholder="Escribe tu mensaje"class="rounded align-self-center  mt-4 overflow-hidden "></textarea>
                <button class="btn btn-lg mb-3 align-self-center btn-dark">Enviar
                    mensaje
                </button>


            </form>
        </div>

    </div>



@endsection
