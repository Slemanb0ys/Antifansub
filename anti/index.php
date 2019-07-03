<?php
if(isset($_GET['nekopoi'])){
	echo'

<font face=consolas color=gray size="4">
<pre>
--Usage:
> paste url ex. http://linkpoi.in/9eV33
</pre>
</font>

<br>
<form action="index.php" method="get">
<input type="hidden" name="nekopoi" value="c0"/>
<input type="text" style="width:15%;" placeholder="http://linkpoi.in/9eV33" name="url"><br>
<input type="submit" name="nekop0" value=">">
</form>
</font>
<br>';
}		

if(isset($_GET['nekop0'])){
	function getB64($html){
	preg_match_all('|id=(.*?)&c=|', $html, $out);
	return $out[1][0];
}


function curlGet($link){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $link);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$result = curl_exec($ch);
	curl_close($ch);
	return $result;
}

function realUrl($link){
	$get = curlGet($link); 
	return base64_decode(getB64($get)); 
}
	
}

if(isset($_GET['samehada'])){
	echo'

<font face=consolas color=gray size="4">
<pre>
--Usage:
> paste url ex. https://www.tetew.info/njir/b4qw4
</pre>
</font>

<br>
<form action="index.php" method="get">
<input type="hidden" name="samehada" value="c0"/>
<input type="text" style="width:15%;" placeholder="https://www.tetew.info/njir/b4qw4" name="url"><br>
<input type="submit" name="same0" value=">">
</form>
</font>
<br>';
}		

if(isset($_GET['same0'])){
	
function getB64($html){
	preg_match_all('|r=(.*?)"|', $html, $out);
	return $out[1][0];
}


function curlGet($link){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $link);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$result = curl_exec($ch);
	curl_close($ch);
	return $result;
}

function realUrl($link){
	$get = curlGet($link); // get html pertama
	$herp = base64_decode(getB64($get)); // http:siherp
	$gHerp = curlGet($herp); // get lagi karnablm link download asli
	return base64_decode(getB64($gHerp)); // tampilin, udah dapet link download
}
	
}

	@ini_set('output_buffering',0); 
@ini_set('display_errors', 0);
$url = $_GET['url'];
echo'<a href="';
echo realUrl($url);
echo'" rel="nofollow" target="_blank"><font face=consolas color=royalblue>'.realUrl($url).'</font>';



?>