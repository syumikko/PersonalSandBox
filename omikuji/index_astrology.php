<?php

$asterism = ['牡羊', '牡牛', '双子', '蟹', '獅子', '乙女', '天秤', '蠍', '射手', '山羊', '水瓶', '魚'];
shuffle($asterism);

?>

<DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>今日の星座ランキング</title>
</head>
<body>
  <h2>今日の星座ランキング</h2>
  <p>ランキング一覧</p>
  <?PHP
  $ranking_number = 1;
  foreach ($asterism as $ranking){ 
  ?>
  <p><?php echo $ranking_number; echo '. '; echo $ranking ?></p>
  <?php $ranking_number ++; } ?>
  <p><a href="">明日のランキング</a></p>
</body>
</html>
