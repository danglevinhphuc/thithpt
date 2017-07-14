<?php
	session_start();
	if($_SESSION['login'] !=1){
		header('location: index.php');
	}
?>
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
	$c16 = $_POST["16"];
	$c17 = $_POST["17"];
	$c18 = $_POST["18"];
	$c19 = $_POST["19"];
	$c20 = $_POST["20"];
	setcookie("16",$c16,time() + (60*90));
	setcookie("17",$c17,time() + (60*90));
	setcookie("18",$c18,time() + (60*90));
	setcookie("19",$c19,time() + (60*90));
	setcookie("20",$c20,time() + (60*90));
	if(isset($_POST["back"])){
		header("location: index_3.php");
	}
	if(isset($_POST["next"])){
		header("location: index_6.php");
	}
?>