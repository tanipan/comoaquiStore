@extends('layouts.web')

@section('content')

    @php
    function isMobile2()
    {
        return preg_match('/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|mobile|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i', $_SERVER['HTTP_USER_AGENT']);
    }
    @endphp


    <title>Ding Done - Política de cookies</title>
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
                            <div class="recotitle">Política de cookies</div>
                            <div class="v_space"></div>
                            <div class="basic_text">
                                En cumplimiento con lo dispuesto en el artículo 22.2 de la Ley 34/2002, de 11 de julio, de Servicios de la Sociedad de la Información y de Comercio Electrónico, esta página web le informa, en esta sección, sobre la política de recogida y tratamiento de cookies.
                                <br><br>
                                <h2>¿Qué son las cookies?</h2>
                                Una cookie es un fichero que se descarga en su ordenador al acceder a determinadas páginas web. Las cookies permiten a una página web, entre otras cosas, almacenar y recuperar información sobre los hábitos de navegación de un usuario o de su equipo y, dependiendo de la información que contengan y de la forma en que utilice su equipo, pueden utilizarse para reconocer al usuario.
                                <br><br>
                                <h2>¿Qué tipos de cookies utiliza esta página web?</h2>
                                <br><b>Cookies de análisis</b> - Son aquéllas que bien tratadas por nosotros o por terceros, nos permiten cuantificar el número de usuarios y así realizar la medición y análisis estadístico de la utilización que hacen los usuarios del servicio ofertado. Para ello se analiza su navegación en nuestra página web con el fin de mejorar la oferta de productos o servicios que le ofrecemos.
                                <br><b>Cookies publicitarias</b> - Son aquéllas que, bien tratadas por nosotros o por terceros, nos permiten gestionar de la forma más eficaz posible la oferta de los espacios publicitarios que hay en la página web, adecuando el contenido del anuncio al contenido del servicio solicitado o al uso que realice de nuestra página web. Para ello podemos analizar sus hábitos de navegación en Internet y podemos mostrarle publicidad relacionada con su perfil de navegación.
                                <br><br>
                                <h2>Cómo desactivar las Cookies</h2>
                                Puede usted permitir, bloquear o eliminar las cookies instaladas en su equipo mediante la configuración de las opciones del navegador instalado en su ordenador.
                                <br><br>
                                A continuación puede acceder a la configuración de los navegadores webs más frecuentes para aceptar, instalar o desactivar las cookies:
                                <br><br>
                                <a class="solid_btn" href="http://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-que-los-sitios-we">Firefox</a> · 
                                <a class="solid_btn" href="http://support.apple.com/kb/HT1677?viewlocale=es_ES">Safari</a> · 
                                <a class="solid_btn" href="https://support.google.com/chrome/answer/95647?hl=es">Google Chrome</a>
                            </div>
                            <div class="v_space double"></div>
                        </div>
                    </aaa-s-inner>
                </aaa-s>
                <aaa-s>
                    <aaa-s-inner>





                    @endsection
