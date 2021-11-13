<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#FB0d07">
    <link rel="shortcut icon" href="{{ URL::asset('logo.ico') }}">
    <title>Vomerc </title>

    {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    </script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/i18n/es.js"></script>
    <!--=====================================
        {{-- fontawesome --}}
        ======================================-->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!--=====================================
        HOJA DE CSS 
    ======================================-->
    {{-- <link rel="stylesheet" href="css/estilo.css"> --}}
    <link rel="stylesheet" href="{{ URL::asset('css/provedores.css') }}">

</head>


<body>
    <div class="d-flex bg-danger">
        <nav class="navbar navbar-light" style="padding-left: 10px">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="{{ URL::asset('img/logo.png') }}" width="40" height="40" class="d-inline-block align-top ml-2">
                <h4 style="color: white">Vomerc </h4>
            </a>
        </nav>
        <div class="row" id="buscador" style="width: 100%">
            <div class="container-1">
                <span class="icon"><i class="fa fa-map-marker-alt" aria-hidden="true"></i></span>
                <select class="livesearch form-control" name = "place" id = "place" lang="es"></select>                
            </div>
            <div class="container-1">
                <span class="icon"><i class="fa fa-tag" aria-hidden="true"></i></span>
                <select class="category form-control" name = "category" id = "category" lang="es" disabled></select> 
            </div>
            <input id="placeHidden" name = "placeHidden" type="hidden">
            <input id="catHidden" name = "catHidden" type="hidden">
        </div>
    </div>

    <div class="container">
        
        <h2 class="text-danger text-bold text-capitalize text-center mt-3 mb-2">Nuestros Vendedores</h2>
        
        <div class="row">
            @foreach ($users as $provedores)

                <div class="col-6 col-md-4 mb-3 ">
                    <div class="card">
                        <a href="{{ route('socios.show', $provedores['id']) }}">
                            <img src="{{ $provedores['image'] }}" class="card-img-top" alt="" id="imgvendedor">
                            <div class="card-body">
                                <h5 class="card-title" style="font-size: 1.18rem;">{{ $provedores['first_name'] }}</h5>
                            </div>
                        </a>
                    </div>
                </div>

                {{-- <div class="col-xs-5 col-sm-6 col-md-4">
                    <a href="{{ route('socios.show', $provedores['id']) }}">
                        <div class="card shadow mb-4 rounded" id="card">
                            <img src="{{ $provedores['image'] }}" class="card-img-top" alt="" id="imgvendedor">
                            <div class="card-body">
                                <h5 class="card-title">{{ $provedores['first_name'] }}</h5>
                            </div>
                        </div>
                    </a>
                </div> --}}
            @endforeach
        </div>
        
        {{-- pagination --}}
        {{ $users->onEachSide(2)->links() }}

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
                        <img id="BtnDesInf" src="{{ URL::asset('img/playstore2.png') }}" alt="playsotre">
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
<script type="text/javascript">
    $.fn.select2.defaults.set('language', 'es');
    $('.livesearch').select2({
        placeholder: 'Ubicación',
        minimumInputLength: 3,
        ajax: {
            url: '/ajax-autocomplete-search',
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
                return {
                    results: $.map(data, function (item) {
                        return {
                            text: item.name,
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        }
       
    });

    $('.livesearch').on('change', function() {
      var data = $(".select2 option:selected").val();
      var tryp = $ ("#place").val();
      $('#category').removeAttr('disabled');
      $("#placeHidden").val(tryp);
    });

    $('.category').select2({
        placeholder: 'Categoría',
        minimumInputLength: 3,
        ajax: {
            url: '/ajax-autocomplete-categories',
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
                return {
                    results: $.map(data, function (item) {
                        return {
                            text: item.name,
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        }
    });

    $('.category').on('change', function() {     
      var data = $(".select2 option:selected").val();
      var tryC = $ ("#category").val();
      $("#catHidden").val(tryC);
      var sendPlace =  $("#placeHidden").val();
      var sendCat =  $("#catHidden").val();
      if(data !== null && data !==""){
        $(location).attr('href','/vendedores/'+sendPlace+'/'+sendCat);
        // $.ajax({
        //     url :'/active-products/'+sendPlace+'/'+sendCat,
        //     type:'GET',
        //     dataType:'json',
        //     data :{
        //     },
        //     success:function(data){
        //        console.log(data);
        //     }
        // });
        
      }
    });
</script>
</html>
