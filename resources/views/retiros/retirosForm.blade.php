@extends('layouts.principal')

@section('hijos')
<h1 class="bg-body-secondary text-center p-3">Retiro Afiliado: {{$afiliado->nombre}} {{$afiliado->apellido}}</h1>
<main class="container">

    <div class="mt-5">

        <a href="/retiros/create/{{$afiliado->id}}/{{$empleado->codEmpleado}}" class="btn btn-primary ">Realizar Retiro</a>
        <table class="table table-striped table-hover table-borderless  align-middle mt-2">
            <thead class="table-light bg-primary ">
                <caption>
                    Retiros Afiliados
                </caption>
                <tr>
                    <th>Id</th>
                    <th>CodEmpleado</th>
                    <th>CodAfiliado</th>
                    <th>Fecha</th>
                    <th>Monto</th>
                    <th class="text-center ">Acciones</th>
                </tr>
            </thead>
            <tbody class="table-group-divider fw-light ">
                @foreach ($retiros as $itemRetiro)
                @if($itemRetiro->codAfiliado == $afiliado->id)
                <tr>
                    <th class="fw-medium ">{{$itemRetiro->id}}</th>
                    <th class="fw-medium ">{{$itemRetiro->codEmpleado}}</th>
                    <th class="fw-medium ">{{$itemRetiro->codAfiliado}}</th>
                    <th class="fw-medium ">{{$itemRetiro->fechaRetiro}}</th>
                    <th class="fw-medium ">{{$itemRetiro->monto}}</th>

                    <th class="text-center d-flex gap-4 justify-content-center ">

                    </th>
                </tr>
                @endif
                @endforeach


            </tbody>

        </table>
    </div>
</main>


@endsection