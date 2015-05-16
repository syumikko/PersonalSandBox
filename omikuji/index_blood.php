<?php

$blood = ['A', 'B', 'O', 'AB'];
shuffle($blood);

?>

<DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>今日の血液型ランキング</title>
</head>
<body>
  <h2>今日の血液型ランキング</h2>
  <p>ランキング一覧</p>
  <?php foreach ($blood as $ranking){ ?>
  <p><?php echo $ranking ?></p>
  <?php } ?>
</body>
</html>
