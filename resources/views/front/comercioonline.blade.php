@extends('layouts.web')

@section('content')

    @php
    function isMobile2()
    {
        return preg_match('/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|mobile|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i', $_SERVER['HTTP_USER_AGENT']);
    }
    @endphp


    <title>Ding Done - Comercio online</title>
    </head>

    <body>

        <div id="view_comercio"></div>

        @component('components/topbar')
        @endcomponent

        
        <div id="com_green_wr">
            <div class="bg"></div>
            <div class="green_info">
                <div class="recotitle">Anticípate a los deseos de tus clientes.</div>
                <div id="green_desc_1" index-data="1" class="desc green_desc"><div class="num">1</div>Elige con nosotros qué áreas metropolitanas son las de mayor rotación de venta de tus best sellers.</div>
                <div id="green_desc_2" index-data="2" class="desc green_desc pre"><div class="num">2</div>Ding Done almacenará esos artículos de mayor rotación de venta en los hubs de las áreas urbanas seleccionadas por ti. </div>
                <div id="green_desc_3" index-data="3" class="desc green_desc pre"><div class="num">3</div>Cuando tus clientes hagan un pedido de algún best seller, podremos entregarlos en un abrir y clicar de ojos.</div>
            </div>
            <div class="sun_wr"><div class="sun"></div></div>
        </div>
    
        <div id="campaigns_wr">
            <div class="left">
                <div class="image"><div id="bmani_campaigns"></div></div>
            </div>
            <div class="right">
                <div class="campaigns_info">
                    <div class="recotitle">Diseña con nosotros tus propias campañas comerciales.</div>
                    <div class="desc">Ahora el centro de la ciudades es tuyo, selecciona dónde  y cuándo quieres vender tus artículos en promoción y entregaremos todos tus pedidos en un “Ding”.</div>
                </div>
            </div>
        </div>
    
        <div id="com_fullimg_relax_wr">
            <div class="relax_slide_info global">
                <div class="pre"></div>
                <div class="recotitle">Relájate, nosotros nos ocupamos.</div>
                <div class="desc">En períodos de alta demanda podrás utilizar nuestra gran red de hubs como más te convenga:</div>
            </div>
            <div id="relax_slide_1" class="relax_slide">
                <div class="relax_slide_info">
                    <div class="pre">1. Almacenaje y custodia.</div>
                    <div class="recotitle">Protegemos tu mercancía.</div>
                    <div class="desc">Seguro de transporte de tus artículos frente a la posibilidad de extravío, rotura o incluso robo. Toda tu paquetería de reparto está asegurada desde el mismo momento que llega a nuestras instalaciones.</div>
                </div>
            </div>
            <div id="relax_slide_2" class="relax_slide">
                <div class="relax_slide_info">
                    <div class="pre">2. Entrega de los pedidos.</div>
                    <div class="recotitle">Colabora con el medioambiente.</div>
                    <div class="desc">Nunca nadie ha estado tan cerca de tus clientes, y es por ello, que todas nuestras entregas se realizan caminando, evitando así emitir 0’5kg. de Co2 a nuestra atmósfera.</div>
                </div>
            </div>
            <div id="relax_slide_3" class="relax_slide">
                <div class="relax_slide_info">
                    <div class="pre">3. Click & Collect.</div>
                    <div class="recotitle">Anticípate a los deseos de tus clientes.</div>
                    <div class="desc">Posiciona tus artículos en nuestros hubs, y da un servicio impecable a tus clientes en días complicados como Black Friday o fiestas navideñas.<br><br>Cumple con los deseos de tus clientes utilizando nuestros hubs para hacer click & collect o hacer entregas ultrarrápidas.</div>
                </div>
            </div>
        </div>
    
        <aaa-s-wr>
            <aaa-s-in>
                <aaa-s>
                    <aaa-s-inner>
                        <div class="com_header">
                            <div class="incenter">
                                <div class="text_block">
                                    <div class="title recotitle">A un paso <br>de tus clientes.</div>
                                    <div class="desc">Nunca has estado tan cerca de tus clientes. <br>Consigue la entrega más rápida, eficaz y ecológica del mercado.</div>
                                </div>
                            </div>
                        </div>
                    </aaa-s-inner>
                </aaa-s>
                <aaa-s>
                    <aaa-s-inner>
                        <div id="com_green">
                            <div class="activate_green" green-data="1"></div>
                            <div class="activate_green" green-data="2"></div>
                            <div class="activate_green" green-data="3"></div>
                        </div>
                    </aaa-s-inner>
                </aaa-s>
                <aaa-s>
                    <aaa-s-inner>
                        <div id="com_campaigns"></div>
                    </aaa-s-inner>
                </aaa-s>
                <aaa-s>
                    <aaa-s-inner>
                        <div id="com_fullimg">
                            <div class="recotitle">El control de tus artículos y pedidos en un solo clic.</div>
                            <div class="subinfo">
                                <div class="incenter">Tendrás acceso a nuestra plataforma, desde la que podrás tomar el control de tus pedidos y tener acceso en tiempo real a la ubicación de tus artículos en custodia, pudiendo mover los mismos de un área urbana a otra con un solo clic.</div>
                            </div>
                        </div>
                    </aaa-s-inner>
                </aaa-s>
                <aaa-s>
                    <aaa-s-inner>
                        <div id="com_app">
                            <div class="app_sentence">Esta es una vista previa del futuro diseño de nuestra aplicación. ¡No podiamos esperar para mostrártelo!</div>
                            <div class="incenter">
                                <div class="recotitle">Entrega tus pedidos en tiempo record.</div>
                                <div class="app_grid">
                                    <div class="left">
                                        <div id="app_row_1" class="app_row">
                                            <div class="content">
                                                <div class="num">1</div>
                                                <div class="text">Adelántate a las necesidades de tus clientes en días señalados.</div>
                                                <div class="arr"></div>
                                            </div>
                                        </div>
                                        <div id="app_row_2" class="app_row">
                                            <div class="content">
                                                <div class="num">2</div>
                                                <div class="text">Planifica con nosotros cuáles son las ubicaciones ideales de nuestros hubs, para colocar tus artículos de mayor rotación de venta.</div>
                                            </div>
                                        </div>
                                        <div id="app_row_3" class="app_row">
                                            <div class="content">
                                                <div class="num">3</div>
                                                <div class="text">Haz llegar a tus clientes sus pedidos, de una manera incríblemente rápida, sumamente eficaz, y más que responsable con el medioambiente.</div>
                                                <div class="arr"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right"></div>
                                </div>
                            </div>
                        </div>
                    </aaa-s-inner>
                </aaa-s>
                <aaa-s>
                    <aaa-s-inner>
                        <div id="com_fullimg_relax"></div>
                    </aaa-s-inner>
                </aaa-s>
                <aaa-s>
                    <aaa-s-inner>
                        <div class="com_form">
                            <div class="incenter">
                                <div class="bottomband">
                                    <div class="left">
                                        <div class="form_title">Estás a un Ding de tenerlo Done.</div>
                                        <div class="form_subtitle">Para más información rellena el siguiente formulario, y nos pondremos en contacto contigo.</div>
                                    </div>
                                    <div class="right">
                                        <input type="text" name="name" id="form_name" class="half" placeholder="Nombre *">
                                        <input type="text" name="surname" id="form_surname" class="half" placeholder="Apellidos *">
                                        <input type="email" name="email" id="form_email" class="half" placeholder="Email *">
                                        <input type="tel" name="phone" id="form_phone" class="half" placeholder="Teléfono *">
                                        <input type="text" name="web" id="form_web" class="half" placeholder="URL de tu negocio (Opcional)">
                                        <input type="text" name="address" id="form_address" class="half" placeholder="Dirección exacta de tu tienda física *">
                                        <textarea name="message" id="form_message" rows="6" class="full" placeholder="Mensaje *"></textarea>
                                        <div class="form_legal_wr full">
                                            <div class="form_legal_text">Ding Done tratará sus datos personales para dar respuesta a las solicitudes planteadas. Puede ejercer sus derechos de acceso, rectificación, supresión y portabilidad de sus datos, de limitación y oposición a su tratamiento, así como a no ser objeto de decisiones basadas únicamente en el tratamiento automatizado de sus datos, cuando procedan, en la dirección de correo electrónico info@dingdonehubs.com. Le recomendamos que lea la política de privacidad antes de proporcionarnos sus datos personales.</div>
                                            <input type="checkbox" name="aceptation" id="form_aceptation"> He leído y acepto las condiciones de la <a target="_blank" href="{{ route('privacidad') }}">política de privacidad</a>
                                        </div>
                                        <div class="form_error">Debes rellenar todos los campos marcados con *</div>
                                        <div class="form_success">¡Enviado! Nos pondremos en contacto contigo lo antes posible.</div>
                                        <input id="sendmail_btn_commerce" type="submit" class="solid_btn" value="Enviar formulario">
                                        {{ csrf_field() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aaa-s-inner>
                </aaa-s>
                <aaa-s>
                    <aaa-s-inner>




                    @endsection
