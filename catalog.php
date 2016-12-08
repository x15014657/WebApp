<?php

$xml= simplexml_load_file("albumes.xml") or die('error opening xml');

echo  $xml ->getName() . "<br>"; 

foreach ($xml->children() as $child)
  {
  echo $child->getName() . ":" . $child . $child->getChildren() . ":" . "<br>";
  }
?>





