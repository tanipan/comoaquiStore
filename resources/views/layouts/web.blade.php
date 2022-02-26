<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
    <link rel="icon" href="{{ asset('assets/img/favicon/favicon_32.png') }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('assets/img/favicon/favicon_192.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ asset('assets/img/favicon/favicon_180.png') }}" />
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicon/favicon_270.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script>
        const rooturl = "{{ url('/') }}";
    </script>

    @php
        function isMobile()
        {
            return preg_match('/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|mobile|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i', $_SERVER['HTTP_USER_AGENT']);
        }
    @endphp

    @if (!isMobile())
        <script>
            const notmob = true;
        </script>
    @else
        <script>
            const notmob = false;
        </script>
    @endif

    @if (isMobile())
        <style>
            aaa-s-wr {
                position: static;
                overflow-x: hidden;
                overflow-y: auto;
                height: calc(100vh - var(--sub));
                scroll-behavior: smooth;
            }

            aaa-s-inner {
                transform: none !important;
                -webkit-transform: none !important;
                -moz-transform: none !important;
                -ms-transform: none !important;
                -o-transform: none !important;
            }

        </style>
    @endif

    <div id="transition"></div>

    @if ((isset($_COOKIE['cookiepolicy']) ? $_COOKIE['cookiepolicy'] == 'ok' : false) == false)
        <div class="cookies_notification active">
            <div class="left">
                <div>
                    Usamos cookies para asegurarnos de brindarle la mejor
                    experiencia en nuestro sitio web. Si continúa
                    utilizando este sitio, asumiremos que está satisfecho con él. <a target="_blank"
                        href="">LEER MÁS</a></div>
            </div>
            <div class=" right">
                <div class="solid_btn accept_cookies">Aceptar</div>
            </div>
        </div>
    @endif



    <div class="popup_wr">
        <div class="close_btn"></div>
        <div class="area">Hazte hubber</div>
        <div class="recotitle">Rentabiliza tu espacio sin uso</div>
        <div class="desc">Conviértete en un microalmacén y rentabiliza ese espacio de casa o local que nunca
            utilizas.
        </div>
        <a href="" class="solid_btn">Más
            información</a>
    </div>

    <div id="rh"></div>
    <main id="app">
        <div id="aaa-block"></div>


        @yield('content')


        <footer>
            <div class="incenter">
                <div class="footer_top">
                    <div class="left">
                        <div class="logo_footer"></div>
                        <div class="footer_desc">La mayor red de microalmacenes urbanos</div>
                    </div>

                    @if (!isMobile())
                        <div class="right">
                            <a href="#" class="social_btn linkedin">
                                <div class="text">Lkdin</div>
                            </a>
                            <a href="#" class="social_btn insta">
                                <div class="text">Insta</div>
                            </a>
                            <a href="#" class="social_btn facebook">
                                <div class="text">Fbook</div>
                            </a>
                        </div>
                    @endif
                </div>
                <div class="footer_bottom">
                    <div class="col">
                        <div class="title">DingDone</div>
                        <ul>
                            <li><a href="https://dingdonehubs.com/">Nuestra misión</a></li>                            
                            <li><a href="https://dingdonehubs.com/ofertas-de-trabajo">Trabaja con nosotros</a></li>
                            <li><a href="mailto: hola@dingdonehubs.es">Contacto</a></li>
                            <li><a href="https://dingdonehubs.com/?founder">Tenemos algo que decir</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <div class="title">Hazte hubber</div>
                        <ul>
                            <li><a href="https://dingdonehubs.com/hazte-hubber">Información</a>
                            </li>
                            <li><a href="https://dingdonehubs.com/hazte-hubber?form">Únete</a>
                            </li>
                        </ul>
                        @if (!isMobile())
                            <div class="fbb">© 2021 DingDone Inc.</div>
                        @endif
                    </div>
                    <div class="col">
                        <div class="title">Operador logístico</div>
                        <ul>
                            <li><a href="https://dingdonehubs.com/agencia-de-transporte">Información</a>
                            </li>
                            <li><a href="https://dingdonehubs.com/agencia-de-transporte">Habla con nosotros</a></li>
                        </ul>

                        @if (!isMobile())
                            <div class="fbb">
                                <a href="">Privacidad</a>
                                <a href="">Cookies</a>
                                <a href="">Aviso Legal</a>
                            </div>
                        @endif

                    </div>
                    <div class="col">
                        <div class="title">Comercio online</div>
                        <ul>
                            <li><a href="https://dingdonehubs.com/comercio-online">Información</a>
                            </li>
                            <li><a href="https://dingdonehubs.com/comercio-online">Habla con un experto</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <div class="title">Login | Register</div>
                    </div>
                    @if (isMobile())
                        <div class="col">
                            <a href="#" class="social_btn linkedin">
                                <div class="text">Lkdin</div>
                            </a>
                            <a href="#" class="social_btn insta">
                                <div class="text">Insta</div>
                            </a>
                            <a href="#" class="social_btn facebook">
                                <div class="text">Fbook</div>
                            </a>
                        </div>
                        <div class="col">
                            <div class="fbb">© 2021 DingDone Inc.</div>
                            <div class="fbb">
                                <a href="">Privacidad</a>
                                <a href="">Cookies</a>
                                <a href="">Aviso Legal</a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
        <script src="{{ asset('assets/js/bm.js') }}">
        </script>
        <script src="{{ asset('assets/js/scripts.js') }}">
        </script>

        </aaa-s-inner>
        </aaa-s>
        </aaa-s-in>
        </aaa-s-wr>
        </body>

</html>
