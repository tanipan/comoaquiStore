@extends('layouts.web')

@section('content')

    @php
    function isMobile2()
    {
        return preg_match('/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|mobile|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i', $_SERVER['HTTP_USER_AGENT']);
    }
    @endphp


    <title>Ding Done</title>

    </head>

    <body>

        <div id="view_home"></div>

        @component('components/topbar')
        @endcomponent

        <aaa-s-wr>
            <aaa-s-in>
                <aaa-s>
                    <aaa-s-inner>
                        <div class="header">

                            @if (!isMobile2())
                                <div id="bmaniheader_l" class="bmani header_1"></div>
                            @endif

                            <div class="text_block">
                                <div class="title">A un paso <br>de tus clientes</div>
                                <div class="subtitle">La mayor red de microalmacenes urbanos para la custodia y entrega de
                                    paquetería.</div>
                            </div>

                            @if (!isMobile2())
                                <div id="bmaniheader_r" class="bmani header_2"></div>
                            @endif

                        </div>
                    </aaa-s-inner>
                </aaa-s>
                <aaa-s type="pin">
                    <aaa-s-inner>
                        <div class="mission_wr">
                            <div class="pinned_content">
                                <div id="mission_topcolor"></div>
                                <div class="msn_info_0 msn_info">
                                    @if (!isMobile2())
                                        <div id="bmanimission_l" class="bmani m0a"></div>
                                        <div id="bmanimission_r" class="bmani m0b"></div>
                                    @endif
                                    <div id="msn_tt_0" class="top_text">

                                        @if (isMobile2())
                                            <div id="bmanimission_r" class="bmani m0a"></div>
                                        @endif

                                        <div class="text">
                                            <div class="section_name">Nuestra misión</div>Democratizar y economizar la
                                            logística de última milla.
                                        </div>
                                        @if (isMobile2())
                                            <div id="bmanimission_l" class="bmani m0a"></div>
                                        @endif
                                    </div>
                                    <div class="p_text">Somos una comunidad de microalmacenes urbanos cuya gran capilaridad
                                        nos permite custodiar y entregar paquetería en los lugares más inaccesibles del
                                        centro de nuestras ciudades, y en las poblaciones más aisladas</div>
                                </div>
                                <div class="msn_info_1 msn_info">
                                    <div id="msn_tt_1" class="top_text">
                                        <div class="text">
                                            <div class="section_name">Nuestra misión</div>Transformar el reparto de
                                            paquetería en una actividad respetuosa con el medio ambiente natural y cultural.
                                        </div>
                                    </div>

                                    @if (!isMobile2())
                                        <div id="bmanim1" class="bmani m1"></div>
                                    @endif

                                    <div class="p_text">
                                        <div class="w_limit_50">
                                            @if (isMobile2())
                                                <div id="bmanim1" class="bmani m1"></div>
                                            @endif
                                            <div class="bicol">
                                                <div class="left">Cada entrega no realizada supone la emisión de 0’5kg. de
                                                    co2 a nuestra atmósfera.</div>
                                                <div class="right">Los hubbers son personas que trabajan y viven en el mismo
                                                    barrio donde hacen sus entregas. Por eso, van caminando.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="msn_info_2 msn_info">
                                    <div id="msn_tt_2" class="top_text">
                                        <div class="text">
                                            <div class="section_name">Nuestra misión</div>Agilizar la custodia y entrega de
                                            paquetería de forma ecológica, eficaz y sencilla.
                                        </div>
                                    </div>
                                    <div id="bmanim2" class="bmani m2"></div>
                                    <div class="p_text">En definitiva, conseguir que nuestra sociedad tenga acceso a sus
                                        necesidades de una forma eficaz, extraordinariamente rápida y realmente sostenible
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aaa-s-inner>
                </aaa-s>
                <aaa-s>
                    <aaa-s-inner>
                        <div id="details_home" class="incenter grid_specs">
                            <div class="v_space"></div>
                            <div class="fullcol trackingcode_wr">
                                <img src="{{ asset('assets/img/seguimiento.svg') }}">
                                <div class="resp_title title">Introduce tu código aquí para hacer el seguimiento</div>
                                <input type="text" name="trackingcode" id="trackingcode" placeholder="Introduce tu código">
                                <div class="tracking_btn">Comprobar</div>
                            </div>
                            <div class="bicol">
                                <div class="left">
                                    <div class="title">Hazte Hubber</div>
                                    <div class="desc">Conviértete en un microalmacén y rentabiliza ese espacio de casa o
                                        local que nunca utilizas.</div>
                                    <a href="{{ route('hazte.hubber') }}" class="solid_btn">Me interesa</a>
                                </div>
                                <div class="right">
                                    <div class="title">Trabaja con nosotros</div>
                                    <div class="desc">Si te gusta nuestro proyecto y estas interesado en trabajar con
                                        nosotros puedes ver todas nuestras ofertas aquí.</div>
                                    <a href="#" class="solid_btn">Ver ofertas de trabajo</a>
                                </div>
                            </div>
                            <div class="v_space double"></div>
                        </div>
                    </aaa-s-inner>
                </aaa-s>
                <aaa-s>
                    <aaa-s-inner>
                        <div class="incenter grid_details">
                            <a href="{{ route('hazte.hubber') }}" class="col left">
                                <div class="image"><img src="{{ asset('assets/img/ani/detail_icon_1.svg') }}"></div>
                                <div class="title">Rentabiliza tu <br>espacio sin uso.</div>
                                <div class="desc">Conviértete en un microalmacén, rentabiliza tu espacio y obtén beneficios
                                    de hasta 2.000€ a mes.</div>
                                <div class="detail_btn">HAZTE HUBBER</div>
                            </a>
                            <a href="{{ route('agencia.transporte') }}" class="col center">
                                <div class="image"><img src="{{ asset('assets/img/ani/detail_icon_2.svg') }}"></div>
                                <div class="title">Lo que pasa por el barrio <br>se queda en el barrio.</div>
                                <div class="desc">Nunca des por perdida una entrega fallida. Garantiza tu efectividad de
                                    entrega en el mismo día.</div>
                                <div class="detail_btn">AGENCIA TRANSPORTE</div>
                            </a>
                            <a href="{{ route('comercio.online') }}" class="col right">
                                <div class="image"><img src="{{ asset('assets/img/ani/detail_icon_3.svg') }}"></div>
                                <div class="title">A un paso <br>de tus clientes.</div>
                                <div class="desc">Nunca has estado tan cerca de tus clientes. Consigue la entrega más
                                    rápida, eficaz y ecológica del mercado.</div>
                                <div class="detail_btn">COMERCIO ONLINE</div>
                            </a>
                            <div class="v_space double"></div>
                        </div>
                    </aaa-s-inner>
                </aaa-s>
                <aaa-s>
                    <aaa-s-inner>
                        <div id="founder_words" class="incenter ceo_block">
                            <div class="image"><img src="{{ asset('assets/img/ceo.jpg') }}"></div>
                            <div class="col">
                                <div class="title">Tenemos algo <br>que decir</div>
                                <div class="desc">
                                    Es nuestro deseo y nuestra misión, ofercer al sector logístico en general y a la
                                    sociedad en particular, una comunidad de espacios de conveniencia y proximidad
                                    alternativos, en el centro de nuestras ciudades, donde retailers y consumidores
                                    permanezcan conectados con un único propósito: que la distancia entre lo físico y lo
                                    digital simplemente desaparezca.
                                    <br><br>
                                    Miguel Pelegrín<br>
                                    Fundador y CEO Ding Done.
                                </div>
                            </div>
                            <div class="v_space"></div>
                        </div>
                    </aaa-s-inner>
                </aaa-s>
                <aaa-s>
                    <aaa-s-inner>





                    @endsection
