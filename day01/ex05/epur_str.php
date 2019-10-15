#!/usr/bin/php
<?php
if ($argc > 1)
{
	$tmp = implode(' ', array_filter(explode(' ',$argv[1])));
	echo $tmp."\n";
}
?>