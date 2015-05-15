<?php

$omikuji = ['大吉', '吉', '中吉', '小吉', '凶'];

$unsei = array_rand($omikuji);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>おみくじ</title>
</head>
<body>
    <h1>おみくじ</h1>
    <p>今日の運勢 「<?php echo $omikuji[$unsei]; ?>」！</p>
    <p><a href="">もう一度</a></p>
</body>
</html>

