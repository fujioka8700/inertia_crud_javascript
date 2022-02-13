<?php
if ($_POST != null) {
    $num = (int)$_POST['text1'];
    $t = time() + (60 * 60 * 24 * $num);
    $d = getdate($t);
    $result = "今日から{$num}日後は、{$d['year']}年{$d['mon']}月{$d['mday']}日です。";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>何日後はいつか。</title>
  </head>
  <body>
      <h1>何日後はいつか。</h1>
      <form action="./time.php" method="post">
          <input type="tel" name="text1" id="">
          <input type="submit" value="送信">
      </form>
      <hr>
      <p><?php echo $result; ?></p>
  </body>
</html>