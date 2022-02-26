@extends('layouts.web')

@section('content')

    @php
    function isMobile2()
    {
        return preg_match('/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|mobile|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i', $_SERVER['HTTP_USER_AGENT']);
    }
    @endphp


    <title>Ding Done - Privacidad</title>
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
                            <div class="recotitle">Política de privacidad</div>
                            <div class="v_space"></div>
                            <div class="basic_text">
                            <p>DING DONE S.L. respeta tu privacidad y se compromete a proteger tus datos personales. Esta política de privacidad te informará sobre cómo protegemos tus datos personales cuando visitas nuestra web (desde cualquier sitio) y sobre los derechos de privacidad y cómo se encuentran amparados legalmente.</p>
                            <p>En esta Política de Privacidad, explicamos cómo se obtiene y se utiliza tu información personal. Somos DINGDONE S.L. y ejercemos los oportunos controles de información de acuerdo con lo dispuesto en la Directiva Europea de Protección de Datos de la UE (UE 95/46/EC) y su normativa de desarrollo establecida en el Reglamento General de Protección de Datos (GDPR- EU General Data Protection Regulation).</p>
                            <p>A lo largo del texto encontrarás cómo contactar con nosotros si tienes alguna pregunta sobre la privacidad y protección de datos.</p>
                            <p>Debemos tener una base legal para procesar tus datos personales y esta política explica cómo actuamos legalmente respecto a cada uno de los propósitos por los que se mantiene y se utiliza tu información. De forma general, estamos habilitados para procesar tu información personal donde sea necesario en conexión con un contrato entre nosotros (como por ejemplo un contrato para suministrar nuestros productos o servicios), para cumplir con nuestras obligaciones legales o si tenemos un interés legítimo, prevaleciendo los intereses del cliente.</p>
                            <p>Por favor, ten en cuenta que nuestros links de acceso desde nuestro website podrían llevarte a acceder a websites externos que no se encuentran cubiertos por esta Política. Te recomendamos que leas las Políticas de Privacidad de terceros antes de remitir información personal. DINGDONE, S.L. no será responsable del contenido, función o captación de información por parte de websites externos.</p>
                            <p><br></p>
                            <h2>¿Cuál es la información que obtenemos y cómo lo hacemos?</h2>
                            <p>No estás obligado, por ley o por contrato con nosotros, a facilitar información personal a través de nuestro website. Únicamente, se requerirá cuando sea estrictamente necesario con el fin de suministrar un servicio solicitado por tu parte.</p>
                            <p><br></p>
                            <h2>¿Qué información nos facilitas?</h2>
                            
                            <p><br></p>
                            <p><b>Se puede solicitar información, cuando se den las siguientes circunstancias, a continuación se detallan:</b></p>
                            <p>• Cuando se solicitan nuestros productos o servicios.</p>
                            <p>• Utilizando y navegando en nuestro website.</p>
                            <p>• Llamadas telefónicas, correspondencia a través de correo electrónico o publicaciones.</p>
                            <p>• Solicitando o presentando candidaturas para puestos de trabajo.</p>
                            <p>Esta información incluiría los siguientes datos:</p>
                            <p>• Identificación, como puede ser tu nombre completo y tu puesto de trabajo.</p>
                            <p>• Dirección postal, dirección de correo electrónico y no de teléfono.</p>
                            <p>• Otra información relevante para utilizar nuestro website y nuestros servicios, como preferencias, estudios, contestaciones y opiniones a nivel de Marketing.</p>
                            <p>• Información sobre tu envío, incluido el destinatario.</p>
                            <p>• Información fiscal (para envíos internacionales).</p>
                            <p>• Información de pagos (esta información se encuentra protegida y procesada por nuestro proveedor de medios de pago).</p>
                            <p>• Con relación a las solicitudes de empleo, tu CV incluyendo datos sobre tu educación y sobre tu trayectoria profesional, así como cualquier otra información presente en el CV.</p>
                            
                            <p><br></p>
                            <p><b>Información que obtenemos de ti a través de nuestro website</b></p>
                            <p>Obtenemos información a través de cookies y tecnologías similares que nos ayudan a identificarte y diferenciarte de otros usuarios de nuestro website. Estos recursos optimizarán tu experiencia online, no teniendo que cumplimentar de nuevo información que ya ha sido solicitada y nos permitirá realizar mejoras en nuestro website. Para mayor información sobre este asunto así como para el uso de cookies, por favor, consulta el apartado correspondiente a la política de cookies que encontrarás al final de este documento. Cuando visites nuestro website, podríamos obtener la siguiente información:</p>
                            <p>• Información sobre el Agente Usuario (dispositivo electrónico) suministrado por tu navegador de internet.</p>
                            <p>• Si accedes a través de un tercero, esta información quedará registrada.</p>
                            <p>• Si asocias tu cuenta a un tercero, como puede ser un Marketplace para importar artículos para un envío, se registrarán los datos necesarios para facilitar el acceso.</p>
                            <p>• Identificación de dispositivos (cookie o dirección IP) y localización general para la prevención de fraudes.</p>
                            <p>• Datos sobre las visitas a nuestro website y fuentes a las que se accede, incluyendo, pero no limitando a websites, links, información sobre tráfico, localización, weblogs y otros datos de comunicación.</p>
                            <p>• Cuando los pedidos se originen a través de fuentes de publicidad, se registrará la fuente de cada pedido. El objeto es analizar la efectividad de esta publicidad; esta información no será utilizada para estudiar el perfil del cliente.</p>
                            <p>• Nuestra website no está dirigida a menores y conscientemente no se recabarán datos de ellos.</p>
                            
                            <p><br></p>
                            <p><b>Información que obtenemos de ti a través de otras fuentes</b></p>
                            <p>Si presentas tu candidatura para un puesto de trabajo, se podrían solicitar antecedentes penales a través de una agencia homologada. También se podrían visualizar los contenidos que hayas compartido públicamente, incluyendo las redes sociales.</p>
                            <p>Esta lista no es limitativa y a instancias superiores, se podría obtener información adicional para satisfacer los propósitos recogidos en esta política.</p>
                            
                            <p><br></p>
                            <p><b>Información que recibimos sobre ti de otras fuentes</b></p>
                            <p>Es posible que hayas permitido que otros websites, servicios o terceros, compartan sus datos con nosotros. Incluyendo información que recibimos sobre ti, si has utilizado otros websites con los que nosotros operamos u otros servicios que ofrecemos.</p>
                            <p>También, incluye información facilitada por terceros con los que trabajamos y a los que suministramos nuestros productos y servicios, como puede ser un Marketplace, plataformas Ecommerce, proveedores de medios de pago, empresas de transporte, empresas de soporte tecnológico y empresas de publicidad.</p>
                            
                            <p><br></p>
                            <h2>¿Cómo utilizamos tus datos personales?</h2>
                            
                            <p><br></p>
                            <p><b>Bases Legales para el uso de tus datos personales</b></p>
                            <p>Garantizamos que el uso que se realiza de tus datos personales se encuentra cubierto por la GDPR (Reglamento General de Protección de Datos)</p>
                            <p>1.- Desarrollo del contrato que se establece contigo.</p>
                            <p>2.- Cumplimiento de las obligaciones legales.</p>
                            <p>3.- Logro de nuestros intereses legítimos o de terceros. Tus intereses prevalecerán sobre los nuestros.</p>
                            
                            <p><br></p>
                            <h2>¿Cómo se utilizan tus datos en base a la legalidad?</h2>
                            
                            <p><br></p>
                            <p><b>A continuación, se establecen los diferentes usos de tus datos personales que podrían darse dentro de cada uno de los marcos legales:</b></p>
                            
                            <p><br></p>
                            <h3>1.- Desarrollo del contrato que se establece contigo.</h3>
                            <p><br></p>
                            <p>a. Verificar tu identidad.</p>
                            <p>Se podrían utilizar tus datos si fuera absolutamente necesario con el objeto de cumplir con nuestras obligaciones legales o para detectar y prevenir el fraude, blanqueo de capitales u otros delitos.</p>
                            <p>b. Suministrar nuestros productos y servicios (Supervisión adicional)</p>
                            <p>Se requerirá el uso de tus datos personales para el cumplimiento de los contratos establecidos, como por ejemplo en el caso en el que seas dado de alta como cliente. Siempre se utilizarán tus datos dentro de este contexto.</p>
                            <p>• Suministrarte información acerca del contrato con nosotros.</p>
                            <p>• Suministrarte información sobre nuestros productos y servicios relativos a tus requerimientos personales (por ejemplo, necesidades de transporte de mercancía y servicios asociados, tales como un seguro de mercancías).</p>
                            <p>• Verificar tu identidad</p>
                            <p>• Atención de reclamaciones que, como consecuencia, requieran reparaciones o mejoras de nuestros productos y servicios.</p>
                            <p>• Contactar contigo; para informarte sobre los cambios que puedan realizarse sobre nuestros productos y servicios.</p>
                            <p>• Administrar nuestro website, incluyendo resolución de problemas, diagnóstico de situaciones, análisis estadísticos, búsquedas dirigidas y pruebas con el fin de que nuestro site sea seguro.</p>
                            <p><br></p>
                            <p>Si te registras en una cuenta DINGDONE, podríamos utilizar el teléfono que nos has facilitado para suministrarte información específica que entendemos puede ser útil para el uso de tu cuenta. Destacamos que las llamadas realizadas a/desde DINGDONE podrían ser grabadas y almacenadas utilizando tecnología de un tercero con el fin de monitorización y formación. Una vez que se hayan alcanzado estos fines, las llamadas serán eliminadas. Si presentas tu candidatura para un puesto de trabajo o solicitas información, será necesario que utilicemos tus datos personales como parte del proceso de selección, con el objetivo de establecer tu idoneidad para el puesto solicitado.</p>
                            
                            <p><br></p>
                            <h3>2.- Uso de tus datos personales para cumplir con nuestras obligaciones legales</h3>
                            <p><br></p>
                            <p>• Cumplir con nuestros Términos y Condiciones y otras Políticas.</p>
                            <p>• Gestión y Planificación Logística, incluyendo Contabilidad y Auditoría.</p>
                            <p>• Gestión de disputas legales en las que seas parte.</p>
                            <p>• Detección y Prevención de Fraude, blanqueo de capitales y otros delitos.</p>
                            <p>• Protección del usuario y de otros de posibles daños.</p>
                            <p>Se podrían utilizar tus datos personales cuando fuera estrictamente necesario, con el fin de proteger tus intereses o los de otros. Incluyendo delitos, tales como suplantación de identidad, piratería o fraude.</p>
                            
                            <p><br></p>
                            <h3>3.- Uso de tus datos personales como consecución de nuestros intereses legítimos</h3>
                            <p><br></p>
                            <p>a. Contactar contigo para promocionar productos o servicios que podrían ser de tu interés.</p>
                            <p>Se podrían utilizar tus datos personales para identificarte e informarte sobre productos y servicios que podrían ser de tu interés.</p>
                            <p>La solicitud para recibir emails promocionales o llamadas de DINGDONE es voluntaria, pudiendo solicitar ambos, ninguno, uno o el otro. Tu solicitud no afectará al resto de los productos y servicios que hayas contratado con nosotros o que se vayan a contratar en un futuro.</p>
                            <p>Puedes actualizar tus preferencias en cualquier momento, en el área de configuración de tu cuenta. Toda la información relativa a la gestión de preferencias se encuentra recogida en nuestro Centro de Ayuda.</p>
                            <p><br></p>
                            <p>b. Contactar contigo para comunicarte cambios importantes que puedan afectarte o verificar o actualizar determinada información.</p>
                            <p>En algunas ocasiones, podríamos utilizar tus datos personales para contestar a tus solicitudes o para informarte sobre cambios importantes.</p>
                            <p>Únicamente, utilizaremos tus datos personales cuando sea estrictamente necesario:</p>
                            <p>• Interactuar y contestar a las solicitudes que nos hayas enviado o a cualquier publicación dentro de las redes sociales donde nos hayas etiquetado.</p>
                            <p>• Informarte sobre cambios importantes en nuestra empresa o en nuestras políticas.</p>
                            <p>• Verificar o actualizar cualquier información personal importante, como, por ejemplo, tus datos bancarios en el caso de haberse acordado la fórmula de pago direct debit (recibo bancario), o en el caso de que hayas contratado contra-reembolso a la entrega.</p>
                            <p>c. Contestar a las comunicaciones que nos remitas</p>
                            <p>Incluyendo llamadas, correos electrónicos, chats en tiempo real, publicaciones y mensajes a través de redes sociales.</p>
                            <p>d. Para mejorar el funcionamiento de nuestra empresa</p>
                            <p>Con el objetivo de ofrecer los mejores productos, experiencias y servicios, podríamos utilizar tus datos personales, en los siguientes casos:</p>
                            <p>• Comprobar y mejorar los productos y servicios existentes y desarrollar nuevos productos y servicios.</p>
                            <p>• Comprobar y mejorar nuestros sistemas de actuación, procesos y personal, incluida la formación.</p>
                            <p>• Mejorar nuestro site para asegurarnos que los contenidos son presentados de la forma más efectiva para ti y para tu dispositivo electrónico.</p>
                            <p>• Medir y conocer la efectividad de la publicidad que te ofrecemos a ti y a otros, y hacerte llegar publicidad dedicada y relevante.</p>
                            <p>• Estudios de mercado sobre nuestros productos con el objeto de mejorarlos. Se podrían utilizar terceros como procesadores de información, que llevaran a cabo los estudios.</p>
                            
                            <p><br></p>
                            <h2>Modificación de Propósitos</h2>
                            <p>Única y exclusivamente utilizaremos tus datos personales para los propósitos citados, a menos que se considere de forma razonable que sean utilizados por otro motivo que sea compatible con los objetivos originales. Si se requiriese utilizar tus datos personales para propósitos no relacionados, te sería notificado y te serían explicadas las bases legales que permiten la citada modificación.</p>
                            <p>Por favor, ten en cuenta que podríamos procesar tus datos personales sin tu conocimiento o consentimiento, amparados por las reglas arriba descritas, siempre que se encuentren dentro del marco legal.</p>
                            
                            <p><br></p>
                            <h2>¿Con quién compartimos tus datos personales?</h2>
                            <p>¿Cómo compartimos tus datos personales dentro de nuestra empresa?</p>
                            <p>Compartimos los datos que nos has facilitado con nuestro personal de tal forma que podamos suministrarte nuestros productos y servicios.</p>
                            <p>¿Cómo compartimos tus datos personales con terceros?</p>
                            <p>Podríamos compartir tus datos personales con determinados terceros. Por ejemplo:</p>
                            <p>1.- Proveedores de Internet Hosting con los que trabajamos para mantener nuestro website, infraestructuras, servicios y aplicaciones.</p>
                            <p>2.- Transportistas para suministrar servicios de transporte de mercancías. 3.- Sistemas de Gestión de contactos, para el envío de correos electrónicos, mensajería instantánea, mensajes a través de redes sociales y SMS.</p>
                            <p>4.- Proveedores que gestionan las opiniones de los clientes sobre nuestros productos y servicios. Trabajamos con terceros que actúan como procesadores de datos, con el fin de obtener opiniones, valoraciones, comentarios de los clientes que han comprado nuestros servicios a través de uno de nuestros websites.</p>
                            <p>En determinadas y excepcionales circunstancias, tus datos personales podrían ser revelados a terceros, como en los siguientes casos:</p>
                            <p>5.- Requeridos por las Fuerzas y Cuerpos de Seguridad del Estado, en cumplimiento de investigaciones y procesos judiciales.</p>
                            <p>6.- Por Seguridad y protección de nuestros empleados, de nuestra propiedad o de la propiedad pública.</p>
                            <p>7.- Prevención o detección de delitos, incluyendo intercambio de información con otras compañías u organizaciones para los casos de prevención de fraude y reducción de riesgo de crédito.</p>
                            <p>8.- Como parte de una fusión, venta de negocio o activos. Si se diera este caso, la información se compartiría contigo a través del comprador-vendedor interesado.</p>
                            
                            <p><br></p>
                            <h2>¿Cuánto tiempo conservamos tu información personal?</h2>
                            <p>Tu información será conservada por el tiempo necesario y hasta que se alcancen los objetivos para los cuales fue obtenida. En el caso de estar facilitándote un servicio, la información será almacenada hasta que el servicio sea finalizado.</p>
                            <p>Si presentas tu candidatura para un puesto de trabajo o nos remites tu CV, conservaremos tu CV y cualquier publicación disponible en tus redes sociales, por espacio de 12 meses. Si por el contrario, tu candidatura es considerada para un determinado puesto de trabajo, dispondríamos de tu información por un periodo superior.</p>
                            <p>En el resto de los casos, conservaríamos tus datos personales hasta que tu cuenta haya quedado liquidada, las reclamaciones o disputas legales hayan sido resueltas, si existiesen, y no existiera riesgo de actividad fraudulenta. Si se eliminaran tus datos, tu cuenta pasaría a estado inactivo.</p>
                            
                            <p><br></p>
                            <h2>¿Cómo protegemos tus datos personales?</h2>
                            <p>Se tomarán todas las precauciones necesarias para que tus datos personales sean tratados de forma segura de acuerdo con esta política.</p>
                            <p>Nos aseguramos de que toda la información que nos facilitas se transfiere de forma segura a través de nuestro website, pero debemos tener en cuenta que la transmisión de información a través de internet no es totalmente segura. A pesar de que todos nuestros recursos se encuentran dirigidos a proteger tus datos personales, no nos resulta posible garantizar la total seguridad de tu información; por lo tanto, cualquier transmisión que realices será bajo tu responsabilidad. Una vez que hayamos recibido tu información, será tratada bajo los más estrictos procedimientos y protocolos de seguridad para evitar accesos que no se encuentren autorizados.</p>
                            <p>La información se almacenará y se procesará siempre que sea posible dentro de la UE. En caso de que no resultara posible por terceras partes, acuerdan que la información será tratada según el Privacy Shield Framework (Tratado entre EEUU y UE sobre la Protección de Datos o las cláusulas modelo de la UE (Cláusulas contractuales tipo que se usan en los acuerdos entre los proveedores de servicios y sus clientes para garantizar que todos los datos que salgan del Espacio Económico Europeo se transfieren conforme a la Ley de Protección de Datos de la UE).</p>
                            <p>Toda la información que nos facilitas es alojada en servidores de seguridad gestionados por terceros. Por favor, ten en cuenta que eres responsable de la contraseña que te hayamos facilitado o que tú mismo hayas creado para acceder a determinadas áreas de nuestro site. Te solicitamos que no compartas la contraseña con nadie.</p>
                            <p>¿Cómo puedes ayudarnos a conservar de forma segura tus datos personales?</p>
                            <p>Tomaremos todas las medidas razonables para asegurar que todos los datos personales que nos facilitas a través de nuestro website son conservados y gestionados de forma segura. DINGDONE SL cumple con el Protocolo PCI Compliant, (establecido para proteger los datos de los dueños de las tarjetas de crédito durante y después de una transacción financiera). La plataforma utiliza sofisticados dispositivos de seguridad con el fin de proteger tu información personal. Puedes mantener tu información personal segura, no sólo en nuestro website sino cuando facilitas tu información a otros proveedores on line:</p>
                            <p>A continuación, te detallamos algunos consejos para que puedas mejorar la seguridad de tu información personal.</p>
                            <p>1.- Utiliza un sistema operativo moderno y un navegador seguro.</p>
                            <p>2.- Asegúrate que ambos tienen la última actualización de seguridad.</p>
                            <p>3.- Utiliza contraseñas seguras y no las reutilices para acceder a otros websites.</p>
                            <p>4.- No compartas tus contraseñas.</p>
                            <p>5.- Infórmate sobre cómo operan los emails “estafa” y extrema la cautela cuando utilices tu correo electrónico.</p>
                            <p>6.- Toma conciencia del riesgo que entraña utilizar redes de WIFI públicas</p>
                            
                            <p><br></p>
                            <h2>¿Qué derechos tienes respecto a tus datos personales?</h2>
                            <p>Tienes derecho a ser informado</p>
                            <p>Tenemos la obligación legal de facilitarte, información concisa, transparente, inteligible y de fácil acceso sobre tus datos personales y su uso. Precisamente, hemos redactado esta política para que así sea, pero si tienes cualquier pregunta o precisas de mayor información, puedes contactar con nosotros a través de privacy@dingdonehubs.com</p>
                            <p>Tienes derecho a acceder a tus datos personales</p>
                            <p>Tienes derecho a que te confirmemos si conservamos cualquiera de tus datos personales. Si todavía son conservados, tienes derecho a tener una copia de ellos y a ser informado sobre:</p>
                            <p>1.- ¿Por qué estamos usando tus datos?</p>
                            <p>2.- ¿Qué categorías de información estamos utilizando?</p>
                            <p>3.- ¿Con quién hemos compartido tus datos?</p>
                            <p>4- ¿Durante cuánto tiempo tenemos pensado conservar tu información?</p>
                            <p>Con el fin de mantener la seguridad de tus datos, tendremos que verificar tu identidad antes de facilitarte una copia de la información que conservamos. La primera copia que nos solicites será gratuita. Si requieres más copias, podríamos facturarte un cargo administrativo para cubrir nuestros costes.</p>
                            <p>Tienes derecho a corregir cualquier dato incorrecto/incompleto de tus datos personales</p>
                            <p>Si nos has solicitado una copia de tu información personal, puede que adviertas algún error o inexactitud o simplemente no se encuentre completa. En este caso, puedes contactar con nosotros y corregiremos/incluiremos el dato solicitado.</p>
                            <p>Tienes derecho a darte de baja</p>
                            <p>En ocasiones, no será necesario que sigamos conservando tus datos personales:</p>
                            <p>1.- La información no se necesita por más tiempo, para el objetivo por el cual fue almacenada.</p>
                            <p>2.- Presentas tu falta de consentimiento para la conservación de los datos y nosotros no tenemos ninguna razón legal para seguir utilizándola.</p>
                            <p>3.- No estás de acuerdo en que sigamos utilizando tus datos personales y no tenemos ninguna razón para mantenerlos.</p>
                            <p>4.- Hemos utilizado tus datos ilegalmente.</p>
                            <p>5.- Hemos recibido notificación legal que nos obliga a eliminar tus datos personales.</p>
                            <p>En las citadas situaciones, tienes derecho a solicitar la eliminación de tus datos personales. Si crees que te encuentras en uno de los casos, por favor, envía un email a privacy@dingdonehubs.com</p>
                            <p>Tienes derecho a solicitar una copia de la información para que te sea transferida a ti o a un tercero en un formato compatible.</p>
                            <p>De igual forma, tienes derecho a obtener una copia de tus datos para tus fines personales. Este derecho te habilita a mover, copiar o transferir tus datos personales más fácilmente desde un sistema IT a otro, de una forma segura.</p>
                            <p>Si necesitas transferir una copia de tus datos personales a otra organización en una forma homologada y en formato legible en soporte informático, por favor contacta con nosotros. Esta gestión es gratuita.</p>
                            <p>Tienes derecho a renunciar a Marketing Directo</p>
                            <p>En cualquier momento nos puedes comunicar que prefieres que tus datos personales no sean utilizados para Marketing Directo. Si no deseas recibir ninguna comunicación a este respecto, puedes solicitarlo de la siguiente forma:</p>
                            <p>En cualquier correo electrónico procedente de Marketing, encontrarás al final un link donde puedes solicitarlo.</p>
                            <p>O también, puedes enviar un correo electrónico a privacy@dingdonehubs.com</p>
                            <p>Tienes derecho a solicitar que dejemos de utilizar tus datos personales para nuestros intereses legítimos</p>
                            <p>Algunas veces, utilizamos tus datos personales para alcanzar objetivos que nos benefician tanto a ti como a nosotros:</p>
                            <p>• Cuando te informamos sobre productos o servicios que son similares a los que vienes utilizando.</p>
                            <p>• Cuando utilizamos tus datos para mejorar el funcionamiento de nuestra empresa.</p>
                            <p>• Cuanto contactamos contigo para informarte sobre cambios importantes.</p>
                            <p>Nuestro objetivo es que tus derechos y tus datos personales estén protegidos adecuadamente. Si crees que estamos utilizando tus datos personales de forma no justificada y tus derechos están siendo vulnerados, tienes derecho a presentar una reclamación.</p>
                            <p>A menos que exista una causa de fuerza mayor, no seguiremos utilizando tus datos personales.</p>
                            <p>Con el fin de ejercer tu derecho sobre el uso de tus datos personales, por favor envía un email a privacy@dingdonehubs.com</p>
                            <p>Tienes derecho a restringir el uso de tus datos personales</p>
                            <p>Tienes derecho a solicitarnos que no utilicemos tus datos personales, simplemente que sólo conservemos una copia. Este derecho se puede ejercer cuando se dan las siguientes circunstancias:</p>
                            <p>1.- Nos has comunicado que la información que conservamos es inexacta y nosotros no hemos podido verificarlo todavía.</p>
                            <p>2.- Nos has comunicado que no estabas de acuerdo en el uso de tu información para la consecución de nuestros intereses legítimos y nos encontramos evaluando tu reclamación.</p>
                            <p>3.- Hemos utilizado tus datos de forma ilegal pero no quieres que borremos tus datos.</p>
                            <p>4.- No necesitamos utilizar por más tiempo tus datos personales, pero necesitas que conservemos una copia por una reclamación legal, existente.</p>
                            <p>Si entiendes que te encuentras en una de estas situaciones, por favor envía un email a privacy@dingdonehubs..com</p>
                            <p><br></p>
                            <p>Tienes derechos relativos a las decisiones automatizadas que determinan el perfil/identificación del usuario</p>
                            <p>Cualquier decisión automatizada es meramente utilizada con el propósito de personalizar la información que te facilitamos. No utilizaremos este formato para tomar decisiones que tengan un efecto legal o que te afecten de forma significativa y tienes derecho a no ser objeto de tales decisiones. Si necesitas plantear dudas o preguntas acerca de este derecho, por favor envía un email a privacy@dingdonehubs.com</p>
                            
                            <p><br></p>
                            <h2>Uso de Cookies</h2>
                            <p>En ocasiones, obtendremos información de tu dispositivo para mejorar nuestros servicios. Se utilizará a efectos estadísticos acerca de nuestros visitantes y del uso que hacen de nuestro site. Esta información no contendrá ningún detalle personal.</p>
                            <p>La información será recopilada a través de un cookie file. Las cookies son automáticamente descargadas en tu dispositivo. El cookie file se almacena en tu disco duro dado que las cookies contienen información que se transfieren a tu disco duro. Esta acción nos ayudará a mejorar nuestro website y el servicio que te ofrecemos.</p>
                            <p>Todos los dispositivos pueden declinar el uso de cookies, pudiéndose ejecutar, activando los ajustes necesarios en tu navegador. Por favor, ten en cuenta que si declinas su uso es posible que no tengas acceso a algunas áreas de nuestro website.</p>
                            <p>Podríamos utilizar cookies para mostrar publicidad de interés en sites de internet. Se basaría en tus visitas a nuestro website y también se podría utilizar Google Analytics data. Si no estás de acuerdo puedes acceder a Google advertising opt-out page google.com/privacy/ads.para no ser objeto de estudio.</p>
                            
                            <p><br></p>
                            <h2>Accesos a Terceros</h2>
                            <p>Observarás que existen links de acceso a sites de terceros en nuestro website. Los website de terceros suelen tener sus propias Políticas de Privacidad y te recomendamos que las visites. PACKLINK SHIPPING, S.L. no es responsable de las políticas de terceros no tiene control sobre ellas.</p>
                            
                            <p><br></p>
                            <h2>NOTA PARA USUARIOS DE ECOMMERCE, MARKETPLACES Y AGENCIAS DE TRANSPORTE</h2>
                            <p>Una vez que te hayas registrado como usuario de DINGDONE PRO, puedes permitir que accedamos a tu cuenta de Ecommerce, Marketplace o Agencia de transporte, siempre que sea compatible, para descargar información sobre el transporte de mercancías, así como detalles de entrega. Este acceso será utilizado únicamente si nos has otorgado el oportuno permiso; en caso contrario no tendremos acceso. Tu contraseña de DINGDONE y la de tu Marketplace o Ecommerce deberían ser diferentes.</p>
                            <h2>CAMBIOS EN NUESTRA POLÍTICA DE PRIVACIDAD</h2>
                            <p>Cualquier cambio que realicemos en el futuro será publicado en esta página y si corresponde, te lo notificaremos a través de correo electrónico. Por favor, comprueba con frecuencia las actualizaciones o cambios en nuestra Política de Privacidad.</p>
                            <p>Esta versión ha sido actualizada con fecha 22/05/2021.</p>
                            
                            <p><br></p>
                            <h2>RECLAMACIONES</h2>
                            <p>Si deseas realizar una reclamación acerca de la obtención y uso de tus datos personales, por favor, contacta con nosotros en primera instancia para que podamos resolverla. Puedes presentar directamente tu reclamación accediendo a privacy@dingdonehubs.com</p>
                            
                            <p><br></p>
                            <h2>CONTACTOS</h2>
                            <p>Nuestro Delegado de Protección de Datos puede ser contactado a través de la dirección de correo electrónico privacy@dingdonehubs.com o a través de la siguiente dirección de correo postal:</p>
                            <p>Ding Done S.L.</p>
                            <p>José Matrán 18 30830 La Ñora Murcia</p>
                            </div>
                            <div class="v_space double"></div>
                        </div>
                    </aaa-s-inner>
                </aaa-s>
                <aaa-s>
                    <aaa-s-inner>





                    @endsection
