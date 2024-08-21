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
    <!-- 追加ボタン -->
    <!-- <a href="/notifications/create" style="display: inline-block; margin-bottom: 10px; padding: 5px 10px; border: 1px solid #000; background-color: #f0f0f0; text-decoration: none;">(追加)</a> -->
    @if (session('success'))
        <div style="color: green; margin-bottom: 20px;">
            {{ session('success') }}
        </div>
    @endif
    <a href="/edit/create">
        <button type="button">追加</button>
    </a>
    <ul>
        @foreach($notifications as $notification)
            <li>
                <a href='http://localhost/notifications/{{ $notification -> notification_id }}'>{{ $notification->title }}</a></li>
            <div>
                <!-- 編集ボタン -->
                <a href="/edit/update">
                    <button type="button">編集</button>
                </a>

                <!-- 削除ボタン -->
                <a href="/edit/delete/{{ $notification -> notification_id }}'">
                    
                    <button type="button">削除</button>
                </a>
            </div>
        @endforeach
    </ul>

</body>
</html>
