@extends('layouts.web')

@section('content')

    @php
    function isMobile2()
    {
        return preg_match('/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|mobile|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i', $_SERVER['HTTP_USER_AGENT']);
    }
    @endphp


    <title>Ding Done - Agencia de transporte</title>
    </head>

    <body>

        <div id="view_agencia"></div>

        @component('components/topbar')
        @endcomponent

        <div id="ag_orange_wr">
            <div id="bmanimoney_1" class="bmani money_1"></div>
            <div class="info_text_wr">
                <div class="title recotitle">Elimina <br>costes innecesarios.</div>
                <div class="subtitle">Olvídate de llevar de vuelta a tus instalaciones esos paquetes que tus repartidores no han podido entregar, y de paso, ¡haz un favor al medio ambiente!</div>
            </div>
            <div id="bmanimoney_2" class="bmani money_2"></div>
        </div>
    
        <div id="ag_icons_wr">
            <div class="ag_icon_base"></div>
            <div class="ag_icon_2 ag_icon post"></div>
            <div class="ag_icon_3 ag_icon post"></div>
            <div class="ag_icon_4 ag_icon post"></div>
            <div class="ag_icon_5 ag_icon post"></div>
            <div class="ag_icon_6 ag_icon post"></div>
        </div>
    
        <aaa-s-wr>
            <aaa-s-in>
                <aaa-s>
                    <aaa-s-inner>
                        <div class="ag_header">
                            <div class="incenter">
                                <div class="text_block">
                                    <div class="title recotitle">Lo que pasa por el barrio se queda en el barrio.</div>
                                    <div class="desc">Nunca des por perdida una entrega fallida. Garantiza tus entregas con la opción más rápida, eficaz y ecológica del mercado.</div>
                                </div>
                            </div>
                        </div>
                    </aaa-s-inner>
                </aaa-s>
                <aaa-s>
                    <aaa-s-inner>
                        <div id="ag_orange"></div>
                    </aaa-s-inner>
                </aaa-s>
                <aaa-s>
                    <aaa-s-inner>
                        <div id="ag_fullimg"></div>
                    </aaa-s-inner>
                </aaa-s>
                <aaa-s>
                    <aaa-s-inner>
                        <div id="ag_icons" class="incenter">
                            <div class="right_col">
                                <div class="recotitle fadani">Anticípate a los períodos de mayor tensión logística.</div>
                                <div class="subtitle fadani">En períodos de mayor tensión logística, tales como Black Friday o Navidad, reparte tu paquetería por código postal en nuestros hubs y asegura todas tus entregas con puntualidad.</div>
                                <div class="specs_items">
                                    <div class="spec_item fadani">
                                        <div class="title">Optimiza</div>
                                        <div class="desc">La jornada laboral de tus trabajadores.</div>
                                    </div>
                                    <div class="spec_item displaced fadani">
                                        <div class="title">Ahorra</div>
                                        <div class="desc">Tiempo y combustible.</div>
                                    </div>
                                    <div class="spec_item fadani">
                                        <div class="title">Garantiza</div>
                                        <div class="desc">Una efectividad en la entrega de un 99%.</div>
                                    </div>
                                    <div class="spec_item displaced fadani">
                                        <div class="title">Agiliza</div>
                                        <div class="desc">Tiempos de entrega con un servicio ultrarrápido.</div>
                                    </div>
                                    <div class="spec_item fadani">
                                        <div class="title">Colabora</div>
                                        <div class="desc">Con el medio ambiente.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aaa-s-inner>
                </aaa-s>
                <aaa-s>
                    <aaa-s-inner>
                        <div class="incenter ag_bottom">
                            <div id="ag_big_ill"></div>
                            <div class="ag_info_bottom">
                                <div class="recotitle">Hablemos</div>
                                <div class="desc">Cuéntanos cómo podemos ayudarte para que tus artículos lleguen a tus clientes de la manera más rápida, eficaz y ecológica del mercado.</div>
                                <a href="mailto:info@dingdonehubs.com" class="solid_btn">Habla con nosotros</a>
                            </div>
                        </div>
                    </aaa-s-inner>
                </aaa-s>
                <aaa-s>
                    <aaa-s-inner>





                    @endsection
