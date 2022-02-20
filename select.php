<?php
$result = "";
if (isset($_POST['list1'])) {
  $arr = $_POST['list1'];
  foreach ($arr as $item) {
    $result .= $item . "\n";
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
    <?php echo nl2br($result); ?>
    <hr>
    <form action="./select.php" method="post">
      <select name="list1[]" size="5" id="" multiple>
        <option value="Windows">Windows</option>
        <option value="MacOS">MacOS</option>
        <option value="Linux">Linux</option>
        <option value="Android">Android</option>
        <option value="iOS">iOS</option>
      </select>
      <input type="submit" value="送信">
    </form>
  </body>
</html>