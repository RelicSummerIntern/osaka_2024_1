<!-- 通知詳細ページ -->

@extends('layouts.nav')

@section('title', $notification->title)

@section('content')
    <h1 class="tytle">{{ $notification->title }}</h1>
    <div class="right-align">作成日：{{ $notification->created_at }}</div>
    <div class="right-align">最終更新日：{{ $notification->updated_at }}</div>
    <div class="notification-body">{!! nl2br(e($notification->body)) !!}</div>

    <hr>
    <div class="container">
        <div class="body">
            @if($prevNotification)
                <a href="{{ route('notifications.show', ['id'=> $prevNotification->notification_id]) }}">
                    前の記事
                </a>
            @else
            <span class="disabled-link">前の記事</span>
            @endif
        </div>

        <!-- 一覧に戻るボタン -->
        <div class="body">
            <a href="{{ route('notifications.index') }}">一覧に戻る</a>
        </div>

        <div class="body">
            @if($nextNotification)
                <a href="{{ route('notifications.show', ['id'=> $nextNotification->notification_id]) }}">
                    次の記事
                </a>
            @else
                <span class="disabled-link">次の記事</span>
            @endif
        </div>
    </div>
@endsection
