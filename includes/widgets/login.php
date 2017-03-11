
	<p style="Font-size:36px;text-align:center">
		Login or Create an Account
	</p>
	<div id="register">
		<form action="login_register.php" method="post" id="form1">
			<h3>New Here?</h3>
			<p>Registration is free and easy!</p>
			<ul>
				<li>Faster checkout</li>
				<li>Save multiple shipping addresses</li>
				<li>View and track orders and more</li>
			</ul>
			<br />
			<br /><br />
			<br />
			<input id="button" name="register" type="submit"
				value=" Create an account " />
		</form>
	</div>

	<div id="login">
		<h3>Already Registered?</h3>
		<p>If you have an account with us, please log in.</p>
		<br />
		<form action="login_check.php" method="post" id="form2">
			Email Address<br/>
			<input name="email" type="text" style="width: 220px"
				/>
			<br />
			<br />
			Password<br/>
			<input name="password" type="password" style="width: 220px"
				/>
			<br />
			<br />
			<input id="button" name="submit" type="submit"
				value=" Login " />
			<br /><br />
			Forgotton your
			<a href="recover.php?mode=username">username</a>
			or
			<a href="recover.php?mode=password">Password</a>
		</form>
	</div>
