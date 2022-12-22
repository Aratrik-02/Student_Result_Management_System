<?php 
	session_start();
 ?>
<?php 
	$_SESSION['status']="loggedout";
	header('location:index.php');
	session_destroy();
 ?>