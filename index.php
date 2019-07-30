<title>AntifansubID</title>
<link href="http://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="inc/style.css">
<?php $start_time = microtime(true); ?>

<script type="text/javascript" src="inc/rain.js"></script> 
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


echo '<font face=Consolas color=gold size=3>';
$tanggal= mktime(date("m"),date("d"),date("Y"));
echo "[<font color=green>d</font> : <b>(".date("d-M-Y", $tanggal).")</b> ";
date_default_timezone_set('Asia/Jakarta');
$jam=date("H:i:s");
echo "-> <font color=green>t</font> : <b>(". $jam.") "."</b> -> ";
$a = date ("H");
if (($a>=6) && ($a<=11)){
echo "<font color=white><b>Morning</font></b>]";
}
else if(($a>11) && ($a<=15))
{
echo ", Morning";}
else if (($a>15) && ($a<=18)){
echo ", Good day";}
else { echo ", <b> Night</b>";}
echo '</font>';
?>



<center><br><div id="steal"><a href="page/list" rel="nofollow" target="_blank"><font face=Ubuntu size="2" color="white"><b>animelist<b/></font></a></div></center>
<div class="koceng">
<font face="courier" size="3" color="gray">
<pre>
available params : <font color=red>?list, ?search, ?series</font>
</pre>

</div>
<form action="page/list/anime.php" method="get">
<input type="show" class="bordergaya" style="width:10%;" placeholder="series" name="q"><br>
</form>
</font>


<?php
require 'inc/str.php';

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

<center>
<div class="page">
<a href="/antifansub/page?x=1">1</span></a>&nbsp;&nbsp;&nbsp;<a href="/antifansub/page?x=2"><span class="pg">2</span></a>&nbsp;&nbsp;&nbsp;<a href="/antifansub/page?x=3"><span class="pg">3</span></a>&nbsp;&nbsp;&nbsp;<a href="/antifansub/page?x=4"><span class="pg">4</span></a>&nbsp;&nbsp;&nbsp;<a href="/antifansub/page?x=5"><span class="pg">5</span></a>&nbsp;&nbsp;&nbsp;<a href="/antifansub/page?x=6"><span class="pg">6</span></a>&nbsp;&nbsp;&nbsp;<a href="/antifansub/page?x=7"><span class="pg">7</span></a>&nbsp;&nbsp;&nbsp;<a href="/antifansub/page?x=8"><span class="pg">8</span></a>&nbsp;&nbsp;&nbsp;<a href="/antifansub/page?x=9"><span class="pg">9</span></a>&nbsp;&nbsp;&nbsp;<a href="/antifansub/page?x=10"><span class="pg">10</span></a>&nbsp;&nbsp;&nbsp;<a href="/antifansub/page?x=11"><span class="pg">&gt;</span></a>&nbsp;&nbsp;&nbsp;<a href="/antifansub/page?x=87"><span class="pg">Last</span></a> </div>
<div>
<br>
 <div class="intro">
<font color=crimson face=consolas size=3>
<b>&copy; Sin,</b>
(<a href="inc/info.php" rel="nofollow" target="_blank" class="class2">server status</a>) | <font size="3" color="green">
scraped in <?php echo(number_format(microtime(true) - $start_time, 2)); ?> sec.</font>
<br><font size="3" color="gray">
feel free to pull,issues,or stealing at:<br><font color=blue> https://github.com/sinkaroid/antifansub</font>
</font>
</div>   