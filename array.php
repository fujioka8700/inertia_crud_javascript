<?php
    $total = 0;
    $data = array(98,76,54,56,78);
    $n = count($data);
    for ($i=0; $i < $n; $i++) { 
        $total += $data[$i];
    }
    $ave = $total/$n;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>array</title>
  </head>
  <body>
      <h1>Hello PHP</h1>
      <?php
        echo '合計:' . $total . '、平均:' . $ave;
      ?>
  </body>
</html>