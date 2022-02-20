<?php
$arr = array('one', 'two', 'three');
$xml = new SimpleXMLElement("data.xml", 0, true);
for ($i=0; $i < count($arr); $i++) { 
    $xml->data[$i]->version = $arr[$i];
    unset($xml->data[$i]->price);
    $newdata = $xml->addChild("otherdata", "");
    $newdata->addAttribute("number", $i + 1);
    $newdata->addChild("name", $arr[$i]);
}

header('content-type:text/xml;charset=utf-8');
echo $xml->asXML();