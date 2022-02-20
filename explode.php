<?php
$lines = @file('data2.csv') or $result = "ファイルが読めません";

if ($lines != null) {
  $result = '<table><tr><th>NAME</th><th>MAIL</th><th>TEL</th></tr>';
  for ($i=0; $i < count($lines); $i++) {
    $result .= '<tr>';
    $arr = explode(",", $lines[$i]);
    for ($j=0; $j < count($arr); $j++) { 
      $result .= "<td>{$arr[$j]}</td>";
    }
    $result .= '</tr>';
  }
  $result .= '</table>'; 
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>explode</title>
    <style>
      th {background: blueviolet; color: white; padding: 5px;}
      td {background: #e6e6fa; padding: 5px;}
    </style>
  </head>
  <body>
      <h1>テキストを分割するexplode</h1>
      <?php echo $result; ?>
  </body>
</html>