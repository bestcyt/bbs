<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Swiper demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/swiper/dist/css/swiper.min.css') }}">

    <!-- Demo styles -->
    <style>
        html, body {
            position: relative;
            height: 100%;
        }
        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color:#000;
            margin: 0;
            padding: 0;
        }
        .swiper-container {
            width: 100%;
            height: 100%;
        }
        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }
    </style>
</head>
<body>

<div class="audio-box" style="display: none">
    <audio id="myaudio" src="../audio/home.mp3"   loop="loop" autoplay="autoplay" controls="controls">
        你的浏览器不支持HTML5
    </audio>
</div>
<!-- Swiper -->
<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide" >
            <div><img src="{{ asset('img/2.png') }}" >
                <br>
                <p>ddddddddddddddddddddddddddddddddddddddd</p>
                <p>ddddddddddddddddddddddddddddddddddddddd</p>
            </div>
        </div>
        <div class="swiper-slide">
            <div><img src="{{ asset('img/22.png') }}" >
                <br>
                <p>ddddddddddddddddddddddddddddddddddddddd</p>
                <p>ddddddddddddddddddddddddddddddddddddddd</p>
            </div>
        </div>
        <div class="swiper-slide">
            <div><img src="{{ asset('img/test.png') }}" >
                <br>
                <p>ddddddddddddddddddddddddddddddddddddddd</p>
                <p>ddddddddddddddddddddddddddddddddddddddd</p>
            </div>
        </div>
        <div class="swiper-slide">
            <div><img src="{{ asset('img/test1.png') }}" >
                <br>
                <p>ddddddddddddddddddddddddddddddddddddddd</p>
                <p>ddddddddddddddddddddddddddddddddddddddd</p>
            </div>
        </div>
        {{--<div class="swiper-slide"><img src="../img/17.jpg"></div>--}}
        {{--<div class="swiper-slide"><img src="../img/19.jpg"></div>--}}
        {{--<div class="swiper-slide"><img src="../img/24.jpg"></div>--}}
        {{--<div class="swiper-slide"><img src="../img/127.jpg"></div>--}}
        {{--<div class="swiper-slide"><img src="../img/130.jpg"></div>--}}
        {{--<div class="swiper-slide"><img src="../img/143.jpg"></div>--}}
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>

<!-- Swiper JS -->
<script src="{{ asset('vendor/swiper/dist/js/swiper.js') }}"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.swiper-container', {
        direction: 'vertical',
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
</script>
</body>
</html>
