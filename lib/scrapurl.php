<?php
//ambil str
function wordFilter($text)
{
    $ambilkata = $text;
	$ambilkata = str_replace('<script type="text/javascript">', '<p hidden>', $ambilkata);

    return $ambilkata;
}

$curl = curl_init('https://anitoki.com/2019/05/kimetsu-no-yaiba-08-subtitle-indonesia/'); //victim

curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); 
$page = curl_exec($curl); 
if(curl_errno($curl)) // check for execution errors
{
	echo 'Scraper error: ' . curl_error($curl);
	exit;
}
 
curl_close($curl);


//extract
$regex = '/<div class="smokeddl">(.*?)<div class="anito-shortlink" id=(.*?)">/s';
if ( preg_match($regex, $page, $list) )
	
    echo '<center>',wordFilter($list[0]); 
else 
    print "Not found"; 
?>