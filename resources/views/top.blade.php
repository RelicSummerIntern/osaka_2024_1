<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>地域商店街応援サイト<br>ジモマップ</title>
    <style>
.home {
    background-image: url("{{ asset('img/arcade.png') }}");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 100%;
    background-attachment: fixed; /* 背景を固定 */
}

    </style>
</head>

<body class='home'>
<div id="tooltip" style="position: absolute; display: none;"></div>

    <nav>
        <ul>
            <li class="{{ Request::is('/') ? 'current' : '' }}">
                <a href="{{ url('/') }}">トップ</a>
            </li>
            <li>
                <a href="{{ url('/login') }}">管理者ログイン</a>
            </li>
        </ul>
    </nav>

        <!-- <img src="{{ asset('img/arcade.png') }}" alt="商店街の画像" class="center_img">     -->
        <h1 class="tytle2"> 地域商店街応援<br>
            ジモマップ</h1>
        
<p class="invite">気になる商店街を選んで下のボタンをクリック！！
</p>
<div class="button-container">
    <a href="{{ url('/home1') }}" class="btn" id="slide-link">商店街を見てみる</a>
</div>
<div class="slideshow-container">
    <div class="slide">
        <img src="{{ asset('img/hata.jpg') }}" alt="Image 0" class="slide-image" data-tooltip="大阪～旗の台東口通り商店会～">
    </div>
    <div class="slide">
        <img src="{{ asset('img/DSC.JPG') }}" alt="Image 2" class="slide-image" data-tooltip="京都～西新道錦会商店街～">
    </div>
    <div class="slide">
        <img src="{{ asset('img/5.jpg') }}" alt="Image 3" class="slide-image" data-tooltip="大分～新町通り商店街～">
    </div>

    <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
    <button class="next" onclick="changeSlide(1)">&#10095;</button>
</div>
<p class="invite">  
    日本には
    地域住民に愛される商店街がいっぱい存在！<br>
    そんな商店街の魅力をそこのあなたにも大紹介！<br>
    
</p>

<script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>