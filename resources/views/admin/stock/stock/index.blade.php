@extends('adminlte::page')
@section('title', 'Stock')

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            {{-- <h1>Stock</h1> --}}
        </div>
    </div>
@stop



@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Stock</h3>
                    <div class="d-flex flex-row-reverse ">
                        <a href="{{ route('admin.stock.create') }}" type="button" class="btn btn-info">Nuevo</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Pedido</th>
                                <th>Articulo</th>
                                <th>Unidades</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stocks as $stock)
                                <tr style="background-color: 2d024263">
                                    <td>{{ $stock->id }}</td>
                                    <td>{{ $stock->order }}</td>
                                    <td>{{ $stock->ArticleName }}</td>
                                    <td>{{ $stock->units }}</td>
                                    <td>
                                        <div class="form-group">
                                            <a href="{{ route('admin.stock.edit', $stock) }}" type="button"
                                                class="btn btn-primary">Modificar</a>
                                        </div>
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.stock.delete', $stock) }}" method="POST">
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
                {{ $stocks->links() }}
            </div>

        </div>
        <!-- /.col -->
    </div>

@stop
