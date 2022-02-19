<?php
$f = @fopen("data2.txt", 'r') or exit("BREAK");
$result = '';
while (!feof($f)) {
    $result .= fgets($f, 10);
}
fclose($f);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>fgetsによるファイルの読み込み</title>
  </head>
  <body>
      <h1>fgetsによるファイルの読み込み</h1>
      <p><?php echo nl2br($result); ?></p>
  </body>
</html>