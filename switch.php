<?php
$result = "";
$blood = $_GET['blood'];
switch ($blood) {
  case 'A':
    $result = "あなたは几帳面ですね。";
    break;
  case 'B':
    $result = "あなたは自由奔放ですね。";
    break;
  case 'AB':
    $result = "あなたは複雑な人ですね。";
    break;
  case 'O':
    $result = "あなたは大物ですね。";
    break;
  default:
    $result = "あなたは人間じゃないですね。";
    break;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hello PHP</title>
  </head>
  <body>
    <h1>Hello PHP</h1>
    <form action="./switch.php" method="get">
      <select name="blood" id="">
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="AB">AB</option>
        <option value="O">O</option>
      </select>
      <input type="submit" value="送信">
    </form>
    <hr>
    <p><?php echo $result; ?></p>
  </body>
</html>