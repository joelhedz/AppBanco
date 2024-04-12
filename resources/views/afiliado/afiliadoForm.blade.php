<?php
$action = isset($afiliados) ? true : false;
$title = $action ? 'Editar Afiliado' : 'Nuevo Afiliado';
?>

@extends ('layouts.principal')

@section ('hijos')
<main class="container">
    <h1 class="mt-5">{{$title}}</h1>
    <form action="/afiliados/{{$action?$afiliados->id:''}}" method="POST">
        @csrf
        @if($action)
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label ">Id</label>
            <input type="text" name="id" id="id" class="form-control" value="{{$afiliados->id}}" readonly>
        </div>
        @endif

        <div class="mb-3">
            <label for="" class="form-label">Codigo Afiliado</label>
            <input type="number" name="codAfiliado" id="codAfiliado" class="form-control" value="{{$action?$afiliados->codAfiliado:''}}">
        </div>

        <div class="mb-3">
            <label for="">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{$action?$afiliados->nombre:''}}">
        </div>

        <div class="mb-3">
            <label for="">Apellido</label>
            <input type="text" name="apellido" id="apellido" class="form-control" value="{{$action?$afiliados->apellido:''}}">
        </div>

        <div class="mb-3">
            <label for="">Ciudad</label>
            <input type="text" name="ciudad" id="ciudad" class="form-control" value="{{$action?$afiliados->ciudad:''}}">

        </div>

        <div class="mb-3">
            <label for="">Telefono</label>
            <input type="text" maxlength="8" name="telefono" id="telefono" class="form-control" value="{{$action?$afiliados->telefono:''}}">
        </div>

        <div class="mb-3">
            <label for="">Edad</label>
            <input type="text" maxlength="8" name="edad" id="edad" class="form-control" value="{{$action?$afiliados->edad:''}}">
        </div>

        <div class="mb-3 text-center my-5">
            <button type="submit" class="btn btn-primary w-25  ">Confirmar</button>
            <a href="/empleados" class="btn btn-warning w-25 ">Cancelar</a>
        </div>


    </form>


</main>


</table>
@endsection