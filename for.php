<?php
$total = 0;
for ($i=0; $i < 10; $i++) { 
    $total += $i;
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