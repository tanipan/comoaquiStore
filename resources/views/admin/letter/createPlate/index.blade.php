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
        <div class="d-flex align-items-start col-auto">
            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link active mb-5" id="v-pills-home-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                    aria-selected="true">
                    <div class="d-flex flex-column col">
                        <p>Paso 1</p>
                        <p>Información principal</p>
                    </div>
                </button>
                <button class="nav-link mb-5" id="v-pills-profile-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                    aria-selected="false">
                    <div class="d-flex flex-column col">
                        <p>Paso 2</p>
                        <p>Modificaciones</p>
                    </div>

                </button>
                <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                    aria-selected="false">
                    <div class="d-flex flex-column col">
                        <p>Paso 3</p>
                        <p>Extras</p>
                    </div>
                </button>

            </div>
            <div class="tab-content col-auto" id="v-pills-tabContent">
                {{-- div paso 1 --}}
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <div class=" form-group mb-3 col-auto">
                        <label class="form-label">NOMBRE DEL PLATO</label>
                        <input type="text" class="form-control " placeholder="Escribe el nombre del plato">
                    </div>
                    <div class="form-group mb-3 col-auto">
                        <label class="form-label">ELEGIR CATEGORIA</label>
                        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"
                            data-select2-id="1" tabindex="-1" aria-hidden="true">
                            <option selected="selected" data-select2-id="3"> Selecciona una categoria</option>
                            <option data-select2-id="31">Alaska</option>
                            <option data-select2-id="32">California</option>
                            <option data-select2-id="33">Delaware</option>
                            <option data-select2-id="34">Tennessee</option>
                            <option data-select2-id="35">Texas</option>
                            <option data-select2-id="36">Washington</option>
                        </select>
                    </div>
                    <div class=" form-group mb-3 col-auto">
                        <label class="form-label">PRECIO DEL PLATO</label>
                        <input type="text" class="form-control " placeholder="Escribe el precio del plato">
                    </div>
                    <div class=" form-group  col-auto">
                        <label class="form-label">DESCRIPCION</label>
                        <input type="text" class="form-control " placeholder="Escribe la descripción de plato">
                    </div>
                </div>
                {{-- div paso 2 --}}
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class=" form-group mb-5 col-auto">
                        <label class="form-label">CREAR UNA MODIFICACIÓN</label>
                        <div class="d-flex">
                            <input type="text" class="form-control mr-3" placeholder="Escribe el nombre del plato">
                            <button class="btn btn-primary d-flex ">
                                Crear<i class="fas fa-plus ml-2 "></i>
                            </button>
                        </div>
                    </div>
                    <div class="form-group mb-2 col-auto">
                        <label class="form-label">SELECCIONA UNA MODIFICACIÓN</label>
                        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"
                            data-select2-id="1" tabindex="-1" aria-hidden="true">
                            <option selected="selected" data-select2-id="3"> Selecciona una modificación</option>
                            <option data-select2-id="31">Alaska</option>
                            <option data-select2-id="32">California</option>
                            <option data-select2-id="33">Delaware</option>
                            <option data-select2-id="34">Tennessee</option>
                            <option data-select2-id="35">Texas</option>
                            <option data-select2-id="36">Washington</option>
                        </select>
                    </div>
                    <div class=" form-group mb-5 col-auto">
                        <div class="d-flex">
                            <input type="text" class="form-control mr-3">
                            <input type="text" class="form-control mr-3" placeholder="Suplemento €">
                            <button class="btn btn-primary d-flex ">
                                Añadir<i class="fas fa-plus ml-2 "></i>
                            </button>
                        </div>
                    </div>
                    <div class="form-group mb-2 col-auto">
                        <label class="form-label">Nº MÍNIMO DE SELECCIONES</label>
                        <div class="d-flex">
                            <input type="checkbox" class="btn-check mr-1" id="btn-check-outlined" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btn-check-outlined">1</label>
                            <input type="checkbox" class="btn-check mr-1" id="btn-check-outlined" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btn-check-outlined">2</label>
                            <input type="checkbox" class="btn-check mr-1" id="btn-check-outlined" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btn-check-outlined">3</label>
                            <input type="checkbox" class="btn-check mr-1" id="btn-check-outlined" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btn-check-outlined">4</label>
                            <input type="checkbox" class="btn-check" id="btn-check-outlined" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btn-check-outlined">5</label>
                        </div>
                    </div>
                </div>
                {{-- div paso 3 --}}
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    <div class=" form-group mb-5 col-auto">
                        <label class="form-label">CREAR UN EXTRA</label>
                        <div class="d-flex">
                            <input type="text" class="form-control mr-3" placeholder="Escribe el nombre del plato">
                            <button class="btn btn-primary d-flex ">
                                Crear<i class="fas fa-plus ml-2 "></i>
                            </button>
                        </div>
                    </div>
                    <div class="form-group mb-2 col-auto">
                        <label class="form-label">SELECCIONA UN EXTRA</label>
                        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"
                            data-select2-id="1" tabindex="-1" aria-hidden="true">
                            <option selected="selected" data-select2-id="3"> Selecciona un extra</option>
                            <option data-select2-id="31">Alaska</option>
                            <option data-select2-id="32">California</option>
                            <option data-select2-id="33">Delaware</option>
                            <option data-select2-id="34">Tennessee</option>
                            <option data-select2-id="35">Texas</option>
                            <option data-select2-id="36">Washington</option>
                        </select>
                    </div>
                    <div class=" form-group mb-5 col-auto">
                        <div class="d-flex">
                            <input type="text" class="form-control mr-3">
                            <input type="text" class="form-control mr-3" placeholder="Suplemento €">
                            <button class="btn btn-primary d-flex ">
                                Añadir<i class="fas fa-plus ml-2 "></i>
                            </button>
                        </div>
                    </div>
                    <div class="form-group mb-2 col-auto">
                        <label class="form-label">Nº MÍNIMO DE SELECCIONES</label>
                        <div class="d-flex">
                            <input type="checkbox" class="btn-check mr-1" id="btn-check-outlined" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btn-check-outlined">1</label>
                            <input type="checkbox" class="btn-check mr-1" id="btn-check-outlined" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btn-check-outlined">2</label>
                            <input type="checkbox" class="btn-check mr-1" id="btn-check-outlined" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btn-check-outlined">3</label>
                            <input type="checkbox" class="btn-check mr-1" id="btn-check-outlined" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btn-check-outlined">4</label>
                            <input type="checkbox" class="btn-check" id="btn-check-outlined" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btn-check-outlined">5</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- botones --}}
        <div class="d-flex  justify-content-center">
            <button class="btn btn-danger mr-3">CANCELAR</button>
            <button class="btn btn-success ml-3">ACEPTAR</button>
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
