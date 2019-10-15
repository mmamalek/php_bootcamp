#!/usr/bin/php
<?php
function ft_split(string $str)
{
	$arr = array_filter(explode(' ',$str));
	sort($arr);
	return $arr;
}
?>
