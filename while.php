<?php
$num = 1;
$total = 0;
while ($num < 100) {
    $total += $num;
    $num++;
}

do {
    $total += $num;
    $num++;
} while ($num < 200);
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
        <?php echo $total; ?>
    </p>
  </body>
</html>