<?php

$xml= simplexml_load_file("albumes.xml") or die('error opening xml');

echo "123 $xml"; 

foreach ($xml->children() as $child)
  {
  echo "Child node: " . $child->TITLE . "<br>";
  }
?>





