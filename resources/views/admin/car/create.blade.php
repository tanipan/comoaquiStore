@extends('adminlte::page')
@section('title', 'Crear registro de coche')

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Registrar coche</h1>
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
                    <form method="POST" action="{{ route('admin.car.store') }}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Marca *</label>
                                <input type="text" class="form-control @error('brand') is-invalid @enderror"
                                     name="brand" placeholder="Introduce la marca" required>
                                @error('brand')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
    
                            <div class="form-group">
                                <label for="exampleInputEmail1">Modelo *</label>
                                <input type="text" class="form-control @error('model') is-invalid @enderror" id="brand"
                                     name="model" placeholder="Introduce el modelo" required>
                                @error('model')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Asientos *</label>
                                <input type="text" class="form-control @error('seats') is-invalid @enderror"
                                    name="seats" placeholder="Numero de asientos" required>
                                @error('seats')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Puertas *</label>
                                <input type="text" class="form-control @error('doors') is-invalid @enderror"
                                     name="doors" placeholder="Numero de puertas" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Transmisión *</label>
                                <input type="text" class="form-control @error('gearBoxType') is-invalid @enderror"
                                     name="gearBoxType" placeholder="Tipo de transmisión" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Color *</label>
                                <input type="text" class="form-control @error('color') is-invalid @enderror"
                                     name="color" placeholder="Color del coche" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Precio *</label>
                                <input type="text" class="form-control @error('price') is-invalid @enderror"
                                    name="price" placeholder="Precio del coche" required>
                            </div>
                        </div>
    
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary float-right">Crear</button>
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


