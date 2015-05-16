<?php

$omikuji = [
        '大吉' => '大吉です。もっともよい運勢です。',
        '吉' => '吉です',
        '中吉' => '中吉です。ちょうど真ん中の運勢です。',
        '小吉' => '小吉です',
        '凶' => '凶です。明日はもうちょっとよいでしょう。'
];

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
    <p>今日の運勢 「<?php echo $unsei; ?>」！</p>
    <p>「<?php echo $omikuji[$unsei]; ?>」</p>
    <p><a href="">もう一度</a></p>
</body>
</html>

