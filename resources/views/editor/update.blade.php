<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お知らせの編集</title>
    <!-- CSSやJavaScriptのリンクがあればここに記述 -->
</head>
<body>
    <h1>お知らせの編集</h1>

    <!-- フォームの開始 -->
    <form action="{{ route('notifications.update', ['id' => $notification->notification_id]) }}" method="POST">
        @csrf
        <!-- タイトルの入力フィールド -->
        <div>
            <label for="title">タイトル:</label>
            <input type="text" id="title" name="title" value="{{ old('title', $notification->title) }}" required>
        </div>

        <!-- 本文の入力フィールド -->
        <div>
            <label for="body">本文:</label>
            <textarea id="body" name="body" rows="4" required>{{ old('body', $notification->body) }}</textarea>
        </div>

        <!-- 保存ボタン -->
        <div>
            <button type="submit">保存</button>
        </div>
    </form>

    <!-- エラーメッセージがあれば表示 -->
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- JavaScriptがあればここに記述 -->
</body>
</html>
