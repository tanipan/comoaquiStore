@extends('adminlte::page')

@section('title', 'Listado de usuarios')

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Datos del huber: {{ $huber->name }}</h1>
        </div>
        <!--<div class="col-sm-6">
                                            <a type="button" class="btn btn-success float-right" href="{{ route('admin.huber.create') }}">Crear nuevo
                                                usuario</a>
                                        </div>-->
    </div>
@stop

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <!-- we are adding the accordion ID so Bootstrap's collapse plugin detects it -->
                    <div id="accordion">
                        <div class="card card-success">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    <a class="d-block w-100" data-toggle="collapse" href="#collapseThree">
                                        Primera toma de datos
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="collapse show" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="card-body">
                                                    <dl class="row">
                                                        <dt class="col-sm-3">Nombre</dt>
                                                        <dd class="col-sm-7">{{ $huber->name }}</dd>

                                                        <dt class="col-sm-3">Apellidos</dt>
                                                        <dd class="col-sm-7">{{ $huber->lastname }}</dd>

                                                        <dt class="col-sm-3">Dirección</dt>
                                                        <dd class="col-sm-7">{{ $huber->address }}</dd>

                                                        <dt class="col-sm-3">Población</dt>
                                                        <dd class="col-sm-7">{{ $huber->town }}</dd>

                                                        <dt class="col-sm-3">Provincia</dt>
                                                        <dd class="col-sm-7">{{ $huber->province }}</dd>

                                                        <dt class="col-sm-3">CP</dt>
                                                        <dd class="col-sm-7">{{ $huber->cp }}</dd>

                                                        <dt class="col-sm-3">Correo</dt>
                                                        <dd class="col-sm-7">{{ $huber->email }}</dd>

                                                        <dt class="col-sm-3">Teléfono</dt>
                                                        <dd class="col-sm-7">{{ $huber->phone }}</dd>

                                                        <dt class="col-sm-3">Validación</dt>
                                                        @if ($huber->validate == 1)
                                                            <dd class="col-sm-7 text-success" style="font-weight: bold">
                                                                VÁLIDO</dd>
                                                        @elseif ($huber->validate == 2)
                                                            <dd class="col-sm-7 text-danger" style="font-weight: bold">NO
                                                                VÁLIDO</dd>
                                                        @elseif ($huber->validate == 3)
                                                            <dd class="col-sm-7 text-danger" style="font-weight: bold">EN
                                                                PROCESO</dd>
                                                        @elseif ($huber->validate == 4)
                                                            <dd class="col-sm-7"
                                                                style="color: #2d0242;font-weight: bold">CONTRATADO</dd>
                                                        @else
                                                            <dd class="col-sm-7"></dd>
                                                        @endif

                                                        <dt class="col-sm-3">Motivo</dt>
                                                        <dd class="col-sm-7">{{ $huber->validate_message }}</dd>

                                                        <dt class="col-sm-3">Hora de la solicitud</dt>
                                                        <dd class="col-sm-7">
                                                            {{ Carbon\Carbon::parse($huber->created_at)->format('H:i:s d-m-Y') }}
                                                        </dd>
                                                    </dl>
                                                </div>
                                                <div class="card-footer">
                                                    <a href="{{ route('admin.huber.edit', $huber) }}" type="submit"
                                                        class="btn btn-danger">Modificar datos</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="card-body">
                                                    <dl class="row">
                                                        <dt class="col-sm-5">¿Trabaja actualmente?</dt>
                                                        @if ($huber->works == 1)
                                                            <dd class="col-sm-7">No</dd>
                                                        @elseif ($huber->works == 2)
                                                            <dd class="col-sm-7">Si</dd>
                                                        @else
                                                            <dd class="col-sm-7"></dd>
                                                        @endif

                                                        <dt class="col-sm-5">¿Por cuenta ajena o propia?</dt>
                                                        @if ($huber->workingModality == 1)
                                                            <dd class="col-sm-7">Ajena</dd>
                                                        @elseif ($huber->workingModality == 2)
                                                            <dd class="col-sm-7">Propia</dd>
                                                        @else
                                                            <dd class="col-sm-7"></dd>
                                                        @endif

                                                        <dt class="col-sm-5">¿Metros cuadrados disponibles?</dt>
                                                        <dd class="col-sm-7">{{ $huber->meters }}</dd>


                                                        <dt class="col-sm-5">¿Qué tipo de espacio?</dt>
                                                        @if ($huber->typeRoom == 1)
                                                            <dd class="col-sm-7">Vivienda</dd>
                                                        @elseif ($huber->typeRoom == 2)
                                                            <dd class="col-sm-7">Local</dd>
                                                        @elseif ($huber->typeRoom == 3)
                                                            <dd class="col-sm-7">Otros</dd>
                                                        @else
                                                            <dd class="col-sm-7"></dd>
                                                        @endif

                                                        <dt class="col-sm-5">¿En qué planta se ubica?</dt>
                                                        <dd class="col-sm-7">{{ $huber->floor }}</dd>

                                                        <dt class="col-sm-5">¿Dispone de ascendor?</dt>
                                                        @if ($huber->elevator == 1)
                                                            <dd class="col-sm-7">Si</dd>
                                                        @elseif ($huber->elevator == 2)
                                                            <dd class="col-sm-7">No</dd>
                                                        @elseif ($huber->elevator == 3)
                                                            <dd class="col-sm-7">Otros</dd>
                                                        @else
                                                            <dd class="col-sm-7"></dd>
                                                        @endif

                                                        <dt class="col-sm-5">¿Cómo nos has conocido?</dt>
                                                        @if ($huber->knowUs == 1)
                                                            <dd class="col-sm-7">RRSS</dd>
                                                        @elseif ($huber->knowUs == 2)
                                                            <dd class="col-sm-7">Anuncio</dd>
                                                        @elseif ($huber->knowUs == 3)Ya
                                                            <dd class="col-sm-7">Amigo</dd>
                                                        @else
                                                            <dd class="col-sm-7"></dd>
                                                        @endif

                                                        <dt class="col-sm-5">Comentarios</dt>
                                                        <dd class="col-sm-7">{{ $huber->comments }}</dd>

                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseOne"
                                        aria-expanded="false">
                                        Segunda toma de datos
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="collapse " data-parent="#accordion" style="">
                                <div class="card-body">
                                    <div class="row">

                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <dl class="row">

                                                <table class="table table-hover text-nowrap">
                                                    <thead>
                                                        <!--<tr>
                                                                                                                            <th style="width: 10px"></th>
                                                                                                                            <th>Opción de tipo de trabajador</th>
                                                                                                                            <th class="text-success">
                                                                                                                                @if ($huber->option == 1)
                                                                                                                                    Trabajador ASOCIADO
                                                                @elseif ($huber->option==2)
                                                                                                                                    Trabajador ASALARIADO
                                                                                                                                @endif
                                                                                                                            </th>
                                                                                                                        </tr>-->
                                                        <!--<tr>
                                                                                                                            <th style="width: 10px">&nbsp;</th>
                                                                                                                            <th>&nbsp;</th>
                                                                                                                            <th>&nbsp;</th>
                                                                                                                        </tr>-->
                                                        <tr>
                                                            <th style="width: 10px">#</th>
                                                            <th>Documento</th>
                                                            <th>Visualizar</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!--<tr>
                                                                <td>1.</td>
                                                                <td>Certificado alta en el régimen especial de autónomos</td>
                                                                <td>
                                                                    @if ($huber->certified_freelancers)
                                                                        <a target="_blank"
                                                                            href="{{ Storage::url('uploads/' . $huber->token . '/' . $huber->certified_freelancers) }}"
                                                                            class="btn btn-block btn-primary">Ver</a>
                                                                    @endif
                                                                </td>
                                                            </tr>-->
                                                        <tr>
                                                            <td>1.</td>
                                                            <td>NIF/NIE</td>
                                                            <td>
                                                                @if ($huber->nif)
                                                                    <a target="_blank" class="btn btn-block btn-primary"
                                                                        href="{{ Storage::url('uploads/' . $huber->token . '/' . $huber->nif) }}">Ver</a>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <!--<tr>
                                                                <td>4.</td>
                                                                <td>Certificado de antecedentes penales</td>
                                                                <td>
                                                                    @if ($huber->criminal_certificate)
                                                                        <a target="_blank" class="btn btn-block btn-primary"
                                                                            href="{{ Storage::url('uploads/' . $huber->token . '/' . $huber->criminal_certificate) }}">Ver</a>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>5.</td>
                                                                <td>Certificado de estar al corriente con la Hacienda Pública
                                                                </td>
                                                                <td>
                                                                    @if ($huber->certificate_treasury)
                                                                        <a target="_blank" class="btn btn-block btn-primary"
                                                                            href="{{ Storage::url('uploads/' . $huber->token . '/' . $huber->certificate_treasury) }}">Ver</a>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>6.</td>
                                                                <td>Certificado de estar al corriente con la Seguridad Social
                                                                </td>
                                                                <td>
                                                                    @if ($huber->certificate_social)
                                                                        <a target="_blank" class="btn btn-block btn-primary"
                                                                            href="{{ Storage::url('uploads/' . $huber->token . '/' . $huber->certificate_social) }}">Ver</a>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>7.</td>
                                                                <td>Carnet de conducir en vigor y puntos
                                                                </td>
                                                                <td>
                                                                    @if ($huber->driving_license_doc)
                                                                        <a target="_blank" class="btn btn-block btn-primary"
                                                                            href="{{ Storage::url('uploads/' . $huber->token . '/' . $huber->driving_license_doc) }}">Ver</a>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>9.</td>
                                                                <td>Título de propiedad o contrato de arrendamiento del espacio
                                                                </td>
                                                                <td>
                                                                    @if ($huber->property_title)
                                                                        <a target="_blank" class="btn btn-block btn-primary"
                                                                            href="{{ Storage::url('uploads/' . $huber->token . '/' . $huber->property_title) }}">Ver</a>
                                                                    @endif
                                                                </td>
                                                            </tr>-->
                                                        <tr>
                                                            <td>2.</td>
                                                            <td>Plano de la estancia
                                                            </td>
                                                            <td>
                                                                @if ($huber->photographic_description)
                                                                    <a target="_blank" class="btn btn-block btn-primary"
                                                                        href="{{ Storage::url('uploads/' . $huber->token . '/' . $huber->photographic_description) }}">Ver</a>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3.</td>
                                                            <td>Foto 1 de la estancia
                                                            </td>
                                                            <td>
                                                                @if ($huber->img1)
                                                                    <a target="_blank" class="btn btn-block btn-primary"
                                                                        href="{{ Storage::url('uploads/' . $huber->token . '/' . $huber->img1) }}">Ver</a>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>4.</td>
                                                            <td>Foto 2 de la estancia
                                                            </td>
                                                            <td>
                                                                @if ($huber->img2)
                                                                    <a target="_blank" class="btn btn-block btn-primary"
                                                                        href="{{ Storage::url('uploads/' . $huber->token . '/' . $huber->img2) }}">Ver</a>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>5.</td>
                                                            <td>Foto 3 de la estancia
                                                            </td>
                                                            <td>
                                                                @if ($huber->img3)
                                                                    <a target="_blank" class="btn btn-block btn-primary"
                                                                        href="{{ Storage::url('uploads/' . $huber->token . '/' . $huber->img3) }}">Ver</a>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <!--<tr>
                                                            <td>16.</td>
                                                            <td>Certificado de minusvalía
                                                            </td>
                                                            <td>
                                                                @if ($huber->disability_certificate)
                                                                    <a target="_blank" class="btn btn-block btn-primary"
                                                                        href="{{ Storage::url('uploads/' . $huber->token . '/' . $huber->disability_certificate) }}">Ver</a>
                                                                @endif
                                                            </td>
                                                        </tr>-->
                                                    </tbody>
                                                </table>




                                            </dl>
                                        </div>
                                        <!-- /.card-body -->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-warning">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
                                        Ubicación en el mapa
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="row">

                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <div style="width: 100%; height: 1000px;">
                                                {!! Mapper::render() !!}
                                            </div>
                                        </div>
                                        <!-- /.card-body -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

    </div>

@stop

@section('css')
    <!--<link rel="stylesheet" href="/css/admin_custom.css">-->
@stop

@section('js')
    <script>


    </script>
@stop
