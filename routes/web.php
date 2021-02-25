<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',"LoginView@index")->name('index');


Route::get('/pass/reset',function (){return view('auth.passwords.em');})->name('pass/resset');



//RUTAS DE REGISTRO,LOGIN Y RESET

Auth::routes();

Route::view("/layout", "layout");

//PROYECTOS
Route::get("/home", "ProyectoController@index")->name("home");
Route::post("/insertarProyecto", "ProyectoController@store")->name("insertarProyecto");

