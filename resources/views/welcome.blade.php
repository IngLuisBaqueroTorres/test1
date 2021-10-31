<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-N7BD78Z');
    </script>
    <!-- End Google Tag Manager -->

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="title" content="VOMERC">

    <meta name="description"
        content="¿Que es Vomerc?,vomerc es un CENTRO COMERCIAL DIGITAL o marketplace donde, GRATUITAMENTE, podrán interactuar los negocios, emprendedores y personas, en una dinámica de compra y venta de productos y servicios.">

    <meta name="keyword" content="vomerc,comercio digital,comercio electronico">
    <meta name="author" content="ING Jose Rodriguez" />

    <meta name="copyright" content="VOMERC" />
    <link rel="shortcut icon" href="logo.ico">
    <!-- <meta name="robots" content="index" /> -->
    <meta name="google-site-verification" content="mkJO2xHRuNECvWv3pArxMpc1a-foMsd21mMu4Tk5Sts" />
    <meta name="theme-color" content="#FB0d07">

    <title>VOMERC</title>
    <!-- Global site tag (gtag.js) - Google Ads: 404301260 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-404301260"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'AW-404301260');
    </script>
    <!-- Event snippet for Registro conversion page In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
    <script>
        function gtag_report_conversion(url) {
            var callback = function() {
                if (typeof(url) != 'undefined') {
                    window.location = url;
                }
            };
            gtag('event', 'conversion', {
                'send_to': 'AW-404301260/Z2XKCPCG_-sCEMzL5MAB',
                'event_callback': callback
            });
            return false;
        }
    </script>

    <!--=====================================
        {{-- fontawesome --}}
        ======================================-->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!--=====================================
        HOJA DE CSS 
        ======================================-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />


    <!--=====================================
        Fonts 
        ======================================-->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;600&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;600&family=Open+Sans+Condensed:ital,wght@0,300;0,700;1,300&display=swap"
        rel="stylesheet">



