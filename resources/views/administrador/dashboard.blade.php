@extends('layouts.app')

@section('title', 'Panel Administrador - Clínica Veterinaria')
@section('header', 'Bienvenido, Administrador')

@section('content')
    <div class="cards-grid">
        <div class="card">
            <h3>👥 Propietarios</h3>
            <p>Registra nuevos clientes y consulta sus datos de contacto.</p>
            <a href="{{ route('propietarios.create') }}" class="btn-primary">Gestionar Clientes</a>
        </div>

        <div class="card">
            <h3>🐶 Mascotas</h3>
            <p>Administra el historial y registro de pacientes de la clínica.</p>
            <a href="{{ url('/administrador/mascotas') }}" class="btn-primary">Ver Mascotas</a>
        </div>

        <div class="card">
            <h3>🩺 Veterinarios</h3>
            <p>Gestiona el equipo médico y horarios de atención.</p>
            <a href="{{ url('/administrador/veterinarios') }}" class="btn-primary">Gestionar Equipo</a>
        </div>
    </div>
@endsection