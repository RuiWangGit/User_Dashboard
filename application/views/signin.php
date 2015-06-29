<?php $this->load->view('header') ?>


<body>
	
	

	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<h3 class="navbar-text nav-left">User Dashboard</h3>
			<p class="navbar-text nav-left"><a href="/" class="navbar-link">Home</a></p>
			<p class="navbar-text pull-right"><a href="#" class="navbar-link">Sign in</a></p>
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
		
		<form role="form" action="/users/signin" method ="post">
			<h2>Signin</h2>
			<div class="form-group">
				<label for="email">Email:</label>
				<input  name="email" id="email" type="email" class="form-control"  placeholder="Enter email">
			</div>
			<div class="form-group">
				<label for="pwd">Password:</label>
				<input name="pwd" id="pwd" type="password" class="form-control"  placeholder="Enter password">
			</div>
			<div class="checkbox">
				<label><input type="checkbox"> Remember me</label>
			</div>
			<input type="hidden" name="submit" value="signin">
			<!-- <input type="submit" class="btn btn-default"> -->
			<button type="submit" class="btn btn-default">Submit</button>
			<p><a href="/register">Don't have an account? Register.</a></p>
		</form>

		



	</div>


		









</body>


</html>