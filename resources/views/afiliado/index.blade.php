@extends ('layouts.principal')

@section ('hijos')

<main>
    <h1 class="bg-body-secondary text-center  p-3 ">Modulo Afiliados</h1>
    <section class="container mt-4 ">
        <a href="/afiliados/create" class="btn btn-primary">Crear Nuevo Afiliado</a>

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
                            <a href="afiliados/{{$data->id}}/edit" class="btn btn-primary  text-light">Editar</a>
                            <button type="button" class="btn btn-danger eliminarAfiliado" data-id="{{$data->id}}" data-nombre="{{$data->nombre}}" data-bs-toggle="modal" data-bs-target="#exampleModal" name="">
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Desea Eliminar al Afiliado <span id="nombreAfiliado"></span></h1>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <form id="EliminarAfiliado" action="formEliminar" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" value="Eliminar">Confirmar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.eliminarAfiliado').forEach(button => {
            button.addEventListener('click', function() {
                // Obtenemos el nombre y id del empleado desde el atributo de datos
                const idAfiliado = this.getAttribute('data-id');
                const nombreAfiliado = this.getAttribute('data-nombre');
                // Mostramos el nombre del empleado en el modal
                document.getElementById('nombreAfiliado').innerText = nombreAfiliado;
                document.getElementById('EliminarAfiliado').setAttribute('action', '/afiliados/' + idAfiliado)
            });
        });
    </script>


</main>


</table>
@endsection