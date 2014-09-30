<!--<?php                                                            	
	/* if(isset($_COOKIE['userid'])==false)
	{
		/* header('location:index.php'); */
		//header('location:index.php');
	//}
	if(isset($_COOKIE['userid'])==false)
	{
		header("localtion:index.php?stat=SHORTCUT_ATTEMPT");
	}
?>-->

<?php
//var_dump($_COOKIE['userid']);
	if(isset($_COOKIE['userid']) == false)
	{
		header("location:index.php?stat=SHORTCUT_ATTEMPT");
	}
	else
	{
    	$masteruserid = $_COOKIE['userid'];
	}
?>
