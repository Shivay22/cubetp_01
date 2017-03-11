<?php
$connect_error="sorry Maintenance of the website in progress, please check again later";
$connection=mysql_connect('localhost','root','') or die($connect_error);
$db=mysql_select_db('cube',$connection) or die($connect_error);

?>