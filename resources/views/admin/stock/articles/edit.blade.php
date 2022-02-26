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
                    <form method="POST" action="{{ route('admin.articles.update', $article) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">

                            <div class="form-group">
                                <label for="name">Nombre *</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                    placeholder="Introduce el nombre" value="{{ old('name', $article->name) }}" required>
                                @error('name')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="order">Orden *</label>
                                <input type="number" class="form-control @error('order') is-invalid @enderror" id="order"
                                    name="order" placeholder="Introduce el orden"
                                    value="{{ old('order', $article->order) }}" required>
                                @error('order')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="hidden">Oculto *</label>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="hidden" value="hidden"
                                        {{ old('hidden', $article->hidden) == 1 ? 'checked' : '' }} name="hidden">
                                    <label class="custom-control-label" for="hidden"></label>
                                </div>
                                @error('hidden')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="image">Imagen *</label></br>
                                <img src="{{ $article->FileUrl }}" width="100" ></br>
                                <input type="file" name="image">>
                              
                            </div>

                            <div class="form-group">
                                <label for="price">Precio *</label>
                                <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror"
                                    name="price" placeholder="Introduce el precio"
                                    value="{{ old('price', $article->price) }}" required>
                                @error('price')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="ean">EAN *</label>
                                <input type="text" class="form-control @error('ean') is-invalid @enderror" name="ean"
                                    placeholder="Introduce el EAN" value="{{ old('ean', $article->ean) }}" required>
                                @error('ean')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="category">-Categoria_id *</label>
                                <select class="form-control" id="category" name="category">
                                    <option value="" required>- Categorias -</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ (old('category', $category->id) == $article->category_id) ? 'selected' : '' }}>
                                            {{ $category->name }}</option>
                                    @endforeach
                                </select>
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
