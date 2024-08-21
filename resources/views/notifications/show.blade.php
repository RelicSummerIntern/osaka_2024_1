<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $notification->title }}</title>
    <style>
        .disabled-link {
            color: #cccccc; /* 色を薄くする */
            pointer-events: none; /* クリックできないようにする */
            text-decoration: none; /* アンダーラインを削除する */
        }
    </style>
</head>
<body>
    <x-link-on-the-top/>
    <h1> {{ $notification->title }} </h1>
    <div>作成日：{{ $notification->created_at }}</div>
    <div>最終更新日：{{ $notification->updated_at }}</div>
    <div>{{ $notification->body }}</div>

    <hr>
    @if($prevNotification)
        <a href="{{ route('notifications.show', ['id'=> $prevNotification->notification_id]) }}">
            前の記事
        </a>
    @else
        <span class="disabled-link">前の記事</span>
    @endif
    &nbsp;&nbsp;&nbsp;
    @if($nextNotification)
        <a href="{{ route('notifications.show', ['id'=> $nextNotification->notification_id]) }}">
            次の記事
        </a>
    @else
        <span class="disabled-link">次の記事</span>
    @endif
</body>
</html>