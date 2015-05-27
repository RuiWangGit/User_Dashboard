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
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="/assets/css/style.css" rel="stylesheet">
	<script src="/assets/js/bootstrap.min.js"></script>	
	


</head>


<body>
	
	

	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<h3 class="navbar-text nav-left">User_Dashboard</h3>
			<p class="navbar-text nav-left"><a href="/dashboards" class="navbar-link">Dashboard</a></p>
			<p class="navbar-text nav-right"><a href="/users/edit" class="navbar-link">Profile</a></p>
			<p class="navbar-text pull-right"><a href="/logoff" class="navbar-link">Log Off</a></p>
		</div>
	</nav>

	
	<div class="container" style="padding: 0 20px">
		<h2 class="navbar-text pull-left">Edit User #</h2>
		<p class="navbar-text pull-right"><a class = "btn btn-large btn-info" href="/dashboard">Return to Dashboard</a></p>
	</div>

	<div class="container" >

		<div class="row-fluid">
			<div class="col-sm-6">
				<fieldset class="well the-fieldset">
				<legend class="the-legend">Edit Information</legend>
					<form role="form" action="/users/edit/info" method="post">
						<div class="form-group">
							<label for="email">Email:</label>
							<input type="email" class="form-control" name="email" value="<?=$user['email']?>">
						</div>
						<div class="form-group">
							<label for="first_name">First Name:</label>
							<input type="first_name" class="form-control" name="first_name" value="<?=$user['first_name']?>">
						</div>
						<div class="form-group">
							<label for="last_name">Last Name:</label>
							<input type="last_name" class="form-control" name="last_name" value="<?=$user['last_name']?>">
						</div>
						
						<div class="form-group">
							<input type="hidden" name="submit" value="save">
							<button type="submit" class="btn btn-default pull-right">Save</button>
						</div>
					</form>
				</fieldset>
			</div>
			<div class="col-sm-6 pull-right">
				<fieldset class="well the-fieldset">
					<legend class="the-legend">Change Password</legend>
					<form role="form" class="form-border" action="/users/edit/pwd" method="post">
						<div class="form-group">
							<label for="pwd">Password:</label>
							<input type="password" class="form-control" name="pwd" placeholder="Enter password">
						</div>
						<div class="form-group">
							<label for="pwd">Password Confirmation:</label>
							<input type="password" class="form-control" name="pwd_cfn" placeholder="Enter password confirmation">
						</div>
						<div class="form-group">
							<input type="hidden" name="submit" value="update">
							<button type="submit" class="btn btn-default pull-right">Update Password</button>
						</div>
					</form>
				</fieldset>
			</div>
			
		</div>


		<div class="row-fluid">
			<div class="col-sm-12">
				<fieldset class="well the-fieldset">
				<legend class="the-legend">Edit Description</legend>
					<form role="form" action="/users/edit/description" method="post">
						
							<textarea  class="form-control" rows="4" name="description"><?=$user['description']?></textarea>
							<!-- <input type="hidden" name="description" value=""> -->
							<input type="hidden" name="submit" value="save">
							<button type="submit" class="btn btn-default pull-right">Save</button>
						
					</form>
				</fieldset>
			</div>
		</div>

	</div>





</body>


</html>