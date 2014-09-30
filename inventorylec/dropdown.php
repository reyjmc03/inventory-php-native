<?php
require_once 'connection.php';

$sql = "SELECT * FROM t_item";
$result = mysql_query($sql);

function initDropDownList($result, $value, $display, $selected='')
{
	$opt = '';
	if (mysql_num_rows($result) > 0)
	{
		while ($rs = mysql_fetch_array($result)) 
		{
			if($rs[$value] == $selected)
			{
				$opt .='<option value="' .$rs[$value]. '" selected>' .$rs[$display]. '</option>';
				$selected = '';
			}
			else 
			{
				$opt .= '<option value="' .$rs[$value]. '">' .$rs[$display]. '</option>';
			}
		}
	}
	return $opt;
}


if(isset($_POST['cmd']))
{
	$selectedItem = $_POST['ddmSample'];
	echo "You selected: $selectedItem";
}
?>

<form action="dropdown.php" method="post">
	<select name="ddmSample">
		<?php echo initDropDownList($result,'itemid','i_name', 3); ?>
	</select>
	<input type="submit" value="Send" name="cmd" />
</form>