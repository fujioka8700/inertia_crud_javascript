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
      echo nl2br("表示{$str}");
      
      // echo nl2br("php echo によるテキストです。 \n");
      // echo nl2br("hello\n");
      // echo 'ABC\nXYZ';
      ?>
  </body>
</html>