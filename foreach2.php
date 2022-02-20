<?php
$data = array("国語"=>98, "数学"=>76, "理科"=>54, "社会"=>56, "英語"=>78, "美術"=>82);
$subject ="";
$result = "";
$total = 0;
foreach ($data as $key => $value) {
  $subject .= "<th>{$key}</th>";
  $result  .= "<td>{$value}</td>";
  $total += $value;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hello PHP</title>
    <style>
      th {background: blueviolet; color: white; padding: 5px;}
      td {background: #e6e6fa; padding: 5px;}
    </style>
  </head>
  <body>
    <h1>Hello PHP</h1>
    <table>
      <tr>
        <?php echo $subject; ?>
        <th>合計</th>
      </tr>
      <tr>
        <?php echo $result; ?>
        <td><?php echo $total; ?></td>
      </tr>
    </table>
  </body>
</html>