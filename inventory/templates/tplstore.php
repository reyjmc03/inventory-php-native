    
	<?php echo $error;?>
	<form class="form-search" action="store.php" method="post">
	<input type="text" class="input-medium">
	<button type="submit" class="btn">Search</button>
	<br />
    <br />
	<table class="table">
		<tr>
			<th></th>
			<th>Name</th>
			<th>Description</th>
			<th>Price</th>
		</tr>
		<?php echo $tbl; ?>
		
	</table>
	<div class="row-fluid">
		<div class="span10"></div>
		<div class="span2"><button class="btn btn-primary" type="submit" name="cmdBuy">Buy Selected</button></div>
    </div>
	</form>
	