<?php
    $total = 0;
    $data = array(98,76,54,56,78);
    foreach ($data as $n) {
        $total += $n;
    }
    $ave = $total / count($data);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>foreach</title>
  </head>
  <body>
      <h1>foreach</h1>
      <?php
        echo '合計:' . $total . '、平均:' . $ave;
      ?>
  </body>
</html>