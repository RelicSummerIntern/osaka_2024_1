<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>削除確認</title>
</head>
<body>
    <h1>{{ $notification->title }}を本当に削除しますか？</h1>

    <form action="{{ route('notifications.destroy', ['id' => $notification->notification_id]) }}" method="POST">
        @csrf
        <button type="submit">削除する</button>
    </form>
    <button type="submit">
    <a href="/edit/">キャンセル</a></button>
</body>
</html>
