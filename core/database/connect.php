<?php
// $connect_error="sorry Maintenance of the website in progress, please check again later";
// $connection=mysql_connect('localhost','root','') or die($connect_error);
// $db=mysql_select_db('cube',$connection) or die($connect_error);


try{
	$db=new PDO('mysql:host=127.0.0.1;dbname=lr','root','');
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
	echo $e->getMessage();
}

?>