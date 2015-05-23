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
			<h3 class="navbar-text nav-left">Test App</h3>
			<p class="navbar-text nav-left"><a href="/dashboards" class="navbar-link">Dashboard</a></p>
			<p class="navbar-text nav-right"><a href="/users/edit" class="navbar-link">Profile</a></p>
			<p class="navbar-text pull-right"><a href="/logoff" class="navbar-link">Log Off</a></p>
		</div>
	</nav>

	<div class="container">
		<h3>Manage Users</h3>
		<!-- <table class="table table-striped"> -->
		<table class="table table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>created_at</th>
					<th>User_Level</th>
				</tr>
			</thead>
			<tbody>

				<?php
					foreach($users as $user){
						?>
						<tr>
							<td><?=$user['id']?></td>
							<td><?=$user['first_name']." ".$user['last_name']?></td>
							<td><?=$user['email']?></td>
							<td><?=$user['created_at']?></td>
							<td><?=$user['user_level']?></td>
						</tr>
						<?php
					}
				?>

			</tbody>
		</table>
	</div>

	





</body>


</html>