@extends('layouts.principal')

@section('hijos')

<main class="container mt-5">
    Nombre de empleado {{$empleado->nombre}} {{$empleado->apellido}} {{$empleado->codEmpleado}}
    <div class="mt-3">
        <table class="table table-striped table-hover table-borderless  align-middle">
            <thead class="table-light bg-primary ">
                <caption>
                    Afiliados
                </caption>
                <tr>
                    <th>Id</th>
                    <th>CodAfiliado</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Ciudad</th>
                    <th>Telefono</th>
                    <th>Edad</th>
                    <th class="text-center ">Acciones</th>
                </tr>
            </thead>
            <tbody class="table-group-divider fw-light ">
                @foreach ($afiliados as $data)
                <tr>
                    <th class="fw-medium ">{{$data->id}}</th>
                    <th class="fw-medium ">{{$data->codAfiliado}}</th>
                    <th class="fw-medium ">{{$data->nombre}}</th>
                    <th class="fw-medium ">{{$data->apellido}}</th>
                    <th class="fw-medium ">{{$data->ciudad}}</th>
                    <th class="fw-medium ">{{$data->telefono}}</th>
                    <th class="fw-medium ">{{$data->edad}}</th>
                    <th class="text-center d-flex gap-4 justify-content-center ">
                        <a href="/retiros/{{$data->id}}/{{$empleado->id}}" class="btn btn-primary  text-light">Retiro</a>
                        <a href="/depositos/{{$data->id}}/{{$empleado->id}}" class="btn btn-primary  text-light">Deposito</a>


                    </th>
                </tr>
                @endforeach

            </tbody>

        </table>
    </div>
</main>

@endsection