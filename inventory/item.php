<?php
// DECLARING AUTHENTICATE PAGE
require_once 'authentication.php';

// DECLARING DATABASE CONNECTIONS
require_once 'connection.php';

// DECLARING VARIABLES
require 'variable.php';

/* >>>>>>>>>> TABULATED AND DISPLAYS DATA <<<<<<<<<< */
if(!isset($_GET['iid']))
{
	if(isset($_post['search']))
	{
		$search = $_POST['search'];
		$sql	= "SELECT * FROM t_item WHERE i_name LIKE '%$search%'";
		$result	= mysql_query($sql) or die (mysql_error());
	}
	else 
	{
		$sql	= 'SELECT * FROM t_item';
		$result	= mysql_query($sql) or die (mysql_error());
	}	
		// DUMPING YOUR DATABASE
		while ($rs = mysql_fetch_array($result)) 
		{
			$tbl .= '<tr height="2%">'; // concatenation of tables equivalent to $tbl = $tbl. '<tr>'
			$tbl .= '<td><div align="center"><font size="-1">' .$rs['itemid']. 		  '</font></div></td>';
			$tbl .= '<td><div align="center"><font size="-1">' .$rs['i_name']. 	  	  '</font></div></td>';
			$tbl .= '<td><div align="center"><font size="-1">' .$rs['i_description']. '</font></div></td>';
			$tbl .= '<td><div align="center"><font size="-1">' .$rs['i_unitcost']. 	  '</font></div></td>';
			$tbl .= '<td><div align="center"><font size="-1">' .$rs['i_total_count']. '</font></div></td>';
			// EDIT BUTTON
			$tbl .= '<td><div align="center">';
			$tbl .= "<a href=\"item.php?iid=".$rs['itemid']." \">";
			$tbl .= '<img width="15" height="15" src="assets/ico/btn_edit.png" border="0"/>';
			$tbl .= '</a></div></td>';
			$tbl .= '</tr>';		
		}
			// DEFINES AND DECALARES THE ITEM HTML TEMPLATE
			$template = 'templates/tplitem.php';
}
/* >>>>>>>>>> FOR ADD AND UPDATED DATA <<<<<<<<<< */
else
{	
	$iid = $_GET['iid'];
	
	if(is_numeric($iid))
	{
		if($iid == "-1")
		{
			$itemname 		 = '';
			$itemdescription = '';
			$unitcost 		 = '';
			$itotalcount	 = '';
		}
		else 
		{
			$sql 	= 	'SELECT * FROM t_item WHERE itemid =' . $iid;
			$result	=	mysql_query($sql) or die (mysql_error()); 
			
			if(mysql_num_rows($result)>0)
			{
				$rs				  = mysql_fetch_array($result);
				$itemname 		  = $rs['i_name'];
				$itemdescription  = $rs['i_description'];
				$unitcost 		  = $rs['i_unitcost'];
				$itotalcost 	  = $rs['i_total_count'];
			}
			else 
			{
				header('location: item.php');
			}
		}
		$template = 'templates/tplitemform.php';
	}
	else
	{
		header('location: item.php');
	}

		/* >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> SAVE EVENT HANDLER <<<<<<<<<<<<<<<<<<<<<<<<<<<< */
		if(isset($_POST['cmdsave']))
		{
			//POPULATE FORM WITH USER INPUTS
			$itemname 		 = $_POST['iname'];
			$itemdescription = $_POST['idescription'];
			$unitcost 		 = $_POST['icost'];
			$itotalcount 	 = $_POST['icount'];
			$errorcode 		 = 1;
		
				if(empty($itemname))
				{
					$error = 'Error: Item name is required!';
				}
				elseif(empty($itemdescription))
				{
					$error = 'Error: Item description is required!';
				}
				elseif(empty($unitcost))
				{
					$error = 'Error: Item cost is required!';	
				}
				elseif(empty($itotalcount))
				{
					$error = 'Error: Item count is required!';
				}
				else 
				{
					/* >>>>>>>>>>>>>>>>>>>>>>>>>>> ADDED NEW ITEM <<<<<<<<<<<<<<<<<<<<<<<< */
					if($iid=='-1')
					{
						// process and added a data and send it into the database		
						$sql = "INSERT INTO t_item (i_name, 
													i_description, 
													i_unitcost, 
													i_total_count, 
													createuserid, 
													createdate)
											VALUES ('".$itemname."', 
													'".$itemdescription."', 
													'".$unitcost."', 
													'".$itotalcount."', 
													'".$masteruserid."', 
										  			NOW() )";
						// promt a message when the item is added succesfully.		 
						$error = "Item Added Successful!";
					}
					/* >>>>>>>>>>>>>>>>>>>>> EDIT AND UPDATE ITEM <<<<<<<<<<<<<<<<<< */
					else 
					{
						// process and upadate a data	
						$sql = "UPDATE t_item
						    	SET    i_name 		 = '".$itemname."', 
						    	  	   i_description = '".$itemdescription."', 
						    	  	   i_unitcost 	 = '".$unitcost."', 
						    	       i_total_count = '".$itotalcount."', 
						    	       updateuserid  = '".$masteruserid."', 
						    	       updatedate 	 = NOW()
								WHERE  itemid 		 = ".$iid." ";
						// promt a message when the item was updated successfully.
						$error = 'Item update successful';
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
