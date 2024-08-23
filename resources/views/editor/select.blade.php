<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            color: #333;
            text-align: center;
        }
        h1 {
            font-size: 24px;
            margin: 20px 0;
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
            text-align: left;
            margin: 0 auto;
            display: inline-block;
        }
        li {
            margin: 20px 0;
        }
        a {
            text-decoration: none;
            color: #007bff;
            font-size: 22px;
            padding: 15px 25px;
            border-radius: 5px;
            display: block;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: background-color 0.3s, color 0.3s;
            max-width: 400px; /* 最大幅を指定して見やすく */
            margin: 0 auto; /* 中央揃え */
        }
        a:hover {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>
<body>
    <h1>ここでは各商店街のお知らせを編集できます<br>変種する商店街を選択してください</h1>
    <ul>
        <li><a href="/com">旗の台東口通り商店会</a></li>
        <li><a href="/edit">西新道錦会商店街</a></li>
        <li><a href="/com">新町通り商店街</a></li>
    </ul>
</body>
</html>
