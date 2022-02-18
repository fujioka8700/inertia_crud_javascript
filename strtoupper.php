<?php
$result = '';
$str = '';
if ($_GET != null) {
  $str = $_GET['text1'];
  $str = htmlspecialchars(strtoupper($str));
  $result = str_replace('PHP', '<b>PHP</b>', $str);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>関数</title>
  </head>
  <body>
    <h1>関数</h1>
    <?php echo $result; ?>
    <hr>
    <p>ここに、「PHP」という文字を含む文章を書いてください。</p>
    <form action="./strtoupper.php" method="get">
      <textarea name="text1" id="" cols="20" rows="5"></textarea><br>
      <input type="submit" value="送信">
    </form>
    <hr>
  </body>
</html>