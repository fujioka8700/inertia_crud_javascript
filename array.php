<?php
$data = array(100,200,300);
$total = 0;
for ($i=0; $i < count($data); $i++) { 
    $total += $data[$i];
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