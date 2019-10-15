<?php
include('auth.php');
session_start();
if (!isset($_SESSION['loggued_on_user']))
	$_SESSION['loggued_on_user'];
if (auth($_GET['login'], $_GET['passwd']))
{
	$_SESSION['loggued_on_user'] = $_GET['login'];
	echo "OK\n";
	print_r($_SESSION);
}
?>

