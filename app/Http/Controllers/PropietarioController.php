<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropietarioController extends Controller
{
    public function create()
    {
        // llamamos al archivo propietarios.blade.php
        return view('administrador.propietarios');
    }
}
