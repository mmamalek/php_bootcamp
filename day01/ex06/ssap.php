#!/usr/bin/php
<?php
if ($argc > 1)
{
	unset($argv[0]);
	$str = join(' ', $argv);
	$arr = array_filter(explode(' ',$str));
	sort($arr);
	foreach ($arr as $md)
	echo $md."\n";

}
?>
