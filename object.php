<?php
class TextModify {
  private $header;
  private $footer;
  private $find = 'PHP';
  private $body;

  public function __construct($h = "<b>", $f = "</b>") {
    $this->setHeader($h);
    $this->setFooter($f);
  }

  private function setHeader($s) {
    $this->header = $s;
  }

  private function setFooter($f) {
    $this->footer = $f;
  }

  function setFind($s) {
    $this->find = $s;
  }

  function setBody($s) {
    $this->body = $s;
  }

  protected function getRenderText() {
    $res = str_replace($this->find, $this->header . $this->find . $this->footer, $this->body);
    return $res;
  }

  function writeRenderText() {
    echo $this->getRenderText();
  }
}

$str='';

// インスタンスの準備
$title_obj = new TextModify('<span style="color: red;">', '</span>');
$title_obj->setFind("PHP");
$title_obj->setBody("Hello PHP");

$msg_obj = new TextModify('<span style="color: blue;">', '</span>');
$msg_obj->setBody("ここに、「PHP」という文字を含む文章を書いてください。");

$rep_obj = new TextModify("<b>", "</b>");
if ($_GET != null) {
    $str = $_GET['text1'];
    $rep_obj->setBody($str);
}

$footer_obj = new TextModify();
$footer_obj->setBody("私達は戦い続けます!PHP!!");

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>関数</title>
  </head>
  <body>
    <h1><?php $title_obj->writeRenderText(); ?></h1>
    <p><?php $rep_obj->writeRenderText(); ?></p>
    <hr>
    <p><?php $msg_obj->writeRenderText(); ?></p>
    <form action="./object.php" method="get">
      <textarea name="text1" id="" cols="20" rows="5"><?php echo $str; ?></textarea><br>
      <input type="submit" value="送信">
    </form>
    <hr>
    <p><?php $footer_obj->writeRenderText(); ?></p>
  </body>
</html>