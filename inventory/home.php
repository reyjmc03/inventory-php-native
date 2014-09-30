<?php
echo $_COOKIE['userid'];
echo $_COOKIE['level'];
include 'authentication.php'; 

/* MASTER PAGE */
$template = 'templates/tplhome.php';
require_once('templates/tplmaster.php');
?>