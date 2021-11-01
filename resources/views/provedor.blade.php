<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#FB0d07">
    <link rel="shortcut icon" href="/logo.ico">
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--=====================================
        {{-- fontawesome --}}
        ======================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto:wght@300&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!--=====================================
        HOJA DE CSS 
    ======================================-->
    {{-- <link rel="stylesheet" href="css/estilo.css"> --}}
    <link rel="stylesheet" href="/css/provedores.css">

</head>

<body>
    <div class="fondo contenedor">
        <br>
        <h2 class="text-perfil text-center">{{ $provedor['first_name'] }}</h2>
        <div class="imagen d-flex justify-content-center">
            <img src="{{ $provedor['image'] }}" class="rounded-circle" alt="Cinque Terre" width="180" height="160"
                alt="...">
        </div>

        <div class="abajo">
            <div class="container">
                <div class="cajaseguir d-flex justify-content-around">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <i class="fas fa-users"></i>
                        {{ $seguidores }} Seguidores
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center" id="seguir">
                        <i class="fas fa-heart"></i>
                        Seguir
                    </div>
                </div>
            </div>
            <br><br>
            <p class="card-text text-center">{{ $provedor['description'] }}</p>
        </div>
        <div class="botones d-flex justify-content-around">
            <a href="{{ route('socios') }}">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <i class="fas fa-chevron-left"></i>
                    Atras
                </div>
            </a>

            <div class="d-flex flex-column justify-content-center align-items-center">
                <i class="fas fa-shopping-bag"></i>
                Catálogo
            </div>
            <a href="" id="compartir">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <i class="fas fa-share-alt"></i>
                    Compartir
                </div>
            </a>

        </div>
    </div>

</body>
<script>
    $('#compartir').on('click', function(e) {
        e.preventDefault();
        var aux = document.createElement("input");
        // Asigna el contenido del elemento especificado al valor del campo
        aux.setAttribute("value", window.location);

        // Añade el campo a la página
        document.body.appendChild(aux);

        // Selecciona el contenido del campo
        aux.select();

        // Copia el texto seleccionado
        document.execCommand("copy");

        // Elimina el campo de la página
        document.body.removeChild(aux);

        alert('enlace copiado: ' + window.location);
    })

    $('#seguir').on('click', function(e) {
        Swal.fire({
            title: 'Vive una mejor experiencia',
            text: "Sigue y haz muchas cosas más, descarga la aplicación en Google Play",
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Descargar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                $(location).attr('href','https://play.google.com/store/apps/details?id=com.vomerc.vomerc&hl=es_CO&gl=US');
            }
        })
    })
</script>

</html>
