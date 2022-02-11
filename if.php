<?php
    $n = 12345;
    $amari = $n % 2;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>変数について</title>
  </head>
  <body>
      <?php
        if ($amari == 0) {
            echo "{$n}は、偶数です。";
        } else {
            echo "{$n}は、奇数です。";
        }
      ?>
  </body>
</html>