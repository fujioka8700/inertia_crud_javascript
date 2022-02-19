<?php
class TextModify {
  static private $header;
  static private $footer;
  static private $find;

  static function setFind($s) {
    self::$find = $s;
  }

  static function writeRenderText($s) {
    $res = str_replace(self::$find, self::$header . self::$find . self::$footer, $s);
    echo $res;
  }

  static function setTagData($h, $f) {
    self::$header = $h;
    self::$footer = $f;
  }
}

// クラスの準備
TextModify::setTagData('<span style="font-size: 200%;">','</span>');
TextModify::setFind('PHP');

$str='';
if ($_GET != null) {
  $str = $_GET['text1'];
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>static</title>
  </head>
  <body>
    <h1><?php TextModify::writeRenderText('Hello PHP'); ?></h1>
    <p><?php TextModify::writeRenderText($str); ?></p>
    <hr>
    <p><?php TextModify::writeRenderText('ここに、「PHP」という文字を含む文章を書いてください。'); ?></p>
    <form action="./static.php" method="get">
      <textarea name="text1" id="" cols="20" rows="5"><?php echo $str; ?></textarea><br>
      <input type="submit" value="送信">
    </form>
  </body>
</html>