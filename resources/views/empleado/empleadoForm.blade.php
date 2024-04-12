<?php
$action = isset($empleado) ? true : false;
$title = $action ? 'Editar Empleado' : 'Nuevo Empleado';
?>

@extends ('layouts.principal')

@section ('hijos')
<main class="container">
    <h1 class="mt-5">{{$title}}</h1>
    <form action="/empleados/{{$action?$empleado->id:''}}" method="POST">
        @csrf
        @if($action)
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label ">Id</label>
            <input type="text" name="id" id="id" class="form-control" value="{{$empleado->id}}" readonly>
        </div>
        @endif

        <div class="mb-3">
            <label for="" class="form-label">Codigo Empleado</label>
            <input type="number" name="codEmpleado" id="codEmpleado" class="form-control" value="{{$action?$empleado->codEmpleado:''}}">
        </div>

        <div class="mb-3">
            <label for="">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{$action?$empleado->nombre:''}}">
        </div>

        <div class="mb-3">
            <label for="">Apellido</label>
            <input type="text" name="apellido" id="apellido" class="form-control" value="{{$action?$empleado->apellido:''}}">
        </div>

        <div class="mb-3">
            <label for="">Nivel</label>
            <input type="text" name="nivel" id="nivel" class="form-control" value="{{$action?$empleado->nivel:''}}">

        </div>

        <div class="mb-3">
            <label for="">Telefono</label>
            <input type="text" maxlength="8" name="telefono" id="telefono" class="form-control" value="{{$action?$empleado->telefono:''}}">
        </div>

        <div class="mb-3 text-center my-5">
            <button type="submit" class="btn btn-primary w-25  ">Confirmar</button>
            <a href="/empleados" class="btn btn-warning w-25 ">Cancelar</a>
        </div>


    </form>


</main>


</table>
@endsection