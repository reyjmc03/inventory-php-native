<?php 
// CONNECTION STRING
require_once 'connection.php';

include 'authentication.php';
$_SESSION['restrict'] = 0;
?>
<!DOCTYPE html>
<html lang="en">
	<!-- BEGIN HEAD -->
	<head>
    	<meta charset="utf-8">
    	
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
   	 	<meta name="description" content="">
    	<meta name="author" content="">

    	<!-- Le styles -->
    	
    	<!--[if lt IE 9]-->
      	<script src="/assets/js/html5shiv.js"></script>
    	<!--[endif]-->
    	
    	<link href="assets/css/bootstrap.css" rel="stylesheet">
		<link href="assets/css/jquery-ui.css" rel="stylesheet">
    	<style>
      		body 
      		{
        		padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      		}
    	</style>
   	   	<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
   	   	<style type="text/css">
      		/* Login Forms */
			.form-add
			{
				max-width: 470px;
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
      		
			.form-add .form-add-heading,
			.form-add .checkbox 
			{
				margin-bottom: 10px;
			}
   		
			/*.form-add input[type="text"],
			.form-add input[type="password"] 
			{
				font-size: 16px;
				height: auto;
				margin-bottom: 15px;
				padding: 7px 9px;
			}*/
		</style>
   	   	<!-- /Le styles -->

		<!-- title tag -->
   		<title>CNCTC PHP & MySQL Training</title>
   		<!-- /title tag -->
  	</head>
  	<!-- END HEAD -->
  	
	<!-- BEGIN BODY -->
  	<tbody>
		
		<!-- templates -->
		<?php require_once($template);?>
		<!-- /templates -->
		
		<!-- footer -->
   			<?php include('templates/tplfooter.php'); ?>
   		<!-- /footer -->
		
    	<!-- Le javascript ================================================== -->
    	<!-- Placed at the end of the document so the pages load faster -->
    	<script src="assets/js/jquery.js"></script>
   		<script src="assets/js/bootstrap.min.js"></script>
   		<script src="assets/js/jquery-ui.js"></script>
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
   		<script>
			$(function(){$("#inputbirthdate").datepicker();});
   		</script>
	</tbody>
	<!-- END BODY -->
</html>

<?php
//mysql_free_result($result);
?>