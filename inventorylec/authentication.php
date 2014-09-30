<?php
//var_dump($_COOKIE['userid']);
if(isset($_COOKIE['userid']) == false)
{
	header("location: signin.php");
}else{
    $masteruserid = $_COOKIE['userid'];
}
?>