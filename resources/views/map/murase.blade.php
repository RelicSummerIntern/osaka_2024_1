@extends('layouts.nav')

@section('title', 'むら瀬')

@section('content')
    <div style="background-color: #ffffff;">
        <div style="font-size: 1px">　</div>
        <h1 class='tytle'>むら瀬</h1>
        <div class="map-bar"></div>
        <div style="font-size: 1px">　</div>
    </div>
    <br>
    <div class="scheduleAndPicture">
        <div class="schedule" style="font-size: 20px">
            0123-45-6789<br>
            営業時間：○○<br>
            定休日：○○
        </div>
        <div class="scheduleAndPicture_item">
            <img src="{{ asset('img/murase_real.jpg') }}" usemap="#storemap" alt="Store Map" style="height: 50vh; width: auto;">
        </div>
        
    </div>
    <div class="map-bar"></div>
    <h3 style="text-align: center;">
        地元の皆さんにも愛されるOO商店街の名物！<br>
        皆さんも是非一度食べに来てください！！<br>
        毎週土曜日は特売日です！
    </h3>
    <div class="map-bar"></div>

    <h2 style="text-align: center;">メニュー（抜粋）はこちら</h2>
    <h3 style="text-align: center;">揚げもん</h3>
    <ul style="text-align: center;">
        <li>コロッケ：60円</li>
        <li>ミンチカツ：130円</li>
        <li>ハムカツ：120円</li>
        <!-- <li>ウィンナーカツ：120円</li>
        <li>クリームコロッケ：120円</li> -->
        <li>串カツ：130円</li>
        <!-- <li>ロースとんかつ：320円</li>
        <li>ヘレカツ：120円</li>
        <li>微うかつ：100円</li> -->
    </ul>
    <h3 style="text-align: center;">肉</h3>
    <ul style="text-align: center;">
        <li>とんかつ</li>
        <li>合挽ミンチ</li>
        <li>ロースうす切</li>
    </ul>



@endsection