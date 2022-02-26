@extends('adminlte::page')
@section('title', 'Crear registro de coche')

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Modificar registro de coche</h1>
        </div>
    </div>
@stop



@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Datos del coche</h3>

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.car.update', $car) }}">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Marca *</label>
                                <input type="text" class="form-control @error('brand') is-invalid @enderror"
                                value="{{ old('brand', $car->brand) }}"
                                     name="brand" placeholder="Introduce la marca" required>
                                @error('brand')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
    
                            <div class="form-group">
                                <label for="exampleInputEmail1">Modelo *</label>
                                <input type="text" class="form-control @error('model') is-invalid @enderror" id="brand"
                                value="{{ old('model', $car->model) }}"
                                     name="model" placeholder="Introduce el modelo" required>
                                @error('model')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Asientos *</label>
                                <input type="text" class="form-control @error('seats') is-invalid @enderror"
                                value="{{ old('seats', $car->seats) }}"
                                    name="seats" placeholder="Numero de asientos" required>
                                @error('seats')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Puertas *</label>
                                <input type="text" class="form-control @error('doors') is-invalid @enderror"
                                value="{{ old('doors', $car->doors) }}"
                                     name="doors" placeholder="Numero de puertas" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Transmisión *</label>
                                <input type="text" class="form-control @error('gearBoxType') is-invalid @enderror"
                                value="{{ old('gearBoxType', $car->gearBoxType) }}"
                                     name="gearBoxType" placeholder="Tipo de transmisión" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Color *</label>
                                <input type="text" class="form-control @error('color') is-invalid @enderror"
                                value="{{ old('color', $car->color) }}"
                                     name="color" placeholder="Color del coche" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Precio *</label>
                                <input type="text" class="form-control @error('price') is-invalid @enderror"
                                value="{{ old('price', $car->price) }}"
                                    name="price" placeholder="Precio del coche" required>
                            </div>
                        </div>
    
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary float-right">Modificar</button>
                        </div>
                    </form>
                </div>
           
            </div>
            <!-- /.card -->

        </div>
        <!-- /.col -->
    </div>

@stop

@section('css')
    <!--<link rel="stylesheet" href="/css/admin_custom.css">-->
@stop


