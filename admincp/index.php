<?php 
	require "controllers/c_user.php";
	$c_user = new C_user();
	if(isset($_GET["logout"]) and $_GET["logout"] = $_SESSION['username']){
		$c_user->logout();	
	}
	$c_user->processLogin();
 ?>