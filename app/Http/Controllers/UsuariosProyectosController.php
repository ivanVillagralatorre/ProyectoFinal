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
            array_push($listaUsuarios, User::get()->where("id", $usuarioProyecto->usuario_id));
        }

        return view("usuariosProyectos", ["listaUsuarios" => $listaUsuarios, "x" => 1]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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