</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N7BD78Z" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="barra fixed-top">
        <div class="container" id="">
            <nav class="d-flex flex-wrap justify-content-between pt-2 bg-white ">
                <a href="/" title="Vomerc"
                    class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none logo">
                    <img id="BtnVomerc" class="img-fluid " src="img/logo.png" alt="">
                </a>

                <button id="btnNav" class="navbar-toggler text-danger" type="button" data-toggle="collapse"
                    data-target="#collapseNavbar" aria-expanded="false" aria-controls="navbarText"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="navbar-collapse collapse" id="collapseNavbar">
                    <div class="card card-body">
                        <ul class="navbar-nav text-center" id="nav">

                            <li class="nav-item">
                                <a id="BtnInicioWeb" class="nav-link active js-scroll-trigger enlaces "
                                    aria-current="page" href="#about">Inicio</a>
                            </li>

                            <li class="nav-item">
                                <a href="#funcionamiento" class="nav-link js-scroll-trigger enlaces ">¿Como
                                    Funciona?</a>
                            </li>

                            <li class="nav-item">
                                <a href="#feature" class="nav-link js-scroll-trigger enlaces ">Características</a>
                            </li>

                            <li class="nav-item">
                                <a href="#screenshots" class="nav-link js-scroll-trigger enlaces ">Capturas de
                                    pantalla</a>
                            </li>

                            <li class="nav-item">
                                <a href="#descarga" class="nav-link js-scroll-trigger enlaces ">Descargar</a>
                            </li>

                            <li class="nav-item">
                                <a href="#opiniones" class="nav-link js-scroll-trigger enlaces ">Opiniones</a>
                            </li>

                        </ul>
                    </div>
                </div>

                <ul class="nav nav-pills mb-2" id="collapseNa">
                    <li id="BtnInicioCel" class="nav-item"><a
                            class="nav-link active js-scroll-trigger enlaces linkhome" aria-current="page"
                            href="#about">Inicio</a></li>
                    <li class="nav-item"><a href="#funcionamiento"
                            class="nav-link js-scroll-trigger enlaces linkFuncionamiento">¿Como Funciona?</a></li>
                    <li class="nav-item"><a href="#feature"
                            class="nav-link js-scroll-trigger enlaces linkFeature">Características</a></li>
                    <li class="nav-item"><a href="#screenshots"
                            class="nav-link js-scroll-trigger enlaces linkscreenshots">Capturas de pantalla</a></li>
                    <li class="nav-item"><a href="#descarga"
                            class="nav-link js-scroll-trigger enlaces linkdescarga">Descargar</a></li>
                    <li class="nav-item"><a href="#opiniones"
                            class="nav-link js-scroll-trigger enlaces linkopiniones">Opiniones</a></li>
                </ul>

            </nav>
        </div>
    </div>

    <!-- seccion 1 -->
    <section class="sectcion1" id="about">
        <div class="container">
            <div class="hero-content">
                <h1>VOMERC ideal para comprar <br>y vender en tu municipio.</h1>
                <p>Gratuito, fácil e intuitivo</p>
                <div class="btn-group">
                    <!-- <a href="#"><img src="img/appstore.png" alt="appstore"></a> -->
                    <button style="border:none;"
                        onclick="return gtag_report_conversion('https://play.google.com/store/apps/details?id=com.vomerc.vomerc&hl=es_CO&gl=US')">
                        <img id="BtnDesSup" src="img/playstore2.png" alt="playsotre">
                    </button>
                    <!--
                        <a target="_blank" href="https://play.google.com/store/apps/details?id=com.vomerc.vomerc&hl=es_CO&gl=US"><img src="img/playstore2.png" alt="playsotre"></a>
                        -->
                </div>
            </div>
        </div>
        <div class="hero-moc">
        </div>
    </section> <!-- end seccion 1 -->

    <!-- seccion 2 -->
    <section class="promo-section padding" id="">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 sm-padding">
                    <div class="promo-content text-center">
                        <!-- <i class="fas fa-lock"></i> -->
                        <img src="img/ico2.svg" alt="">
                        <h2 style="font-size: 25px;">Punto de encuentro</h2>
                        <p>Vomerc es un espacio donde puedes interactuar con negocios, emprendimientos y/o personas de
                            un municipio.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 sm-padding">
                    <div class="promo-content text-center">
                        <!-- <i class="fas fa-layer-group"></i> -->
                        <img src="img/ico8.svg" alt="">
                        <h2 style="font-size: 25px;">Variedad de ofertas</h2>
                        <p>Vomerc es un espacio donde puedes encontrar una gran variedad de productos y servicios de
                            diferentes ofertantes, organizados en más de 100 categorías.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 sm-padding">
                    <div class="promo-content text-center">
                        <!-- <i class="fas fa-align-justify"></i> -->
                        <img src="img/ico6.svg" alt="">
                        <h2 style="font-size: 25px;">Chat interactivo</h2>
                        <p>Vomerc te permite preguntar por uno o varios productos del catálogo de un ofertante sin salir
                            del chat, de una manera fácil y rápida.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- seccion 3 -->
    <section id="funcionamiento" class="content-section transparencia padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="content-mockups">
                        <div class="mockup-back"></div>
                        <div class="mockup-front"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-heading mb-40">
                        <h2>¿Cómo funciona esta Marketplace local?</h2>
                        <!-- <p>Vomerc, es un CENTRO COMERCIAL DIGITAL o marketplace donde, GRATUITAMENTE, podrán interactuar los negocios, emprendedores y personas, en una dinámica de compra y venta de productos y servicios.</p> -->
                    </div>
                    <div class="content-lists">
                        <div class="list-item">
                            <!-- <i class="icon-tools"></i> -->
                            <!-- <i class="fas fa-mobile-alt"></i> -->
                            <i class="fas fa-tablet-alt"></i>
                            <div class="list-content">
                                <h3>Crea tu cuenta</h3>
                                <p>Solo es necesario tener un dispositivo Android (Celular o Tablet), una línea
                                    telefónica móvil y acceso a internet ¡es fácil y rápido!</p>
                            </div>
                        </div>
                        <div class="list-item">
                            <!-- <i class="icon-pictures"></i> -->
                            <i style="margin-top: -50px;" class="fas fa-cart-plus"></i>
                            <div class="list-content">
                                <h3>Si deseas comprar</h3>
                                <ol>
                                    <li>
                                        <p>Accede a la variedad de productos y servicios ofertados, en el municipio
                                            donde te encuentres. </p>
                                    </li>
                                    <li>
                                        <p>Busca y analiza el producto o servicio deseado. </p>
                                    </li>
                                    <li>
                                        <p>Ponte en contacto por medio de nuestro chat interactivo con el ofertante.</p>
                                    </li>
                                </ol>
                                <!-- <p>Escoge un producto o servicio de los <br> ofrecidos en nuestra app, encontrarás muchos para elegir</p> -->
                            </div>
                        </div>
                        <div class="list-item">
                            <!-- <i class="icon-genius"></i> -->
                            <i style="margin-top: -100px;" class="fas fa-funnel-dollar"></i>
                            <div class="list-content">
                                <h3>Si deseas vender</h3>
                                <ol>
                                    <li>
                                        <p>Ingresa al perfil de la cuenta.</p>
                                    </li>
                                    <li>
                                        <p>Pulsar el botón rojo.</p>
                                    </li>
                                    <li>
                                        <p>Diligencia el formulario con la información del producto o servicio.</p>
                                    </li>
                                    <li>
                                        <p>Agrega por lo menos una foto del producto o servicio. </p>
                                    </li>
                                    <li>
                                        <p>Pulsa el botón ofertar.</p>
                                    </li>
                                </ol>
                                <!-- <p>Ponte en contacto directamente con el vendedor atrevés de nuestro <br> chat y compra sin ningún intermediario.</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- seccion 4 -->
    <section id="feature" class="features-section padding">
        <div class="container">
            <div class="section-heading text-center mb-60">
                <h2>Características</h2>
                <p>Es una app de comercio increíble, moderna e intuitiva, para comprar y vender productos y servicios a
                    nivel local.</p>
            </div>
            <div class="row feature-wrap">
                <div class="col-md-4 col-sm-6">
                    <div class="feature-content text-center">
                        <i class="icon-laptop"></i>
                        <h3>Potente sistema</h3>
                        <p>Funcionamos bajo una infraestructura estable y de fácil escalabilidad implementando buenas
                            prácticas de desarrollo.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="feature-content text-center">
                        <i class="icon-anchor "></i>
                        <h3>Personalización</h3>
                        <p>Edita tu perfil, crea tu catálogo (si lo tienes), agrega ofertantes y/o productos como
                            “Favoritos”. </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="feature-content text-center">
                        <i class="icon-genius"></i>
                        <h3>Acceso al comercio local</h3>
                        <p>Accede rápidamente a todos los productos y/o servicios ofertados (en nuestra app) en los
                            1.119 municipios de Colombia, desde la comodidad del lugar donde estés.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="feature-content text-center">
                        <i class="icon-clock"></i>
                        <h3>Todo en uno</h3>
                        <p>Todos los sectores económicos tienen espacio, oferta y demanda en más 100 de categorías que
                            tenemos disponibles.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="feature-content text-center">
                        <i class="icon-layers"></i>
                        <h3>Gratis</h3>
                        <p>Accede a la plataforma 24/7 y publica catálogo sin límites de productos. TOTALMENTE GRATIS.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="feature-content text-center">
                        <i class="icon-refresh"></i>
                        <h3>Actualizaciones y seguridad</h3>
                        <p>Constantes actualizaciones son lanzadas con el objetivo de implementar y/o mejorar
                            funcionalidades o la seguridad.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- seccion 5 -->
    <section id="screenshots" class="screenshots-section bg-grey padding transparencia">
        <div class="container">
            <div class="section-heading mb-60 text-center">
                <h2>Capturas de pantalla</h2>
                <p>Conoce esta increíble aplicación, a continuación, algunas capturas de pantalla.</p>
            </div>
            <ul class="single-item">
                <li class="">
                    <img src="img/v4.png" alt="">
                </li>
                <li>
                    <img src="img/v2.png" alt="">
                </li>
                <li>
                    <img src="img/v5.png" alt="">
                </li>
                <li>
                    <img src="img/v6.png" alt="">
                </li>
                <li>
                    <img src="img/v7.png" alt="">
                </li>
                <li>
                    <img src="img/v8.png" alt="">
                </li>
                <li>
                    <img src="img/v9.png" alt="">
                </li>
                <li>
                    <img src="img/v3.png" alt="">
                </li>
            </ul>
        </div>
    </section>
    <!-- seccion 6 (descarga) -->
    <section id="descarga" class="features-section padding">
        <div class="container d-flex p-2 justify-content-around" id="caja-descarga">
            <div class="">
                <h1>¡ANÍMATE, DESCARGA Y <br> VIVE LA EXPERIENCIA!</h1>
                <!-- <p>En el botón de Google Play iras directamente <br> a nuestra app.</p> -->
            </div>
            <div class="">
                <div class="btn-group">
                    <!-- <a href="#"><img src="img/appstore.png" alt="appstore"></a> -->
                    <button style="border:none;"
                        onclick="return gtag_report_conversion('https://play.google.com/store/apps/details?id=com.vomerc.vomerc&hl=es_CO&gl=US')">
                        <img id="BtnDesMed" src="img/playstore2.png" alt="playsotre">
                    </button>
                    <!--
                        <a target="_blank" href="https://play.google.com/store/apps/details?id=com.vomerc.vomerc&hl=es_CO&gl=US">
                            <img src="img/playstore2.png" alt="playsotre">
                        </a> -->
                </div>
            </div>
        </div>
    </section>
    <!-- seccion 7 (opiniones) -->
    <section id="opiniones" class="padding transparencia">
        <div class="container">
            <div class="section-heading text-center mb-60">
                <h2>Algunas Opiniones de nuestros usuarios</h2>
                <!-- <p>Alguno de nuestros usuarios opinaron sobre Vomerc, conoce lo que ellos piensan.</p> -->
            </div>
            <div class="row comentarios">
                <!-- comentario 1 -->
                <div class="card bg-light mb-3 mr-5 p-0 col-sm-3">
                    <div class="card-header text-uppercase">
                        Joan Fuentes
                        <span class="text-right ml-3">
                            <img src="https://play-lh.googleusercontent.com/a-/AOh14Ghf2-RcEz8wm22A6CPibfUvkhn-5vcuI2fSAidZJg=w48-h48-n-rw"
                                class="img-fluid rounded-circle" width="15%">
                        </span>
                    </div>
                    <div class="card-body">
                        <small class="card-text">
                            La idea es buena, pero deberia existir un menu con las categorías ordenado. Es muy tedioso
                            tener que ir bajando para encontrar las categorías.
                        </small>
                    </div>
                    <div class="card-footer">
                        <i class="fa fa-star text-success"></i>
                        <i class="fa fa-star text-success"></i>
                        <i class="fa fa-star text-success"></i>
                        <i class="far fa-star text-success"></i>
                        <i class="far fa-star text-success"></i>
                    </div>
                </div>
                <!-- comentario 2 -->
                <div class="card bg-light mb-3 mr-5 p-0 col-sm-3">
                    <div class="card-header text-uppercase">
                        Alexander Mesa
                        <span class="text-right ml-3">
                            <img src="https://play-lh.googleusercontent.com/a-/AOh14GgRW0p3sK0pYX_dUqdqPqSaOAL9Ra_XGhrTplxz6w=w48-h48-n-rw"
                                class="img-fluid rounded-circle" width="15%">
                        </span>
                    </div>
                    <div class="card-body">
                        <small class="card-text">
                            Excelente aplicación, muy útil y su uso es bastante fácil, super recomendada.
                        </small>
                    </div>
                    <div class="card-footer">
                        <i class="fa fa-star text-success"></i>
                        <i class="fa fa-star text-success"></i>
                        <i class="fa fa-star text-success"></i>
                        <i class="fa fa-star text-success"></i>
                        <i class="fa fa-star text-success"></i>
                    </div>
                </div>
                <!-- comentario 3 -->
                <div class="card bg-light mb-3 mr-5 p-0 col-sm-3">
                    <div class="card-header text-uppercase">
                        Anchy Gama
                        <span class="text-right ml-3">
                            <img src="https://play-lh.googleusercontent.com/a-/AOh14Gi9oOP6VSL0tGZx8Czk7fQx-ucrJdq7suUdVIMiCg=w48-h48-n-rw"
                                class="img-fluid rounded-circle" width="15%">
                        </span>
                    </div>
                    <div class="card-body">
                        <small class="card-text">
                            Muy practica y con funciones específicas que le dan al usuario una mejor experiencia al
                            momento de buscar o vender un servicio.
                        </small>
                    </div>
                    <div class="card-footer">
                        <i class="fa fa-star text-success"></i>
                        <i class="fa fa-star text-success"></i>
                        <i class="fa fa-star text-success"></i>
                        <i class="fa fa-star text-success"></i>
                        <i class="fas fa-star-half-alt text-success"></i>
                    </div>
                </div>
                <!-- comentario 4 -->
                <div class="card bg-light mb-3 mr-5 p-0 col-sm-3">
                    <div class="card-header text-uppercase">
                        William Poveda
                        <span class="text-right ml-3">
                            <img src="https://play-lh.googleusercontent.com/a-/AOh14GgEuA0DYl_qkuP4Pzp6A0hSywZumEx47kvnUoOYVw=w48-h48-n-rw"
                                class="img-fluid rounded-circle" width="15%">
                        </span>
                    </div>
                    <div class="card-body">
                        <small class="card-text">
                            Muy buena app, puedo hablar directamente con el vendedor y llegar a un acuerdo beneficioso
                            para los dos.
                        </small>
                    </div>
                    <div class="card-footer">
                        <i class="fa fa-star text-success"></i>
                        <i class="fa fa-star text-success"></i>
                        <i class="fa fa-star text-success"></i>
                        <i class="fa fa-star text-success"></i>
                        <i class="far fa-star text-success"></i>
                    </div>
                </div>
                <!-- comentario 5 -->
                <div class="card bg-light mb-3 mr-5 p-0 col-sm-3">
                    <div class="card-header text-uppercase">
                        Ramon Brun
                        <span class="text-right ml-3">
                            <img src="https://play-lh.googleusercontent.com/a-/AOh14GiX0C1b2_tS-y5Btf8Najzs_jH7ROoI3ZPQKqq_nQ=w48-h48-n-rw"
                                class="img-fluid rounded-circle" width="15%">
                        </span>
                    </div>
                    <div class="card-body">
                        <small class="card-text">
                            Muy bueno App, impulsando el mercado local a pequeñas y grandes empresas.
                        </small>
                    </div>
                    <div class="card-footer">
                        <i class="fa fa-star text-success"></i>
                        <i class="fa fa-star text-success"></i>
                        <i class="fa fa-star text-success"></i>
                        <i class="fa fa-star text-success"></i>
                        <i class="fa fa-star text-success"></i>
                    </div>
                </div>
                <!-- comentario 6 -->
                <div class="card bg-light mb-3 mr-5 p-0 col-sm-3">
                    <div class="card-header text-uppercase">
                        karen camargo
                        <span class="text-right ml-3">
                            <img src="https://play-lh.googleusercontent.com/a-/AOh14GiaXEeiijq5VA-JIHlpPaGM-enJQgD7UOEwiAccc1w=w48-h48-n-rw"
                                class="img-fluid rounded-circle" width="15%">
                        </span>
                    </div>
                    <div class="card-body">
                        <small class="card-text">
                            Esta es la herramienta que estábamos necesitando los emprendedores para ampliar nuestra
                            cliientela a nivel local.
                        </small>
                    </div>
                    <div class="card-footer">
                        <i class="fa fa-star text-success"></i>
                        <i class="fa fa-star text-success"></i>
                        <i class="fa fa-star text-success"></i>
                        <i class="fa fa-star text-success"></i>
                        <i class="fa fa-star text-success"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="got-top-container">
        <div class="got-top-botton">
            <i class="fas fa-chevron-up"></i>
        </div>
    </div>
    <!--  footer -->
    <footer>
        <div class="container">
            <div class="c">
                <h4 class="text-center">VOMERC</h4>
                <p>Centro Comercial Digital o Marketplace donde, GRATUITAMENTE, podrán interactuar negocios,
                    emprendedores y personas, en una dinámica de compra y venta, de productos y servicios.</p>
            </div>
            <div class="c">
                <h4 class="text-center">NUESTRAS REDES</h4>
                <div class="caja-icono">

                    <a href="https://www.instagram.com/vomerc_app/?hl=es-la" target="_blank" rel="noopener noreferrer">
                        <div id="BtnInstagram" class="icono" title="instagram">
                            <i class="fab fa-instagram"></i>
                        </div>
                    </a>


                    <a href="https://www.youtube.com/channel/UCtK3Ph_aaPHbzoNH_CV87qQ" target="_blank"
                        rel="noopener noreferrer">
                        <div id="BtnYoutube" class="icono" title="youtube">
                            <i class="fab fa-youtube"></i>
                        </div>
                    </a>


                    <a href="https://twitter.com/Vomerc_app" target="_blank" rel="noopener noreferrer">
                        <div id="BtnTwitter" class="icono" title="twitter">
                            <i class="fab fa-twitter"></i>
                        </div>
                    </a>

                    <a href="https://www.facebook.com/vomerc" target="_blank" rel="noopener noreferrer">
                        <div id="BtnFacebook" class="icono" title="facebook">
                            <i class="fab fa-facebook-f"></i>
                        </div>
                    </a>

                    <!-- <br>
                        <span><i class="fab fa-whatsapp"></i>: +57 3153302682</span>
                        <span><i class="fab fa-whatsapp"></i>: +57 3104955163</span> -->

                    <a href="https://wa.me/573153302682" target="_blank" rel="noopener noreferrer">
                        <div id="BtnWhatsapp" class="icono" title="whatsapp">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                    </a>
                    <!--
                        <div class="icono" title="whatsapp 2">
                            <a href="https://wa.me/573104955163" target="_blank" rel="noopener noreferrer"><i class="fab fa-whatsapp"></i></a>
                        </div> -->
                </div>
            </div>
            <div class="c">
                <h4>DESCARGAS</h4>
                <div class="btn-group">
                    <!-- <a href="#"><img src="img/appstore.png" alt="appstore"></a> -->
                    <button style="border:none;"
                        onclick="return gtag_report_conversion('https://play.google.com/store/apps/details?id=com.vomerc.vomerc&hl=es_CO&gl=US')">
                        <img id="BtnDesInf" src="img/playstore2.png" alt="playsotre">
                    </button>
                    <!--
                        <a target="_blank" href="https://play.google.com/store/apps/details?id=com.vomerc.vomerc&hl=es_CO&gl=US"><img src="img/playstore2.png" alt="playsotre"></a>
                        -->

                </div>
            </div>
        </div>
        <div class="acerca text-center">
            <h6> &copy; <b>VOMERC</b> Todos los derechos reservados - info@vomerc.com - juridica@vomerc.com
                <br>
            </h6>
            <p class="miNombre">Desarrollador pagina Jose Rodriguez - tel: 324 409 5054</p>
        </div>
    </footer>

    <!-- script -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript">
        $('.single-item').slick({
            centerMode: true,
            centerPadding: '70px',
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });
    </script>
    <script src="js/index.js"></script>
</body>

</html>
