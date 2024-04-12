@extends('layouts.principal')

@section('hijos')
<h1 class="bg-body-secondary text-center p-3">Deposito Afiliado: {{$afiliado->nombre}} {{$afiliado->apellido}}</h1>
<main class="container">

    <div class="mt-5">
        <a href="/depositos/create/{{$afiliado->id}}/{{$empleado->codEmpleado}}" class="btn btn-primary ">Realizar Retiro</a>
        <table class="table table-striped table-hover table-borderless  align-middle mt-2">
            <thead class="table-light bg-primary ">
                <caption>
                    Depositos Afiliados
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
                @foreach ($despositos as $itemDeposito)
                @if($itemDeposito->codAfiliado == $afiliado->id)
                <tr>
                    <th class="fw-medium ">{{$itemDeposito->id}}</th>
                    <th class="fw-medium ">{{$itemDeposito->codEmpleado}}</th>
                    <th class="fw-medium ">{{$itemDeposito->codAfiliado}}</th>
                    <th class="fw-medium ">{{$itemDeposito->fechaDeposito}}</th>
                    <th class="fw-medium ">{{$itemDeposito->monto}}</th>

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