@extends('adminlte::page')
{{-- @section('title', 'Listado de coches') --}}

{{-- @section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Listado de coches</h1>
        </div>
    </div>
@stop --}}



@section('content')
    <div class=" form-group mb-5 col-5">
        <label class="form-label">CREAR UNA CATEGORIA</label>
        <div class="d-flex ">
            <input type="text" class="form-control mr-3" placeholder="Escribe el nombre del plato">
            <button class="btn btn-primary d-flex ">
                Crear <i class="fas fa-plus ml-2 "></i>
            </button>
        </div>
    </div>
    <div class="row">
        <div class="card-body">
            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12 col-md-6"></div>
                    <div class="col-sm-12 col-md-6"></div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example2" class="table table-borderles table-hover dataTable" role="grid"
                            aria-describedby="example2_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-sort="ascending">NOMBRE DE LA CATEGORIA
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                        colspan="1">MODIFICAR</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                        colspan="1">ELIMINAR</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">Categoria</td>
                                    <td>
                                        <a href="#"> <i class="far fa-edit"></i></a>
                                       
                                        {{-- <a href="{{ route('admin.recent.show') }}" type="button"
                                        class="btn btn-success">ABRIR</a> --}}
                                    </td>
                                    <td>
                                        <a href="#"><i class="far fa-trash-alt"></i></a>
                                        
                                        {{-- borrar --}}
                                        {{-- <a href="{{ route('admin.recent.show') }}" type="button"
                                                class="btn btn-success">ABRIR</a> --}}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('js')
    {{-- <script>
        $("#town").on("change", function() {
            $('#cp').prop('selectedIndex', 0);
        });

        $("#cp").on("change", function() {
            $('#town').prop('selectedIndex', 0);
        });
    </script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
@stop
