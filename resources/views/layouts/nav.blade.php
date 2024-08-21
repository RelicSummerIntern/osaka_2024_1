<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
</head>
<body>
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
    </ul>
</nav>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
