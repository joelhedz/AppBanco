@extends ('layouts.principal')

@section ('hijos')

<main>
    <h1 class="bg-body-secondary text-center  p-3 ">Modulo Empleados</h1>
    <section class="container mt-4 ">
        <a href="/empleados/create" class="btn btn-primary">Crear Nuevo Empleado</a>

        <div class="mt-3">
            <table class="table table-striped table-hover table-borderless  align-middle">
                <thead class="table-light bg-primary ">
                    <caption>
                        Empleados
                    </caption>
                    <tr>
                        <th>Id</th>
                        <th>CodEmpleado</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Nivel</th>
                        <th>Telefono</th>
                        <th class="text-center ">Acciones</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider fw-light ">
                    @foreach ($empleados as $empleado)
                    <tr>
                        <th class="fw-medium ">{{$empleado->id}}</th>
                        <th class="fw-medium ">{{$empleado->codEmpleado}}</th>
                        <th class="fw-medium ">{{$empleado->nombre}}</th>
                        <th class="fw-medium ">{{$empleado->apellido}}</th>
                        <th class="fw-medium ">{{$empleado->nivel}}</th>
                        <th class="fw-medium ">{{$empleado->telefono}}</th>
                        <th class="text-center d-flex gap-4 justify-content-center ">
                            <a href="empleados/{{$empleado->id}}/edit" class="btn btn-primary  text-light">Editar</a>
                            <a href="afiliados/{{$empleado->codEmpleado}}" class="btn btn-success">Afiliados</a>
                            <button type="button" class="btn btn-danger eliminarEmpleado" data-id="{{$empleado->id}}" data-nombre="{{$empleado->nombre}}" data-bs-toggle="modal" data-bs-target="#exampleModal" name="">
                                Eliminar
                            </button>

                        </th>
                    </tr>
                    @endforeach

                </tbody>

            </table>
        </div>
    </section>
    </div>

    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Desea Eliminar al empleado <span id="nombreEmpleado"></span></h1>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <form id="EliminarEmpleado" action="formEliminar" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" value="Eliminar">Confirmar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.eliminarEmpleado').forEach(button => {
            button.addEventListener('click', function() {
                // Obtenemos el nombre y id del empleado desde el atributo de datos
                const idEmpleado = this.getAttribute('data-id');
                const nombreEmpleado = this.getAttribute('data-nombre');
                // Mostramos el nombre del empleado en el modal
                document.getElementById('nombreEmpleado').innerText = nombreEmpleado;
                document.getElementById('EliminarEmpleado').setAttribute('action', '/empleados/' + idEmpleado)
            });
        });
    </script>


</main>


</table>
@endsection