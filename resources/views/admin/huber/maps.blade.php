@extends('adminlte::page')

@section('title', 'Mapa global')

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Mapa de todos los hubbers</h1>
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
                <div class="card-header">
                    <h3 class="card-title">Ubicación de los hubbers</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div style="width: 100%; height: 1000px;">
                        {!! Mapper::render() !!}
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
