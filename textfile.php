<?php
$result = '';
$lines = @file("data.txt") or $result = "ファイルが読めません";
if ($lines != null) {
  for ($i=0; $i < count($lines); $i++) { 
    $result .= ($i + 1) . ": " . $lines[$i] . "<br>";
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>テキストファイルを読み込む</title>
  </head>
  <body>
      <h1>テキストファイルを読み込む</h1>
      <p><?php readfile("data.txt"); ?></p>
      <h1>ファイルのテキストを1行ずつ処理する</h1>
      <p><?php echo $result; ?></p>
  </body>
</html>