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
            
        <div class="row">
            @foreach ($categoriees as $category)
                <div class="col-12 col-md-12 mb-3">
                    <h2 class="text-danger text-bold text-capitalize text-center mt-3 mb-2">{{ $category->cate_name }}</h2>
                </div>
                @foreach($results as $product)
                    @if ($product->cat_name == $category->cate_name)
                    <div class="col-6 col-md-4 mb-3 ">
                        <div class="card">
                            <a href="{{ route('producto.show', $product->id) }}">
                                <img src="{{ $product->url }}" class="card-img-top" alt="" id="imgvendedor">
                                <div  style="hight:80%">
                                    <h6 class="card_style_text">{{ $product->prod_name }}</h6>
                                    <h6 class="card_style_text">$ {{ $product->price }}</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endif
                @endforeach
            @endforeach
        </div>
    </div>      
</body>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</html>
