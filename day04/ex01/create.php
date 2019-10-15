<?php
if ($_POST['submit'] != 'OK')
    echo "ERROR\n";
else
{
    $username = $_POST['login'];
	$password = $_POST['passwd'];
	if ($username == "" || $password == "")
	{
		echo "ERROR\n";
		return;
	}
    $password = hash("whirlpool",$password);
    $account = Array('user'=>$username, 'pass'=>$password);

    if(!file_exists('private'))
        mkdir("private");
    if(file_exists('private/passwd'))
    {
        $accounts = file_get_contents('private/passwd');
        $accounts = unserialize($accounts);
        $exist = false;

        foreach($accounts as $acc)
        {
            if ($acc['user'] == $username)
            {
                $exist = true;
                echo "ERROR\n";
                break;
            }
        }
		if (!$exist)
		{
			$accounts[] = $account;
			echo "OK\n"; 
		}
    }
    else
    {
        $accounts = Array();
        $accounts[] = $account;
    }
    $data = serialize($accounts);
    file_put_contents('private/passwd', $data);
}
?>