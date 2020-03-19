<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polica</title>
    <link rel="stylesheet" href="./style/style3.css">
    <link rel="stylesheet" href="./slick.css">
    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="slick.min.js"></script>
</head>
<!-- <body scroll="no" style="overflow: hidden"> -->
<body>

    <div class="logo">
        <img src="img/logo.png" alt="logo" id='logo'>
    </div>

    <!-- Strelice -->
    <img src="img/next.png" class='strelice right' id='sledeca' alt="next">
    <img src="img/previous.png" class='strelice left' id='prethodna' alt="previous">
    <!-- Strelice -->

    <div id="test">
        <?php
            include 'stranaA.php';
            include 'stranaB.php';
        ?>
    </div>

</body>
</html>

<script>
    // localStorage.setItem('belaAll','1');
    // localStorage.setItem('crnaAll','0');
    // localStorage.setItem('likAll','0');
    // localStorage.setItem('likusaAll','0');
    // localStorage.setItem('tecnostAll','0');


    // $belaAllA = localStorage.getItem('belaAll');
    // $crnaAllA = localStorage.getItem('crnaAll');
    // $likAllA = localStorage.getItem('likAll');
    // $likusaAllA = localStorage.getItem('likusaAll');
    // $tecnostAllA = localStorage.getItem('tecnostAll');

    // if($belaAllA == '1'){
    //     $('#slajdA').find('span').css('opacity','0.5');
    //     $('#jedanAll').css('opacity','1');


    //     for(var i = 7; i < 13; i++){
    //         $('.videom'+i+' video source').attr('src', "./video/beli.mp4");
    //         $(".videom"+i+" video")[0].load();
    //     }

    //     $.ajax({
    //         url: "./php/pustiBeliSveA.php",
    //         type: "post",
    //         success: function(data){
    //             console.log(data);
    //         }
    //     })
    // }




    $('.card').hide();
    $('#sledeca').click(function(){
        if($(".cardA").is(":visible")){
            $('.cardA').hide();
            $('.card').show();
            console.log("The paragraph  is visible.");
        } else{
            $('.cardA').show();
            $('.card').hide();
            console.log("The paragraph  is hidden.");
        }
    })

    $('#prethodna').click(function(){
        if($(".cardA").is(":visible")){
            $('.cardA').hide();
            $('.card').show();
            console.log("The paragraph  is visible.");
        } else{
            $('.cardA').show();
            $('.card').hide();
            console.log("The paragraph  is hidden.");
        }
    })

    $('.videoPustiB').click(function(){
        $(".front").css("transform", "rotateY(-180deg)");
        $(".back").css("transform", "rotateY(0deg)");
        $('#sledeca').hide();
        $('#prethodna').hide();
    })

    // Strana B

    $('#sakriKadSekliknevelikiB').hide();

    $('.videoMaliD').click(function(){
        $(".front").css("transform", "rotateY(-180deg)");
        $(".back").css("transform", "rotateY(0deg)");
        $('#sledeca').hide();
        $('#prethodna').hide();

        $('#sakriKadSekliknemaliB').show();
        $('#sakriKadSekliknevelikiB').hide();
    })

    $('.video1').click(function(){
        $(".front").css("transform", "rotateY(0deg)");
        $(".back").css("transform", "rotateY(180deg)");
        $('#sledeca').show();
        $('#prethodna').show();
    })

    $('#exit').click(function(){
        $(".front").css("transform", "rotateY(0deg)");
        $(".back").css("transform", "rotateY(180deg)");
        $('#sledeca').show();
        $('#prethodna').show();
    })

    $('.videoPustiB').click(function(){
        $(".front").css("transform", "rotateY(-180deg)");
        $(".back").css("transform", "rotateY(0deg)");
        $('#sledeca').hide();
        $('#prethodna').hide();

        $('#sakriKadSekliknemaliB').hide();
        $('#sakriKadSekliknevelikiB').show();
    })

    // Strana A

    $('#sakriKadSekliknevelikiA').hide();

    $('.videoMaliDA').click(function(){
        $(".front").css("transform", "rotateY(-180deg)");
        $(".back").css("transform", "rotateY(0deg)");
        $('#sledeca').hide();
        $('#prethodna').hide();

        $('#sakriKadSekliknemaliA').show();
        $('#sakriKadSekliknevelikiA').hide();
    })

    $('.video1A').click(function(){
        $(".front").css("transform", "rotateY(0deg)");
        $(".back").css("transform", "rotateY(180deg)");
        $('#sledeca').show();
        $('#prethodna').show();
    })

    $('#exitA').click(function(){
        $(".front").css("transform", "rotateY(0deg)");
        $(".back").css("transform", "rotateY(180deg)");
        $('#sledeca').show();
        $('#prethodna').show();
    })

    $('.videoPustiA').click(function(){
        $(".front").css("transform", "rotateY(-180deg)");
        $(".back").css("transform", "rotateY(0deg)");
        $('#sledeca').hide();
        $('#prethodna').hide();

        $('#sakriKadSekliknemaliA').hide();
        $('#sakriKadSekliknevelikiA').show();
    })

    // Izbor polja

    // Strana B

    var data = '';

    $('.videom1').click(function(){
        data = $(this).data( "id");
    })

    $('.videom2').click(function(){
        data = $(this).data( "id");
    })

    $('.videom3').click(function(){
        data = $(this).data( "id");
    })

    $('.videom4').click(function(){
        data = $(this).data( "id");
    })

    $('.videom5').click(function(){
        data = $(this).data( "id");
    })

    $('.videom6').click(function(){
        data = $(this).data( "id");
    })

    // Strana A

    $('.videoPustiA').click(function(){
        // console.log('cao');
        data = $(this).data( "id");
    })

    $('.videom7').click(function(){
        data = $(this).data( "id");
    })

    $('.videom8').click(function(){
        data = $(this).data( "id");
    })

    $('.videom9').click(function(){
        data = $(this).data( "id");
    })

    $('.videom10').click(function(){
        data = $(this).data( "id");
    })

    $('.videom11').click(function(){
        data = $(this).data( "id");
    })

    $('.videom12').click(function(){
        data = $(this).data( "id");
    })



    // setovanje videa B

    $('#kokakola').click(function(){
        var div = 'videom' + data;
        $('.'+div+' video source').attr('src', "./video/beli.mp4");
        $("."+div+" video")[0].load();

        $.ajax({
            url: "./php/pustiVideoZasebno.php",
            type: "post",
            data: {
                'id': data,
                'naziv': 'belo',
            },
            success: function(data){
                console.log(data);
            }
        })
    })
    
    $('#fanta').click(function(){
        var div = 'videom' + data;
        $('.'+div+' video source').attr('src', "./video/crni.mp4");
        $("."+div+" video")[0].load();

        $.ajax({
            url: "./php/pustiVideoZasebno.php",
            type: "post",
            data: {
                'id': data,
                'naziv': 'crno',
            },
            success: function(data){
                console.log(data);
            }
        })
    })

    $('#lik').click(function(){
        var div = 'videom' + data;
        $('.'+div+' video source').attr('src', "./video/lik.mp4");
        $("."+div+" video")[0].load();

        $.ajax({
            url: "./php/pustiVideoZasebno.php",
            type: "post",
            data: {
                'id': data,
                'naziv': 'lik',
            },
            success: function(data){
                console.log(data);
            }
        })
    })

    $('#riba').click(function(){
        var div = 'videom' + data;
        $('.'+div+' video source').attr('src', "./video/riba.mp4");
        $("."+div+" video")[0].load();

        $.ajax({
            url: "./php/pustiVideoZasebno.php",
            type: "post",
            data: {
                'id': data,
                'naziv': 'riba',
            },
            success: function(data){
                console.log(data);
            }
        })
    })

    $('#tecnost').click(function(){
        var div = 'videom' + data;
        $('.'+div+' video source').attr('src', "./video/tecnost.mp4");
        $("."+div+" video")[0].load();

        $.ajax({
            url: "./php/pustiVideoZasebno.php",
            type: "post",
            data: {
                'id': data,
                'naziv': 'tecnost',
            },
            success: function(data){
                console.log(data);
            }
        })
    })

    // setovanje vide B

    // setovanje videa A

    $('.pustiVelikiVideo1').click(function(){
        $.ajax({
            url: "./php/pustiVideoVeliki.php",
            type: "post",
            data: {
                "video": 1
            },
            success: function(data){
                console.log(data);
            }
        })
    })

    $('.pustiVelikiVideo2').click(function(){
        $.ajax({
            url: "./php/pustiVideoVeliki.php",
            type: "post",
            data: {
                "video": 2
            },
            success: function(data){
                console.log(data);
            }
        })
    })

    $('#kokakolaA').click(function(){
        var div = 'videom' + data;
        $('.'+div+' video source').attr('src', "./video/beli.mp4");
        $("."+div+" video")[0].load();

        $.ajax({
            url: "./php/pustiVideoZasebno.php",
            type: "post",
            data: {
                'id': data,
                'naziv': 'belo',
            },
            success: function(data){
                console.log(data);
            }
        })
    })

    $('#fantaA').click(function(){
        var div = 'videom' + data;
        $('.'+div+' video source').attr('src', "./video/crni.mp4");
        $("."+div+" video")[0].load();

        $.ajax({
            url: "./php/pustiVideoZasebno.php",
            type: "post",
            data: {
                'id': data,
                'naziv': 'crno',
            },
            success: function(data){
                console.log(data);
            }
        })
    })

    $('#likA').click(function(){
        var div = 'videom' + data;
        $('.'+div+' video source').attr('src', "./video/lik.mp4");
        $("."+div+" video")[0].load();

        $.ajax({
            url: "./php/pustiVideoZasebno.php",
            type: "post",
            data: {
                'id': data,
                'naziv': 'lik',
            },
            success: function(data){
                console.log(data);
            }
        })
    })

    $('#ribaA').click(function(){
        var div = 'videom' + data;
        $('.'+div+' video source').attr('src', "./video/riba.mp4");
        $("."+div+" video")[0].load();

        $.ajax({
            url: "./php/pustiVideoZasebno.php",
            type: "post",
            data: {
                'id': data,
                'naziv': 'riba',
            },
            success: function(data){
                console.log(data);
            }
        })
    })

    $('#tecnostA').click(function(){
        var div = 'videom' + data;
        $('.'+div+' video source').attr('src', "./video/tecnost.mp4");
        $("."+div+" video")[0].load();

        $.ajax({
            url: "./php/pustiVideoZasebno.php",
            type: "post",
            data: {
                'id': data,
                'naziv': 'tecnost',
            },
            success: function(data){
                console.log(data);
            }
        })
    })

    // setovanje videa A

    // svuda popali video B

    $('#slajd').find('span').css('opacity','0.5');

    $('#kokakolaAll').click(function(){

        $('#slajd').find('span').css('opacity','0.5');
        $('#jedanAllB').css('opacity','1');

        $(this).find('.videoAll').css('opacity','1');

        for(var i = 1; i < 7; i++){
            $('.videom'+i+' video source').attr('src', "./video/beli.mp4");
            $(".videom"+i+" video")[0].load();
        }

        $.ajax({
            url: "./php/pustiBeliSve.php",
            type: "post",
            success: function(data){
                console.log(data);
            }
        })
    })

    $('#fantaAll').click(function(){

        $('#slajd').find('span').css('opacity','0.5');
        $('#dvaAllB').css('opacity','1');

        for(var i = 1; i < 7; i++){
            $('.videom'+i+' video source').attr('src', "./video/crni.mp4");
            $(".videom"+i+" video")[0].load();
        }

        $.ajax({
            url: "./php/pustiCrnoSve.php",
            type: "post",
            success: function(data){
                console.log(data);
            }
        })
    })

    $('#likAll').click(function(){

        $('#slajd').find('span').css('opacity','0.5');
        $('#triAllB').css('opacity','1');

        for(var i = 1; i < 7; i++){
            $('.videom'+i+' video source').attr('src', "./video/lik.mp4");
            $(".videom"+i+" video")[0].load();
        }

        $.ajax({
            url: "./php/pustiLikSve.php",
            type: "post",
            success: function(data){
                console.log(data);
            }
        })
    })

    $('#ribaAll').click(function(){

        $('#slajd').find('span').css('opacity','0.5');
        $('#cetiriAllB').css('opacity','1');

        for(var i = 1; i < 7; i++){
            $('.videom'+i+' video source').attr('src', "./video/riba.mp4");
            $(".videom"+i+" video")[0].load();
        }

        $.ajax({
            url: "./php/pustiRibaSve.php",
            type: "post",
            success: function(data){
                console.log(data);
            }
        })
    })

    $('#tecnostAll').click(function(){

        $('#slajd').find('span').css('opacity','0.5');
        $('#petAllB').css('opacity','1');

        for(var i = 1; i < 7; i++){
            $('.videom'+i+' video source').attr('src', "./video/tecnost.mp4");
            $(".videom"+i+" video")[0].load();
        }

        $.ajax({
            url: "./php/pustiTecnostSve.php",
            type: "post",
            success: function(data){
                console.log(data);
            }
        })
    })

    // svuda popali video B

    // svuda popali video A

    $('#slajdA').find('span').css('opacity','0.5');

    $('#kokakolaAllA').click(function(){

        localStorage.setItem('belaAll','1');
        localStorage.setItem('crnaAll','0');
        localStorage.setItem('likAll','0');
        localStorage.setItem('likusaAll','0');
        localStorage.setItem('tecnostAll','0');


        $('#slajdA').find('span').css('opacity','0.5');
        $('#jedanAll').css('opacity','1');


        for(var i = 7; i < 13; i++){
            $('.videom'+i+' video source').attr('src', "./video/beli.mp4");
            $(".videom"+i+" video")[0].load();
        }

        $.ajax({
            url: "./php/pustiBeliSveA.php",
            type: "post",
            success: function(data){
                console.log(data);
            }
        })
    })

    $('#fantaAllA').click(function(){

        localStorage.setItem('belaAll','0');
        localStorage.setItem('crnaAll','1');
        localStorage.setItem('likAll','0');
        localStorage.setItem('likusaAll','0');
        localStorage.setItem('tecnostAll','0');

        $('#slajdA').find('span').css('opacity','0.5');
        $('#dvaAll').css('opacity','1');

        for(var i = 7; i < 13; i++){
            $('.videom'+i+' video source').attr('src', "./video/crni.mp4");
            $(".videom"+i+" video")[0].load();
        }

        $.ajax({
            url: "./php/pustiCrnoSveA.php",
            type: "post",
            success: function(data){
                console.log(data);
            }
        })
    })

    $('#likAllA').click(function(){

        localStorage.setItem('belaAll','0');
        localStorage.setItem('crnaAll','0');
        localStorage.setItem('likAll','1');
        localStorage.setItem('likusaAll','0');
        localStorage.setItem('tecnostAll','0');

        $('#slajdA').find('span').css('opacity','0.5');
        $('#triAll').css('opacity','1');

        for(var i = 7; i < 13; i++){
            $('.videom'+i+' video source').attr('src', "./video/lik.mp4");
            $(".videom"+i+" video")[0].load();
        }

        $.ajax({
            url: "./php/pustiLikSveA.php",
            type: "post",
            success: function(data){
                console.log(data);
            }
        })
    })

    $('#ribaAllA').click(function(){

        localStorage.setItem('belaAll','0');
        localStorage.setItem('crnaAll','0');
        localStorage.setItem('likAll','0');
        localStorage.setItem('likusaAll','1');
        localStorage.setItem('tecnostAll','0');

        $('#slajdA').find('span').css('opacity','0.5');
        $('#cetiriAll').css('opacity','1');

        for(var i = 7; i < 13; i++){
            $('.videom'+i+' video source').attr('src', "./video/riba.mp4");
            $(".videom"+i+" video")[0].load();
        }

        $.ajax({
            url: "./php/pustiRibaSveA.php",
            type: "post",
            success: function(data){
                console.log(data);
            }
        })
    })

    $('#tecnostAllA').click(function(){

        localStorage.setItem('belaAll','0');
        localStorage.setItem('crnaAll','0');
        localStorage.setItem('likAll','0');
        localStorage.setItem('likusaAll','0');
        localStorage.setItem('tecnostAll','1');

        $('#slajdA').find('span').css('opacity','0.5');
        $('#petAll').css('opacity','1');

        for(var i = 7; i < 13; i++){
            $('.videom'+i+' video source').attr('src', "./video/tecnost.mp4");
            $(".videom"+i+" video")[0].load();
        }

        $.ajax({
            url: "./php/pustiTecnostSveA.php",
            type: "post",
            success: function(data){
                console.log(data);
            }
        })
    })

    // svuda popali video A

    // Izbor polja

    // slick slider

    $('#slajd').slick({
        lazyLoad: 'ondemand',
        slidesToShow: 2,
        slidesToScroll: 2,
        dots: false,
        prevArrow: false,
        nextArrow: false
    });

    $('#slajdA').slick({
        lazyLoad: 'ondemand',
        slidesToShow: 2,
        slidesToScroll: 2,
        dots: false,
        prevArrow: false,
        nextArrow: false
    });

    // slick slider
</script>