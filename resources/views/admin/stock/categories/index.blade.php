@extends('adminlte::page')
@section('title', 'Categorías')

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Categorias</h1>
        </div>
    </div>
@stop



@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Categorias</h3>
                    <div class="d-flex flex-row-reverse ">
                        <a href="{{ route('admin.categories.create') }}" type="button" class="btn btn-info">Nuevo</a>
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
                                <th>Editar</th>
                                <th>Borrar</th>
                            
                              
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr style="background-color: 2d024263">
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->order }}</td>
                                    @if ( $category->hidden == 0)
                                        <td>No</td>          
                                    @else
                                        <td>Si</td>  
                                    @endif
                            
                                    <td>
                                        <div class="form-group">
                                            <a href="{{ route('admin.categories.edit', $category) }}" type="button"
                                                class="btn btn-primary">Modificar</a>
                                               
                                        </div>
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.categories.delete', $category) }}" method="POST">
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
                {{ $categories->links() }}
            </div>

        </div>
        <!-- /.col -->
    </div>

@stop


