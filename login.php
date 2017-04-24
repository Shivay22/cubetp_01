<?php

global $login_setup;
if ($login_setup==="ok")
{
	include 'core/init.php';
}

include 'includes/overall/overall_header.php'?>
	
<div class="container-fluid">

	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-4">
		<form action='register.php' method="post" id="form1">
			<h3>New Here?</h3>
			<p>Registration is fast and easy!</p>
			
			<br /><br />
			<br />
			<input class="button1" name="register" type="submit"
				value=" Create an account " />
		</form>
		
		</div>
		<div class="col-md-2"></div>
		
		<div class="col-md-4">
		<h3>Already Registered?</h3>
		<p>If you have an account with us, please log in.</p>
		<br />
		<form action='login_check.php' method="post" id="form2">
			User name<br/>
			<input name="username" type="text" style="width: 220px"/>
			<br/>
			Password
			<br/>
			<input name="password" type="password" style="width: 220px"
				/>
			<br />
		
			<input class="button1" name="submit" type="submit"
				value=" Login " />
			<br /><br />
			Forgotton your
			<a href="recover.php?mode=username">username</a>
			or
			<a href="recover.php?mode=password">Password</a>
		</form>
		<br/><br/><br/><br/><br>
		</div>
		<div class="col-md-1"></div>
	</div>
</div>	

<?php include 'includes/overall/overall_footer.php'?>