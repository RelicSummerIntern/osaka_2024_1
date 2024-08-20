<html>

<head>
    <title>zimo_map</title>
    <style>
        body {
            font-size: 16px;
            color: #999;
        }


    </style>
</head>

<body>
    <h1>○○商店街　簡単MAP</h1>
    <img src="{{ asset('img/ALLmap.png') }}" usemap="#storemap" alt="Store Map" width=1200>

<map name="storemap">
<area shape="rect" coords="622,76,805,266" href="{{ route('map.hamburger') }}" alt="Hamburger Shop">

</map>

</body>

</html>