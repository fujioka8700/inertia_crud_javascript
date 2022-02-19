<?php
$result = '';
try {
  $pdo = new PDO('mysql:host=localhost;dbname=mysampledata;charset=utf8mb4', 'dog2', 'dogdog');
  $statement = $pdo->query('select * from sampledata');
  while($record = $statement->fetch(PDO::FETCH_ASSOC)) {
    $result .= '<tr>';
    foreach($record as $column) {
      $result .= '<td>' . $column . '</td>';
    }
    $result .= '</tr>';
  }
} catch (PDOException $e) {
  $result = "#ERR: " . $e->getMessage();
}

// データベースとの切断。リソースの開放。
// unset($pdo);でも可能
$pdo = null;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PDO</title>
    <style>
      h1 {font-size: 18pt; font-weight: bold; color: #666;}
      th {padding: 5px; color: white; background: darkgray;}
      td {padding: 5px; background: #e0e0ff;}
    </style>
  </head>
  <body>
    <h1>Hello PHP!</h1>
    <table>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Mail</th>
        <th>Tel</th>
        <th>Memo</th>
      </tr>
      <?php echo $result; ?>
    </table>
  </body>
</html>