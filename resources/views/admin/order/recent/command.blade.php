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

    <div class="card " style="width: 30em;">
        <button type="button" class="btn-close" aria-label="Close"></button>
        <div class="card-body ">
            <h2 class="card-text">Nº PEDIDO <label>00001</label></h2><br>
            <h3 class="card-text">Hora Recogida: <label><input type="time" value="14:40"></label></h3>
        </div>

        <ul class="list-group list-group-flush">
            <li class="list-group-item">

            </li>
            <li class="list-group-item">
                {{-- Pedido --}}
                <div class="row">
                    <span class="mr-2">1X</span>
                    <p class="mr-2"> Entrecot de ternera</p>
                    <span>15,00€</span>
                </div>
                {{-- Fin Pedido --}}
                {{-- Extras del pedido --}}
                <div>
                    <div class="row">
                        <span class="mr-2"></span>
                        <p class="mr-2"></p> <span></span>
                    </div>
                    <div class="row">
                        <span class="mr-2"></span>
                        <p class="mr-2"></p> <span></span>
                    </div>
                </div>
                {{-- Fin Extras del pedido --}}
            </li>
            <li class="list-group-item">
                <div class="d-flex justify-content-between">
                    <div>
                        <span class="mr-2">1X</span>
                        <span class="mr-2"> Entrecot de ternera</span>
                    </div>
                    <div>
                        <span>15,00€</span>
                    </div>
                </div>
                <div class="row">
                    <span class="mr-2">-</span>
                    <p class="mr-2"> Con salsa roquefort</p> <span>1,50€</span>
                </div>
                <div class="row">
                    <span class="mr-2">-</span>
                    <p class="mr-2"> Poco hecho</p> <span></span>
                </div>
            </li>
            <li class="list-group-item">
                <div class="row">
                    <span class="mr-2">1X</span>
                    <p class="mr-2"> Entrecot de ternera</p>
                    <span>15,00€</span>
                </div>
                <div class="row">
                    <span class="mr-2">-</span>
                    <p class="mr-2"> Que lo hagan con cariño</p> <span></span>
                </div>
            </li>
        </ul>

        <div class="card-body">
            <div class="row">
                <p>Total </p> <span> 15,00€</span>
            </div>

        </div>
        {{-- Botones de la comanda --}}
        <div class="card-body">
            <div class="d-flex justify-content-around">
                <a href="{{ route('admin.rejected.show') }}" type="button" class="btn btn-danger">RECHAZAR</a>
                <a href="{{ route('admin.recent.edit') }}" type="button" class="btn btn-warning">MODIFICAR</a>
                <a href="#" type="button" class="btn btn-success" onclick="return alert('ACEPTADA')">ACEPTAR</a>
            </div>

        </div>
    </div>

@stop
