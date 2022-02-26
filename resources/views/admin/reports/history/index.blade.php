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
                    <div class="col-sm-12 col-md-3">
                        <input type="text" class="form-control " placeholder="Filtro tipo entrega">
                    </div>
                   <div class="col-sm-12 col-md-3">
                        <input type="date" class="form-control " >
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <input type="date" class="form-control " >
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example2" class="table table-bordered table-hover dataTable" role="grid"
                            aria-describedby="example2_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc text-center" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-sort="ascending">FECHA
                                    </th>
                                    <th class="sorting text-center" tabindex="0" aria-controls="example2" rowspan="1"
                                        colspan="1">Nº PEDIDO</th>
                                    <th class="sorting text-center" tabindex="0" aria-controls="example2" rowspan="1"
                                        colspan="1">VER COMANDA</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">17/11/2021</td>
                                    <td><label for="">00001</label></td>
                                    <td>
                                        <div class="d-flex  ">
                                            <a href="{{ route('admin.recent.show') }}" type="button"
                                                class="btn btn-success">ABRIR</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            
        </div>
        <div class="">
            <h3>Totales</h3>
            <hr/>
            <div class="d-flex align-items-end justify-content-center">
                <div class="col-sm-12 col-md-3 mr-3 text-center">
                    <label class="form-label ">TOTAL PEDIDOS</label>
                    <input type="text" class="form-control ">
                </div>
                <div class="col-sm-12 col-md-3 mr-3 text-center">
                    <label class="form-label">TOTAL IMPORTE</label>
                    <input type="text" class="form-control ">
                </div>
                <div >
                    <a href="#" type="button"
                        class="btn btn-success">Descargar Excel</a>
                </div>
            </div>
        </div>
        <!-- /.col -->
    </div>
@stop
