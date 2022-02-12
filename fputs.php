<?php
// データの追記
if ($_POST != null) {
  $f = @fopen("data3.txt", 'a') or exit("ファイルが読めません。");
  $s = $_POST['text1'];
  fputs($f, $s . "\n");
  fclose($f);
}

// ファイルの読み込み
$f = @fopen("data3.txt", 'r') or exit("ファイルが読めません。");
$result = '';
$i = 1;
while (!feof($f)) {
  $s = htmlspecialchars(fgets($f));
  if ($s != "") {
    $result = $i++ . ": " . $s . "<br>" . $result;
  }
}
fclose($f);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>fputsによるファイルの保存</title>
  </head>
  <body>
      <h1>fputsによるファイルの保存</h1>
      <form action="./fputs.php" method="post">
        <input type="text" name="text1" id="">
        <input type="submit" value="送信">
      </form>
      <hr>
      <p><?php echo $result; ?></p>
  </body>
</html>