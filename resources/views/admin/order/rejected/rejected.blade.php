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
    <div class="card " style="width: 45em;">
        <div class="card-body ">
            <h1 class="card-text fs-1">Vas a rechazar un pedido</h1><br>
            <h3 class="card-text fs-3">Por favor, indique el motivo</h3>
        </div>
        <ul class="list-group list-group-flush">
            {{-- Linea de la card --}}
            <li class="list-group-item"></li>
            <li class="list-group-item">
                {{-- Radio buttons --}}
                <div class="form-check ml-2">
                    <input class="form-check-input " type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Cocina saturada
                    </label>
                </div>
                <div class="form-check ml-2">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        No podemos hacer un plato
                    </label>
                </div>
            </li>
            <li class="list-group-item">
                {{-- Pedido --}}
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label row" for="defaultCheck1">
                        <span class="ml-2 mr-2">1X</span>
                        <p class="mr-2"> Entrecot de ternera</p>
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label row" for="defaultCheck1">
                        <span class="ml-2 mr-2">1X</span>
                        <p class="mr-2"> Entrecot de ternera</p>

                    </label>
                </div>
                {{-- Fin Pedido --}}
                {{-- Extras del pedido --}}
                <div>
                    <div class="row">
                        <span class="mr-2">-</span>
                        <p class="mr-2"> Con salsa roquefort</p>
                    </div>
                    <div class="row">
                        <span class="mr-2">-</span>
                        <p class="mr-2"> Poco hecho</p>
                    </div>
                </div>
                {{-- Fin Extras del pedido --}}
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label row" for="defaultCheck1">
                        <span class="ml-2 mr-2">1X</span>
                        <p class="mr-2"> Entrecot de ternera</p>
                    </label>
                </div>
                <div>
                    <div class="row">
                        <span class="mr-2">-</span>
                        <p class="mr-2"> Que lo hagan con cariño</p>
                    </div>
                </div>
            </li>
        </ul>

        {{-- Botones de rechazar --}}
        <div class="card-body">
            <div class="d-flex justify-content-center">
                <a href="#" type="button" class="btn btn-danger" onclick="return alert('Rechazada')">RECHAZAR</a>
            </div>

        </div>
    </div>

@stop
