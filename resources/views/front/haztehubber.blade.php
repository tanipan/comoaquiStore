@extends('layouts.web')

@section('content')

    @php
    function isMobile2()
    {
        return preg_match('/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|mobile|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i', $_SERVER['HTTP_USER_AGENT']);
    }
    @endphp

    <title>Ding Done - Hazte Hubber</title>
    </head>

    <body>

        <div id="view_hubber"></div>

        @component('components/topbar')
        @endcomponent

        <div class="wannabe_wr">
            <div id="wannabe_info">
                <div class="recotitle">Quiero ser Hubber.</div>
                <div class="desc">Si eres trabajador por cuenta propia, <br>y tienes un local o habitación disponible en
                    casa.</div>
                <div class="arr_content_wr">
                    <div class="left">
                        <div class="arr"></div>
                        <div class="num">1</div>
                        <div class="content">Conviértete en uno de nuestros microalmacenes y rentabiliza tu espacio sin uso.
                        </div>
                    </div>
                    <div class="right">
                        <div class="arr"></div>
                        <div class="num">2</div>
                        <div class="content">Obten beneficios extra por custodiar y entregar los artículos de nuestros
                            clientes.</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="greystatic_wr">
            <div id="hw_title" class="recotitle title">Transforma tu habitación o local que no usas en un microalmacén.<div
                    class="subt">Dale una nueva vida a ese espacio que nunca utilizas sin moverte de casa.</div>
            </div>
        </div>

        <div class="greystatic_mask_wr">
            <div class="greystatic_mask">
                <div id="hw_title_top" class="recotitle title">Transforma tu habitación o local que no usas en un
                    microalmacén.<div class="subt">Dale una nueva vida a ese espacio que nunca utilizas sin moverte de casa.
                    </div>
                </div>
            </div>
        </div>

        <aaa-s-wr>
            <aaa-s-in>
                <aaa-s>
                    <aaa-s-inner>
                        <div class="hb_header">
                            <div class="incenter">
                                <div class="ani_hb_ha"></div>
                                <div id="ani_hb_ha"></div>
                                <div class="text_block">
                                    <div class="title recotitle">Rentabiliza <br>tu espacio sin uso.</div>
                                    <div class="desc">Conviértete en un microalmacén y rentabiliza ese espacio de casa o
                                        local que nunca utilizas.</div>
                                </div>
                                <div class="ani_hb_hb"></div>
                                <div id="ani_hb_hb"></div>
                            </div>
                        </div>
                    </aaa-s-inner>
                </aaa-s>
                <aaa-s>
                    <aaa-s-inner>
                        <div id="hb_yellow"></div>
                    </aaa-s-inner>
                </aaa-s>
                <aaa-s>
                    <aaa-s-inner>
                        <div id="hubbfullimg"></div>
                    </aaa-s-inner>
                </aaa-s>
                <aaa-s>
                    <aaa-s-inner>
                        <div id="hb_greystatic">
                            <div id="hubb_detail_1" class="hubb_detail">
                                <div class="detail_icon_1"></div>
                                <div class="detailtitle">Realiza entregas de forma fácil y ecológica.</div>
                                <div class="desc">
                                    <ol>
                                        <li>Entrega sin salir de tu mismo código postal.</li>
                                        <li>No necesitas vehículo, entrega caminando.</li>
                                        <li>Ayuda al medio ambiente.</li>
                                    </ol>
                                </div>
                            </div>
                            <div id="hubb_detail_2" class="hubb_detail">
                                <div class="detail_icon_2"></div>
                                <div class="detailtitle">Tú eliges cuánto ganas.</div>
                                <div class="desc">
                                    <ol>
                                        <li>Elige el horario de custodia y entrega de paquetería que más te convenga.</li>
                                        <li>Puedes combinarlo con otra actividad o profesión.</li>
                                        <li>Obtén beneficios en función de las horas que puedas hacer “Ding Done”.</li>
                                    </ol>
                                </div>
                                <div class="detail_icon_3"></div>
                            </div>
                        </div>
                    </aaa-s-inner>
                </aaa-s>
                <aaa-s>
                    <aaa-s-inner>
                        <div id="hubb_form" class="hubb_form">
                            <div id="topband">
                                <div class="incenter">
                                    <div class="recotitle">Únete a nosotros.</div>
                                    <div class="subtitle">¿Alguna duda? ¿Quieres hablar con nosotros? ¡Pregúntanos cualquier
                                        cosa!<sup>*</sup></div>
                                    <div class="explanation">* Cuando decimos “cualquier cosa”, hablamos estrictamente en
                                        términos de colaboración, así que, si decides escribirnos para mostrarnos tu wish
                                        list de alguna plataforma de venta on line, o la carta a los Reyes Magos, es posible
                                        que no te sirvamos de gran ayuda, pero no te preocupes, en DingDone todo es posible,
                                        ya que gracias a nuestra experiencia y estrecha colaboración profesional, tenemos un
                                        trato excelente con las plataformas de comercio electrónico y una relación muy
                                        especial con los carteros reales y con sus Majestades los Reyes Magos de Oriente,
                                        así que si te portas bien las próximas navidades, ¡igual te llevas una sorpresa!
                                        Nunca dejes de soñar, nosotros nunca lo hacemos.<br><br>DingDone team.</div>
                                </div>
                            </div>
                            <div class="incenter">
                                <div class="bottomband">
                                    <div class="left">
                                        <div class="form_title">Estás a un Ding de tenerlo Done.</div>
                                        <div class="form_subtitle">Para más información rellena el siguiente formulario, y
                                            nos pondremos en contacto contigo.</div>
                                    </div>
                                    <div class="right">

                                        <input type="text" name="name" id="form_name" class="half" placeholder="Nombre *">
                                        <input type="text" name="surname" id="form_surname" class="half"
                                            placeholder="Apellidos *">

                                        <input type="email" name="email" id="form_email" class="half" placeholder="Email *">
                                        <input type="tel" name="phone" id="form_phone" class="half"
                                            placeholder="Teléfono *">

                                        <input type="text" name="town" id="form_town" class="half"
                                            placeholder="Población *">
                                        <input type="number" name="cp" id="form_cp" class="half"
                                            placeholder="Código postal *" max="52999">

                                        <input type="text" name="address" id="form_address" class="half"
                                            placeholder="Dirección exacta de la ubicación de tu posible micro almacén *">
                                        <input type="text" name="address_extender" id="form_address_extender" class="half"
                                            placeholder="Información adicional de la dirección">

                                        {{ csrf_field() }}

                                        <textarea name="message" id="form_message" rows="6" class="full"
                                            placeholder="Mensaje *"></textarea>
                                        <div class="form_legal_wr full">
                                            <div class="form_legal_text">Ding Done tratará sus datos personales para dar
                                                respuesta a las solicitudes planteadas. Puede ejercer sus derechos de
                                                acceso, rectificación, supresión y portabilidad de sus datos, de limitación
                                                y oposición a su tratamiento, así como a no ser objeto de decisiones basadas
                                                únicamente en el tratamiento automatizado de sus datos, cuando procedan, en
                                                la dirección de correo electrónico info@dingdonehubs.com. Le recomendamos
                                                que lea la política de privacidad antes de proporcionarnos sus datos
                                                personales.</div>
                                            <input type="checkbox" name="aceptation" id="form_aceptation"> He leído y acepto
                                            las condiciones de la <a target="_blank"
                                                href="{{ route('privacidad') }}">política de privacidad</a>
                                        </div>
                                        <div class="form_error">Debes rellenar todos los campos marcados con *</div>
                                        <div class="form_success">¡Enviado! Nos pondremos en contacto contigo lo antes
                                            posible.</div>
                                        <input id="sendmail_btn_hubber" type="submit" class="solid_btn"
                                            value="Enviar formulario">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aaa-s-inner>
                </aaa-s>
                <aaa-s>
                    <aaa-s-inner>





                    @endsection
