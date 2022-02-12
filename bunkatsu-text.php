<?php
$lines = @file("data2.txt") or $result = "ファイルが読めません";
if ($lines != null) {
  $result = '<table border="1"><tr><th>NAME</th><th>MAIL</th><th>TEL</th></tr>';
  for ($i=0; $i < count($lines); $i++) { 
    $result .= "<tr>";
    $arr = explode(",", $lines[$i]);
    for ($j=0; $j < count($arr); $j++) { 
      $result .= "<td>{$arr[$j]}</td>";
    }
    $result .= "</tr>";
  }
  $result .= "</table>";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>テキストを分割して処理する</title>
  </head>
  <body>
      <h1>テキストを分割して処理する</h1>
      <p><?php echo $result; ?></p>
  </body>
</html>