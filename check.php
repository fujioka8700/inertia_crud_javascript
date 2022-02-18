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
