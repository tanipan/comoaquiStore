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
<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
      Categoría
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
      <li><a class="dropdown-item" href="#">Categoria 1</a></li>
    </ul>
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
                                        aria-sort="ascending">NOMBRE DEL PLATO
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                        colspan="1">PRECIO</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                        colspan="1">STOCK</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                        colspan="1">TURNO</th>
                                       <th>L</th>
                                       <th>M</th>
                                       <th>X</th>
                                       <th>J</th>
                                       <th>V</th>
                                       <th>S</th>
                                       <th>D</th>
                                       <th>UDS.MIN.</th>
                                       <th></th>
                                       <th></th> 
                                </tr>
                            </thead>
                            <tbody>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">Nombre del plato</td>
                                    <td>25.30€</td>
                                    <td>
                                        <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                      </div>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                              Completo
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                              <li><a class="dropdown-item" href="#">Categoria 1</a></li>
                                            </ul>
                                          </div>
    
                                    </td>
                                    <td>
                                        <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                      </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                      </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                      </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                      </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                      </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                      </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                      </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center ">
                                            <i class="fas fa-minus "></i>
                                            <input class="form-control w-25" type="number" value="1" >
                                            <i class="fas fa-plus"></i>
                                        </div>
                                    </td>
                                    <td>
                                        <i class="far fa-edit"></i>
                                        {{-- <a href="{{ route('admin.recent.show') }}" type="button"
                                        class="btn btn-success">ABRIR</a> --}}
                                    </td>
                                    <td>
                                        <i class="far fa-trash-alt"></i>
                                        {{-- borrar --}}
                                        {{-- <a href="{{ route('admin.recent.show') }}" type="button"
                                                class="btn btn-success">ABRIR</a>  --}}
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