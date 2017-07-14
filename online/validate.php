<?php
	ob_start();
	session_start();
	$user = $_POST["user"];
	$pass = $_POST["pass"];
	include "db.php";
	$query = "select count(*) from users where user = '$user' and password ='$pass'";
	$res = mysqli_query($conn,$query);
	$check = mysqli_fetch_assoc($res);
	if($check['count(*)']== 1){
		header('location: online.php');
		$_SESSION['login'] = 1;
	}
	else{
		header('location: index.php?msg=login_error');
		$_SESSION['login'] = 0;
	}


?>