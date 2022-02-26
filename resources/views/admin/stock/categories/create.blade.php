@extends('adminlte::page')
@section('title', 'Añade categoría')

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Registrar categoría</h1>
        </div>
    </div>
@stop



@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Categorias</h3>

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.categories.store') }}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Nombre *</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                     name="name" placeholder="Introduce el nombre" required>
                                @error('name')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
    
                            <div class="form-group">
                                <label for="order">Orden *</label>
                                <input type="number" class="form-control @error('order') is-invalid @enderror" id="order"
                                     name="order" placeholder="Introduce el orden" required>
                                @error('order')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="hidden">Oculto *</label>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="hidden" value="1" name="hidden">
                                    <label class="custom-control-label" for="hidden"></label>
                                </div>
                                @error('hidden')
                                <span class="error invalid-feedback">{{ $message }}</span>
                               @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary float-right">Crear</button>
                        </div>
                    </form>
                </div>       
            </div>
        </div>
    </div>
@stop
@section('css')
    <!--<link rel="stylesheet" href="/css/admin_custom.css">-->
@stop


