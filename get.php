<?php
require 'inc/str.php';

print $form;

if(isset($_GET['fansub'])){
$anti = $_GET['anti'];
$curl = curl_init($anti); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); 
$page = curl_exec($curl); 
if(curl_errno($curl)) 
{
	echo 'Scraper error: ' . curl_error($curl);
	exit;
}
 
curl_close($curl);

$regex = '/<div class="smokeddl">(.*?)<div class="anito-shortlink" id=(.*?)">/s';
if ( preg_match($regex, $page, $list) )
	
    echo '<center>',$list[0]; 
else 
    print "Not found";
}

