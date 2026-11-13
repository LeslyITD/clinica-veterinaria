<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propietario;

class PropietarioController extends Controller 
{
    public function create()
    {
        return view('administrador.propietarios');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'email' => 'required|email|unique:propietarios,email',
        ]);

        Propietario::create($request->all());

        return redirect('/administrador')->with('sucess', 'Propietario registrado correctamente');
    }
}