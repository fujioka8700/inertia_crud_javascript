<?php
    $num = 1;
    $total = 0;
    while ($num <= 100) {
        $total += $num;
        $num++;
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>while文</title>
  </head>
  <body>
      <h1>Hello PHP</h1>
      <?php
        echo '合計:' . $total;
      ?>
  </body>
</html>