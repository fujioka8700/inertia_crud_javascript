<?php
@session_start();
if ($_GET != null) {
  $account = $_GET['account'];
  $pass = $_GET['pass'];
  $_SESSION['account'] = $account;
  $_SESSION['pass'] = $pass;
  header("Location: ./session2.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>セッションを使ったプチ・ログイン機能</title>
  </head>
  <body>
    <h1>セッションを使ったプチ・ログイン機能</h1>
    <?php
    if (isset($_SESSION['account'])) {
      echo "your account: " . htmlspecialchars($_SESSION['account']);
    }
    ?>
    <form action="./session.php" method="get">
        <label for="account">ACCOUNT:</label><input type="text" name="account" id="account"><br>
        <label for="pass">PASSWORD:</label><input type="password" name="pass" id="pass"><br>
        <input type="submit" value="移動">
    </form>
  </body>
</html>