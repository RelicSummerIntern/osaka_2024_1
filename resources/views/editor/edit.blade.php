<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お知らせ管理</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .logout-form {
            display: inline;
        }
        .logout-form button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }
        .logout-form button:hover {
            background-color: #0056b3;
        }
        .success-message {
            color: green;
            margin-bottom: 20px;
        }
        .add-button {
            margin-bottom: 20px;
        }
        .add-button button {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }
        .add-button button:hover {
            background-color: #218838;
        }
        .notification-list {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        .notification-list li {
            margin-bottom: 15px;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        .notification-list a {
            font-weight: bold;
            text-decoration: none;
            color: #333;
        }
        .notification-list a:hover {
            text-decoration: underline;
        }
        .button-group {
            margin-top: 5px;
        }
        .button-group button {
            background-color: #d6d6d6; /* 薄い灰色 */
            color: #333; /* テキストの色をダークグレーに */
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 5px;
        }
        .button-group button:hover {
            background-color: #bfbfbf; /* ホバー時のさらに薄い灰色 */
        }
        .button-group .delete-button {
            background-color: #d6d6d6;
            color: #dc3545; /* 赤色 */
        }
        .button-group .delete-button:hover {
            background-color: #bfbfbf; /* ホバー時の少し暗い赤色 */
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- ヘッダーセクション -->
        <div class="header">
            <h1>お知らせ編集画面</h1>
            <!-- ログアウトボタン -->
            <form action="{{ route('logout') }}" method="POST" class="logout-form" id="logout-form">
                @csrf
                <button type="submit">ログアウト</button>
            </form>
        </div>

        <!-- 成功メッセージ -->
        @if (session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        <!-- 追加ボタン -->
        <div class="add-button">
            <a href="/edit/create">
                <button type="button">追加</button>
            </a>
        </div>

        <!-- 通知リスト -->
        <ul class="notification-list">
            @foreach($notifications as $notification)
                <li>
                    <a href='/edit/preview/{{ $notification->notification_id }}'>{{ $notification->title }}</a>
                    <div class="button-group">
                        <!-- 編集ボタン -->
                        <a href="/edit/{{ $notification->notification_id }}">
                            <button type="button">編集</button>
                        </a>
                        <!-- 削除ボタン -->
                        <a href="/edit/delete/{{ $notification->notification_id }}" class="delete-link">
                            <button type="button" class="delete-button">削除</button>
                        </a>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

    <script>
        // 削除ボタンがクリックされたときの確認ダイアログ
        document.querySelectorAll('.delete-link').forEach(function(link) {
            link.addEventListener('click', function(event) {
                if (!confirm('本当に削除しますか？')) {
                    event.preventDefault(); // リンクのデフォルトの動作をキャンセル
                }
            });
        });

        // ログアウトボタンがクリックされたときの確認ダイアログ
        document.getElementById('logout-form').addEventListener('submit', function(event) {
            if (!confirm('本当にログアウトしますか？')) {
                event.preventDefault(); // フォームのデフォルトの動作をキャンセル
            }
        });
    </script>
</body>
</html>
