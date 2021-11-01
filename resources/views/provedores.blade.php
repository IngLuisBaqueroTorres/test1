<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#FB0d07">
    <link rel="shortcut icon" href="logo.ico">
    <title>Vomerc </title>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <!--=====================================
        {{-- fontawesome --}}
        ======================================-->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!--=====================================
        HOJA DE CSS 
    ======================================-->
    {{-- <link rel="stylesheet" href="css/estilo.css"> --}}
    <link rel="stylesheet" href="css/provedores.css">

</head>

<body>
    <div class="d-flex bg-danger">
        <nav class="navbar navbar-light" style="padding-left: 10px">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="img/logo.png" width="40" height="40" class="d-inline-block align-top ml-2">
            </a>
        </nav>
        <div class="row" id="buscador" style="width: 100%">
            <div class="container-1">
                <span class="icon"><i class="fa fa-search"></i></span>
                <input type="search" id="search" placeholder="Buscar..." />
            </div>
        </div>
    </div>

    <div class="container">
        <h1 class="text-danger text-bold text-capitalize text-center mt-3">Nuestros Vendedores</h1>
        <div class="row pt-3">
            @foreach ($users as $provedores)
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <a href="{{route('socios.show',$provedores['id'])}}">
                        <div class="card border-danger shadow p-3 mb-4 bg-body rounded">
                            <img src="" class="card-img-left" alt="">
                            <div class="card-body text-danger">
                                <h5 class="card-title">{{ $provedores['first_name'] }}</h5>
                                <p class="card-text">{{$provedores['description'] }}
                                    
                                </p>
                                <p class="card-text"><small class="text-muted">{{ $provedores['name'] }}</small></p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
            {{-- pagination --}}
            {{$users->onEachSide(2)->links()}}
        </div>
        <br><br>
    </div>
    {{-- boton arriba --}}
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

                    <a href="https://wa.me/573153302682" target="_blank" rel="noopener noreferrer">
                        <div id="BtnWhatsapp" class="icono" title="whatsapp">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="c">
                <h4>DESCARGAS</h4>
                <div class="btn-group">
                    <button style="border:none;"
                        onclick="return gtag_report_conversion('https://play.google.com/store/apps/details?id=com.vomerc.vomerc&hl=es_CO&gl=US')">
                        <img id="BtnDesInf" src="img/playstore2.png" alt="playsotre">
                    </button>

                </div>
            </div>
        </div>
        <div class="acerca text-center">
            <h6> &copy; <b>VOMERC</b> Todos los derechos reservados - info@vomerc.com - juridica@vomerc.com
                <br>
            </h6>
        </div>
    </footer>
    <!-- script -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript">
        // boton flotante 
        window.onscroll = function() {
            if (document.documentElement.scrollTop > 100) {
                $('.got-top-container').addClass("show");
            } else {
                $('.got-top-container').removeClass("show");
            }
        };

        $('.got-top-botton').on('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>
</body>

</html>
