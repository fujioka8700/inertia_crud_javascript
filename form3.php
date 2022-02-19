<?php
    if ($_POST != null) {
        $arr = $_POST['list1'];
        $result = '';
        foreach ($arr as $item) {
            $result .= $item . "\n";
        }
    } else {
        $result = '選択してね。';
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>リストの複数選択項目</title>
  </head>
  <body>
      <h1>リストの複数選択項目</h1>
      <div>
          <?php echo nl2br($result) ?>
      </div>
      <form action="./form3.php" method="post">
          <div>
              <select name="list1[]" size="5" id="" multiple>
                  <option value="Windows">Windows</option>
                  <option value="MacOS">MacOS</option>
                  <option value="Linux">Linux</option>
                  <option value="Android">Android</option>
                  <option value="iOS">iOS</option>
              </select>
          </div>
          <input type="submit" value="送信">
      </form>
  </body>
</html>