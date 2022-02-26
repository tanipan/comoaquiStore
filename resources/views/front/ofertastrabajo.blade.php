@extends('layouts.web')

@section('content')

    @php
    function isMobile2()
    {
        return preg_match('/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|mobile|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i', $_SERVER['HTTP_USER_AGENT']);
    }
    @endphp


    <title>Ding Done - Ofertas de trabajo</title>
    </head>

    <body>

        @component('components/topbar')
        @endcomponent

        <aaa-s-wr>
            <aaa-s-in>
                <aaa-s>
                    <aaa-s-inner>
                        <div class="incenter">
                            <div class="v_space double"></div>
                            <div class="recotitle">Ofertas de trabajo</div>
                            <div class="v_space"></div>
                            <div class="basic_text">Ups! <br>Parece que por el momento no tenemos ninguna oferta. <br>Estamos en contacto.<br><br>RRHH DingDone.</div>
                            <div class="v_space double"></div>
                        </div>
                    </aaa-s-inner>
                </aaa-s>
                <aaa-s>
                    <aaa-s-inner>





                    @endsection
