<?php
    $total = 0;
    $data = array(
        '国語'=>98,
        '数学'=>76,
        '理科'=>54,
        '社会'=>56,
        '英語'=>78,
        '美術'=>82
    );
    foreach ($data as $k => $n) {
        $total += $n;
        $kyoka .= $k . ":{$n} ";
    }
    $ave = $total / count($data);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>連想配列とforeach</title>
  </head>
  <body>
      <h1>連想配列とforeach</h1>
      <?php
        echo '合計:' . $total . '、平均:' . $ave;
      ?>
      <div>
          (<?php echo $kyoka ?>)
      </div>
  </body>
</html>