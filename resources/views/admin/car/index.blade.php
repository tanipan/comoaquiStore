@extends('adminlte::page')
@section('title', 'Listado de coches')

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Listado de coches</h1>
        </div>
    </div>
@stop



@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Lista de coches</h3>
                    <div class="d-flex flex-row-reverse ">
                        <a href="{{ route('admin.car.create') }}" type="button" class="btn btn-info">Nuevo</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Asientos</th>
                                <th>Puertas</th>
                                <th>Transmisión</th>
                                <th>Color</th>
                                <th>Precio</th>
                                <td>
                                </td>
                                <td>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cars as $car)
                                <tr style="background-color: 2d024263">
                                    <td>{{ $car->id }}</td>
                                    <td>{{ $car->brand }}</td>
                                    <td>{{ $car->model }}</td>
                                    <td>{{ $car->seats }}</td>
                                    <td>{{ $car->doors }}</td>
                                    <td>{{ $car->gearBoxType }}</td>
                                    <td>{{ $car->color }}</td>
                                    <td>{{ $car->price }}</td>
                                    <td>
                                        <div class="form-group">
                                            <a href="{{ route('admin.car.edit', $car) }}" type="button"
                                                class="btn btn-primary">Modificar</a>
                                        </div>
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.car.delete', $car) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger" href="#"
                                                onclick="return confirm('¿Quieres eliminar a este registro?')">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
            <div class="card-footer clearfix float-right">
                {{ $cars->links() }}
            </div>

        </div>
        <!-- /.col -->
    </div>

@stop


