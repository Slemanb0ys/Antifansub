<title>Antifansub | Download</title>
<link href="http://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css">

<style>
.memek {
  margin: auto;
  background-color: #f7f3f3;
  width: 50%;
  
  padding: 10px;
  -moz-border-radius: 5px;
	-webkit-border-radius: 30px;
}

.bokong {
  margin: auto;
  text-align: center;
  width: 100%;
  padding: 1px;
}

.koceng {
  display: inline-block;
  text-align: left;
 }

 div.rounded {
   
    border: 3px dotted gray;
    margin: auto;
  width: 70%;
	color: #000000;
	font-weight: bold;
    padding: 1px;
    
	-moz-border-radius: 5px;
    -webkit-border-radius: 10px; }
    
    div.kotak {
	background-color: silver;
    margin: auto;
  width: 30%;
	color: #000000;
    padding: 1px;
    
	-moz-border-radius: 5px;
	-webkit-border-radius: 20px; }   
   
  body { 
  background: black url("inc/a.png") no-repeat fixed center; 
}

.intro {
  margin: auto;
  background-color: #f7f3f3;
  width: 30%;
  
  padding: 10px;
  -moz-border-radius: 5px;
	-webkit-border-radius: 20px;
}
</style>

<?php
require 'inc/str.php';

print $form;

if(isset($_GET['anti'])){
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

print '<div class="memek"><br>';
//anime info    
function wordFilter3($text)
{
    $ambilkata = $text;
    $ambilkata = str_replace('<p><span>', '<br>', $ambilkata);
    $ambilkata = str_replace('</span></p>', '', $ambilkata);
    $ambilkata = str_replace('Producers', '</p>Producers', $ambilkata);
    $ambilkata = str_replace('Genre', '<p hidden>', $ambilkata);
    return $ambilkata;
}

$regex = '/<div class="info">(.*?)<\/div>/s';
if ( preg_match($regex, $page, $list) )

    echo '<div class="kotak"><center>',wordFilter3($list[0]),'</div>'; 

//sinopsis
$regex = '/<div class="cover">(.*?)<\/div>/s';
if ( preg_match($regex, $page, $list) )

    echo '<center>',$list[0],'</div>'; 


//link    
$regex = '/<div class="smokeddl">(.*?)<div class="anito-shortlink" id=(.*?)">/s';
if ( preg_match($regex, $page, $list) )
	
    echo '<center><div class="rounded">',$list[0],'</div></div><br>'; 
else 
    print "Not found";

}

?>
</div></div></div>
<p><center>
 <div class="intro">
<font color=crimson face=consolas size=3>

<b>&copy; Sin,</b>

<br><font size="3" color="gray">
feel free to pull,issues,or stealing at:<br><font color=blue> https://github.com/sinkaroid/antifansub</font>
</font>
</div>   