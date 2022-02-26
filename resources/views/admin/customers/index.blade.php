@extends('adminlte::page')

@section('content')
    <div class="flex-column ">
        <div class="card-body ">
            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example2" class="table table-bordered table-hover dataTable" role="grid"
                            aria-describedby="example2_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc text-center" tabindex="0" aria-controls="example2" rowspan="1"
                                        colspan="1" aria-sort="ascending">NOMBRE
                                    </th>
                                    <th class="sorting text-center" tabindex="0" aria-controls="example2" rowspan="1"
                                        colspan="1">TELEFONO</th>
                                    <th class="sorting text-center" tabindex="0" aria-controls="example2" rowspan="1"
                                        colspan="1">EMAIL</th>
                                    <th class="sorting text-center" tabindex="0" aria-controls="example2" rowspan="1"
                                        colspan="1">direccion</th>
                                    <th class="sorting text-center" tabindex="0" aria-controls="example2" rowspan="1"
                                        colspan="1"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">nombre</td>
                                    <td class="sorting_1">telf</td>
                                    <td class="sorting_1">email</td>
                                    <td class="sorting_1">direcc</td>
                                    <td>
                                        <div class="d-flex  ">
                                            <a href="{{ route('admin.customers.show') }}" type="button" class="mr-3"><i class="fas fa-user-edit" style="color:green"></i></a>
                                            <a href="#" type="button" ><i class="fas fa-motorcycle " style="color:red"></i></a>
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
