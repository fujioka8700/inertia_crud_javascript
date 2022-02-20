<?php
$radio = $_GET['radio1'];
$result = "「" . $radio . "」が選ばれました。"; 
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hello PHP</title>
  </head>
  <body>
    <?php echo $result; ?>
    <hr>
    <form action="./check.php" method="get">
      <input type="radio" name="radio1" id="radio1" value="犬" checked>
      <label for="radio1">犬</label><br>
      <input type="radio" name="radio1" id="radio2" value="猫">
      <label for="radio2">猫</label><br>
      <input type="radio" name="radio1" id="radio3" value="カメレオン">
      <label for="radio3">カメレオン</label><br>
      <input type="submit" value="送信">
    </form>
  </body>
</html>