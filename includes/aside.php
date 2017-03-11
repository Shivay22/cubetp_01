<div id="aside">
<?php 
	if (logged_in()===true){
		include '/includes/widgets/logged_in.php';
		include 'includes/widgets/user_count.php';
	}else
	{
	include '/includes/widgets/login.php';
	}
	
?>
</div>