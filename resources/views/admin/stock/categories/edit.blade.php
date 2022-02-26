@extends('adminlte::page')
@section('title', 'Crear registro de coche')

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Modificar categorías</h1>
        </div>
    </div>
@stop

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Categoria</h3>

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.categories.update', $category) }}">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre *</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name', $category->name) }}"
                                     name="name" placeholder="Introduce el nombre" required>
                                @error('name')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
    
                            <div class="form-group">
                                <label for="exampleInputEmail1">Orden *</label>
                                <input type="text" class="form-control @error('order') is-invalid @enderror" id="brand"
                                value="{{ old('order', $category->order) }}"
                                     name="order" placeholder="Introduce el orden" required>
                                @error('order')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Oculto *</label>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="hidden" value= "hidden" {{ old('hidden', $category->hidden)==1 ?'checked' : '' }}  name="hidden">
                                    <label class="custom-control-label" for="hidden"></label>
                                </div>
                                @error('hidden')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
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


