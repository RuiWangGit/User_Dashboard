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
			<p class="navbar-text nav-right"><a href="/users/edit/" class="navbar-link">Profile</a></p>
			<p class="navbar-text pull-right"><a href="/logoff" class="navbar-link">Log off</a></p>
		</div>
	</nav>

	<div class="container">
		<h3>Manage Users</h3>
		<p class="navbar-text pull-right"><a class = "btn btn-large btn-info" href="/users/new">add new</a></p>          
		<table class="table table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>created_at</th>
					<th>User_Level</th>
					<th>Actions</th>
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
							<td><a href="/users/edit/<?=$user['id']?>">edit</a> <a class="btn" href="#delete-confirmation" role="button" data-toggle="modal">remove</a></td>
						</tr>
						<?php
					}
				?>

			</tbody>
		</table>
	</div>


	<div class="modal fade" id="delete-confirmation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
          <h4 class="modal-title">Do you really want to delete the user?</h4>
        </div>
        <div class="modal-body">
        	<form action="/admins/remove" method="post">
        		<input type="hidden" name="id" value="">
          		<button type="submit" class="btn btn-default" href="/admins/remove">Yes</button>
          		<button type="submit" class="btn btn-primary" data-dismiss="modal">No</button>
          	</form>
          
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
	





</body>


</html>