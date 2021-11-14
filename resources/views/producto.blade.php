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
     <!-- Add the slick-theme.css if you want default styling -->
     <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
     <!-- Add the slick-theme.css if you want default styling -->
     <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
     <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
    <link rel="stylesheet" href="{{ URL::asset('css/provedores.css') }}">

</head>


<body>
    <div class="d-flex bg-danger">
        <nav class="navbar navbar-light" style="padding-left: 10px">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="{{ URL::asset('img/logo.png') }}" width="40" height="40" class="d-inline-block align-top ml-2">
            </a>
        </nav>
    </div>

    <div class="container">
        <section id="screenshots" class="screenshots-section bg-grey padding transparencia">
            <div class="container">
                <div class="section-heading mb-60 text-center">
                    <h2 class="text-danger text-bold text-capitalize text-center mt-3 mb-2">{{ $producto[0]->prod_name }}</h2>
                </div>
                <div id="show_image">
                    <ul class="single-item">
                        @foreach($producto as $product)
                        <li style="padding: 0px">
                            <img src="{{ $product->url }}" class="card-img-top carrousel" alt="" >
                        </li>
                        @endforeach                    
                    </ul>
                </div>
            </div>
        </section>
        <div>
            <p style="text-align: justify; color: #616161">{{ $producto[0]->description }}</p>
        </div>
        <div class="msg_p">
            <p>Precio: $ {{ $producto[0]->price }}</p>
        </div>
    </div>   
    <div class="msg">
        <p style="font-size: 11px">
            Vive una mejor experiencia, descarga VOMERC en Google Play. <a href="https://play.google.com/store/apps/details?id=com.vomerc.vomerc">Clic aquí.</a>
        </p>
    </div>
    <div class="botones d-flex justify-content-around row" style="margin-left: 1px">
        <div class="col">
            <a href="{{ url()->previous() }}">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <i class="fas fa-chevron-left"></i>
                    Atras
                </div>
            </a>
        </div>

        <div class="col">
            <a id="seguir">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <i class="far fa-heart fa-2x"></i>
                    Seguir
                </div>
            </a>
        </div>

        <div class="col">
            <a id="sharee">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <i class="fas fa-share-alt"></i>
                    Compartir
                </div>
            </a>
        </div>
    </div>  

    <div class="modal fade" id="exampleModal" tabindex="10"  role="dialog" aria-labelledby="exampleModalLabel" >
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">{{ $producto[0]->prod_name }}</h5>
              <button type="button" class="close"id="close_button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul class="images-show">
                    @foreach($producto as $product)
                    <li style="padding: 0px">
                        <img src="{{ $product->url }}" style="width: 100%; height:70%" class="card-img-top carrousel1" alt="" >
                    </li>
                    @endforeach                    
                </ul>
            </div>
            
          </div>
        </div>
      </div>
</body>
<script>
    $('#sharee').on('click', function(e) {
       
        Swal.fire({
            title: 'Enlace copiado.',
            text: "Compártelo a tus amigos en tus redes sociales, chats, estados ¡Donde quieras!",
            icon: 'info',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Aceptar',
        }).then((result) => {
            if (result.isConfirmed) {
                var myText = document.createElement("textarea")
                myText.value = 'https://app.vomerc.com/product?id={{$producto[0]->id}}';
                document.body.appendChild(myText)
                myText.focus();
                myText.select();
                document.execCommand('copy');
                document.body.removeChild(myText);
                // $(location).attr('href','https://vomerc.page.link/provider?id='+$provedor['id']);
            }
        })
    });
    $('#seguir').on('click', function(e) {
        Swal.fire({
            title: 'Para seguir ésta cuenta debes estar registrad@.',
            text: "Descarga VOMERC desde tu dispositivo Android y vive una mejor experiencia.",
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Descargar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                $(location).attr('href','https://play.google.com/store/apps/details?id=com.vomerc.vomerc');
            }
        })
    });
    $('#show_image').on('click', function(e) {
        $('#exampleModal').modal('show'); // abrir
       
    });

    $('#close_button').on('click', function(e){
        $('#exampleModal').modal('hide');
    })

    $('#exampleModal').on('shown.bs.modal', function(e){
        $('.images-show')[0].slick.refresh();
    });
</script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript">
    $('.single-item').slick({
        // centerMode: true,
        // centerPadding: '70px',
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
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
                    centerPadding: '60px',
                    slidesToShow: 1
                }
            }
        ]
    });
    $('.images-show').slick({
        // centerMode: true,
        // centerPadding: '70px',
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        // dots:true,
        autoplay: false,
        responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: true,
                    centerMode: true,
                    centerPadding: '20px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: true,
                    centerMode: true,
                    centerPadding: '0px',
                    slidesToShow: 1
                }
            }
        ]
    });
    
    
</script>

</html>
