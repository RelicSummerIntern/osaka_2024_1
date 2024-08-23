<!-- 通知詳細ページ -->

@extends('layouts.nav')

@section('title', $notification->title)

@section('content')
    <h1 class="tytle">{{ $notification->title }}</h1>
    <div class="right-align">作成日：{{ $notification->created_at }}</div>
    <div class="right-align">最終更新日：{{ $notification->updated_at }}</div>
    <div class="notification-body">{!! nl2br(e($notification->body)) !!}</div>

    <hr>
@endsection
