


<?php $this->load->view('header') ?>

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
			<p>We're going to build a cool application using a MVC framework! The application was built by Rui Wang!</p>
			<p><a class = "btn btn-large btn-info" href="/users/signin">Start</a></p>	
		</div>

	</div>




	<div class="container" >
		<div class="row-fluid">
			<div class="col-md-4">
				<h4>Manage Users</h4>
				<p>Using this application, you'll learn how to add, remove, and edit users for the application.</p>
				
			</div>
			<div class="col-md-4">
				<h4>Leave Messages</h4>
				<p>Users will be able to leave a message to another user using this application.</p>
				
			</div>
			<div class="col-md-4">
				<h4>Edit User Information</h4>
				<p>Admins will be able to edit another user's information (email address, first name, last name, etc).</p>
				
			</div>
		</div>
	</div>




<?php $this->load->view('footer') ?>

	



