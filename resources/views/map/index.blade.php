@extends('layouts.nav')

@section('title', 'マップページ')

@section('content')
<h1 class="tytle">○○商店街 イラストMAP</h1>
<p class="invite">気になるお店のアイコンをクリック！
    <br>各お店の詳細ページに飛べます
</p>
<img class="center_img" src="{{ asset('img/ALLmap.png') }}" usemap="#storemap" alt="Store Map" width=1200>

<map name="storemap">
    <area shape="rect" coords="622,76,805,266" href="{{ route('map.hamburger') }}" alt="Hamburger Shop" class="tooltip"> 
    <span class="tooltiptext">佐々木バーガー</span>
    <area shape="rect" coords="88,146,248,303" href="{{ route('map.shuttered1') }}" alt="shuttered Shop1"
        class="tooltip">
    <span class="tooltiptext">シャッター店</span>

</map>
@endsection