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

		<div class="row-fluid">
			<div class="col-sm-6">
				<h4><?=$user['first_name']." ".$user['last_name']?></h4>
				<table class="table table-condensed">					
					<tbody>
						<tr>
							<td>Registered at:</td>
							<td><?=$user['created_at']?></td>
						</tr>
						<tr>
							<td>User ID:</td>
							<td><?=$user['id']?></td>
						</tr>
						<tr>
							<td>Email Address:</td>
							<td><?=$user['email']?></td>
						</tr>
						<tr>
							<td>Description:</td>
							<td><?=$user['description']?></td>
						</tr>
					</tbody>
				</table>

			</div>
		</div>


		<div class="row-fluid">
			<div class="col-sm-12">
				<h4>Leave a Message for <?=$user['first_name']." ".$user['last_name']?></h4>

				<form role="form" action="/walls/post" method="post">						
							<textarea  class="form-control" rows="4" name="message" placeholder="leave a message.."></textarea>
							<input type="hidden" name="wall_id" value="<?=$user['id']?>"> 
							<input type="hidden" name="submit" value="Post">
							<button type="submit" class="btn btn-default pull-right">Post</button>
						
				</form>
			</div>

		</div>


		<div class="row-fluid">

			<?php

				foreach ($messages as $key=>$message){
			?>	
					<div class="col-sm-1">
					</div>
					<div class="col-sm-11">
						<a href="/users/show/<?=$message[0]['message_user_id']?>"><?= $message[0]['message_first_name']." ".$message[0]['message_last_name'] ?></a> wrote
						<div class="message">
							<?= $message[0]['message'] ?>
						</div>



						<?php
								//comments here
								foreach($messages[$key] as $value){
									if ( isset($value['comment'])){

									
						?>
								<div class='name-field'>
									<a href="/users/show/<?=$value['comment_user_id']?>">
									<?= $value['first_name']." ".$value['last_name'] ?></a> wrote


								</div>
								<div class="comment">
									<?= $value['comment'] ?>
								</div>
						
						<?php	
									}		
								}

						?>

						<form role="form" action="/walls/add/comment" method="post">						
							<input  class="form-control" rows="3" name="comment" value="" placeholder="write a comment">
							<input type="hidden" name="wall_id" value="<?=$user['id']?>">
							<input type="hidden" name="message_id" value="<?= $message[0]['message_id'] ?>"> 
							<input type="hidden" name="submit" value="Post">
							<button type="submit" class="btn btn-default pull-right">Post</button>
						
						</form>
					
					</div>
				<?php		
				}				
			?>



			


		</div>
		







	</div>

	





</body>


</html>