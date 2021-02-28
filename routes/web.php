<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
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

//USUARIOS
Route::post("/editarUsuario", "UsuarioController@update")->name("editarUsuario");

//PROYECTOS
Route::get("/home", "ProyectoController@index")->name("home");
Route::post("/insertarProyecto", "ProyectoController@store")->name("insertarProyecto");
Route::get("/proyecto/{id}", "ProyectoController@show")->name("abrirProyecto");
Route::post('/crearCom','ProyectoController@crearComentario')->name('crearComentario');
Route::get('/tareas','TareasController@index')->name('mostrarTareas');
Route::post('/crearTareas','TareasController@store')->name('crearTareas');


//MENSAJES
Route::post('/crearCom','ProyectoController@crearComentario')->name('crearComentario');

//UsuariosProyectos
Route::get("/listaDeUsuarios", "usuariosProyectosController@index")->name("UsuariosProyectos");


//ARCHIVOS
Route::get('/archivos',function (){
    return view('archivos');
})->name('multimedia');

Route::post('multimedia',function (){
    request()->validate(['file'=>'']);
    return request()->archivo->storeAs('public',request()->archivo->getClientOriginalName());
})->name('multimedia.guardar');

////DESCARGAR ARCHIVOS

Route::get('/public/{archivo}', function ($archivo){
    return Storage::download("planos/".$archivo);
})->name('multimedia.descargar');

