@extends('layout')

@section('content')

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<body class="container-fluid">
<div class="container d-flex align-items-center justify-content-center">
    <div class="table" style="color: white;">
        <form action="{{ route('store.usuarios') }}" method="post">
            @csrf
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" required>
        
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" name="apellido" id="apellido" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="nro_documento" class="form-label">Nro de documento</label>
                    <input type="number" name="nro_documento" id="nro_documento" class="form-control" required>
    
                    <label for="mail" class="form-label">E-mail</label>
                    <input type="mail" name="mail" id="mail" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="contraseña" class="form-label"> Ingrese su Contraseña</label>
                    <input type="password" name="contraseña" id="contraseña" class="form-control" required>

                    <label for="contraseña2" class="form-label">Repita su Contraseña</label>
                    <input type="password" name="contraseña2" id="contraseña2" class="form-control" required>
                </div>
            </div>
            <button type="submit" class="btn btn-success m-1">Guardar</button>
        </form>
    </div>
</div>
</body>
@endsection
