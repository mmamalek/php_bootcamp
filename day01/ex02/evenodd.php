#!/usr/bin/php
<?php
while (true)
{
	echo 'Enter a number: ';
	$input = fgets(STDIN);
	if (feof(STDIN))
		break;
	$input = trim($input, "\n");
	if (is_numeric($input))
	{
		$num = (int)$input;
		if ($num % 2)
			echo "The number $num is odd\n";
		else
			echo "The number $num is even\n";
	}
	else
		echo "'$input' is not a number\n";
}
?>