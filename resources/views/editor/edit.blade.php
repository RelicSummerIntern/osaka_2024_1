
@extends('layouts.nav')

@section('title', 'お知らせ管理')

@section('content')
<h1 class="tytle">お知らせ編集画面</h1>
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

    @endsection

