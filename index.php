<script type="text/javascript" src="lib/rain.js"></script>
<?php
require 'inc/str.php';

// page1
$curl = curl_init('https://anitoki.com'); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); 
$page = curl_exec($curl); 
if(curl_errno($curl)) // check for execution errors
{
	echo 'Scraper error: ' . curl_error($curl);
	exit;
}
curl_close($curl);

$regex = '/<div class="rapi">(.*?)<div class="pagination">/s';
if ( preg_match($regex, $page, $list) )
	
    echo '<center>',wordFilter($list[0]); 
else 
    print "Not found"; 



// page2
$curl = curl_init('https://anitoki.com/page/2/'); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); 
$page = curl_exec($curl); 
if(curl_errno($curl)) // check for execution errors
{
	echo 'Scraper error: ' . curl_error($curl);
	exit;
}
curl_close($curl);

$regex = '/<div class="rapi">(.*?)<div class="pagination">/s';
if ( preg_match($regex, $page, $list) )
	
    echo '<center>',wordFilter($list[0]); 
else 
    print "Not found";     
?>