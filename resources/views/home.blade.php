<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>西新道錦会商店街</title>
    <style>
        .home {
            background-image: url("{{ asset('img/kyoto.png') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100%;
            background-attachment: fixed; /* 背景を固定 */
        }

    </style>
</head>

<body class='home'>
    <nav>
        <ul>
            <li class="{{ Request::is('/') ? 'current' : '' }}">
                <a href="{{ url('/') }}">トップ</a>
            </li>
            <li class="{{ Request::is('map') ? 'current' : '' }}">
                <a href="{{ url('/map') }}">マップ</a>
            </li>
            <li class="{{ Request::is('notifications') ? 'current' : '' }}">
                <a href="{{ url('/notifications') }}">お知らせ</a>
            </li>
            <li>
                <a href="/access">アクセス</a>
            </li>
        </ul>
    </nav>

        <!-- <img src="{{ asset('img/arcade.png') }}" alt="商店街の画像" class="center_img">     -->
        <h1 class="tytle2"> 西新道錦会商店街</h1>
<p class="invite">
地元民に愛されて早半世紀<br>
    歴史の町京都に根差した昔ながらの商店街<br>
    
    詳しくは下のページから！！
</p>

    <div class="content2">
        <div class="box_switch">
            <a href="{{ url('/map') }}">
            <h3>MAP</h3>
            <p>商店街の並びが一目でわかる！<br>
            かわいいイラストマップ</p>
        </div>
        </a>

        <div class="box_switch">
            <a href="{{ url('/notifications') }}">
            <h3>お知らせ</h3>
            <p>商店街には話題がいっぱい！<br>
            記事を読んで商店街の魅力をもっと知ろう</p></a>
        </div>

        <div class="box_switch">
           
            <a href="{{ url('/access') }}">
            <h3>アクセス</h3>
            <p>商店街への行き方や近くの駐車場などを紹介！<br>
            気軽に商店街まで来よう！</p></a>
        </div>
    </div>
</body>

</html>