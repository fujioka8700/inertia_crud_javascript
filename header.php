<?php
if ($_GET != null) {
    $url = $_GET['text1'];
    header("Location:{$url}");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>header関数でページ移動する</title>
  </head>
  <body>
      <h1>header関数でページ移動する</h1>
      <div>
          <?php echo $url; ?>
      </div>
      <form action="./header.php" method="get">
          <input type="text" name="text1" id="">
          <input type="submit" value="送信">
      </form>
  </body>
</html>