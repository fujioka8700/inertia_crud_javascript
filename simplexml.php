<?php
$data = "";
$xml = new SimpleXMLElement("data.xml", 0, true);
$data_arr = $xml->data;
foreach ($data_arr as $row) {
    $data .= "<tr>";
    $data .= "<td>" . $row->name . "</td>";
    $data .= "<td>" . $row->version . "</td>";
    $data .= "<td>" . $row->price . "</td>";
    $data .= "</tr>";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SimpleXML</title>
    <style>
      h1 {font-size: 18pt; font-weight: bold; color: #666;}
      th {padding: 5px; color: white; background: darkgray;}
      td {padding: 5px; background: #e0e0ff;}
    </style>
  </head>
  <body>
      <h1>SimpleXML</h1>
      <div>
          <table>
              <tr>
                  <th>Name</th>
                  <th>Version</th>
                  <th>Price</th>
              </tr>
              <?php echo $data; ?>
          </table>
      </div>
  </body>
</html>