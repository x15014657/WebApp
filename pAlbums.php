<?php

$xml=simplexml_load_file("albums.xml");


foreach ($xml->cd as $cd)  
{  
   
     
   echo $cd['id'], '  ';  
   
   echo $cd->ARTIST, '  ';  
   echo $cd->COUNTRY, '<br />'; 
   echo $cd->R_LABEL, '  ';  
   echo $cd->PRICE, '<br />';
   echo $cd->YEAR, '  ';
   echo '<img src='.$cd->IMAGE.'/>';
   echo $cd->SUBSCRIBE.'/>';
  
}  

?>


