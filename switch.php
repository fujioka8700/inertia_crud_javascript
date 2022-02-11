<?php
    $b = 'B'; //血液型を書く
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>血液型占い</title>
  </head>
  <body>
      <h1>Hello PHP</h1>
      <?php
        switch ($b) {
            case 'A':
                echo 'あなたは几帳面ですね';
                break;
            case 'B':
                echo 'あなたは自由奔放ですね';
                break;
            case 'AB':
                echo 'あなたは複雑な人ですね';
                break;
            case 'O':
                echo 'あなたは大物ですね';
                break;
            default:
                echo 'あなたは人間じゃないですね';
                break;
        }
      ?>
  </body>
</html>