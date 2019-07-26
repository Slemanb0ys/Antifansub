<?php
echo '<font face=consolas>';
//ambil str
function wordFilter($text)
{
    $ambilkata = $text;

    //open element
	$ambilkata = str_replace('<i class="fa fa-tag">', '</font>] </div></div><hr color=red width=20%><br><section><p hidden>', $ambilkata);
    $ambilkata = str_replace('</p>', '', $ambilkata);
    $ambilkata = str_replace('<p>', '', $ambilkata);
    $ambilkata = str_replace('<div class="thumb">', '<div class="kotak">', $ambilkata);
    $ambilkata = str_replace('width="150"', 'width="190"', $ambilkata);
    $ambilkata = str_replace('height=', 'height="190"', $ambilkata);
    $ambilkata = str_replace('h2', 'h4', $ambilkata);
    $ambilkata = str_replace('<ul>', '', $ambilkata);
    $ambilkata = str_replace('Admin', '<font color=gray><b>babu</b></font><font color=skyblue> (BOT)</font>,', $ambilkata);
    

    $ambilkata = str_replace('<i class="fa fa-user"></i>', '[<font face=consolas size=2>', $ambilkata);
    //openurl
    $ambilkata = str_replace('" title=', '&fansub=SUCK" rel="nofollow" target="_blank" title=', $ambilkata);
    $ambilkata = str_replace('<a href="', '<a href="/antifansub/get.php?anti=', $ambilkata);
    $ambilkata = str_replace('indonesia/', 'indonesia/&fansub=SUCK', $ambilkata);
    
    return $ambilkata;
}

$form = '<form action="get.php" method="get">
<input type="hidden" style="width:40%;" name="anti"><br>
<input type="hidden" name="fansub">
</center>
</form>';