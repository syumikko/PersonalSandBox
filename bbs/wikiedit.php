<?php
$wikicontents = nl2br($_POST['wikicontents']);

file_put_contents("wiki_storage.txt" , $wikicontents);
$storage = file_get_contents("wiki_storage.txt");
?>

<html>
<head>
  <link rel="stylesheet" type="text/css" href="wiki.css" media="all">
  <title>PHP_Practice -wiki-</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
  <ul id = "gNavi">
    <li><a href="http://localhost/wiki/index.php">記載内容</a></li>
    <li><a href="#">編集画面</a></li>
  </ul>

  <p>--編集--</p>
  <form method = "post">
  <textarea name = "wikicontents" rows = "10" cols = "80">
<?PHP echo($wikicontents); ?></textarea><br>
  <input type = "submit" name = "done" value = "編集を終了">
  </form>
</body>
</html>