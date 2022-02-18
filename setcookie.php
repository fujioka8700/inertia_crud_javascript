<?php
if ($_GET != null) {
    $str = $_GET['text1'];
    setcookie("mycookie", htmlspecialchars($str), time() + 60 * 10);
    header("Location: ./setcookie.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>クッキーを利用してみる</title>
  </head>
  <body>
      <h1>クッキーを利用してみる</h1>
      <div>
          <?php
          if (isset($_COOKIE['mycookie'])) {
            $cookie = $_COOKIE['mycookie'];
            echo "クッキー情報: {$cookie}";
          } else {
            echo "NO COOKIE...";
          }
          ?>
      </div>
      <form action="./setcookie.php" method="get">
          <input type="text" name="text1" id="">
          <input type="submit" value="移動">
      </form>
  </body>
</html>