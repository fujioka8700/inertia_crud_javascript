<?php
$up_id = htmlspecialchars($_POST['up_id']);
$name = htmlspecialchars($_POST['name']);

try {
    $pdo = new PDO('mysql:host=localhost:3306;dbname=mysampledata;charset=utf8mb4', 'dog2', 'dogdog');
    $query = "update sampledata set name='{$name}' where id={$up_id}";
    $pdo->exec($query);
} catch (PDOException $e) {
    $result = "#ERR: " . $e->getMessage();
}

header('Location: search.php');