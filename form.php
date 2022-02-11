<?php
    if (isset($_POST['text1'])) {
        $input = $_POST['text1'];
        $result = "あなたは、「{$input}」と書きました。";
    } else {
        $result = 'なにか書いてください。';
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>formからの送信</title>
  </head>
  <body>
      <h1>formからの送信</h1>
      <div>
          <?php echo $result ?>
      </div>
      <form action="./form.php" method="post">
          <input type="text" name="text1" id="">
          <input type="submit" value="送信">
      </form>
  </body>
</html>