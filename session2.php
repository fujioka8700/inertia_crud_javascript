<?php
@session_start();

// ACCOUNTとPASS
$ok_accout = "admin";
$ok_pass = "kanri";

// ログイン処理
$flg = false;
$account = $_SESSION['account'];
$pass = $_SESSION['pass'];
if ($account == $ok_accout && $pass == $ok_pass) {
  $flg = true;
}

// ログインしてない時の処理
if(!$flg) {
  echo "<html><body><h1>NOT LOGIN!!!</h1>";
  echo '<a href="./session.php">back to login page.</a>';
  echo "</body></html>";
  exit();
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ログイン処理</title>
  </head>
  <body>
    <h1>ログイン処理</h1>
    <p>[Account: <?php echo htmlspecialchars($account); ?>]</p>
    <!-- <?php echo htmlspecialchars($account) . htmlspecialchars($pass) . $flg; ?> -->
    <p>新しく用意したページです。</p>
    <hr>
  </body>
</html>