<?php
	ob_start();
	
	$conn = mysql_connect();
	mysql_select_db("test",$conn);
	function cauhoi($qno){
		$qr ="select * from generator where qno = $qno";
		return mysql_query($qr);
	}
	/*$c5 = $_POST["5"];
	$c6 = $_POST["6"];
	$c7 = $_POST["7"];
	$c8 = $_POST["8"];
	setcookie("5",$c5,time() + (60000*10));
	setcookie("6",$c6,time() + (60000*10));
	setcookie("7",$c7,time() + (60000*10));
	setcookie("8",$c8,time() + (60000*10));*/
	$c41 = $_POST["41"];
	$c42 = $_POST["42"];
	$c43 = $_POST["43"];
	$c44 = $_POST["44"];
	$c45 = $_POST["45"];
	setcookie("41",$c41,time() + (60*90));
	setcookie("42",$c42,time() + (60*90));
	setcookie("43",$c43,time() + (60*90));
	setcookie("44",$c44,time() + (60*90));
	setcookie("45",$c45,time() + (60*90));
	if(isset($_POST["back"])){
		header("location: index_9.php");
	}
	if(isset($_POST["next"])){
		header("location: index_11.php");
	}
?>