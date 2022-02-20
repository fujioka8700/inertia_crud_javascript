<?php
$result = "";
$lines = @file("data.txt") or $result = "ファイルが読めません";
if ($lines != null) {
    for ($i=0; $i < count($lines); $i++) {
        if ($lines[$i] == "\n") continue;
        $result .= ($i + 1) . ": " . $lines[$i] . "<br>";
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hello PHP</title>
  </head>
  <body>
      <?php echo $result; ?>
  </body>
</html>