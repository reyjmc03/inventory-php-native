<?php
// ATTACH FILE, DATABASE CONNECTION 
require_once('connection.php'); 

$lblErrorMsg='';


if(isset($_POST['cmdSubmit'])) // EVENT HANDLER
{
	if(empty($_POST['inputEmail']))
	{
		$lblErrorMsg='Username is required';
	}
	elseif(empty($_POST['inputPassword']))
	{
		$lblErrorMsg='Password is required!';
	}
	else
	{
		
		$sql="select UserID 
			from t_user 
			where u_username = '" . $_POST['inputEmail']."'
			AND u_password 	 = '" . $_POST['inputPassword']."'";
			
		$result=mysql_query($sql) or die(mysql_error());
		
		if(mysql_num_rows($result)>0)
		{
			$rs = mysql_fetch_array($result);         					 //gets information
			setcookie('userid',$rs['UserID'],time()+24*60*60); 		 //store or sets 
			
			header('location:home.php');
		}
		else
		{
			$lblErrorMsg='Invalid username/password!';
		}
	}
}



if(!empty($lblErrorMsg))
{
	$lblErrorMsg='<div class="container">
				  	<div class="alert alert-error" align="center">
				  		<strong>'.$lblErrorMsg.'</strong>
				  	</div>
				  </div>';
}
// SIGN IN VERIFICATIONS
require_once ('template/tplsignin.php');
?>