<?php
$masteruserid = 0;
if(isset($_COOKIE['userid']))
{
	$masteruserid = $_COOKIE['userid'];
}

require_once 'connection.php';
$error = '';
$errorcode = 0;
$tbl = '';

if (isset($_POST['cmdBuy']))
{
	if ($masteruserid == 0)
	{
		$error = 'You are not logged-in.';
		$errorcode = 1;
	}
	else 
	{
		if (isset($_POST['cbitem']))
		{
			// var_dump($_POST['cbitem']);
			foreach($_POST['cbitem'] as $i)
			{
				$sql = "INSERT INTO t_userxitem
					(userid,
					itemid,
					uxi_quantity,
					createuserid,
					createdate,
					updateuserid,
					updatedate)
					VALUES (
					'" . $masteruserid. "',
					'" . $i . "',
					1,
					'" . $masteruserid . "',
					NOW(),
					'" . $masteruserid . "',
					NOW()
					)";
				$result = mysql_query($sql) or die(mysql_error());
				$error = 'Item insert successful!';
				
				$sql = "UPDATE t_item SET i_total_count = i_total_count - 1 WHERE itemid = " . $i;
				$result = mysql_query($sql) or die(mysql_error());
				
				
				
			}
			$tbl = initlist();	
		}
		else
		{
			$error = 'tgtgt';
			$errorcode = 1;
		}
	}
	
}
else
{
	$tbl = initlist();	
}


//format error message
if(!empty($error))
{
    if($errorcode==1)
    {
        $error = '<div class="alert alert-error">'.$error.'</div>';
    }
    else
    {
        
        $error = '<div class="alert alert-success">'.$error.'</div>';   
    }    
}

function initlist()
{
	global  $error, $errorcode; 
	$sql = "SELECT itemid, i_name, i_description, i_unitcost 
			FROM t_item";
	$result = mysql_query($sql) or die(mysql_error());

	$tbl = '';
	while ($rs = mysql_fetch_array($result))
	{
		$tbl .= '<tr>';
		$tbl .= '<td><input type="checkbox" name="cbitem[]" value="' . $rs['itemid'] . '"></td>';
		$tbl .= "<td>" .$rs['i_name']. "</td>";
		$tbl .= "<td>" .$rs['i_description']. "</td>";
		$tbl .= "<td>" .$rs['i_unitcost']. "</td>";
		$tbl .= '</tr>';
	}
	
	return $tbl;
}
$template='templates/tplstore.php';
include 'templates/tplmaster.php';
?>