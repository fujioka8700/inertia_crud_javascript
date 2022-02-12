<?php
$arr = array('あ','い','う','え','お');
$result = implode(",", $arr);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>implode テキストをまとめる</title>
  </head>
  <body>
      <h1>implode テキストをまとめる</h1>
      <p><?php echo $result; ?></p>
  </body>
</html>