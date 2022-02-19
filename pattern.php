<?php
$url = "";
$result = "";
if ($_POST != null) {
    $url = $_POST['text1'];
    $lines = file($url);
    $data = implode($lines);
    // パターンマッチ
    $pattern = "/([\w-]+)@([\w\.-]+)\b/";
    $flg = preg_match_all($pattern, $data, $matchs);
    if ($flg != false) {
        foreach ($matchs[0] as $key => $value) {
            $result .= $value . "\n";
        }
    } else {
        $result = "ないよ。";
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>パターンマッチ</title>
  </head>
  <body>
      <h1>メールアドレスを探します</h1>
      <form action="./pattern.php" method="post">
          <input type="text" name="text1" id="" size="40" value="<?php echo htmlspecialchars($url); ?>"><br>
          <textarea name="area1" id="" cols="30" rows="5"><?php echo $result; ?></textarea><br>
          <input type="submit" value="送信">
      </form>
  </body>
</html>