<!-- USER ADD FORM TEMPLATE -->
	<?php //include 'templates/tplbanner.php';?>
	<br>
	<div class="container">
		<form class="form-add" name="form-horizontal" actions="user.php?uid=<?php echo $iid;?>" method="post" enctype="multipart/form-data">
			<div class="form-horizontal">
				<!-- >>>>>>>>>>>>>>>>>>>>>>>>> NAME AND LOGO <<<<<<<<<<<<<<<<<<<<<<<< -->
				<div class="control-group">
					<?php
						//$Uid = $_GET['uid'];
						
						if($uid == "-1")
						{
							echo "<div class='form' align='center'>";
							echo "<img src='assets/img/user.png' width='100' height='100' />";
							echo "&nbsp;&nbsp;&nbsp;";
							echo "<h4><strong>ADD NEW USER ACCOUNT</strong></h4>";
							echo "</div>";
						}
						else 
						{
							echo "<div class='form' align='center'>";
							echo "<img src='assets/img/btn_edit.png' width='100' height='100' />";
							echo "&nbsp;&nbsp;&nbsp;";
							echo "<h4><strong>UPDATE USER ACCOUNT</strong></h4>";
							echo "</div>";
						}			
					?>
				</div>
				<!-- /NAME AND LOGO -->
				
				<!-- >>>>>>>>>>>>>>>>>>>>>>>>> USERNAME <<<<<<<<<<<<<<<<<<<<<<<< -->
				<div class="control-group">
			    	<label class="control-label" for="username"><strong>USERNAME</strong></label>
					<div class="controls">
						<input class="input-xlarge" type="text" id="username" placeholder="USERNAME" name="uusername" value = "<?php echo $username;?>" />
					</div>
				</div>
				<!-- /USERNAME -->
	
				<!-- >>>>>>>>>>>>>>>>>>>>>>>>> PASSWORD <<<<<<<<<<<<<<<<<<<<<<<< -->
				<div class="control-group">
					<label class="control-label" for="userpassword"><strong>PASSWORD</strong></label>
					<div class="controls">
						<input class="input-xlarge" type="password" id="password" placeholder="PASSWORD" name="upassword" value = "<?php echo $password;?>" />
					</div>
				</div>
				<!-- /PASSWORD -->
	
				<!-- >>>>>>>>>>>>>>>>>>>>>>>>> USERS FULLNAME <<<<<<<<<<<<<<<<<<<<<<<< -->
				<div class="control-group">
					<label class="control-label" for="userfullname"><strong>YOUR FULLNAME</strong></label>
					<div class="controls">
						<input class="input-xlarge" type="text" id="firstname" 	placeholder="FIRSTNAME"  name="ufirstname"  value = "<?php echo $firstname;?>" />
						<input class="input-xlarge" type="text" id="middlename" placeholder="MIDDLENAME" name="umiddlename" value = "<?php echo $middlename;?>" />
						<input class="input-xlarge" type="text" id="lastname"   placeholder="LASTNAME"   name="ulastname"   value = "<?php echo $lastname;?>" />
					</div>
				</div>
				<!-- USERS FULLNAME -->
	
				<!-- >>>>>>>>>>>>>>>>>>>>>>>>> EMAIL ACCOUNT <<<<<<<<<<<<<<<<<<<<<<<< -->
				<div class="control-group">
					<label class="control-label" for="useremail"><strong>EMAIL ACCOUNT</strong></label>
					<div class="controls">
						<input class="input-xlarge" type="text" id="email" placeholder="EMAIL ACCOUNT" name="uemail" value = "<?php echo $email;?>" />
					</div>
				</div>
				<!-- /EMAIL ACCOUNT -->
				
				<!-- >>>>>>>>>>>>>>>>>>>>>>>>> USERTYPE <<<<<<<<<<<<<<<<<<<<<<<< -->
				<div class="control-group">
					<label class="control-label" for="userlevel"><strong>USERTYPE LEVEL</strong></label>
					<div class="controls">
						<select id="level" name="ulevel">
            				<option value="1">Administrator</option>
            				<option value="2" selected="selected">Inventory Manager</option>
            				<option value="3">Management Staff</option>
            				<option value="4">Staff</option>
          				</select> 
					</div>
				</div>
				<!-- /USERTYPE -->
		
				<!-- >>>>>>>>>>>>>>>>>>>>>>>>> BUTTON SAVE AND RESET <<<<<<<<<<<<<<<<<<<<<<<< -->
				<div class="control-group" align="right">
					<?php
						if($uid == "-1")
						{
							echo '<input type="submit" name="cmdsave" class="btn btn-primary" value="ADD USER" />&nbsp';
							echo '<input type="reset" name="cmdcancel" class="btn btn-primary" value="RESET"/>&nbsp';
						}
						else 
						{
							echo '<input type="submit" name="cmdsave" class="btn btn-primary" value="UPDATE USER" />&nbsp';
						}
					?>
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