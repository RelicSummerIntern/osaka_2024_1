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
    <button id="goToAddNotification", onclick="goToAddNotification()">追加</button>
    <ul>
        @foreach($notifications as $notification)
            <li>
                <a href='http://localhost/notifications/{{ $notification -> notification_id }}'>{{ $notification->title }}</a></li>
            <div>
                <!-- 編集ボタン -->
                <!-- <a href='/notifications/{{ $notification->notification_id }}/edit' style="display: inline-block; margin-left: 10px; padding: 5px 10px; border: 1px solid #000; background-color: #f0f0f0; text-decoration: none;">(編集)</a> -->
                <button id="goToUpdateNotification", onclick="goToUpdateNotification()">編集</button>

                <!-- 削除ボタン -->
                <button id="goToDeleteNotification", onclick="goToDeleteNotification()">削除</button>
            </div>

        @endforeach
    </ul>

    <script>
        // 'use strict';
        // const addNotification = document.getElementById("addNotification");
        // const updateNotification = document.getElementById("updateNotification");
        // const deleteNotification = document.getElementById("deleteNotification");
        function goToAddNotification(){
            
        }

    </script>
</body>
</html>