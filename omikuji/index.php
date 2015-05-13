<?php

$omikuji = array('小吉', '大吉', '凶', '末吉',  'もう一度');

$result = $omikuji[mt_rand(0, count($omikuji)-1)];

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>おみくじ</title>
</head>
<body>
    <h1>おみくじ</h1>
    <p>今日の運勢 「<?php echo $result; ?>」！</p>
    <p><a href="<?php echo $_SERVER["SCRIPT_NAME"] ?>">もう一度</a></p>
</body>
</html>

