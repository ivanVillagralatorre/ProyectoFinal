<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TareasController extends Controller
{
    //
    public function index()
    {


        return view('tareas');
    }


    public function store()
    {


        return request();
    }
}