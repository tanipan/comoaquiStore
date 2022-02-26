@extends('adminlte::page')
@section('title', 'Modificar stock')

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Modificar stock</h1>
        </div>
    </div>
@stop

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Stocl</h3>

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.stock.update', $stocks) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="order">Pedido *</label>
                                <input type="text" class="form-control @error('order') is-invalid @enderror" id="order"
                                    name="order" placeholder="Introduce el orden"
                                    value="{{ old('order', $stocks->order) }}" required>
                                @error('order')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="article">-Articulo_id *</label>
                                <select class="form-control" id="article" name="article_id">
                                    <option value="" required>- Articulos -</option>
                                    @foreach ($articles as $article)
                                        <option value="{{ $article->id }}"
                                            {{ (old('article', $article->id) ==$stocks->article_id) ? 'selected' : '' }}>
                                            {{ $article->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="ean">Unidades *</label>
                                <input type="number" class="form-control @error('units') is-invalid @enderror" name="units"
                                    placeholder="Introduce las unidades" value="{{ old('units', $stocks->units) }}" required>
                                @error('units')
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
