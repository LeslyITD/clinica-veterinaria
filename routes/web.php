<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PropietarioController;

Route::get('/propietarios/crear', [PropietarioController::class, 'create'])->name('propietarios.create');
Route::post('/propietarios', [PropietarioController::class, 'store'])->name('propietarios.store');

// Ruta principal que muestra la vista del login
Route::get('/', function () {
    return view('auth.login');
});

// Ruta simulada para procesar el login
Route::post('/login', function (Request $request) {
    $rol = $request->input('rol');

    if ($rol == 'admin') {
        return redirect('/administrador');
    } elseif ($rol == 'vet') {
        return redirect('/veterinario');
    } elseif ($rol == 'prop') {
        return redirect('/propietario');
    }

    return redirect('/');
});

// Rutas para los dashboard de cada rol
Route::get('/administrador', function () {
    return view('administrador.dashboard');
});

Route::get('/veterinario', function () {
    return view('veterinario.dashboard');
});

Route::get('/propietario', function () {
    return view('propietario.dashboard');
});

// Rutas adicionales de administrador
Route::get('/administrador/mascotas', function () {
    return view('administrador.mascotas');
});

Route::get('/administrador/veterinarios', function () {
    return view('administrador.veterinarios');
});