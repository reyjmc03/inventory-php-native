<!-- HOME TEMPLATE -->
	<!-- float header navigations -->
	<div class="navbar navbar-inverse navbar-fixed-top">
			<!-- navigations -->
    		<div class="navbar-inner">
        		<div class="container-fluid">
          			<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            			<span class="icon-bar"></span>
            			<span class="icon-bar"></span>
            			<span class="icon-bar"></span>
          			</button>
          		
          			<!-- title of website -->
          			<!--<a class="brand" href="#">CNCTC INVENTORY SYSTEM</a>-->
          			<!-- /title of website -->
          
          			<!-- navigational links -->
          			<div class="nav-collapse collapse">
            			<ul class="nav">
              				<li><a href='home.php'>Home</a></li>
              				<li><a href='item.php'>Item</a></li>
              				<li><a href='store.php'>Store</a></li>
			  				<li><a href='user.php'>User</a></li>
              				<li> <a href='signout.php'>Sign Out</a></li>
			 			</ul>
          			</div>
          			<!-- navigational links -->
          			
          			<!-- users name -->
          			<div class="navbar-text" align="right">
          				<?php
							echo "<strong>Welcome:&nbsp;<font color='blue'>".$_COOKIE['level']." </font></strong>";
            				echo '&nbsp;&nbsp';
						?>
          			</div>
          			<!-- /users name -->
        		</div>
    		</div>
    		<!-- /navigations -->
	</div>
	<!-- float header navigations -->
    <?php include 'templates/tplbanner.php';?>
	<br>
	<!-- container -->
	<div class="container-fluid">
    	<h1>Bootstrap starter template</h1>
    	<p>Use this document as a way to quick start any new project. 1<br> All you get is this message and a barebones HTML document.</p>
    </div>
    <!-- /container --> 
     
<!-- /HOME TEMPLATE -->