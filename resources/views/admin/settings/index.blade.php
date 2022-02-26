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
    <div class="d-flex justify-content-around">
        <div class="flex-column">
            {{-- primer bloque  --}}
            <div>
                <h3>Cierre puntual</h3>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                    <label class="form-check-label" for="flexRadioDefault1">
                      30 minutos
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                      60 minutos
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                    <label class="form-check-label" for="flexRadioDefault3">
                      Fin del turno
                    </label>
                  </div>
            </div>
            <hr>
            {{-- segundo bloque  --}}
            <div>
                <h3>Precio de la bolsa</h3>
                <div class="col-12 mr-3  mb-3">
                    <input type="text" class="form-control ">
                </div>
            </div>
            <hr>
            {{-- tercer bloque  --}}
            <div>
                <h3>Número de tickets</h3>
                <div class="col-12 mr-3  mb-3">
                    <input type="text" class="form-control ">
                </div>
            </div>
        </div>
        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row">
                <div class="col-sm-12">
                    <table id="example2" class="table table-borderles table-hover dataTable" role="grid"
                        aria-describedby="example2_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc text-center" tabindex="0" aria-controls="example2" rowspan="1"
                                    colspan="1" aria-sort="ascending">APERTURA
                                </th>
                                <th class="sorting text-center" tabindex="0" aria-controls="example2" rowspan="1"
                                    colspan="1">COMIDAS</th>
                                    <th class="sorting text-center" tabindex="0" aria-controls="example2" rowspan="1"
                                    colspan="1">CENAS</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr role="row" class="odd">
                                <td class="sorting_1">Lunes</td>
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                      </div>
                                </td>
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                      </div>
                                </td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="sorting_1">Martes</td>
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                      </div>
                                </td>
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                      </div>
                                </td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="sorting_1">Miercoles</td>
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                      </div>
                                </td>
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                      </div>
                                </td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="sorting_1">Jueves</td>
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                      </div>
                                </td>
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                      </div>
                                </td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="sorting_1">Viernes</td>
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                      </div>
                                </td>
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                      </div>
                                </td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="sorting_1">Sabado</td>
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                      </div>
                                </td>
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                      </div>
                                </td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="sorting_1">Domingo</td>
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                      </div>
                                </td>
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                      </div>
                                </td>
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
