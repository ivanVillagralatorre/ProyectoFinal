<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\usuarios_proyectos;
use Illuminate\Http\Request;

class UsuariosProyectosController extends Controller
{

    public function index()
    {
        $usuariosProyectos = usuarios_proyectos::get()->where("proyecto_id", $_COOKIE["idProyecto"]);

        $listaUsuarios = array();

        foreach ($usuariosProyectos as $usuarioProyecto){
            array_push($listaUsuarios, User::get()->where("id", $usuarioProyecto->usuario_id)->first());
        }

        return view("usuariosProyectos", ["listaUsuarios" => $listaUsuarios, "x" => 1]);
    }

    public function create()
    {
        //
    }

    public function store()
    {
        $usuario = User::get()->where("email", request("email"))->first();

        $usuarioProyecto = new usuarios_proyectos([
            "usuario_id" => $usuario->id,
            "proyecto_id" => $_COOKIE["idProyecto"]
            ]);

        $usuarioProyecto->save();

        return redirect()->route("UsuariosProyectos");

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
