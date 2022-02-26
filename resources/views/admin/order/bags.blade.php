@extends('adminlte::page')
{{-- @section('title', 'Listado de coches') --}}

@section('content')
    <div class="card " style="width: 45em;">
        <div class="card-body ">
            <h1 class="card-text fs-1">Por favor, indique el nº de bolsas del pedido</h1>
        </div>
        <ul class="list-group list-group-flush">
            {{-- Linea de la card --}}
            <li class="list-group-item"></li>
            <li class="list-group-item">

                <div class="d-flex justify-content-center ">
                    <i class="fas fa-minus "></i>
                    <input class="form-control w-25" type="number" value="1" >
                    <i class="fas fa-plus"></i>
                </div>
                {{-- Botones de editar --}}
                <div class="card-body">
                    <div class="d-flex justify-content-around">
                        <a href="#" type="button" class="btn btn-danger" onclick="return alert('Rechazada')">RECHAZAR</a>
                        <a href="#" type="button" class="btn btn-success" onclick="return alert('ACEPTADA')">ACEPTAR</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
@stop
