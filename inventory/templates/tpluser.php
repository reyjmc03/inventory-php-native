<!-- USER DATA TEMPLATE -->
	<?php include 'templates/tplbanner.php'; ?>
	<br>
	<!-- data tables -->
	<div class="container-fluid">
		<form  class="form-signin" name="form-signin" method="post" actions="user.php">
			<!-- promts a status message -->
			<?php echo $error;?>
			<!-- database tables -->
			<table border="0" width="100%" class="table table-bordered table-condensed">
				<thead>
					<!-- table headers -->
					<tr><th colspan="8" bgcolor="#272722"><font color="white">U&nbsp;S&nbsp;E&nbsp;R&nbsp;&nbsp;A&nbsp;C&nbsp;C&nbsp;O&nbsp;U&nbsp;N&nbsp;T&nbsp;S</font></th></tr>
					<tr bgcolor="#979795" height="2%">
						<td width="7%"><strong><div align="center"><font color="white" size="-1">  ID			</font></div></strong></td>
						<td width="19%"><strong><div align="center"><font color="white" size="-1"> NAME   		</font></div></strong></td>
						<td width="17%"><strong><div align="center"><font color="white" size="-1"> USERNAME	    </font></div></strong></td>	
						<td width="17%"><strong><div align="center"><font color="white" size="-1"> EMAIL	    </font></div></strong></td>
						<td width="17%"><strong><div align="center"><font color="white" size="-1"> USERTYPE	    </font></div></strong></td>
						<td width="15%"><strong><div align="center"><font color="white" size="-1"> DATE CREATED </font></div></strong></td>
						<td width="4%"><strong><div align="center"><font color="white" size="-1">  EDIT		    </font></div></strong></td>
						<td width="4%"><strong><div align="center"><font color="white" size="-1">  DEL			</font></div></strong></td>								
					</tr>
				</thead>
				<!-- <<<<<<<<<< DUMPTING DATA >>>>>>>>>>> -->
				<?php echo $tbl;?>
			</table>
			<!-- /table headers -->
		</form>
	</div>
	<!-- /data tables -->
	
<!-- /USER DATA TEMPLATE -->