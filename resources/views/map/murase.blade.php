@extends('layouts.nav')

@section('title', 'むら瀬')

@section('content')
    <div style="background-color: #ffffff;">
        <div style="font-size: 1px">　</div>
        <h1 class='tytle'>むら瀬</h1>
        <div class="map-bar"></div>
        <div style="font-size: 1px">　</div>
    </div>
    <h3 style="text-align: center;">
        地元の皆さんにも愛される西新道錦会商店街の名物！<br>
        皆さんも是非一度買いに来てください！！<br>
    </h3>
    
    <div class="map-bar"></div>

    <div >
    <h2 style="text-align: center; background-color: #F5F0E6;">
        アクセス
    </h2>
        <!-- <div class="schedule" style="font-size: 20px"> -->
        <div style="font-size: 20px;">
            0123-45-6789<br>
            営業時間：9:00～18:00<br>
            定休日：日曜日
        </div>
        <div class="scheduleAndPicture_item">
            <img src="{{ asset('img/murase_real.jpg') }}" usemap="#storemap" alt="Store Map" style="height: 50vh; width: auto;">
        </div>
        
    </div>
    <div class="map-bar"></div>

    <h2 style="text-align: center; background-color: #F5F0E6;">
        メニュー（抜粋）
    </h2>
    <div class="menu-box">
        <h3 style="text-align: center;">揚げもん</h3>
        <ul>
            <li style="text-align: left">コロッケ</li>
            <li style="text-align: left">ミンチカツ</li>
            <li style="text-align: left">ハムカツ</li>
            <li style="text-align: left">串カツ</li>
        </ul>
        <h3 style="text-align: center;">肉</h3>
        <ul>
            <li style="text-align: left">とんかつ</li>
            <li style="text-align: left">合挽ミンチ</li>
            <li style="text-align: left">ロースうす切</li>
        </ul>
    </div>
    <div>
        <a href="{{ url('/map') }}" class="custom-button">イラストマップに戻る</a>
    </div>



@endsection