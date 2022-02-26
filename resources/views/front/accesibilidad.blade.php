@extends('layouts.web')

@section('content')

    @php
    function isMobile2()
    {
        return preg_match('/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|mobile|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i', $_SERVER['HTTP_USER_AGENT']);
    }
    @endphp


    <title>Ding Done - Accesibilidad</title>
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
                            <div class="recotitle">Accesibilidad</div>
                            <div class="v_space"></div>
                            <div class="basic_text">Este documento se encuentra en fase de desarrollo ya que el proyecto aún no ha sido lanzado al mercado.</div>
                            <div class="v_space double"></div>
                        </div>
                    </aaa-s-inner>
                </aaa-s>
                <aaa-s>
                    <aaa-s-inner>





                    @endsection
