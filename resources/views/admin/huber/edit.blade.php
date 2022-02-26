@extends('adminlte::page')

@section('title', 'Modificar hubner')

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Modificar hubber</h1>
        </div>

    </div>
@stop

@section('content')

    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Datos del hubber</h3>
                </div>
                <!-- /.card-header -->

                <!-- form start -->
                <form method="POST" action="{{ route('admin.huber.update', $huber) }}" id="formuHuber">

                    @csrf
                    @method('PUT')

                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nombre</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                value="{{ old('name', $huber->name) }}" name="name" placeholder="Inserta el nombre">
                            @error('name')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Apellidos</label>
                            <input type="text" class="form-control @error('lastname') is-invalid @enderror" id="lastname"
                                value="{{ old('lastname', $huber->lastname) }}" name="lastname"
                                placeholder="Inserta los apellidos">
                            @error('lastname')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                value="{{ old('email', $huber->email) }}" name="email" placeholder="Inserta el email">
                            @error('email')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Teléfono</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone"
                                value="{{ old('phone', $huber->phone) }}" name="phone" placeholder="Teléfono">
                            @error('phone')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Población</label>
                            <input type="text" class="form-control @error('town') is-invalid @enderror" id="town"
                                value="{{ old('town', $huber->town) }}" name="town" placeholder="Población">
                            @error('town')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Código Postal</label>
                            <input type="text" class="form-control @error('cp') is-invalid @enderror" id="cp"
                                value="{{ old('cp', $huber->cp) }}" name="cp" placeholder="Código Postal">
                            @error('cp')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Dirección</label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror" id="address"
                                value="{{ old('address', $huber->address) }}" name="address" placeholder="Dirección">
                            @error('address')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Dirección extra</label>
                            <input type="text" class="form-control @error('address_extender') is-invalid @enderror"
                                id="address_extender" value="{{ old('address_extender', $huber->address_extender) }}"
                                name="address_extender" placeholder="Dirección extra">
                            @error('address_extender')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Mensaje</label>
                            <textarea class="form-control @error('message') is-invalid @enderror" rows="3"
                                placeholder="Mensaje" name="message">{{ old('message', $huber->message) }}</textarea>
                            @error('message')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">¿Huber válido?</label>
                            <select class="custom-select is-warning" id="validacion" name="validate" id="validate">
                                <option value="0">- Validación -</option>
                                <option {{ old('validate', $huber->validate) == '3' ? 'selected' : '' }} value="3">Huber
                                    en proceso</option>
                                <option {{ old('validate', $huber->validate) == '1' ? 'selected' : '' }} value="1">Huber
                                    válido</option>
                                <option {{ old('validate', $huber->validate) == '2' ? 'selected' : '' }} value="2">Huber
                                    NO válido</option>
                                <option {{ old('validate', $huber->validate) == '4' ? 'selected' : '' }} value="4">Huber
                                    CONTRATADO</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Motivo de validación</label>
                            <textarea class="form-control is-warning" rows="3" placeholder="Motivo validación"
                                id="validate_message"
                                name="validate_message">{{ old('validate_message', $huber->validate_message) }}</textarea>
                        </div>


                    </div>

                    <!--<div class="card-footer">
                                <button type="button" id="enviar" class="btn btn-primary float-right">Modificar hubber</button>
                            </div>-->
            </div>
            <!-- /.card -->

        </div>
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-success">
                <div class="card-header" style="background-color: #2d0242 !important">
                    <h3 class="card-title">Datos ampliados</h3>
                </div>
                <!-- /.card-header -->

                <!-- form start -->
                <div class="card-body">

                    <div class="form-group">
                        <label for="exampleInputPassword1">¿Trabaja actualmente?</label>
                        <select class="custom-select is-warning" id="works" name="works">
                            <option value="0">- Respuesta -</option>
                            <option {{ old('works', $huber->works) == 1 ? 'selected' : '' }} value="1">No</option>
                            <option {{ old('works', $huber->works) == 2 ? 'selected' : '' }} value="2">Si</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">¿Por cuenta ajena o propia?</label>
                        <select class="custom-select is-warning" name="workingModality" id="workingModality">
                            <option value="0">- Respuesta -</option>
                            <option {{ old('workingModality', $huber->workingModality) == 1 ? 'selected' : '' }}
                                value="1">Ajena</option>
                            <option {{ old('workingModality', $huber->workingModality) == 2 ? 'selected' : '' }}
                                value="2">Propia</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">¿Metros cuadrados disponibles?</label>
                        <input type="text" class="form-control" id="meters" value="{{ old('meters', $huber->meters) }}"
                            name="meters" placeholder="Metros cuadrados">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">¿Qué tipo de espacio?</label>
                        <select class="custom-select is-warning" name="typeRoom" id="typeRoom">
                            <option value="0">- Respuesta -</option>
                            <option {{ old('typeRoom', $huber->typeRoom) == 1 ? 'selected' : '' }} value="1">Vivienda
                            </option>
                            <option {{ old('typeRoom', $huber->typeRoom) == 2 ? 'selected' : '' }} value="2">Local
                            </option>
                            <option {{ old('typeRoom', $huber->typeRoom) == 3 ? 'selected' : '' }} value="3">Otros
                            </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">¿En qué planta se ubica?</label>
                        <input type="text" class="form-control" id="floor" value="{{ old('floor', $huber->floor) }}"
                            name="floor" placeholder="Planta">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">¿Dispone de ascendor?</label>
                        <select class="custom-select is-warning" name="elevator" id="elevator">
                            <option value="0">- Respuesta -</option>
                            <option {{ old('elevator', $huber->elevator) == 1 ? 'selected' : '' }} value="1">Si
                            </option>
                            <option {{ old('elevator', $huber->elevator) == 2 ? 'selected' : '' }} value="2">No
                            </option>
                            <option {{ old('elevator', $huber->elevator) == 3 ? 'selected' : '' }} value="3">Otros
                            </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">¿Cómo nos has conocido?</label>
                        <select class="custom-select is-warning" name="knowUs" id="knowUs">
                            <option value="0">- Respuesta -</option>
                            <option {{ old('knowUs', $huber->knowUs) == 1 ? 'selected' : '' }} value="1">RRSS
                            </option>
                            <option {{ old('knowUs', $huber->knowUs) == 2 ? 'selected' : '' }} value="2">Anuncio
                            </option>
                            <option {{ old('knowUs', $huber->knowUs) == 3 ? 'selected' : '' }} value="3">Amigo
                            </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Comentarios</label>
                        <textarea class="form-control is-warning" rows="10" placeholder="Comentarios" id="comments"
                            name="comments">{{ old('comments', $huber->comments) }}</textarea>
                    </div>


                </div>

                <div class="card-footer">
                    <button type="button" id="enviar" class="btn btn-primary float-right">Modificar hubber</button>
                </div>
                </form>
            </div>
            <!-- /.card -->

        </div>
        <!--/.col (right) -->
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script
        src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyBLGhpvCHkKdN49DjwJf43uUl7C7avvYS0">
    </script>

    <script>
        $("#enviar").click(function() {
            var validacion = $('select[name=validate] option').filter(':selected').val();

            if ((validacion != 0) && ($("#validate_message").val() == "")) {
                alert("Debes de indicar el motivo de la validación");
            } else {
                $("#formuHuber").submit();
            }

        });

        var searchInput = 'address';

        $(document).ready(autocompletar());

        function autocompletar() {
            var autocomplete;

            autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
                types: ['geocode'],
                componentRestrictions: {
                    country: "ES"
                }
            });

            google.maps.event.addListener(autocomplete, 'place_changed', function() {
                var np = autocomplete.getPlace();
            });
        }

        $("#validacion").change(function() {
            var validacion = $('select[name=validate] option').filter(':selected').val();

            if (validacion == 1) {
                alert(
                    "Esto mandará un correo al usuario indicando que ha pasado a la siguiente fase y podrá subir la documentación"
                );
            }

            if (validacion == 2) {
                alert("Esto mandará un correo al usuario indicando que no ha sido seleccionado de momento");
            }
        });
    </script>
@stop
