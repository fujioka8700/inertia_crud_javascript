<?php
$result = '';
try {
  $pdo = new PDO('mysql:host=localhost:3306;dbname=mysampledata;charset=utf8mb4', 'dog2', 'dogdog');
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
      <form action="./add.php" method="post">
        <tr>
          <th>NAME</th>
          <td><input type="text" name="name" id=""></td>
        </tr>
        <tr>
          <th>MAIL</th>
          <td><input type="text" name="mail" id=""></td>
        </tr>
        <tr>
          <th>TEL</th>
          <td><input type="text" name="tel" id=""></td>
        </tr>
        <tr>
          <th>MEMO</th>
          <td><textarea name="memo"></textarea></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" value="送信"></td>
        </tr>
      </form>
    </table>
    <hr>
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