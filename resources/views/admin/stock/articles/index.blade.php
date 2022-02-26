@extends('adminlte::page')
@section('title', 'Articulos')

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Articulos</h1>
        </div>
    </div>
@stop



@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Articulos</h3>
                    <div class="d-flex flex-row-reverse ">
                        <a href="{{ route('admin.articles.create') }}" type="button" class="btn btn-info">Nuevo</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Orden</th>
                                <th>Oculto</th>
                                <th>Imagen</th>
                                <th>Precio</th>
                                <th>Ean</th>
                                <th>Categoria</th>
                                <th>Editar</th>
                                <th>Borrar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article)
                                <tr style="background-color: 2d024263">
                                    <td>{{ $article->id }}</td>
                                    <td>{{ $article->name }}</td>
                                    <td>{{ $article->order }}</td>
                                    @if ($article->hidden == 0)
                                        <td>No</td>
                                    @else
                                        <td>Si</td>
                                    @endif
                                    <td>
                                        <img src="{{ $article->FileUrl }}" width="100">

                                    </td>
                                    <td>{{ $article->price }}</td>
                                    <td>{{ $article->ean }}</td>
                                    <td>{{ $article->CategoryName }}</td>
                                    <td>
                                        <div class="form-group">
                                            <a href="{{ route('admin.articles.edit', $article) }}" type="button"
                                                class="btn btn-primary">Modificar</a>

                                        </div>
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.articles.delete', $article) }}" method="POST">
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
                {{ $articles->links() }}
            </div>

        </div>
        <!-- /.col -->
    </div>

@stop
