<!DOCTYPE HTML>
<html>

<head>
	<title>User Dashboard</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="">

	<!--To use Jquery -->
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
	</script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js">
	</script>

	<!-- To use bootstrap -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../../assets/css/style.css" rel="stylesheet">
	<link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
	<script src="../../assets/js/bootstrap.min.js"></script>	
	


</head>


<body>
	
	

	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<h3 class="navbar-text nav-left">User Dashboard</h3>
			<p class="navbar-text nav-left"><a href="#" class="navbar-link">Home</a></p>
			<p class="navbar-text pull-right"><a href="/signin" class="navbar-link">Sign in</a></p>
		</div>
	</nav>

	

	<div class ="hero-unit">

		
		<div class="container" id="wall-image">
			<h3>Welcome to the Dashboard</h3>
			<p>We're going to build a cool application using a MVC framework! The application was built with the Rui Wang!</p>
			<p><a class = "btn btn-large btn-info" href="/users/signin">Start</a></p>	
		</div>

	</div>




	<div class="container" >
		<div class="row-fluid">
			<div class="col-md-4">
				<h4>Manage Users</h4>
				<p>Using this application, you'll learn how to add, remove, and edit users for the application.</p>
				<!-- <a class="btn" href="#pricingShared" role="button" data-toggle="modal">View Plans</a> -->
			</div>
			<div class="col-md-4">
				<h4>Leave Messages</h4>
				<p>Users will be able to leave a message to another user using this application.</p>
				<!-- <a class="btn" href="#pricingShared" role="button" data-toggle="modal">View Plans</a> -->
			</div>
			<div class="col-md-4">
				<h4>Edit User Information</h4>
				<p>Admins will be able to edit another user's information (email address, first name, last name, etc).</p>
				<!-- <a class="btn" href="#pricingShared" role="button" data-toggle="modal">View Plans</a> -->
			</div>
		</div>
	</div>






	<div class = "navbar navbar-fixed-bottom">
		<div class = "navbar-inner">
			<div class="container footer-margin-top">

				<p class="muted pull-left" >Created by Rui Wang </p>
				<p class="muted pull-right" >Made in USA </p>

			</div>
		</div>
	</div>






</body>


</html>