<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{

    public function index()
    {
        //
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

    public function update()
    {
        $usuario = Auth::user();
        if(request("password") == null){
            DB::table("users")->where("id", $usuario["id"])->update([
                "NOMBRE" => request("nombre"),
                "APELLIDOS" => request("apellidos"),
                "EMAIL" => request("email"),
            ]);
        }else{
            $pass = password_hash(request("password"), PASSWORD_DEFAULT);

            DB::table("users")->where("id", $usuario["id"])->update([
                "NOMBRE" => request("nombre"),
                "APELLIDOS" => request("apellidos"),
                "EMAIL" => request("email"),
                "PASSWORD" => $pass
            ]);
        }

        return redirect()->route("home");

    }


    public function destroy($id)
    {
        //
    }
}
