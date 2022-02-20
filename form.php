<?php
$str = "";
if (isset($_GET['text1'])) {
  $str = "あなたは「" . htmlspecialchars($_GET['text1']) . "」と書きました。";
} else {
  $str = "なにか書いてください。";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hello PHP</title>
    <style>
      th {background: blueviolet; color: white; padding: 5px;}
      td {background: #e6e6fa; padding: 5px;}
    </style>
  </head>
  <body>
    <h1>Hello PHP</h1>
    <?php echo $str; ?>
    <form action="./form.php" method="get">
      <textarea name="text1" id="" cols="10" rows="3"></textarea><br>
      <input type="submit" value="送信">
    </form>
  </body>
</html>