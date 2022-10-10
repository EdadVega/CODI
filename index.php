<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <a href="#" class="scrolltop" id="scroll-top">
        <i class='bx bx-chevron-up scrolltop__icon'></i>
    </a>
    <link rel="stylesheet" href="css/estilo.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
     <script>
       function onSubmit(token) {
         document.getElementById("formulario_contacto").submit();
       }
     </script>
    <title>Codi SAS</title>
</head>

<body>

    <!---------HEADER-------->
    <header class="header" id="header">
        <div class="barra_nav" id="barra__nav">
            <div class="logo_content">
                <a id="logo_blanco" class="logo_blanco"><img src="imagenes/Logo-blanco.png" alt=""></a>
                <a id="logo_azul" class="logo_azul"><img src="imagenes/Logo-azul.png" alt=""></a>
            </div>
            <nav class="menu_item_container">
                <ul class="menu_content" id="menu_content">
                    <li class="menu_item"><a id="enlace1" href="#inicio" class="enlace">Inicio</a></li>
                    <li class="menu_item"><a id="enlace2" href="#servicios" class="enlace">Servicios</a></li>
                    <li class="menu_item"><a id="enlace3" href="#nosotros" class="enlace">Nosotros</a></li>
                    <li class="menu_item"><a id="enlace4" href="#contactos" class="enlace">Contactos</a></li>
                </ul>
            </nav>
            <div class="btn_dark">
                <button class="switchdark active" id="switch">
                    <i class='bx bx-moon' id="sun"></i>
                </button>
            </div>
            <div class="menu_hamburguesa" id="show_menu">
                <i class='bx bx-menu'></i>
            </div>
        </div>
    </header>

    <!----------main--------->
    <main class="main" id="main">
        <section class="inicio" id="inicio">
            <div class="cuadro_texto_inicio">
                <h1 class="inicio_titulo" id="inicio_titulo">Codigo digital codi SAS</h1>
                <h2 class="inicio_subtitulo">Expertos en plataformas digitales</h2>
                <!--<div class="barra_social">
                    <div class="content_barra_social">
                        <i class='bx bxl-whatsapp'></i>
                        <i class='bx bxl-facebook-circle'></i>
                        <i class='bx bxl-instagram-alt'></i>
                        <i class='bx bx-envelope'></i>
                    </div>
                </div>-->
            </div>
            <div class="img_home">
                <img src="imagenes/imghome.jpeg" alt="">
            </div>
            <div>
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto"><defs><path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" /></defs><g class="parallax"><use class="onda1" id="onda1" xlink:href="#gentle-wave" x="48" y="0" fill="#cbcecdcc"/><use class="onda2" id="onda2" xlink:href="#gentle-wave" x="48" y="3" fill="#dbdedde6"/><use class="onda3" id="onda3" xlink:href="#gentle-wave" x="48" y="5" fill="#EBEEED" /><use class="onda4" id="onda4" xlink:href="#gentle-wave" x="48" y="7" fill="#FBFEFD"/>
                </g>
                </svg>
            </div>
        </section>
        <section class="servicios" id="servicios">
            <div class="cuadro_texto_servicios">
                <h1 class="servicios_titulo">Tenemos todo esto,</h1>
                <h2 class="servicios_subtitulo" id="servicios_subtitulo">para ofrecerte.</h2>
            </div>
            <div class="container_cuadros_servicios">
                <div class="cuadros_servicios" id="cuadros_servicios_subtitulo1">
                    <div class="intro_servicios" id="intro_servicios1">
                        <img src="imagenes/desarrollo-web.png" id="imagen" alt=""></img>
                        <h3 id="titulo_servicio">Desarrollo de paginas web</h3>
                        <button class="leer_mas_servicios" id="leer_mas_servicios1">Leer mas</button>
                    </div>
                    <div class="container_detalles_servicios" id="container_detalles_servicios1">
                        <p class="detalles_servicios" id="detalles_servicios1">Realizamos la creación y el mantenimiento del backend y frontend de tu pagina web, apuntando siempre a un diseño creativo e impactante</p>
                        <button class="ver_menos_servicios" id="ver_menos_servicios1">Ver menos</button>
                    </div>
                </div>
                <div class="cuadros_servicios" id="cuadros_servicios_subtitulo2">
                    <div class="intro_servicios" id="intro_servicios2">
                        <img src="imagenes/bases-de-datos.png " alt=" "></img>
                        <h3>Automatización de bases de datos</h3>
                        <button class="leer_mas_servicios" id="leer_mas_servicios2">Leer mas</button>
                    </div>
                    <div class="container_detalles_servicios" id="container_detalles_servicios2">
                        <p class="detalles_servicios" id="detalles_servicios2">Creamos herramientas tecnologicas como programas, apps o macros, que permitan a tu compañía o proyecto, la optimización del tiempo, mediante la automatización de procesos y datos.</p>
                        <button class="ver_menos_servicios" id="ver_menos_servicios2">Ver menos</button>
                    </div>
                </div>
                <div class="cuadros_servicios" id="cuadros_servicios_subtitulo3">
                    <div class="intro_servicios" id="intro_servicios3">
                        <img src="imagenes/aplicaciones-web.png " alt=" "></img>
                        <h3>Desarrollo de aplicaciones web</h3>
                        <button class="leer_mas_servicios" id="leer_mas_servicios3">Leer mas</button>
                    </div>
                    <div class="container_detalles_servicios" id="container_detalles_servicios3">
                        <p class="detalles_servicios" id="detalles_servicios3">Realizamos aplicaciones web que permitan maximizar la experiencia de tus clientes a la hora de navegar en tu sitio web, intranet o al momento de interactuar con tus productos y servicios.</p>
                        <button class="ver_menos_servicios" id="ver_menos_servicios3">Ver menos</button>
                    </div>
                </div>
                <div class="cuadros_servicios" id="cuadros_servicios_subtitulo4">
                    <div class="intro_servicios" id="intro_servicios4">
                        <img src="imagenes/aplicaciones-moviles.png " alt=" "></img>
                        <h3>Desarrollo de aplicaciones moviles</h3>
                        <button class="leer_mas_servicios" id="leer_mas_servicios4">Leer mas</button>
                    </div>
                    <div class="container_detalles_servicios" id="container_detalles_servicios4">
                        <p class="detalles_servicios" id="detalles_servicios4">Damos a tu proyecto un plus y a tus clientes una comodidad, gracias a el desarrollo de aplicaciones móviles con el que tus servicios estarán al alcance de todos.</p>
                        <button class="ver_menos_servicios" id="ver_menos_servicios4">Ver menos</button>
                    </div>
                </div>
                <div class="cuadros_servicios" id="cuadros_servicios_subtitulo5">
                    <div class="intro_servicios" id="intro_servicios5">
                        <img src="imagenes/sistemas-de-pago.png " alt=" "></img>
                        <h3>Sistemas de Pago</h3>
                        <button class="leer_mas_servicios" id="leer_mas_servicios5">Leer mas</button>
                    </div>
                    <div class="container_detalles_servicios" id="container_detalles_servicios5">
                        <p class="detalles_servicios" id="detalles_servicios5">Te brindamos una alternativa, segura, confiable y fácil de usar,con el desarrollo de pasarelas y modelos de pago online, con lo cuál tus clientes podrán adquirir lo mejor de tu proyecto al instante.</p>
                        <button class="ver_menos_servicios" id="ver_menos_servicios5">Ver menos</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="nosotros" id="nosotros">
            <div class="intro_nosotros" id="intro_nosotros">
                <div class="img_nosotros ">
                    <img src="imagenes/trabajo-en-equipo.png" alt="">
                </div>
                <div class="cuadro_texto_nosotros">
                    <h1 class="nosotros_titulo ">Nosotros somos</h1>
                    <h2 class="nosotros_subtitulo" id="nosotros_subtitulo">Compromiso, creatividad, calidad y efectividad.</h2>
                    <p>Somos una compañia fundada en el año 2019, en la ciudad de Medellín, Colombia. Bajo la premisa de calidad, creatividad y efectividad, (en cuanto a plataformas digitales se refiere). Buscando potenciar y consolidar proyectos mediantes
                        soluciones digitales eficaces, brindando soluciones a las necesidades y retos propuestos por aquellos que ven en Codi en un aliado.</p>
                    <button class="leer_mas_nosotros" id="leer_mas_nosotros">Leer mas</button>
                </div>
            </div>
            <div class="detalles_nosotros" id="detalles_nosotros">
                <h1 class="valores_titulo" class="scroll_titulo_valores" id="valores_titulo"><i class='bx bx-left-arrow-alt' id="atras_nosotros"></i>Nuetros valores</h1>
                <div class="container_cuadros_nosotros" class="scroll_cuadros_nosotros" id="container_cuadros_nosotros">
                    <div class="cuadro_nosotros" id="cuadro_nosotros">
                        <h3 class="titulo_valor" id="titulo_valor">Compromiso</h3>
                        <p class="detalle_valor" id="detalle_valor1">Nuestra prioridad es el compromiso y la responsabilidad con los clientes que deciden confiarnos sus proyectos, respetando los tiempos estimados, presentando trabajos impecables y profudizando en las necesecidades que requiere cada
                            nueva platafora.</p>
                    </div>
                    <div class="cuadro_nosotros" id="cuadro_nosotros">
                        <h3 class="titulo_valor" id="titulo_valor">Calidad</h3>
                        <p class="detalle_valor" id="detalle_valor2">Buscamos sorprender a nuestros clientes y superar sus expectativas con trabajos y creaciones realizados minuciosamente, buscando que cada detalle esté direccionado a potenciar su proposito.</p>
                    </div>
                    <div class="cuadro_nosotros" id="cuadro_nosotros">
                        <h3 class="titulo_valor" id="titulo_valor">Creatividad</h3>
                        <p class="detalle_valor" id="detalle_valor3">Damos un valor agregado a los proyectos de nuestros clientes, trabajando con diferentes herramientas de la tecnología, el desarrallo y el diseño, buscando siempre maximizar la experiencia e interacción del consumidor final.</p>
                    </div>
                    <div class="cuadro_nosotros" id="cuadro_nosotros">
                        <h3 class="titulo_valor" id="titulo_valor">Efectividad</h3>
                        <p class="detalle_valor" id="detalle_valor4">Buscamos crear porductos que impacten al consumidor final, que presenten una forma novedosa de conocer y adquirir los productos o servicios que ofrecen nuestros clientes, generando una cultura de confianza digital, respaldo y comunicación
                            efectiva.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="contactos" id="contactos">
            <div class="cuadro_texto_contactos">
                <h1 class="contactos_titulo ">Contactos</h1>
                <h2 class="contactos_subtitulo" id="contactos_subtitulo">Contáctenos</h2>
                <p>No esperes mas para llevar tu proyecto al siguiente nivel.</p>
            </div>
            <form id="formulario_contacto" class="formulario_contacto" action="./php/formulario.php" method="post">
                <div class="campo_informacion">
                    <label for="name">Nombre de la empresa*</label><br>
                    <input class="datos" type="text" required="" placeholder="Empresa SAS" autocomplete name="nombre">
                </div>
                <div class="campo_informacion">
                    <label>Teléfono fijo/Movil*</label><br>
                    <input class="datos" type="phone" required="" placeholder="+57 1234567890" autocomplete name="telefono">
                </div>
                <div class="campo_informacion">
                    <label>Correo electronico*</label><br>
                    <input class="datos" type="email" required="" placeholder="empresa@empresa.com" autocomplete name="email">
                </div>
                <div class="campo_informacion">
                    <label>¿Cómo podemos ayudarte?</label><br>
                    <textarea class="descripcion_contacto" name="descripcion_contacto"></textarea>
                </div>
                <div class="boton_enviar">
                    <!--<input type="submit" class="enviar">-->
                    <button class="g-recaptcha" data-sitekey="6LcyQTIfAAAAAJG5ngDbF-y87gqhnlhQZdN55Mmi" data-size="invisible" data-callback='onSubmit'>
                    </button>
                    <input type="submit" class="enviar">
                </div>
            </form>
        </section>
    </main>
    
    <script>
  function initFreshChat() {
    window.fcWidget.init({
      WEB_CHAT_PAYLOAD
    });
  }
  function initialize(i,t){var e;i.getElementById(t)?
  initFreshChat():((e=i.createElement("script")).id=t,e.async=!0,
  e.src="https://wchat.freshchat.com/js/widget.js",e.onload=initFreshChat,i.head.appendChild(e))}
  function initiateCall(){initialize(document,"Freshchat-js-sdk")}
  window.addEventListener?window.addEventListener("load",initiateCall,!1):
  window.attachEvent("load",initiateCall,!1);
