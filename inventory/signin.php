<?php
// SIGN IN VERIFICATIONS
require_once ('templates/tplsignin.php');

// REQUIRE TO CALL STRING/DATABASE CONNECTIONS
require_once ('connection.php'); 

// DECLARING VARIABLES
require ('variable.php');
	
// VERIFICATION OF SIGN INPUTS
if(isset($_POST['cmdSubmit']))
{
	/* >>>>>>>> IF THE TBUSERNAME IS EMPTY <<<<<<<< */
	if(empty($_POST['tbusername']))
	{
		$lblErrorMsg='USERNAME IS REQUIRED!';
	}
	/* >>>>>>>> IF THE TBPASSWORD IS EMPTY <<<<<<<< */	
	elseif(empty($_POST['tbpassword']))
	{
		$lblErrorMsg='PASSWORD IS REQUIRED!';
	}
	/* >>>>>>>> IF THE TEXTBOXES FILLED WITH STRINGS <<<<<<<< */
	else
	{
		$sql="SELECT 
					 userid, 
					 level, 
					 u_username, 
					 u_password, 
					 u_firstname, 
					 u_middlename, 
					 u_lastname	
			  FROM   
			  		 t_user 										
			  WHERE  
			  		 u_username = '" . $_POST['tbusername']."' 
			  		 OR 
			  		 	u_email = '" . $_POST['tbusername']."'
			  		 AND 
			  		 	u_password = '" . $_POST['tbpassword']."'";
					
		// no database message result
		$result = mysql_query($sql, $conn) or die(mysql_error());
		$rs 	= mysql_fetch_assoc($result);  
		$user 	= mysql_num_rows($result);
		
		// it checks it has a data on your database
		if(mysql_num_rows($result)>0)
		{
			if($user==0)
			{
				header("location: index.php?stat=SHORTCUT_ATTEMPT");
			}
			else
			{				
				setcookie('userid',$rs['userid'],time()+24*60*60); 
				header("location: home.php");
			}
		}
		// displays message if the username and password is wrong
		else
		{
			$lblErrorMsg='INVALID USERNAME AND PASSWORD!';
		}
	}
}

/* >>>>>>>>  MESSAGE <<<<<<<<< */
if(!empty($lblErrorMsg))
{
	$lblErrorMsg='<div class="container"><div class="alert alert-error" align="center"><strong>'.$lblErrorMsg.'</strong></div></div>';	
}
	//DISPLAYS A WARNING MESSAGE
	echo $lblErrorMsg;
?>
