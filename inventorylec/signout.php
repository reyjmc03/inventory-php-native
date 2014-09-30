<?php 
setcookie('userid',null,time()-24*60*60); 
header('location:signin.php');
?>