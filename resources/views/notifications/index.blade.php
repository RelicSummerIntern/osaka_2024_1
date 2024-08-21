<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お知らせ</title>
</head>
<body>
    <x-link-on-the-top/>
    <h1>お知らせ</h1>
    <ul>
        @foreach($notifications as $notification)
            <li><a href='http://localhost/notifications/{{ $notification -> notification_id }}'>{{ $notification->title }}</a></li>
        @endforeach
    </ul>
</body>
</html>