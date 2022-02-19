<?php
if ($_POST['text1'] != null) {
  $str = $_POST['text1'];
  $len = strlen($str);
  $mb_len = mb_strlen($str);
}

if ($_POST['text2'] != null) {
  $str2 = $_POST['text2'];
  $str3 = $_POST['text3'];
  $num1 = $_POST['number1'];
  $pos1 = strpos($str2, $str3, $num1);
  $pos2 = mb_strpos($str2, $str3, $num1, "UTF-8");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>テキストを扱う主な関数</title>
  </head>
  <body>
    <h1>テキストを扱う主な関数</h1>
    <div>
      <h2>テキストの長さを調べる</h2>
      <form action="./text.php" method="post">
        <input type="text" name="text1" id="" value="<?php echo htmlspecialchars($str); ?>">
        <input type="submit" value="送信">
      </form>
      <?php
      echo "文字の長さ(strlen): {$len}<br>";
      echo "文字の長さ(mb_strlen): {$mb_len}<br>";
      ?>
    </div>
    <hr>
    <div>
      <h2>テキストの位置を調べる</h2>
      <form action="./text.php" method="post">
        <label for="text2">対象テキスト: </label>
        <input type="text" name="text2" id="text2" value="<?php echo htmlspecialchars($str2); ?>"><br>
        <label for="text3">検索文字: </label>
        <input type="text" name="text3" id="text3" value="<?php echo htmlspecialchars($str3); ?>"><br>
        <label for="number1">開始位置: </label>
        <input type="number" name="number1" id="number1" value="<?php echo htmlspecialchars($num1); ?>"><br>
        <input type="submit" value="送信">
      </form>
      <p>文字の位置: <?php echo $pos1; ?><br>
      マルチバイト文字の位置: <?php echo $pos2; ?></p>
    </div>
  </body>
</html>