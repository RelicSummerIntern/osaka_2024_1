<!-- 「お知らせ」のトップ画面 -->
 
@extends('layouts.nav')

@section('title', 'お知らせ')

@section('content')
<h1 class="tytle">商店街からのお知らせ</h1>
    <ul>
        @foreach($notifications as $notification)
            <li><a href='http://localhost/notifications/{{ $notification -> notification_id }}'>{{ $notification->title }}</a></li>
        @endforeach
    </ul>
    @endsection
