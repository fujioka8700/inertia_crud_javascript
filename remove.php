<?php
$name = htmlspecialchars($_POST['name']);
try {
    $pdo = new PDO('mysql:host=localhost:3306;dbname=mysampledata;charset=utf8mb4', 'dog2', 'dogdog');
    $query = "delete from sampledata where name = '{$name}'";
    $pdo->exec($query);

} catch (PDOException $e) {
    $result = "#ERR: " . $e->getMessage();
}

header('Location: search.php');