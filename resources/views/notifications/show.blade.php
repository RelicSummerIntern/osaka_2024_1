<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $notification->title }}</title>
</head>
<body>
    <x-link-on-the-top/>
    <h1> {{ $notification->title }} </h1>
    <div>作成日：{{ $notification->created_at }}</div>
    <div>最終更新日：{{ $notification->updated_at }}</div>
    <div>{{ $notification->body }}</div>
</body>
</html>