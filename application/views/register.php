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
	<link href="/assets/css/style.css" rel="stylesheet">
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
	<script src="/assets/js/bootstrap.min.js"></script>	
	


</head>


<body>
	
	
	

	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<h3 class="navbar-text nav-left">User Dashboard</h3>
			<p class="navbar-text nav-left"><a href="/" class="navbar-link">Home</a></p>
			<p class="navbar-text pull-right"><a href="/signin" class="navbar-link">Sign in</a></p>
		</div>
	</nav>



	


	<div class="container">
		<div class="error">
			<?php 
			$this->load->library("form_validation");
			echo validation_errors(); 
			echo $this->session->flashdata('error');

		    ?>
		</div>
		
		<form role="form" action="/users/register" method="post">
			<h2>Register</h2>
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" name="email" value="micheal@gmail.com" placeholder="Enter email">
			</div>
			<div class="form-group">
				<label for="first_name">First Name:</label>
				<input type="first_name" class="form-control" name="first_name" value="michael" placeholder="Enter first name">
			</div>
			<div class="form-group">
				<label for="last_name">Last Name:</label>
				<input type="last_name" class="form-control" name="last_name" value="choi" placeholder="Enter last name">
			</div>
			<div class="form-group">
				<label for="pwd">Password:</label>
				<input type="password" class="form-control" name="pwd" value="123456" placeholder="Enter password">
			</div>
			<div class="form-group">
				<label for="pwd">Password Confirmation:</label>
				<input type="password" class="form-control" name="pwd_cfn" value="123456" placeholder="Enter password confirmation">
			</div>
			
			<input type="hidden" name="submit" value="register">
			<button type="submit" class="btn btn-default">Submit</button>
			<p><a href="/signin">Already have an account? Login</a></p>
		</form>

		
	</div>


		









</body>


</html>