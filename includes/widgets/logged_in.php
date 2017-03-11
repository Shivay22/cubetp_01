<div>
	<h2>Logged in...
		<?php 
			echo($user_data['first_name']);
		?>
	!</h2>
	<div class="inner">
		<ul>
			<li>
				<a href="<?php echo($user_data['username']);?>">Profile</a>
			</li>
			<li>
				<a href="settings.php">Settings</a>
			</li>
			<li>
				<a href="Change_password.php">Change Password</a>
			</li>
			<li>
				<a href="logout.php">Logout</a>
			</li>
					
		</ul>
	</div>
</div>