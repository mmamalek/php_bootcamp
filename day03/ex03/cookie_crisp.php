<?php
if (isset($_GET['action']))
{ 
    if ($_GET['action'] == 'set'){
        setcookie('name', $_GET['name']);
    } else if ($_GET['action'] == 'get'){
        if ($_GET['name'] != "")
            echo $_COOKIE['name']."\n";
    } else if ($_GET['action'] == 'del'){
        setcookie('name', $_GET['name'], time() -1);
    }
}
?>