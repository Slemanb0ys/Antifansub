<title>AnicountID</title>
<?php $start_time = microtime(true); ?>
<link href="http://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css">

<!-- <script type="text/javascript" src="lib/rain.js"></script> -->
<style>
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
	background-color: maroon;
    margin: auto;
  width: 20%;
	color: #000000;
    padding: 1px;
    
	-moz-border-radius: 5px;
	-webkit-border-radius: 20px; }    

   img {
  border-radius: 50%;
  border: 2px solid gold;
  padding: 1px;
 
}
img:hover {
  -webkit-transform: rotate(1000deg) scale(1.0);
	transform: rotate(1000deg) scale(1.0);
	-webkit-transition: .8s ease-in-out;
	transition: .8s ease-in-out;
}


#steal a{
	padding:15px 15px;
	margin:1;
	background:#000000;
	text-decoration:none;
	letter-spacing:1px;
	-moz-border-radius: 10px; -webkit-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
}
#steal a:hover{
	background:gray;
	border-bottom:5px solid #red;
	border-top:5px solid #red;
}

section {
  float: left;
  margin: auto;
  width: 50%;
}
html, body{
    margin: 0;

    padding: 0;

    min-width: 100%;
    width: 100%;
    max-width: 100%;

    min-height: 100%;
    height: 100%;
    max-height: 100%;
}
a {
  color: white;
}

body { 
  background: black url("inc/a.png") no-repeat fixed center; 
}

.toto {
   text-align: center;
 }
.toto pre {
  display: inline-block;
  text-align: left;
 }
 
.koceng {
   text-align: center;
 }

.koceng pre {
  display: inline-block;
  text-align: left;
 } 
 .intro {
  margin: auto;
  background-color: #f7f3f3;
  width: 30%;
  
  padding: 10px;
  -moz-border-radius: 5px;
	-webkit-border-radius: 20px;
}

A.class2 {color:blue;}

</style>
<center>
<div class="toto">
<font face="courier" size="4" color="red">
<pre style="text-align: left;">
     _          _                                      _   ___ ____  
    / \   _ __ (_)_ __ ___   ___  ___ ___  _   _ _ __ | |_|_ _|  _ \ 
   / _ \ | '_ \| | '_ ` _ \ / _ \/ __/ _ \| | | | '_ \| __|| || | | |
  / ___ \| | | | | | | | | |  __/ (_| (_) | |_| | | | | |_ | || |_| |
 /_/   \_\_| |_|_|_| |_| |_|\___|\___\___/ \__,_|_| |_|\__|___|____/ 
                               Portal Anime Count based on Indonesian time.
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
feel free to pull,issues,or stealing at:<br><font color=blue> https://github.com/sinkaroid/anitoki</font>
</font>
</div>   