</script>

    <!-------footer--------->
    <footer class="footer" id="footer">
        <div class="container_cuadros_footer">
            <!--<div class="cuadro_footer_1">
                <h3>Redes sociales</h3>
                <div class="icon_redes_footer" id="icon_redes_footer">
                    <i class='bx bxl-whatsapp'></i>
                    <i class='bx bxl-facebook-circle'></i>
                    <i class='bx bxl-instagram-alt'></i>
                    <i class='bx bx-envelope'></i>
                </div>
            </div>-->
            <div class="cuadro_footer_2" id="footer_h3_1">
                <h3>Servicios</h3>
                <ul class="lista_footer">
                    <li>Desarrollo de paginas web</li>
                    <li>Automatización de bases de datos</li>
                    <li>Desarrollo de Apps web</li>
                    <li>Desarrollo de Apps moviles</li>
                    <li>Sistemas de pago</li>
                </ul>
            </div>
            <div class="cuadro_footer_2" id="footer_h3_2">
                <h3>Información</h3>
                <ul class="lista_footer">
                    <li>Contactos</li>
                    <li>Politica de privacidad</li>
                    <li>Terminos de servicios</li>
                </ul>
            </div>
            <!--<div class="cuadro_footer_2" id="footer_h3_3">
                <h3>Dirección</h3>
                <ul class="lista_footer">
                    <li>Medellín,Colombia</li>
                    <li>CLL 10 # 8 - 10</li>
                </ul>
            </div>-->
        </div>
    </footer>

    <script src="js/main.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>

</body>

</html>