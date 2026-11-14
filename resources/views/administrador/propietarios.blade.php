@extends('layouts.app')

@section('title', 'Gestión de Propietarios')
@section('header', 'Gestión de Propietarios')

@section('content')
    <div class="form-container">
        <h2>➕ Registrar Nuevo Propietario</h2>
        <form action="{{ route('propietarios.store') }}" method="POST">
            @csrf
            <div class="form-grid">
                <div class="input-group">
                    <label>Nombre Completo</label>
                    <input type="text" name="nombre" placeholder="Ej. Lesly Torres" required>
                </div>
                <div class="input-group">
                    <label>Teléfono</label>
                    <input type="text" name="telefono" placeholder="Ej. 935770459" required>
                </div>
                <div class="input-group">
                    <label>Correo Electrónico</label>
                    <input type="email" name="email" placeholder="cliente@correo.com" required>
                </div>
            </div>
            <button type="submit" class="btn-primary">Guardar Propietario</button>
        </form>
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre Completo</th>
                    <th>Teléfono</th>
                    <th>Correo Electrónico</th>
                    <th>Fecha Registro</th>
                </tr>
            </thead>
            <tbody>
                @forelse($propietarios as $prop)
                    <tr>
                        <td>#{{ $prop->id }}</td>
                        <td><strong>{{ $prop->nombre }}</strong></td>
                        <td>{{ $prop->telefono }}</td>
                        <td>{{ $prop->email }}</td>
                        <td>{{ $prop->created_at->format('d/m/Y H:i') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" style="text-align: center; color: #777;">Aún no hay propietarios registrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection