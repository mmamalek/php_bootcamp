<?php
function auth($username, $password)
{
	$password = hash('whirlpool', $password);
	$accounts = file_get_contents("../ex01/private/passwd");

	$accounts = unserialize($accounts);
	foreach ($accounts as $acc)
	{
		if ($acc['user'] == $username && $acc['pass'] == $password)
			return true;
	}
	return false;
}
?>