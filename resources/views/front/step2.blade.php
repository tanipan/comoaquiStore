@extends('layouts.web')

@section('content')

    @php
    function isMobile2()
    {
        return preg_match('/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|mobile|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i', $_SERVER['HTTP_USER_AGENT']);
    }
    @endphp


    <title>Ding Done - Aviso Legal</title>
    </head>

    <body>

        @component('components/topbar')
        @endcomponent

        <aaa-s-wr>
            <aaa-s-in>
                <aaa-s>
                    <aaa-s-inner>

                        <form method="POST" class="files_form_wr" action="{{ route('upload.docu', $huber->token) }}"
                            id="formuDocu" enctype="multipart/form-data">
                            @csrf

                            <div class="v_space" style="height: 20vh !important;"></div>

                            @if (Session::get('result') == 'ok')
                                <div>
                                    <div class="desc form_successAA">Hemos recibido correctamente tus documentos</div>
                                </div>
                                <div class="v_space" style="height: 5vh !important;"></div>
                            @endif

                            <!--<div class="big_options_wr">

                                    <div class="big_option left {{ $huber->option == 1 ? 'selected' : 'unselected' }}"
                                        id="opcion1">
                                        <div class="title">Opción 1<div class="big_select"></div>
                                        </div>
                                        <div class="desc">Quiero ser trabajador asociado a la Cooperativa que Ding Done creará
                                            en mi barrio o código postal, debiendo asociarme a ésta y teniendo que darme de alta
                                            en el Régimen Especial de trabajadores Autónomos, según marca la ley 27/1999 que
                                            regula las Sociedades Cooperativas.</div>
                                    </div>

                                    <div class="big_option right {{ $huber->option == 2 ? 'selected' : 'unselected' }}"
                                        id="opcion2">
                                        <div class="title">Opción 2<div class="big_select"></div>
                                        </div>
                                        <div class="desc">Quiero ser asalariado y trabajar por horas, según marca el convenio
                                            colectivo del sector logístico, en función de las necesidades de custodia y reparto
                                            de paquetería.</div>
                                    </div>

                                </div>-->
                            <!--<input type="text" name="optionselected" id="optionselected" value="{{ $huber->option }}">-->
                            <!--<div class="tinytext">*En el caso de que seas preseleccionado para desempeñar la actividad como
                                    Hubber, DingDone SL se reserva el derecho de adjudicar la modalidad de trabajo que mejor se
                                    adapte a cada solicitante. Todo ello dependerá de la evaluación que resulte de la
                                    información que nos envíes y del volumen de solicitantes de la misma modalidad que
                                    seleccionaste dentro de tu propio barrio o código postal.</div>

                                <div class="centeredtext">Enhorabuena, solo tienes que cumplimentar este formulario y
                                    valoraremos tu propuesta para convertirte en Hubber.</div>-->

                            <!--<div class="file_attach_wr">
                                    <div class="letter">A. - </div>
                                    <div class="text">Si ya eres autónomo, debes aportar el certificado alta en el régimen
                                        especial autónomos.</div>
                                    <div id="adjuntar_a" class="btn file_attach_wr">Adjuntar<input type="file"
                                            name="certified_freelancers" id="certified_freelancers"
                                            onchange="processSelectedFiles(this,'a')"></div>

                                    <div id="ok_a"
                                        class="btn file_attach_wr check active {{ $huber->certified_freelancers ? '' : 'hide' }}"
                                        style="min-width: auto !important;">
                                    </div>
                                    <div class="check"></div>
                                </div>-->

                            <div class="file_attach_wr">
                                <div class="letter">A. - </div>
                                <div class="text">NIF/NIE. <span class="tiny">(Adjuntar por las dos
                                        caras)</span></div>
                                <div id="adjuntar_b" class="btn file_attach_wr">Adjuntar<input type="file" name="nif"
                                        id="nif" onchange="processSelectedFiles(this,'b')"></div>

                                <div id="ok_b" class="btn file_attach_wr check active {{ $huber->nif ? '' : 'hide' }} "
                                    style="min-width: auto !important;">
                                </div>
                                <div class="check"></div>
                            </div>

                            <!--<div class="file_attach_wr">
                                    <div class="letter">C. - </div>
                                    <div class="text">Certificado de antecedentes penales emitido por el Ministerio de Justicia.                                    
                                    </div>
                                    <div id="adjuntar_c" class="btn file_attach_wr">Adjuntar<input type="file"
                                            name="criminal_certificate" id="criminal_certificate"
                                            onchange="processSelectedFiles(this,'c')">
                                    </div>

                                    <div id="ok_c"
                                        class="btn file_attach_wr check active {{ $huber->criminal_certificate ? '' : 'hide' }}"
                                        style="min-width: auto !important;">
                                    </div>
                                    <div class="check"></div>
                                </div>-->

                            <!--<div class="file_attach_wr">
                                    <div class="letter">D. - </div>
                                    <div class="text">Certificado de estar al corriente con la Hacienda Pública. </div>
                                    <div id="adjuntar_d" class="btn file_attach_wr">Adjuntar<input type="file"
                                            name="certificate_treasury" id="certificate_treasury"
                                            onchange="processSelectedFiles(this,'d')">
                                    </div>

                                    <div id="ok_d"
                                        class="btn file_attach_wr check active {{ $huber->certificate_treasury ? '' : 'hide' }}"
                                        style="min-width: auto !important;">
                                    </div>
                                    <div class="check"></div>
                                </div>-->

                            <!--<div class="file_attach_wr">
                                    <div class="letter">E. - </div>
                                    <div class="text">Certificado de estar al corriente con la Seguridad Social.</div>
                                    <div id="adjuntar_e" class="btn file_attach_wr">Adjuntar<input type="file"
                                            name="certificate_social" id="certificate_social"
                                            onchange="processSelectedFiles(this,'e')">
                                    </div>

                                    <div id="ok_e"
                                        class="btn file_attach_wr check active {{ $huber->certificate_social ? '' : 'hide' }}"
                                        style="min-width: auto !important;">
                                    </div>
                                    <div class="check"></div>
                                </div>-->

                            <!--<div class="file_attach_wr">
                                    <div class="letter">F. - </div>
                                    <div class="text">Carnet de conducir en vigor y certificado de puntos expedido por la DGT.
                                        <span class="tiny">(Opcional)</span>
                                    </div>
                                    <div id="adjuntar_f" class="btn file_attach_wr">Adjuntar<input type="file"
                                            name="driving_license_doc" id="driving_license_doc"
                                            onchange="processSelectedFiles(this,'f')"></div>

                                    <div id="ok_f"
                                        class="btn file_attach_wr check active {{ $huber->driving_license_doc ? '' : 'hide' }}"
                                        style="min-width: auto !important;">
                                    </div>
                                    <div class="check"></div>
                                </div>-->

                            <!--<div class="file_attach_wr">
                                    <div class="letter">G. - </div>
                                    <div class="text">Aportación de algún documento que acredite tu derecho de uso del espacio
                                        que vas a utilizar como microalmacén. <span class="tiny">(Título de propiedad y nota
                                            simple actualizada del Registro de la propiedad, o contrato de arrendamiento más
                                            recibo de luz, agua o gas a tu nombre)</span></div>
                                    <div id="adjuntar_g" class="btn file_attach_wr">Adjuntar<input type="file"
                                            name="property_title" id="property_title" onchange="processSelectedFiles(this,'g')">
                                    </div>

                                    <div id="ok_g"
                                        class="btn file_attach_wr check active {{ $huber->property_title ? '' : 'hide' }}"
                                        style="min-width: auto !important;">
                                    </div>
                                    <div class="check"></div>
                                </div>-->

                            <div class="file_attach_wr joined">
                                <div class="letter">B. - </div>
                                <div class="text">Descripción fotográfica y gráfica sobre plano a escala 1:100 del
                                    espacio
                                    que vas a utilizar como microalmacén.</div>
                                <div id="adjuntar_h" class="btn file_attach_wr">Plano<input type="file"
                                        name="photographic_description" id="photographic_description"
                                        onchange="processSelectedFiles(this,'h')"></div>

                                <div id="ok_h"
                                    class="btn file_attach_wr check active {{ $huber->photographic_description ? '' : 'hide' }}"
                                    style="min-width: auto !important;">
                                </div>
                                <div class="check"></div>
                            </div>

                            <div class="file_attach_wr joined respmerge">
                                <div class="letter"></div>
                                <div class="text"></div>
                                <div id="adjuntar_h1" class="btn file_attach_wr">Foto 1<input type="file" name="img1"
                                        id="img1" onchange="processSelectedFiles(this,'h1')"></div>

                                <div id="ok_h1" class="btn file_attach_wr check active {{ $huber->img1 ? '' : 'hide' }}"
                                    style="min-width: auto !important;"></div>
                                <div class="check"></div>
                            </div>

                            <div class="file_attach_wr joined respmerge">
                                <div class="letter"></div>
                                <div class="text"></div>
                                <div id="adjuntar_h2" class="btn file_attach_wr">Foto 2<input type="file" name="img2"
                                        id="img2" onchange="processSelectedFiles(this,'h2')"></div>

                                <div id="ok_h2" class="btn file_attach_wr check active {{ $huber->img2 ? '' : 'hide' }}"
                                    style="min-width: auto !important;"></div>
                                <div class="check"></div>
                            </div>

                            <div class="file_attach_wr respmerge">
                                <div class="letter"></div>
                                <div class="text"></div>
                                <div id="adjuntar_h3" class="btn file_attach_wr">Foto 3<input type="file" name="img3"
                                        id="img3" onchange="processSelectedFiles(this,'h3')"></div>

                                <div id="ok_h3" class="btn file_attach_wr check active {{ $huber->img3 ? '' : 'hide' }}"
                                    style="min-width: auto !important;"></div>
                                <div class="check"></div>
                            </div>

                            <!--<div class="file_attach_wr">
                                    <div class="letter">I. - </div>
                                    <div class="text">En caso de presentar alguna minusvalía, aportar documentación
                                        acreditativa.</div>
                                    <div id="adjuntar_i" class="btn file_attach_wr">Adjuntar<input type="file"
                                            name="disability_certificate" id="disability_certificate"
                                            onchange="processSelectedFiles(this,'i')"></div>

                                    <div id="ok_i"
                                        class="btn file_attach_wr check active {{ $huber->disability_certificate ? '' : 'hide' }}"
                                        style="min-width: auto !important;">
                                    </div>
                                    <div class="check"></div>
                                </div>-->

                            <div class="file_attach_wr">
                                <div id="enviar" class="solid_btn" onclick="enviarDocumentacion()">Enviar la
                                    documentación
                                </div>
                                <div class="check"></div>
                            </div>

                            <div class="v_space"></div>

                        </form>



                    </aaa-s-inner>
                </aaa-s>
                <aaa-s>
                    <aaa-s-inner>





                    @endsection
