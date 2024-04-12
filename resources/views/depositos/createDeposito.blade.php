<?php
$title = 'Realizar Deposito';
$fechaActual =  date('Y-m-d');
?>

@extends('layouts.principal')

@section('hijos')
<h1 class="mt-3">Deposito</h1>

<main class="container">
    <h1 class="mt-5">{{$title}}</h1>
    <form action="/depositos" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Codigo Empleado</label>
            <input type="number" name="codEmpleado" id="codEmpleado" class="form-control" value="{{$codEmpleado}}" readonly>
        </div>

        <div class="mb-3">
            <label for="">Codigo Afiliado</label>
            <input type="number" name="codAfiliado" id="codAfiliado" class="form-control" value="{{$codAfiliado}}" readonly>
        </div>

        <div class="mb-3">
            <label for="">Fecha</label>
            <input type="date" name="fecha" id="fecha" class="form-control" value="{{$fechaActual}}">
        </div>

        <div class="mb-3">
            <label for="">Monto</label>
            <input type="number" name="monto" id="monto" class="form-control">

        </div>

        <div class="mb-3 text-center my-5">
            <button type="submit" class="btn btn-primary w-25  ">Confirmar</button>

        </div>


    </form>


</main>
@endsection