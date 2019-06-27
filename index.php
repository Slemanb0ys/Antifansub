<title>AntifansubID</title>
<link rel="stylesheet" type="text/css" href="lib/style.css">
<?php $start_time = microtime(true); ?>
<link href="http://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css">

<!-- <script type="text/javascript" src="lib/rain.js"></script> -->
<style>
  body { 
   background: black url("inc/a.png") no-repeat fixed center; 
 }
 
</style>
<center>
<div class="toto">
<font face="courier" size="4" color="red">
<pre style="text-align: left;">
                 _   _ ______                    _     
     /\         | | (_)  ____|                  | |    
    /  \   _ __ | |_ _| |__ __ _ _ __  ___ _   _| |__  
   / /\ \ | '_ \| __| |  __/ _` | '_ \/ __| | | | '_ \ 
  / ____ \| | | | |_| | | | (_| | | | \__ \ |_| | |_) |
 /_/    \_\_| |_|\__|_|_|  \__,_|_| |_|___/\__,_|_.__/ 
                                  Your coins end here.
</pre></div>
<center>
<?php
echo '<font color=gold size=3>';
$timezone = new DateTimeZone('Asia/Jakarta');
$date = new DateTime();
$date->setTimeZone($timezone);
echo "<div class='toto'>
<pre style='text-align: left;''><pre>", print_r($date, 1), "</div></pre></font>";
?>
<div class="koceng">
<font face="courier" size="3" color="gray">
<pre>
> static site to getData from many fansub
> getLatest anime release
> bullshit popups ends here
</pre>
</div>
</font>

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
	
    echo '<center><br><font face=Ubuntu color=gold>',wordFilter($list[0]); 
else 
    print "Not found"; 
 ?>
 <p>
 <div class="intro">
<font color=crimson face=consolas size=3>

<b>&copy; Sin,</b>
(<a href="lib/info.php" rel="nofollow" target="_blank" class="class2">server status</a>) | <font size="3" color="green">
scraped in <?php echo(number_format(microtime(true) - $start_time, 2)); ?> sec.</font>
<br><font size="3" color="gray">
feel free to pull,issues,or stealing at:<br><font color=blue> https://github.com/sinkaroid/antifansub</font>
</font>
</div>   