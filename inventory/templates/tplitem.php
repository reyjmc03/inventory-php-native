<!-- ITEM TEMPLATE -->	

	<?php include 'templates/tplbanner.php';?>
	<br>
	<!-- data tables -->
	<div class="container-fluid">
		
		<form  class="form-signin" name="form-signin" method="post" actions="item.php">
			<!-- search box and button -->
			<div class="input-append">
        		<input type="text" name="search" class="span4" id="appendedInputButton" placeholder="Search Item" width="50">
        		<button type="submit" class="btn btn-primary">Search Item</button>  
        		<!-- add new item button -->
					<button type="submit" class="btn btn-primary"><a href="item.php?iid=-1">Add New Item</a></button> 		
				<!-- /add new item button -->    
    		</div>
			<!-- /search box and button -->
			<br>
			<!-- database tables -->
			<table border="0" width="100%" class="table table-bordered table-condensed">
				<thead>
					<!-- table headers -->
					<tr><th colspan="8" bgcolor="#272722"><font color="white">I&nbsp;T&nbsp;E&nbsp;M&nbsp;S</font></th></tr>
					<tr bgcolor="#979795" height="2%">
						<th width = "10%"><strong><div align="center"><font color="white" style="calibri"  size="-1">	ID			</font></div></strong></th>
						<th width = "15%"><strong><div align="center"><font color="white" style="calibri"  size="-1">	NAME		</font></div></strong></th>
						<th width = "52%"><strong><div align="center"><font color="white" style="calibri"  size="-1">	DESCRIPTION	</font></div></strong></th>
						<th width = "10%"><strong><div align="center"><font color="white" style="calibri"  size="-1">	PRICE		</font></div></strong></th>
						<th width = "10%"><strong><div align="center"><font color="white" style="calibri"  size="-1">	COUNT		</font></div></strong></th>
						<th width =  "3%"><strong><div align="center"><font color="white" style="calibri"  size="-1">	EDIT		</font></div></strong></th>	
					</tr> 
				</thead>
				<!-- <<<<<<<<<< DUMPTING DATA >>>>>>>>>>> -->
				<?php echo $tbl;?>
			</table>
			<!-- /table headers -->
		</form>
	</div>
	<!-- /data tables -->