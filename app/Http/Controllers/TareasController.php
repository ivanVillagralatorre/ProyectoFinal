<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tarea;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TareasController extends Controller
{
    //
    public function index()
    {

        $listaTareas = Tarea::get();

        

        return view('tareas')->with('listatareas',$listaTareas);
    }


    public function store()
    {
        \request()->validate([
           'titulo'=>'required',
            'descripcion'=>'required',

        ]);


        Tarea::Create([
            'titulo'=>request('titulo'),
            'descripcion'=>request('descripcion'),
            'proyecto_id'=>\request('idP'),
            'usuario_id'=> Auth::user()->id,
            'estado'=>false

        ]);

        return redirect()->route('mostrarTareas');
    }
}
