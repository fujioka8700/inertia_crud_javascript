<?php
$result = "";
$query = "select * from sampledata";
if (isset($_GET['name'])) {
  $fstr = $_GET['name'];
  if ($fstr != "") {
    $query .= " where name like '%{$fstr}%'";
  }
}

try {
  $pdo = new PDO('mysql:host=localhost:3306;dbname=mysampledata;charset=utf8mb4', 'dog2', 'dogdog');
  $statement = $pdo->query($query);
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
      <form action="./search.php" method="get">
        <tr>
          <th>検索する名前</th>
          <td><input type="text" name="name" id=""></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" value="送信"></td>
        </tr>
      </form>
    </table>
    <hr>
    <table>
      <form action="./update.php" method="post">
        <tr>
          <th>更新するID</th>
          <td><input type="number" name="up_id" id="" min="0" value="0"></td>
        </tr>
        <tr>
          <th>更新する名前</th>
          <td><input type="text" name="name" id=""></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" value="送信"></td>
        </tr>
      </form>
    </table>
    <hr>
    <table>
      <form action="./remove.php" method="post">
        <tr>
          <th>削除する名前</th>
          <td><input type="text" name="name" id=""></td>
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