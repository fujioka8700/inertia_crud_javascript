<?php
$price = 12301;
$total = $price * 1.10;
$amari = $total % 2;
$result = "";
if ($amari == 0) {
    $result = "偶数です";
} else {
    $result = "奇数です";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hello PHP</title>
  </head>
  <body>
    <h1>Hello PHP</h1>
    <p>
        <?php echo $result; ?>
    </p>
  </body>
</html>