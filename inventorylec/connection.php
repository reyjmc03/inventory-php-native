<?php
    require_once('config.php');
    $link = mysql_connect($host, $username, $password);

    if($link==false)
    {
            die(mysql_error());
    }
    mysql_select_db($db_name);
?>