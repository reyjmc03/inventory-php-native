<!-- ITEM ADD FORM TEMPLATE -->
	<?php //include 'templates/tplbanner.php';?>
	<br>
	<div class="container">
		<form class="form-add" name="form-horizontal" actions="item.php?iid=<?php echo $iid;?>" method="post" enctype="multipart/form-data">
			<div class="form-horizontal">
				
				<!-- >>>>>>>>>>>>>>>>>>>>>>>>> CHOOSE FILE <<<<<<<<<<<<<<<<<<<<<<<< -->
				<div class="control-group">
					<label class="control-label" for="inputitemname"><strong>CHOOSE FILE</strong></label>
					<div class="controls">
						<input type="file" name="photo" />
						<img src="assets/img/item/<?php echo $filename; ?>" width="200" height="200" />
					</div>
				</div>
				<!-- /CHOOSE FILE -->
			
				<!-- >>>>>>>>>>>>>>>>>>>>>>>>> ITEM NAME <<<<<<<<<<<<<<<<<<<<<<<< -->
				<div class="control-group">
			    	<label class="control-label" for="inputitemname"><strong>ITEM NAME</strong></label>
					<div class="controls">
						<input class="input-xlarge" type="text" id="inputitemname" placeholder="Item name" name="iname" value = "<?php echo $itemname;?>" />
					</div>
				</div>
				<!-- /ITEM NAME -->
	
				<!-- >>>>>>>>>>>>>>>>>>>>>>>>> ITEM CODE <<<<<<<<<<<<<<<<<<<<<<<< -->
				<div class="control-group">
					<label class="control-label" for="inputitemcode"><strong>ITEM DESCRIPTION</strong></label>
					<div class="controls">
						<input class="input-xlarge" type="text" id="inputitemcode" placeholder="Item Description" name="idescription" value = "<?php echo $itemdescription;?>" />
					</div>
				</div>
				<!-- /ITEM CODE -->
	
				<!-- >>>>>>>>>>>>>>>>>>>>>>>>> UNIT COST <<<<<<<<<<<<<<<<<<<<<<<< -->
				<div class="control-group">
					<label class="control-label" for="inputitemcost"><strong>UNIT COST</strong></label>
					<div class="controls">
						<input class="input-xlarge" type="text" id="unitcost" placeholder="Item Cost" name="icost" value = "<?php echo $unitcost;?>" />
					</div>
				</div>
				<!-- UNIT COST -->
	
				<!-- >>>>>>>>>>>>>>>>>>>>>>>>> TOTAL COUNT <<<<<<<<<<<<<<<<<<<<<<<< -->
				<div class="control-group">
					<label class="control-label" for="inputitemcount"><strong>TOTAL COUNT</strong></label>
					<div class="controls">
						<input class="input-xlarge" type="text" id="inputitemcount" placeholder="Item Count" name="icount" value = "<?php echo $itotalcount;?>" />
					</div>
				</div>
				<!-- /TOTAL COUNT -->
		
				<!-- >>>>>>>>>>>>>>>>>>>>>>>>> BUTTON SAVE AND RESET <<<<<<<<<<<<<<<<<<<<<<<< -->
				<div class="control-group" align="right">
					<input type="submit" name="cmdsave" class="btn btn-primary" value="SAVE ITEM" />&nbsp;
					<input type="reset" name="cmdcancel" class="btn btn-primary" value="RESET"/>&nbsp;
				</div>
				<!-- /BUTTON SAVE AND RESET -->
				
				<!-- >>>>>>>>>>>>>>>>>>>>>>>>> ERROR MESSAGE <<<<<<<<<<<<<<<<<<<<<<<< -->
				<div class="control-group">
					<?php echo $error; ?>
				</div>
				<!-- /ERROR MESSAGE -->
			</div>
		</form>
	</div>
<!-- /ITEM ADD FORM TEMPLATE -->




