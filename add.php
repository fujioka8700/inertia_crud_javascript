<?php
$name = htmlspecialchars($_POST['name']);
$mail = htmlspecialchars($_POST['mail']);
$tel = htmlspecialchars($_POST['tel']);
$memo = htmlspecialchars($_POST['memo']);
try {
  $pdo = new PDO('mysql:host=localhost:3306;dbname=mysampledata;charset=utf8mb4', 'dog2', 'dogdog');
  $query = "insert into sampledata (name, mail, tel, memo) values ('$name', '$mail', '$tel', '$memo')";
  $pdo->exec($query);
} catch (PDOException $e) {
  echo "<html><body><h1>ERR: " . $e->getMessage() . "</h1></body></html>";
}

$pdo = null;

header('Location: pdo.php');