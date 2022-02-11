<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My test page</title>
  </head>
  <body>
      <?php
      $str = "文字列";
      echo nl2br('表示$str\n');
      echo nl2br("\n 表示$str\n");
      echo nl2br("表示{$str}\n");
      
      echo nl2br(10/3 . "\n");
      echo 'abc' . 'xyz' . '<br>';
      $var = 99;
      // $1var = 100;
      echo $var . '<br>';
      $a = 10;
      $b = 20;
      $c = ($a + $b) * 2;
      echo nl2br($c . "\n");
      // echo nl2br("php echo によるテキストです。 \n");
      // echo nl2br("hello\n");
      // echo 'ABC\nXYZ';

      $price = 12300;
      $total = $price * 1.10;
      echo $total;
      ?>
  </body>
</html>