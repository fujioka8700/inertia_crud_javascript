<?php
if ($_GET != null) {
  $str = $_GET['text1'];
  $d = explode("/", $str);
  $t1 = time();
  $t2 = mktime(0, 0, 0, $d[1], $d[2], $d[0]);
  $n = ceil(($t2 - $t1) / (60 * 60 * 24));
  $result = "{$str}は、今日から{$n}日後です。";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>日時の計算を行う。</title>
  </head>
  <body>
    <h1>日時の計算を行う。</h1>
    <p>
      <?php
      if ($str != null) {
        echo $result;
      }
      ?>
    </p>
    <hr>
    <form action="./time2.php" method="get">
      <input type="text" name="text1" id="">
      <input type="submit" value="送信">
    </form>
  </body>
</html>