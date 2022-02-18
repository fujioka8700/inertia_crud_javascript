<?php
$str = '';

function getBoldStr($s) {
  $str = htmlspecialchars(strtoupper($s));
  $res = str_replace('PHP', '<span style="font-weight:bold;color:red;">PHP</span>', $str);
  return $res;
}

if ($_GET != null) {
  $str = $_GET['text1'];
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>関数</title>
  </head>
  <body>
    <h1><?php echo getBoldStr("関数PHP"); ?></h1>
    <?php echo getBoldStr($str); ?>
    <hr>
    <p><?php echo getBoldStr("ここに、「PHP」という文字を含む文章を書いてください。"); ?></p>
    <form action="./strtoupper.php" method="get">
      <textarea name="text1" id="" cols="20" rows="5"><?php echo $str; ?></textarea><br>
      <input type="submit" value="送信">
    </form>
    <hr>
  </body>
</html>