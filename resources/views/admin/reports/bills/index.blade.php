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
    <div class="flex-column ">
        <div class="card-body ">
            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="d-flex justify-content-end mb-3">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          2021
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="#">2022</a></li>
                          <li><a class="dropdown-item" href="#">2023</a></li>
                        </ul>
                      </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example2" class="table table-borderles table-hover dataTable" role="grid"
                            aria-describedby="example2_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc text-center" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-sort="ascending">MES
                                    </th>
                                    <th class="sorting text-center" tabindex="0" aria-controls="example2" rowspan="1"
                                        colspan="1">DESCARGAR</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">ENERO</td>
                                    <td>
                                        <div class="d-flex  ">
                                            <a href="#" type="button"
                                                ><i class="fas fa-download"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">FEBRERO</td>
                                    <td>
                                        <div class="d-flex  ">
                                            <a href="#" type="button"
                                                ><i class="fas fa-download"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">MARZO</td>
                                    <td>
                                        <div class="d-flex  ">
                                            <a href="#" type="button"
                                                ><i class="fas fa-download"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">ABRIL</td>
                                    <td>
                                        <div class="d-flex  ">
                                            <a href="#" type="button"
                                                ><i class="fas fa-download"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">MAYO</td>
                                    <td>
                                        <div class="d-flex  ">
                                            <a href="#" type="button"
                                                ><i class="fas fa-download"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">JUNIO</td>
                                    <td>
                                        <div class="d-flex  ">
                                            <a href="#" type="button"
                                                ><i class="fas fa-download"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">JULIO</td>
                                    <td>
                                        <div class="d-flex  ">
                                            <a href="#" type="button"
                                                ><i class="fas fa-download"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">AGOSTO</td>
                                    <td>
                                        <div class="d-flex  ">
                                            <a href="#" type="button"
                                                ><i class="fas fa-download"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">SEPTIEMBRE</td>
                                    <td>
                                        <div class="d-flex  ">
                                            <a href="#" type="button"
                                                ><i class="fas fa-download"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">OCTUBRE</td>
                                    <td>
                                        <div class="d-flex  ">
                                            <a href="#" type="button"
                                                ><i class="fas fa-download"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">NOVIEMBRE</td>
                                    <td>
                                        <div class="d-flex  ">
                                            <a href="#" type="button"
                                                ><i class="fas fa-download"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">DICIEMBRE</td>
                                    <td>
                                        <div class="d-flex  ">
                                            <a href="#" type="button"
                                                ><i class="fas fa-download"></i></a>
                                        </div>
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