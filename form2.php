<?php
    if ($_POST != null) {
        $ck1 = $_POST['checkbox1'];
        $rd1 = $_POST['radio1'];
        $sl1 = $_POST['list1'];
        $result = "CHECKBOX: {$ck1}\nRADIOBUTTON: {$rd1}\nSELECT: {$sl1}";
    } else {
        $result = '入力してね。';
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>その他のフォーム用部品を使う</title>
  </head>
  <body>
      <h1>その他のフォーム用部品を使う</h1>
      <div>
          <?php echo nl2br($result) ?>
      </div>
      <form action="./form2.php" method="post">
          <div>
            <input type="checkbox" name="checkbox1" id="checkbox1">
            <label for="checkbox1">チェックボックス</label>
          </div>
          <div>
              <input type="radio" name="radio1" id="radio1" value="その1" checked>
              <label for="radio1">ラジオボタン1</label>
              <input type="radio" name="radio1" id="radio2" value="その2">
              <label for="radio2">ラジオボタン2</label>
          </div>
          <div>
              <select name="list1" id="">
                  <option value="Windows">Windows</option>
                  <option value="MacOS">MacOS</option>
                  <option value="Linux" selected>Linux</option>
              </select>
          </div>
          <input type="submit" value="送信">
      </form>
  </body>
</html>