<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polica</title>
    <link rel="stylesheet" href="./style/style1.css">
</head>
<body>
    <div class="header">

    </div>
    <div class="cart">
        <div class="front">
            <div class="velikiVideo">

            </div>
            <div class="maliVideo1" data-id='1'>
                <video autoplay muted loop class='videoMali'>
                    <source src="./video/fanta.mp4" type="video/mp4" id='maliVideo1'>
                </video>
            </div>
            <div class="maliVideo2" data-id='2'>
                <video autoplay muted loop class='videoMali'>
                    <source src="./video/fanta.mp4" type="video/mp4" id='maliVideo2'>
                </video>
            </div>
            <div class="maliVideo3">
                <video autoplay muted loop class='videoMali'>
                    <source src="./video/fanta.mp4" type="video/mp4" id='maliVideo3'>
                </video>
            </div>
            <div class="maliVideo4">
                <video autoplay muted loop class='videoMali'>
                    <source src="./video/fanta.mp4" type="video/mp4" id='maliVideo4'>
                </video>
            </div>
            <div class="maliVideo5">
                <video autoplay muted loop class='videoMali'>
                    <source src="./video/fanta.mp4" type="video/mp4" id='maliVideo5'>
                </video>
            </div>
            <div class="maliVideo6">
                <video autoplay muted loop class='videoMali'>
                    <source src="./video/fanta.mp4" type="video/mp4" id='maliVideo6'>
                </video>
            </div>

            <div class="opcije jedan">
                <div class='video1'>
                    <label>
                        <input type="checkbox" name="coke" id='kokakola'>
                        <span id='jedan'>
                            <video autoplay muted loop id="myVideo1" class='video'>
                                <source src="./video/coke.mp4" type="video/mp4">
                            </video>
                        </span>
                    </label>
                </div>
                <div class='video1'>
                    <label>
                        <input type="checkbox" name="fanta" id='fanta'>
                        <span id='dva'>
                            <video autoplay muted loop id="myVideo2" class='video'>
                                <source src="./video/fanta.mp4" type="video/mp4">
                            </video>
                        </span>
                    </label>
                </div>
            </div>
        </div>
        <div class="back">

        </div>

        <div id='izbor'>
            <a href="#" id="kokakola1">Kokakola</a></br>
            <a href="#" id="fanta1">Fanta</a>
        </div>
    </div>
</body>
</html>

<script src="./js/jquery-3.4.1.min.js"></script>
<script>

    $('#myVideo1').on('click', function(){
        
        $('#jedan').css('opacity', '1');
        $('#dva').css('opacity', '0.3');

        console.log('kliknuo 1');

        $.ajax({
            url: "./php/pustiKokakoluSve.php",
            success: function(data){
                console.log(data);
            }
        })

    });

    $('#myVideo2').on('click', function(){
        
        $('#dva').css('opacity', '1');
        $('#jedan').css('opacity', '0.3');

        console.log('kliknuo 2');

        $.ajax({
            url: "./php/pustiFantuSve.php",
            success: function(data){
                console.log(data);
            }
        })

    });

    var data = '';

    $('.maliVideo1').click(function(){
        $('#izbor').css('display','block');
        data = $('.maliVideo1').data( "id");
    })

    $('.maliVideo2').click(function(){
        $('#izbor').css('display','block');
        data = $('.maliVideo2').data( "id");
    })

    $('#kokakola1').click(function(){
        $('#izbor').css('display','none');

        var div = 'maliVideo' + data;
        $('.'+div+' video source').attr('src', "./video/coke.mp4");
        $("."+div+" video")[0].load();

        $.ajax({
            url: "./php/pustiVideoZasebno.php",
            type: "post",
            data: {
                'id' : data,
                'naziv' : 'kokakola',
            },
            success: function(data){
                console.log(data);
            }
        })
    })
    
    $('#fanta1').click(function(){
        $('#izbor').css('display','none');

        var div = 'maliVideo' + data;
        $('.'+div+' video source').attr('src', "./video/fanta.mp4");
        $("."+div+" video")[0].load();

        $.ajax({
            url: "./php/pustiVideoZasebno.php",
            type: "post",
            data: {
                'id' : data,
                'naziv' : 'fanta',
            },
            success: function(data){
                console.log(data);
            }
        })
    })

</script>