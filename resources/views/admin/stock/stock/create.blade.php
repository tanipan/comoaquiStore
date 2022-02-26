@extends('adminlte::page')
@section('title', 'Añade categoría')

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Registrar stock</h1>
        </div>
    </div>
@stop



@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Stock</h3>

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.stock.store') }}">
                        @csrf
                        <div class="card-body">
    
                            <div class="form-group">
                                <label for="order">Pedido *</label>
                                <input type="text" class="form-control @error('order') is-invalid @enderror" id="order"
                                     name="order" placeholder="Introduce el orden" required>
                                @error('order')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="article">-Articulo_id *</label>
                                <select class="form-control" id="article" name="article_id">
                                    <option value="">- Articulo -</option>
                                    @foreach ($articles as $article)
                                        <option value="{{ $article->id }}">{{ $article->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="units">Unidades *</label>
                                <input type="number" class="form-control @error('units') is-invalid @enderror" id="units"
                                     name="units" placeholder="Introduce las unidades" required>
                                @error('units')
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


