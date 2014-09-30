<!DOCTYPE html>
<html lang="en">
	<!-- BEGIN HEAD -->
	<head>
		<!-- meta -->
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta name="description" content="">
    	<meta name="author" content="">
    	<!-- /meta -->
    	
    	<!-- css -->
    	<link href="assets/css/bootstrap.css" rel="stylesheet">
    	<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    	<!--<link href="assets/css/docs.css" rel="stylesheet">-->
    	<!-- <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet"> -->
    
    	<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen" />
    	<style type="text/css">
      		/* Sticky footer styles
      		-------------------------------------------------- */
      		html,body 
      		{
        		height: 100%;
        		/* The html and body elements cannot have any padding or margin. */	
        		
        		/*padding-top: 60px;
        		padding-bottom: 40px;*/
      		}
      		
      		/* Login Forms */
			.form-signin 
			{
				max-width: 250px;
   				padding: 19px 19px 19px;
   				margin: 0 auto 20px;
   				background-color: #f5f5f5;
   				border: 2px solid #e5e5e6;
   				-webkit-border-radius: 5px;
   				-moz-border-radius: 5px;
   				border-radius: 5px;
   				-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
   				-moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
   				box-shadow: 0 1px 2px rgba(0,0,0,.05);    
			}
      		
			.form-signin .form-signin-heading,
			.form-signin .checkbox 
			{
				margin-bottom: 10px;
			}
   		
			.form-signin input[type="text"],
			.form-signin input[type="password"] 
			{
				font-size: 16px;
				height: auto;
				margin-bottom: 15px;
				padding: 7px 9px;
			}
		</style>
		<!-- /css -->
		
		<!-- Fav and touch icons -->
    	<!-- <link rel="shortcut icon" href="assets/ico/favicon.ico"> -->
    	
    	<!-- title -->
    	<title>CNCTC - PHP & MySQL Training</title>
    	<!-- /title -->
	</head>
	<!-- END HEAD -->
	
	<!-- BEGIN BODY -->
	<body>
		<br>

    	<!-- sign in -->
  			<?php include ('signin.php'); $_SESSION['restrict'] = 0;?>
      	<!-- /sign in -->
      	
   		<!-- footer -->
   			<?php //include('templates/tplfooter.php'); ?>
   		<!-- /footer -->
   		
		<!-- Le javascript ================================================== -->
    	<!-- Placed at the end of the document so the pages load faster -->
    	<script src="assets/js/jquery.js"></script>
    	<script src="assets/js/bootstrap-transition.js"></script>
    	<script src="assets/js/bootstrap-alert.js"></script>
    	<script src="assets/js/bootstrap-modal.js"></script>
    	<script src="assets/js/bootstrap-dropdown.js"></script>
    	<script src="assets/js/bootstrap-scrollspy.js"></script>
    	<script src="assets/js/bootstrap-tab.js"></script>
    	<script src="assets/js/bootstrap-tooltip.js"></script>
    	<script src="assets/js/bootstrap-popover.js"></script>
    	<script src="assets/js/bootstrap-button.js"></script>
    	<script src="assets/js/bootstrap-collapse.js"></script>
    	<script src="assets/js/bootstrap-carousel.js"></script>
    	<script src="assets/js/bootstrap-typeahead.js"></script>
    	
    	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    	<!-- [if lt IE 9] -->
     	<script src="assets/js/html5shiv.js"></script>
    	<!-- [endif] -->
	</body>
	<!-- END BODY -->
</html>