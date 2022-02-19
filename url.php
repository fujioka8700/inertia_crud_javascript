<?php
if ($_POST != null) {
  $url = $_POST['text1'];
  $lines = file($url);
  $result = implode($lines);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>インターネット上のファイルも読める</title>
  </head>
  <body>
    <h1>インターネット上のファイルも読める</h1>
    <form action="./url.php" method="post">
      <input type="text" name="text1" id="" value="<?php echo htmlspecialchars($url); ?>">
      <input type="submit" value="送信">
    </form>
    <hr>
    <?php echo htmlspecialchars($result); ?>
  </body>
</html>