@extends('layouts.nav')

@section('title', 'マップページ')

@section('content')
<style>
    /* システムフォントの指定 */
    .tytle {
        font-family: 'HG行書体'; /* 行書体フォント */
        font-size: 40px;
        font-weight: bold;
        text-align: center;
    }

    .Invite {
        font-family: 'ＭＳ 明朝'; /* 太くて見やすいフォント */
        font-size: 24px;
        font-weight: bold; /* 太め */
        text-align: center;
    }

    .center_img {
        display: block;
        margin: 0 auto;
    }
</style>

<h1 class="tytle">西新道錦会商店街 イラストMAP</h1>
<p class="Invite">気になるお店のアイコンをクリック！
    <br>各お店の詳細ページに飛べます
</p>
<img class="center_img" src="{{ asset('img/arcade2.png') }}" usemap="#storemap" alt="Store Map" width="100%">
<map name="storemap">
    <area shape="rect" coords="1005,277,8051230,467" href="{{ route('map.murase') }}" alt="Murase" data-tooltip="お肉屋～むら瀬～ #お肉 #コロッケ">
    <area shape="rect" coords="770,140,987,340" href="{{ route('map.shuttered1') }}" alt="shuttered Shop1" data-tooltip="シャッター店 #新店舗募集中">
    <area shape="rect" coords="505,0,738,197" href="{{ route('map.hamburger') }}" alt="shuttered Shop1" data-tooltip="花屋～新島花屋～ #きれいなお花売ってます">
    <area shape="rect" coords="90,236,313,422" href="{{ route('map.shuttered1') }}" alt="shuttered Shop1" data-tooltip="八百屋～立花～ #産地直送">
    <area shape="rect" coords="328,391,526,583" href="{{ route('map.shuttered1') }}" alt="shuttered Shop1" data-tooltip="魚屋～錦魚～ #〆鯖あります">
    <area shape="rect" coords="591,508,811,703" href="{{ route('map.shuttered1') }}" alt="shuttered Shop1" data-tooltip="シャッター店 #新店舗募集中">
</map>
@endsection
