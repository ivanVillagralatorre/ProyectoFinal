<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mensaje;
use App\Models\Proyecto;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = Auth::user();

        if($usuario == null){
            return redirect("/");
        }

        $listaProyectos = Proyecto::get()->where("usuario_id", $usuario["id"]);

        //"usuario" => $usuario
        return view("home", ["listaProyectos" => $listaProyectos, "x" => 1]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        $usuario = Auth::user();

        $proyecto = new Proyecto([
            "titulo" => request("titulo"),
            "descripcion" => request("descripcion"),
            "usuario_id" => $usuario["id"]
        ]);

        $proyecto->save();

        return redirect()->route("home");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show()
    {   $idUsuario = Auth::user('id');

        $proyecto = Proyecto::get()->where("id", request("idProyecto"))->first();
        $mensajes = Mensaje::where('proyecto-id',$proyecto->id);

        foreach ($mensajes as $mensaje){

            $solicitante = User::get()->where('id',$idUsuario)->first();

            $datosAutor = [
                "nombre" => $solicitante->nombre." ".$solicitante->apellidos,
                "email" => $solicitante->email,
                "telefono" => $solicitante->telefono
            ];
            $mensaje->datosAutor = $datosAutor;

        }


        return view('proyecto')->with('proyecto',$proyecto)->with('mensajes',$mensajes);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function crearComentario(){
        $id = Auth::user()->id;
        $idp = \request('idP');

        Mensaje::Create([
            'texto'=>\request('mensaje'),
            'usuario_id'=>$id,
            'proyecto_id'=>$idp
        ]);


     $this.$this->show();


    }
}
