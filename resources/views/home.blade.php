<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>○○商店街　ジモマップ</title>
    <style>
        .home {
            background-image: url('{{ asset('img/arcade.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;

        }
    </style>
</head>

<body class='home'>
    <nav>
        <ul>
            <li class="{{ Request::is('/') ? 'current' : '' }}">
                <a href="{{ url('/') }}">ホーム</a>
            </li>
            <li class="{{ Request::is('map') ? 'current' : '' }}">
                <a href="{{ url('/map') }}">マップ</a>
            </li>
            <li class="{{ Request::is('notifications') ? 'current' : '' }}">
                <a href="{{ url('/notifications') }}">お知らせ</a>
            </li>
            <li>
                <a href="#">アクセス</a>
            </li>
            <li>
                <a href="{{ url('/login') }}">管理者ログイン</a>
            </li>
        </ul>
    </nav>

        <!-- <img src="{{ asset('img/arcade.png') }}" alt="商店街の画像" class="center_img">     -->
        <h1 class="tytle"> ○○商店街<br>
            ジモマップ</h1>


            <div class="content">
        <div class="box_switch">
            <h3>MAP</h3>
            商店街の並びが一目でわかる！<br>
            かわいいイラストマップ
        </div>

        <div class="box_switch">
            <h3>お知らせ</h3>
            商店街には話題がいっぱい！<br>
            記事を読んで商店街の魅力をもっと知ろう
        </div>

        <div class="box_switch">
            <h3>アクセス</h3>
            商店街への行き方や近くの駐車場などを紹介！<br>
            気軽に商店街まで来よう！
        </div>
    </div>
</body>

</html>