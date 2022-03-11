<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function store(Request $request)
    {
        // Recolecta los valores ingresados y se preparan para la base de datos
        // y son los campos del formulario
        $rol = $request->input('rol');
        $nombreDueno = $request->input('nombreDueno');
        $celularDueno = $request->input('celularDueno');
        $domicilioDueno = $request->input('domicilioDueno');
        $correoDueno = $request->input('correoDueno');
        $password = $request->input('password');

        $dueno = new Dueno;
        $dueno->Rol = $rol;
        $dueno->Nombre = $nombreDueno;
        $dueno->Domicilio = $domicilioDueno;
        $dueno->Email = $correoDueno;
        $dueno->Telefono = $celularDueno;
        $dueno->Password = $password;

        $dueno->save();
        
    }
}
