<?php
$data = array(1000,2000,300);
$total = 0;
foreach ($data as $value) {
  $total += $value;
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
        <?php echo $total; ?>
    </p>
  </body>
</html>