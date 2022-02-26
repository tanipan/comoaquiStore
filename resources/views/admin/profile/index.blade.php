@extends('adminlte::page')
{{-- @section('title', 'Listado de coches') --}}

{{-- @section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Listado de coches</h1>
        </div>
    </div>
@stop --}}



@section('content')
    <form action="">
        <div class="d-flex align-items-end">
            <div class="d-flex align-items-start flex-column bd-highlight mb-3">
                {{-- primer bloque --}}
                <div>
                    <div class="d-flex justify-content-between">
                        <h2>Datos de facturacion</h2>
                        <a href="#">Editar</a>
                    </div>
                    <div class="col-12 mr-3  mb-3">
                        <input type="text" class="form-control " placeholder="Nombre fiscal">
                    </div>
                    <div class="col-12 mr-3  mb-3">
                        <input type="text" class="form-control " placeholder="Dirección fiscal">
                    </div>
                    <div class="col-12 mr-3  mb-3">
                        <input type="text" class="form-control " placeholder="CIF o NIF">
                    </div>
                    <div class="col-12 mr-3  mb-3">
                        <input type="text" class="form-control " placeholder="IBAN">
                    </div>
                </div>
                {{-- segundo bloque --}}
                <div>
                    <div class="d-flex justify-content-between">
                        <h2>Datos de contacto</h2>
                        <a href="#">Editar</a>
                    </div>
                    <div class="col-12 mr-3  mb-3">
                        <input type="text" class="form-control " placeholder="Nombre gerente">
                    </div>
                    <div class="col-12 mr-3  mb-3">
                        <input type="text" class="form-control " placeholder="Número de teléfono o móvil del gerente">
                    </div>
                    <div class="col-12 mr-3  mb-3">
                        <input type="email" class="form-control " placeholder="Email del gerente">
                    </div>
                </div>
                <hr />
                {{-- tercer bloque --}}
                <div>
                    <div class="d-flex justify-content-between">
                        <h2>Datos del restaurante</h2>
                        <a href="#">Editar</a>
                    </div>
                    <div class="col-12 mr-3  mb-3">
                        <input type="text" class="form-control " placeholder="Nombre del negocio">
                    </div>
                    <div class="col-12 mr-3  mb-3">
                        <input type="text" class="form-control " placeholder="Dirección del negocio">
                    </div>
                    <div class="col-12 mr-3  mb-3">
                        <input type="text" class="form-control " placeholder="Número de teléfono del negocio">
                    </div>
                    <div class="col-12 mr-3  mb-3">
                        <input type="text" class="form-control " placeholder="Páginaweb">
                    </div>
                    <div class="col-12 mr-3  mb-3">
                        <input type="email" class="form-control " placeholder="Dirección email del negocio">
                    </div>
                </div>

            </div>
            <div class="mb-4">
                <div class="custom-file">
                    <label class="custom-file-label" for="customFile">INSERTA TU LOGO AQUÍ</label>
                    <input type="file" class="custom-file-input" id="customFile">
                </div>
            </div>
        </div>
    </form>
@stop
@section('js')
    {{-- <script>
        $("#town").on("change", function() {
            $('#cp').prop('selectedIndex', 0);
        });

        $("#cp").on("change", function() {
            $('#town').prop('selectedIndex', 0);
        });
    </script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
@stop
