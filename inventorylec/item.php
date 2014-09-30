<?php
require_once 'authentication.php';// AUTHENTICATE PAGE
require_once('connection.php');   // DATABASE CONNECTION
$error = ''; 					 // INITIALIZE VARIABLE
$errorcode = 0;
$tbl = '';

// FOR IMAGE DIRECTORY
$uploads_dir = 'assets/img/item';

// TABULATED DATA
if(!isset($_GET['iid']))
{
	if(isset($_POST['search']))
	{
		$search=$_POST['search'];
		$sql = "SELECT * FROM t_item WHERE i_name LIKE '%$search%'";
		$result = mysql_query($sql) or die (mysql_error());

	}
	else
	{
		$sql = 'select * from t_item';
		$result = mysql_query($sql) or die (mysql_error());
	}

		while ($rs = mysql_fetch_array($result)) // REFERENCE TO PASS THE VALUE .. USED RETRIEVE ARRAY
		{										// WHILE READ TRUE OR FALSE VALUE
			$tbl .= '<tr>';    // equivalent $tbl = $tbl . '<tr>'
			$tbl .= "<td>" .$rs['itemid']. 			"</td>";
			$tbl .= "<td>" .$rs['i_name']. 			"</td>";
			$tbl .= "<td>" .$rs['i_description']. 	"</td>";
			$tbl .= "<td>" .$rs['i_unitcost']. 		"</td>";
			$tbl .= "<td>" .$rs['i_total_count']. 	"</td>";
			$tbl .= "<td><a href=\"item.php?iid=".$rs['itemid']." \"> edit</a></td>";
			$tbl .= '</tr>';
		}
	$template='template/tplitem.php';
	
}
else // FOR ADD AND UPDATE FORM
{
    $iid = $_GET['iid'];

    if(is_numeric($iid))
    {	
            if($iid == "-1")
            {
                    $itemname = '';
                    $itemdescription = '';
                    $unitcost = '';
                    $itotalcount = '';
            }else{
                    $sql='select * from t_item WHERE itemid = ' . $iid;
                    $result=mysql_query($sql) or die(mysql_error());

                    if(mysql_num_rows($result)>0)
                    {
                            $rs=mysql_fetch_array($result);
                            $itemname = $rs['i_name'];
                            $itemdescription = $rs['i_description'];
                            $unitcost = $rs['i_unitcost'];
                            $itotalcount = $rs['i_total_count'];
                    }else{
                        header('location: item.php');			
                    }
            }
            $template='template/tplitemform.php';
    }
    else
    {
            header('location: item.php');
    }
	
    //Save Event Handler 
    if(isset($_POST['cmdsave']))
    {
        // populate form with user inputs
        $itemname = $_POST['iname'];
        $itemdescription = $_POST['idescription'];
        $unitcost = $_POST['icost'];
        $itotalcount = $_POST['icount'];            
        $errorcode = 1;
        if(empty($itemname))			{$error = 'Error: Item name is required!';}
        elseif(empty($itemdescription)) {$error = 'Error: Item description is required!';}
        elseif(empty($unitcost)) 		{$error = 'Error: Item cost is required!';}
        elseif(empty($itotalcount))		{$error = 'Error: Item count is required!';}
        else
        {
        echo '<pre>';
				var_dump($_FILES);
		echo '</pre>';
			
            if($iid=='-1')
            {
            	//$tmp_name = $_FILES["fimage"];
				$tmp_name = $_FILES["fimage"]["tmp_name"];
				//$name = $_FILES["fimage"];
				$name = $_FILES["fimage"]["name"];
				$newfile = time()."_".$name;
				
        		move_uploaded_file($tmp_name, "$uploads_dir/$newfile");
				
                // add item process
                $sql = "INSERT INTO t_item (i_name, 
                						    i_description, 
                						    i_unitcost, 
                						    i_total_count, 
                						    createuserid, 
                						    createdate,
                						    i_image)
                        VALUES ('".$itemname."', 
                        		'".$itemdescription."', 
                        		'".$unitcost."', 
                        		'".$itotalcount."', 
                        		'".$masteruserid."', 
                        		NOW(),
                        		'".$newfile."' )";
								
				// promt a message when item added successful
                $error = 'Item insert successful!';
            }
            else
            {
                //edit item process
                $sql = "UPDATE t_item 
                        SET i_name 		  = '".$itemname."', 
                        	i_description = '".$itemdescription."', 
                        	i_unitcost 	  = '".$unitcost."', 
                       	 	i_total_count = '".$itotalcount."', 
                        	updateuserid  = ".$masteruserid.", 
                        	updatedate 	  = NOW()
                        WHERE itemid 	  = ".$iid." ";
                        
                // promt a message when item updated successful
                $error = 'Item update successful!';
            }
            $result = mysql_query($sql) or die(mysql_error()); // SENT TO DATABASE
            $errorcode = 0;
        }
    }
}

//format error message
if(!empty($error))
{
    if($errorcode==1)
    {
        $error = '<div class="alert alert-error">'.$error.'</div>';
    }else{
        
        $error = '<div class="alert alert-success">'.$error.'</div>';   
    }    
}
include 'template/tplmaster.php';
?>