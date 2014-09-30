<!-- data tables -->
<div class="container-fluid">
	<?php echo $error;?>
	<form  class="form-signin" name="form-signin" action="store.php" method="post">
		<!-- search -->
		<!--<input type="text" class="input-medium">-->
		<!--<button type="submit" class="btn">Search</button>-->
		
		<div class="input-append">
        	<input type="text" name="search" class="span4" id="appendedInputButton" placeholder="Search Item" width="50">
        	<button type="submit" class="btn btn-primary">Search Item</button>     
    	</div>
		<br />
		<!-- database tables -->
		<table border="0" width="100%" class="table table-bordered table-condensed">
			<thead>
			<!-- table headers -->		
				<tr><th colspan="8" bgcolor="#272722"><div align="center"><font color="white">S&nbsp;T&nbsp;O&nbsp;R&nbsp;&nbsp;E&nbsp;</font></div></th></tr>
				<tr bgcolor="#979795" height="2%">
					<td width="3%"><strong><div align="center"></td>
					<td width="20%"><strong><div align="center"><font color="white" size="-1">	NAME			</font></div></strong></td>
					<td width="57%"><strong><div align="center"><font color="white" size="-1">	DESCRIPTION   	</font></div></strong></td>
					<td width="20%"><strong><div align="center"><font color="white" size="-1">	PRICE			</font></div></strong></td>								
				</tr>
			</thead>
			<!-- /table headers -->
				
			<!-- dump data -->
			<?php echo $tbl; ?>
			<!-- /dump data -->
		</table>
		<!-- /table headers -->
		
		<!-- buy selected button -->
		<div class="row-fluid">
			<div class="span10"></div>
			<div class="span2"><button class="btn btn-primary" type="submit" name="cmdBuy">Buy Selected</button></div>
    	</div>
    	<!-- /buy selected button -->
	</form>
</div>
<!-- /data tables -->
	