@extends('layouts.layoutProyecto')




@section('content')
    <div id="descripcion"class="  order-0  flow-md-grow-5  order-md-1 bg-secondary  border d-flex  flex-column rounded order-0 order-md-1 align-items-center">


        <h1 class="mb-3 text-light">{{$proyecto->titulo}}</h1>

        <div class="bg-light rounded-0 ">
            <h2 class="align-self-start">Descripcion:</h2>

        </div>
        <div class="d-flex justify-content-center ">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-danger mt-4 mb-3" data-toggle="modal"
                    data-target="#myModal">
                Añadir Participantes
            </button>
            <!-- Modal -->

            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Modal Header</h4>
                        </div>
                        <div class="modal-body">
                            <p>Some text in the modal.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div id='over' class="bg-dark order-1 order-md-0 p-2 border border-4 rounded    d-flex flex-column   ">

        <div id="over2" class="d-flex flex-column bg-light align-items-center overflow-auto border">


            <div>a</div>
            <div>a</div>

            <div>a</div>

            <div>a</div>
            <div>a</div>
            <div>a</div>
            <div>a</div>
            <div>a</div>
            <div>a</div>
            <div>a</div>
            <div>a</div>
            <div>a</div>
            <div>a</div>
            <div>a</div>
            <div>a</div>
            <div>a</div>
            <div>a</div>
            <div>a</div>
            <div>a</div>
            <div>a</div>
        </div>

        <div class=" bg-secondary rounded order-2 border  ">


            <form class="d-flex flex-column"  method="post">
                @csrf
                <input type="hidden" value="{{$proyecto->id}}" name="idP">
                <textarea placeholder="Escribe tu mensaje"class="rounded align-self-center  mt-4 overflow-hidden "></textarea>
                <button type="button" class="btn btn-lg mb-3 align-self-center btn-dark">Enviar
                    mensaje
                </button>


            </form>
        </div>

    </div>


@endsection
