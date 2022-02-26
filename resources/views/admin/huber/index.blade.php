@extends('adminlte::page')

@section('title', 'Listado de usuarios')

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Listado de hubbers</h1>
        </div>
    </div>
@stop

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Filtrado</h3>

                    <form action="{{ route('admin.huber.list') }}" method="GET" id="formu_filter">


                        <div class="row">
                            <div class="col-md-3">
                                <select name="town" id="town" class="custom-select">
                                    <option value="">- Ciudad -</option>
                                    @foreach ($towns as $town)
                                        <option {{ request('town') == $town->town ? 'selected' : '' }}
                                            value="{{ $town->town }}">{{ strtoupper($town->town) }}
                                            ({{ $town->num }})
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select name="cp" id="cp" class="custom-select">
                                    <option value="">- Código Postal -</option>
                                    @foreach ($cps as $cp)
                                        <option {{ request('cp') == $cp->cp ? 'selected' : '' }}
                                            value="{{ $cp->cp }}">{{ strtoupper($cp->cp) }}
                                            ({{ $cp->num }})
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select name="status" id="status" class="custom-select">
                                    <option value="">- Estado -</option>
                                    <option value="-1" {{ request('status') == -1 ? 'selected' : '' }}>Nuevos</option>
                                    <option value="3" {{ request('status') == 3 ? 'selected' : '' }}>En Proceso</option>
                                    <option value="1" {{ request('status') == 1 ? 'selected' : '' }}>Válidos</option>
                                    <option value="2" {{ request('status') == 2 ? 'selected' : '' }}>No Válidos</option>
                                    <option value="4" {{ request('status') == 4 ? 'selected' : '' }}>Contratados</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select name="orderBy" id="orderBy" class="custom-select">
                                    <option value="">- Ordenación -</option>
                                    <option value="1" {{ request('orderBy') == 1 ? 'selected' : '' }}>Creación ascendente
                                    </option>
                                    <option value="2" {{ request('orderBy') == 2 ? 'selected' : '' }}>Creación
                                        descendente
                                    </option>
                                    <option value="3" {{ request('orderBy') == 3 ? 'selected' : '' }}>Modificación
                                        ascendente</option>
                                    <option value="4" {{ request('orderBy') == 4 ? 'selected' : '' }}>Modificación
                                        descendente</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary btn-sm">Filtrar</button>
                                <a href="{{ route('admin.huber.list') }}" class="btn btn-danger btn-sm">Limpiar</a>
                            </div>
                        </div>
                    </form>

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Ciudad</th>
                                <th>Provincia</th>
                                <th>Validación</th>
                                <th>Ultima modif.</th>
                                <th>Fecha entrada</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($hubers as $huber)
                                @php
                                    switch ($huber->validate) {
                                        case 0:
                                            $color = '#ff000047';
                                            break;
                                        case 1:
                                            $color = '#00ff1f47';
                                            break;
                                        case 3:
                                            $color = '#ffdf0047';
                                            break;
                                        case 2:
                                            $color = '#00000047';
                                            break;
                                        case 4:
                                            $color = '#2d024263';
                                            break;
                                    }
                                @endphp
                                <tr style="background-color: {{ $color }}">
                                    <td>{{ $huber->id }}</td>
                                    <td>{{ $huber->name }}</td>
                                    <td>{{ $huber->email }}</td>
                                    <td>{{ $huber->town }}</td>
                                    <td>{{ $huber->province }}</td>

                                    @if ($huber->validate == 1)
                                        <td class="text-success">VÁLIDO</td>
                                    @elseif ($huber->validate==2)
                                        <td class="text-danger">NO VÁLIDO</td>
                                    @elseif ($huber->validate==3)
                                        <td class="text-warning">EN PROCESO</td>
                                    @elseif ($huber->validate==4)
                                        <td class="text-warning" style="color: #2d0242 !important">CONTRATADO</td>
                                    @else
                                        <td>Pendiente</td>
                                    @endif
                                    <td>
                                        {{ Carbon\Carbon::parse($huber->updated_at)->format('H:i:s d-m-Y') }}
                                    </td>
                                    <td>
                                        {{ Carbon\Carbon::parse($huber->created_at)->format('H:i:s d-m-Y') }}
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('admin.huber.show', $huber) }}" type="button"
                                                class="btn btn-info" style="color:white">Ver datos</a>
                                            <button type="button" class="btn btn-info dropdown-toggle"
                                                data-toggle="dropdown">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" role="menu">
                                                <a class="dropdown-item"
                                                    href="{{ route('admin.huber.edit', $huber) }}">Modificar</a>
                                                <div class="dropdown-divider"></div>

                                                <form action="{{ route('admin.huber.delete', $huber) }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="dropdown-item" href="#"
                                                        onclick="return confirm('¿Quieres eliminar a este hubber?')">Eliminar
                                                        X</button>
                                                </form>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix float-right">
                    @php
                        $params = [
                            'status' => Request::get('status'),
                            'town' => Request::get('town'),
                            'orderBy' => Request::get('orderBy'),
                        ];
                    @endphp
                    {{ $hubers->appends($params)->links() }}
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

@section('js')
    <script>
        $("#town").on("change", function() {
            $('#cp').prop('selectedIndex', 0);
        });

        $("#cp").on("change", function() {
            $('#town').prop('selectedIndex', 0);
        });
    </script>
@stop
