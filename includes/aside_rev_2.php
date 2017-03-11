<div id="aside_l">
<?php 
	if (logged_in()===true){
		include '/includes/widgets/logged_in.php';
	}else
	{
	include '/includes/widgets/login.php';
	}
	
?>
</div>