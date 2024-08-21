<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Notification</title>
</head>
<body>
    <h1>お知らせを新規作成</h1>

    <!-- 成功メッセージの表示 -->
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <!-- バリデーションエラーの表示 -->
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    
    <form action="{{ route('notifications.store_for_create') }}" method="POST"> 
    <!-- action属性：フォームが送信される先のURLを指定する。 -->
        @csrf
        <div>
            <label for="title">タイトル：</label>
            <!-- <input type="text" name="title" id="title" value="{{ old('title') }}"> -->
            <input type="text" name="title" id="title">
        </div>

        <div>
            <label for="body">本文：</label>
            <!-- <textarea name="body" id="body">{{ old('body') }}</textarea> -->
            <textarea name="body" id="body"></textarea>
        </div>

        <button type="submit">投稿</button>
    </form> 
    <div>
        <br>
        <a href="{{ route('edit') }}">お知らせ編集ページに戻る</a>
    </div>

</body>
</html>
