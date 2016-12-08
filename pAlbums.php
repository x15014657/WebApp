<?php

$xml=simplexml_load_file("albums.xml");

echo '<div>';
foreach ($xml->cd as $cd)  
{  
   echo '<div>';
   
     
   echo $cd['TITLE'], '  ';  
   
   echo $cd->ARTIST, '  ';  
   echo $cd->COUNTRY, '<br />'; 
   echo $cd->R_LABEL, '  ';  
   echo $cd->PRICE, '<br />';
   echo $cd->YEAR, '  ';
   echo '<img src='.$CD->image.'/>';
   echo '<div scr='.$cd->SUBSCRIBE.'/>';
   echo '</div>
}  
echo '</table>';
?>
