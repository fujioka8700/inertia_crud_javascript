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

  protected function setHeader($s) {
    $this->header = $s;
  }

  protected function setFooter($f) {
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

class TitleModify extends TextModify
{
  public function __construct($s) {
    $this->setHeader('<span style="color: red;">');
    $this->setFooter('</span>');
    $this->setFind('PHP');
    $this->setBody($s);
  }
}

class MsgModify extends TextModify
{
  public function __construct($s) {
    $this->setHeader('<span style="color: blue;">');
    $this->setFooter('</span>');
    $this->setFind('PHP');
    $this->setBody($s);
  }
}

class RepModify extends TextModify
{
  public function __construct($s) {
    $this->setHeader('<b>');
    $this->setFooter('</b>');
    $this->setFind('PHP');
    $this->setBody($s);
  }
}

$str='';

// インスタンスの準備
$title_obj = new TitleModify("Hello PHP");

$msg_obj = new MsgModify("ここに、「PHP」という文字を含む文章を書いてください。");

if ($_GET != null) {
    $str = $_GET['text1'];
    $rep_obj = new RepModify(htmlspecialchars($str));
}

$footer_obj = new TextModify();
$footer_obj->setBody("PHPビギナーズ");

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>サブクラス</title>
  </head>
  <body>
    <h1><?php $title_obj->writeRenderText(); ?></h1>
    <p><?php
    if ($rep_obj) {
      $rep_obj->writeRenderText();
    }
    ?></p>
    <hr>
    <p><?php $msg_obj->writeRenderText(); ?></p>
    <form action="./subclass.php" method="get">
      <textarea name="text1" id="" cols="20" rows="5"><?php echo $str; ?></textarea><br>
      <input type="submit" value="送信">
    </form>
    <hr>
    <p><?php $footer_obj->writeRenderText(); ?></p>
  </body>
</html>