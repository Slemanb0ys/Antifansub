<?php
echo '<font face=consolas>';
//ambil str
function wordFilter($text)
{
    $ambilkata = $text;

    //open element
	$ambilkata = str_replace('<i class="fa fa-tag">', '<p hidden>', $ambilkata);
    $ambilkata = str_replace('</p>', '', $ambilkata);
    $ambilkata = str_replace('<p>', '|', $ambilkata);
    $ambilkata = str_replace('<div class="thumb">', '<hr color=black width=20%>', $ambilkata);
    $ambilkata = str_replace('width="150"', 'width="300"', $ambilkata);
    $ambilkata = str_replace('height=', 'height=150', $ambilkata);
    //openurl
    $ambilkata = str_replace('<a href="', '<a href="/antifansub/get.php?anti=', $ambilkata);
    $ambilkata = str_replace('indonesia/', 'indonesia/&fansub=SUCK', $ambilkata);
    return $ambilkata;
}

$form = '<form action="get.php" method="get">
<input type="hidden" style="width:40%;" name="anti"><br>
<input type="hidden" name="fansub" value="SUCK">
</center>
</form>';