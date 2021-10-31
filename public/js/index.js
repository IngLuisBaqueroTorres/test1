$(document).ready(function () {

    var botones = document.querySelectorAll(".enlaces");

    // Definir función y evitar definirla de manera anónima
    const cuandoSeHaceClick = function (evento) {
        // Recuerda, this es el elemento
        // console.log("El texto que tiene es: ",this.innerText);
        $('.active').removeClass("active");
        $(this).addClass('active');
    }
    // botones es un arreglo así que lo recorremos
    botones.forEach(boton => {
        //Agregar listener
        boton.addEventListener("click", cuandoSeHaceClick);
    });

});

    // boton flotante 
    window.onscroll = function(){
        if(document.documentElement.scrollTop > 100){
            $('.got-top-container').addClass("show");
        }else{
            $('.got-top-container').removeClass("show");
        }
    };

    $('.got-top-botton').on('click',function(){
        window.scrollTo({
            top:0,
            behavior: 'smooth'
        });
    });
    
    setInterval(function(){
        console.log(document.documentElement.scrollTop);
        if(document.documentElement.scrollTop < 907){
            $('.linkhome').css("background-color", "#FB0d07");
            $('.linkhome').css("color", "#fff");

            $('.linkFuncionamiento').css("background-color", "#ffffff");
            $('.linkFuncionamiento').css("color", "red");

            $('.linkFeature').css("background-color", "#ffffff");
            $('.linkFeature').css("color", "red");

            $('.linkscreenshots').css("background-color", "#ffffff");
            $('.linkscreenshots').css("color", "red");

            $('.linkdescarga').css("background-color", "#ffffff");
            $('.linkdescarga').css("color", "red");

            $('.linkopiniones').css("background-color", "#ffffff");
            $('.linkopiniones').css("color", "red");
        }

        if(document.documentElement.scrollTop >= 907 && document.documentElement.scrollTop < 1638){
            $('.linkhome').css("background-color", "#ffffff");
            $('.linkhome').css("color", "red");

            $('.linkFuncionamiento').css("background-color", "#FB0d07");
            $('.linkFuncionamiento').css("color", "#fff");

            $('.linkFeature').css("background-color", "#ffffff");
            $('.linkFeature').css("color", "red");

            $('.linkscreenshots').css("background-color", "#ffffff");
            $('.linkscreenshots').css("color", "red");

            $('.linkdescarga').css("background-color", "#ffffff");
            $('.linkdescarga').css("color", "red");

            $('.linkopiniones').css("background-color", "#ffffff");
            $('.linkopiniones').css("color", "red");
        }
        if(document.documentElement.scrollTop >= 1638 && document.documentElement.scrollTop < 2469){
            $('.linkhome').css("background-color", "#ffffff");
            $('.linkhome').css("color", "red");

            $('.linkFuncionamiento').css("background-color", "#ffffff");
            $('.linkFuncionamiento').css("color", "red");

            $('.linkFeature').css("background-color", "#FB0d07");
            $('.linkFeature').css("color", "#fff");

            $('.linkscreenshots').css("background-color", "#ffffff");
            $('.linkscreenshots').css("color", "red");

            $('.linkdescarga').css("background-color", "#ffffff");
            $('.linkdescarga').css("color", "red");

            $('.linkopiniones').css("background-color", "#ffffff");
            $('.linkopiniones').css("color", "red");
        }
        if(document.documentElement.scrollTop >= 2469 && document.documentElement.scrollTop < 3184){
            $('.linkhome').css("background-color", "#ffffff");
            $('.linkhome').css("color", "red");

            $('.linkFuncionamiento').css("background-color", "#ffffff");
            $('.linkFuncionamiento').css("color", "red");

            $('.linkFeature').css("background-color", "#ffffff");
            $('.linkFeature').css("color", "red");

            $('.linkscreenshots').css("background-color", "#FB0d07");
            $('.linkscreenshots').css("color", "#fff");

            $('.linkdescarga').css("background-color", "#ffffff");
            $('.linkdescarga').css("color", "red");

            $('.linkopiniones').css("background-color", "#ffffff");
            $('.linkopiniones').css("color", "red");
        }
        if(document.documentElement.scrollTop >= 3184 && document.documentElement.scrollTop < 3565){
            $('.linkhome').css("background-color", "#ffffff");
            $('.linkhome').css("color", "red");

            $('.linkFuncionamiento').css("background-color", "#ffffff");
            $('.linkFuncionamiento').css("color", "red");

            $('.linkFeature').css("background-color", "#ffffff");
            $('.linkFeature').css("color", "red");

            $('.linkscreenshots').css("background-color", "#ffffff");
            $('.linkscreenshots').css("color", "red");

            $('.linkdescarga').css("background-color", "#FB0d07");
            $('.linkdescarga').css("color", "#fff");

            $('.linkopiniones').css("background-color", "#ffffff");
            $('.linkopiniones').css("color", "red");
        }
        if(document.documentElement.scrollTop >= 3565){
            $('.linkhome').css("background-color", "#ffffff");
            $('.linkhome').css("color", "red");

            $('.linkFuncionamiento').css("background-color", "#ffffff");
            $('.linkFuncionamiento').css("color", "red");

            $('.linkFeature').css("background-color", "#ffffff");
            $('.linkFeature').css("color", "red");

            $('.linkscreenshots').css("background-color", "#ffffff");
            $('.linkscreenshots').css("color", "red");

            $('.linkdescarga').css("background-color", "#ffffff");
            $('.linkdescarga').css("color", "red");

            $('.linkopiniones').css("background-color", "#FB0d07");
            $('.linkopiniones').css("color", "#fff");
        }
    },1000);