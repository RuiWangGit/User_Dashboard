<?php $this->load->view('header') ?>

<body>
	
	

	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<h3 class="navbar-text nav-left">User Dashboard</h3>
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
							
							<td><a href="/users/show/<?=$user['id']?>" class="navbar-link"> <?=$user['first_name']." ".$user['last_name']?></a></td>
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