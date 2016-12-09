<?php

$xml=simplexml_load_file("albums.xml");

echo '<table border ="2" >';
foreach ($xml->cd as $cd)  
{  
   echo '<tr>';
  echo '<td>';
   
     
   echo $cd['id'], '  ';  
   
   echo $cd->ARTIST, '  ';  
   echo $cd->COUNTRY, '<br />'; 
   echo $cd->R_LABEL, '  ';  
   echo $cd->PRICE, '<br />';
   echo $cd->YEAR, '  ';
   echo '<img src='.$CD->IMAGE.'/>';
   echo $cd->SUBSCRIBE.'/>';
   echo '</td>';
   echo '</tr>';
}  
echo '</table>';
?>
