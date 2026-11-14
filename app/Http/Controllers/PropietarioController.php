<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propietario;

class PropietarioController extends Controller 
{
    public function create()
    {
        $propietarios = Propietario::orderBy('id', 'desc')->get();
        return view('administrador.propietarios', compact('propietarios'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'email' => 'required|email|unique:propietarios,email',
        ]);

        Propietario::create($request->all());

        return redirect()->route('propietarios.create')->with('success', 'Propietario registrado correctamente');
    }
}