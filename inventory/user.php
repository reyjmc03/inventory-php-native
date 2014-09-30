<?php 
// AUTHENTICATE PAGE
require_once 'authentication.php';

// DATABASE CONNECTIONS
require_once 'connection.php';

// INITIALIZE VARIABLES
include 'variable.php';

/* >>>>>>>>>> TABULATED AND DISPLAYS DATA <<<<<<<<<< */
if(!isset($_GET['uid']))
{
	if(isset($_POST['search']))
	{
		$search=$_POST['search'];
		$sql = "SELECT * FROM t_user WHERE u_username OR u_email LIKE '%$search%'";
		$result = mysql_query($sql) or die (mysql_error());

	}
	else
	{
		//$sql = 'select * from t_user';
		$sql = "SELECT * FROM t_user , t_level WHERE t_level.id = t_user.`level` ORDER BY t_level.id";
		$result = mysql_query($sql) or die (mysql_error());
	}

		// DUMPING YOUR DATABASE
		while ($rs = mysql_fetch_array($result)) 
		{
			$tbl .= '<tr height="2%">'; // concatenation of tables equivalent to $tbl = $tbl. '<tr>'
			$tbl .= '<td><div align="center"><font size="-1">'.$rs['userid'].'</font></div></td>';
			$tbl .= '<td><div align="left"><font size="-1">&nbsp;&nbsp;&nbsp;'.$rs['u_firstname'].'&nbsp;'.$rs['u_middlename'].'&nbsp'.$rs['u_lastname'].'</font></div></td>';
			$tbl .= '<td><div align="center"><font size="-1">' .$rs['u_username'].'</font></div></td>';
			$tbl .= '<td><div align="center"><font size="-1">' .$rs['u_email'].	'</font></div></td>';
			$tbl .= '<td><div align="center"><font size="-1">' .$rs['level'].	'</font></div></td>';
			$tbl .= '<td><div align="center"><font size="-1">' .$rs['createdate']. '</font></div></td>';
			//EDIT BUTTON
			$tbl .= '<td><div align="center">';
			$tbl .= "<a href=\"user.php?uid=".$rs['userid']." \">";
			$tbl .= '<img width="15" height="15" src="assets/ico/btn_edit.png" border="0"/>';
			$tbl .= '</a></div></td>';
			// DELETE BUTTON
			$tbl .= '<td><div align="center">';
			$tbl .= "<a href=\"user.php?uid=".$rs['userid']."&del=-1 \">";
			$tbl .= '<img width="15" height="15" src="assets/ico/btn_del_red.png" border="0"/>';
			$tbl .= '</a></div></td>';
			$tbl .= '</tr>';			
		}	
			// DEFINES AND DECALARES THE ITEM HTML TEMPLATE
			$template = 'templates/tpluser.php';	
}
/* >>>>>>>>>> FOR ADD AND UPDATED DATA <<<<<<<<<< */
else
{	
	$uid = $_GET['uid'];
	
	if(is_numeric($uid))
	{
		if($uid == "-1")
		{
			$username 	= '';
			$password 	= '';
			$firstname 	= '';
			$middlename = '';
			$lastname 	= '';
			$email 		= '';
			$usertype 	= '';
		}
		else 
		{
			$sql    = 'SELECT * FROM t_user 
					   WHERE userid =' . $uid;
						 
			$result	=  mysql_query($sql) or die (mysql_error()); 
			
			if(mysql_num_rows($result)>0)
			{
				$rs			= mysql_fetch_array($result);
				$username 	= $rs['u_username'];
				$password 	= $rs['u_password'];
				$firstname 	= $rs['u_firstname'];
				$middlename = $rs['u_middlename'];
				$lastname 	= $rs['u_lastname'];
				$email 		= $rs['u_email'];
				$usertype 	= $rs['level'];
			}
			else 
			{
				header('location: user.php');
			}
		}
		$template = 'templates/tpluserform.php';
	}
	else
	{
		header('location: user.php');
	}

		/* >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> SAVE EVENT HANDLER <<<<<<<<<<<<<<<<<<<<<<<<<<<< */
		if(isset($_POST['cmdsave']))
		{
			//POPULATE FORM WITH USER INPUTS		
			$username 		= $_POST['uusername'];
			$password 		= $_POST['upassword'];
			$firstname 		= $_POST['ufirstname'];
			$middlename 	= $_POST['umiddlename'];
			$lastname 		= $_POST['ulastname'];
			$email 			= $_POST['uemail'];
			$usertype 		= $_POST['ulevel'];
			$errorcode 		 = 1;
		
				if(empty($username))
				{
					$error = 'Error: Username required!';
				}
				elseif(empty($password))
				{
					$error = 'Error: Password is required!';
				}
				elseif(empty($email))
				{
					$error = 'Error: Email is required!';
				}
				else 
				{
					/* >>>>>>>>>>>>>>>>>>>>>>>>>>> ADDED NEW USER ACCOUNT <<<<<<<<<<<<<<<<<<<<<<<< */
					if($uid=='-1')
					{
						// process and added a data and send it into the database			
						$sql = "INSERT INTO t_user (u_username, 
						 							u_password, 
						 							u_firstname, 
						 							u_middlename, 
						 							u_lastname, 
						 							u_email, 
						 							level, 
						 							createuserid, 
						 							createdate)
											VALUES ('".$username."', 
													'".$password."', 
													'".$firstname."', 
													'".$middlename."', 
													'".$lastname."',
													'".$email."',
													'".$usertype."',
													'".$masteruserid."',
								 	 				NOW() )";
						// promt a message when the item is added succesfully.			 
						$error = "User Account added successful!";
						setcookie(null,time()-24*60*60);
						header('location: user.php');
					}
					/* >>>>>>>>>>>>>>>>>>>>> EDIT AND UPDATE USER ACCOUNT <<<<<<<<<<<<<<<<<< */
					else
					{
						// process and upadate a data		
						$sql = "UPDATE t_user
						    		SET u_username 		= '".$username."',
						    			u_password		= '".$password."',
						    			u_firstname		= '".$firstname."',
						    			u_middlename	= '".$middlename."',
						    			u_lastname		= '".$lastname."',
						    			u_email			= '".$email."',
						    			level			= '".$usertype."',
						    			updateuserid	= '".$masteruserid."',
						    			updatedate 		= NOW()
								  WHERE userid			= ".$uid." ";
						// promt a message when the item was updated successfully.	
						$error = 'User Account update successful!';
						header('location: user.php');
					}
					$result = mysql_query($sql) or die (mysql_error());
					$errorcode = 0;
				}
		}
	
}

/* >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> FORMAT ERROR MESSAGE <<<<<<<<<<<<<<<<<<<<<<<<<<<< */
if(!empty($error))
{
	if($errorcode == 1)
	{
		$error = '<div class="alert alert-error" align="center"><strong>'.$error.'</strong></div>';
	}
	else
	{
		$error = '<div class="alert alert-success" align="center"><strong>'.$error.'</strong></div>';
	}
}

/* >>>>>>>>>> MASTER PAGE <<<<<<<<<< */
require_once('templates/tplmaster.php');
?>