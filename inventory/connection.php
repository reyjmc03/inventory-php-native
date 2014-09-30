<?php
session_start();

require_once('config.php');
	
$conn = mysql_pconnect($host, $username, $password);
mysql_select_db($db_name, $conn);
?>