<?php
	session_start();
	if($_SESSION['login'] != 1){
		header('location:index.php');
	}else{
		$_SESSION['login'] = 0;
		//session_unregister('login');
		//unset($_SESSION[])
		//session_destroy();
		session_start();
		header("location:index.php");
	}
?>