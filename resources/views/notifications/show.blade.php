<!-- 通知詳細ページ -->

@extends('layouts.nav')

@section('title', $notification->title)

@section('content')
    <h1 class="tytle">{{ $notification->title }}</h1>
    <div>作成日：{{ $notification->created_at }}</div>
    <div>最終更新日：{{ $notification->updated_at }}</div>
    <div>{{ $notification->body }}</div>

    <hr>
    <div style="display: flex; justify-content: space-between;">
        @if($prevNotification)
            <a href="{{ route('notifications.show', ['id'=> $prevNotification->notification_id]) }}">
                前の記事
            </a>
        @else
            <span class="disabled-link">前の記事</span>
        @endif

        @if($nextNotification)
            <a href="{{ route('notifications.show', ['id'=> $nextNotification->notification_id]) }}">
                次の記事
            </a>
        @else
            <span class="disabled-link">次の記事</span>
        @endif
    </div>
@endsection
