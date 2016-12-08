<?php

$xml=simplexml_load_file("albums.xml");

echo '<table border="1">';
foreach ($xml->cd as $cd)  
{  
   echo '<tr>';
   echo '<td>';
     
   echo $cd['TITLE'], '  ';  
   
   echo $cd->ARTIST, '  ';  
   echo $cd->COUNTRY, '<br />'; 
   echo $cd->R_LABEL, '  ';  
   echo $cd->PRICE, '<br />';
   echo $cd->YEAR, '  ';
   echo '<img src='.$CD->image.'/>';
   echo '<div scr='.$cd->SUBSCRIBE.'/>';
   echo '</td>';
   echo '</tr>';
}  
echo '</table>';
?>

<TITLE>Roses In The Snow</TITLE>
	<ARTIST>Emmylou Harris</ARTIST>
	<COUNTRY>Spain</COUNTRY>
	<R_LABEL>Warner Bros. Records</R_LABEL>
	<PRICE>10.90</PRICE>
	<YEAR>1980</YEAR>
	<IMAGE>http://webapp-x15014657654604.codeanyapp.com/img/EmmyLouHarris.jpg</IMAGE>
	<SUBSCRIBE><div class="g-ytsubscribe" data-channel="1000Magicians" data-layout="full" data-theme="dark" data-count="default"></div></SUBSCRIBE>
	</CD>