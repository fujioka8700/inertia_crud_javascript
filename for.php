<?php
    $total = 0;
    for ($i=1; $i <= 100; $i++) { 
        $total += $i;
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>for文</title>
  </head>
  <body>
      <h1>Hello PHP</h1>
      <?php
        echo '合計:' . $total;
      ?>
  </body>
</html>