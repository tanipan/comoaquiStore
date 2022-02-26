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
        <div class="flex-column ">
            <div class="card-header d-flex justify-content-between">
                <h2>Datos de Cliente</h2>
                <i class="fas fa-window-close"></i>
            </div>
            <div class="card-body ">

                <div>
                    <div class="d-flex align-items-end justify-content-start">
                        <div class="col-sm-12 col-md-6 mr-3 text-start">
                            <label class="form-label ">Nombre:</label>
                            <input type="text" class="form-control" placeholder="Nombre Apellido Apellido">
                        </div>

                    </div>
                    <div class="d-flex align-items-end justify-content-start mt-3">
                        <div class="col-sm-3 mr-3 text-start">
                            <label class="form-label ">Telefono:</label>
                            <input type="text" class="form-control" placeholder="123456789">
                        </div>
                        <div class="col-sm-3 col-md-6 mr-3 text-start">
                            <label class="form-label ">Email:</label>
                            <input type="email" class="form-control" placeholder="correo@gmail.com">
                        </div>
                        <div class="col-sm-3  ml-5">
                            <button class="btn btn-primary">Enviar contraseña</button>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-11 text-start d-flex  justify-content-end mt-3">
                        <button class="btn btn-danger">Modificar datos</button>
                    </div>
                </div>
                <hr>

                <div>

                    <div class="d-flex align-items-end justify-content-start">
                        <div class="col-sm-12 col-md-6 mr-3 text-start">
                            <label class="form-label ">Direcciones:</label>
                        </div>

                    </div>
                    {{-- primera fila --}}
                    <div class="d-flex mb-3 ">
                        <div class="d-flex justify-content-end mr-3">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Avenida
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">2022</a></li>
                                    <li><a class="dropdown-item" href="#">2023</a></li>
                                </ul>
                            </div>
                        </div>
                        <input type="text" class="form-control col-sm-3 mr-3" value="Calle......">
                        <input type="text" class="form-control col-sm-1 mr-3" value="Numero">
                        <input type="email" class="form-control col-sm-2 mr-3" value="4º Iz">
                        <input type="email" class="form-control col-sm-2 mr-3" value="Campo melero">
                        <i class="fas fa-map-marker-alt mr-3"></i>
                        <div class="ml-3">
                            <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1" value=""
                                aria-label="...">
                        </div>
                    </div>
                    {{-- segunda fila --}}
                    <div class="d-flex mb-3">
                        <div class="d-flex justify-content-end mr-3">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Avenida
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">2022</a></li>
                                    <li><a class="dropdown-item" href="#">2023</a></li>
                                </ul>
                            </div>
                        </div>
                        <input type="text" class="form-control col-sm-3 mr-3" value="Calle......">
                        <input type="text" class="form-control col-sm-1 mr-3" value="Numero">
                        <input type="email" class="form-control col-sm-2 mr-3" value="4º Iz">
                        <input type="email" class="form-control col-sm-2 mr-3" value="Campo melero">
                        <i class="fas fa-map-marker-alt mr-3"></i>
                        <div class="ml-3">
                            <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel2" value=""
                                aria-label="...">
                        </div>
                    </div>
                    {{-- tercera fila --}}
                    <div class="d-flex mb-3">
                        <div class="d-flex justify-content-end mr-3">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Avenida
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">2022</a></li>
                                    <li><a class="dropdown-item" href="#">2023</a></li>
                                </ul>
                            </div>
                        </div>
                        <input type="text" class="form-control col-sm-3 mr-3" value="Calle......">
                        <input type="text" class="form-control col-sm-1 mr-3" value="Numero">
                        <input type="email" class="form-control col-sm-2 mr-3" value="4º Iz">
                        <input type="email" class="form-control col-sm-2 mr-3" value="Campo melero">
                        <i class="fas fa-map-marker-alt mr-3"></i>
                        <div class="ml-3">
                            <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel3" value=""
                                aria-label="...">
                        </div>
                    </div>
                    {{-- cuarta fila --}}
                    <div class="d-flex mb-3">
                        <div class="d-flex justify-content-end mr-3">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Avenida
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">2022</a></li>
                                    <li><a class="dropdown-item" href="#">2023</a></li>
                                </ul>
                            </div>
                        </div>
                        <input type="text" class="form-control col-sm-3 mr-3" value="Calle......">
                        <input type="text" class="form-control col-sm-1 mr-3" value="Numero">
                        <input type="email" class="form-control col-sm-2 mr-3" value="4º Iz">
                        <input type="email" class="form-control col-sm-2 mr-3" value="Campo melero">
                        <i class="fas fa-map-marker-alt mr-3"></i>
                        <div class="ml-3">
                            <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel4" value=""
                                aria-label="...">
                        </div>
                    </div>
                    {{-- quinta fila --}}
                    <div class="d-flex mb-3">
                        <div class="d-flex justify-content-end mr-3">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Avenida
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">2022</a></li>
                                    <li><a class="dropdown-item" href="#">2023</a></li>
                                </ul>
                            </div>
                        </div>
                        <input type="text" class="form-control col-sm-3 mr-3" value="Calle......">
                        <input type="text" class="form-control col-sm-1 mr-3" value="Numero">
                        <input type="email" class="form-control col-sm-2 mr-3" value="4º Iz">
                        <input type="email" class="form-control col-sm-2 mr-3" value="Campo melero">
                        <i class="fas fa-map-marker-alt mr-3"></i>
                        <div class="ml-3">
                            <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel5" value=""
                                aria-label="...">
                        </div>
                    </div>
                    {{-- Botones --}}
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-primary col-2 mr-3">Nueva dirección</button>
                        <button class="btn btn-danger col-2 mr-3">Modificar datos</button>
                        <button class="btn btn-success col-2 mr-3">Salir</button>
                    </div>
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
