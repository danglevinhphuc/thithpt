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
	$c21 = $_POST["21"];
	$c22 = $_POST["22"];
	$c23 = $_POST["23"];
	$c24 = $_POST["24"];
	$c25 = $_POST["25"];
	setcookie("21",$c21,time() + (60*90));
	setcookie("22",$c22,time() + (60*90));
	setcookie("23",$c23,time() + (60*90));
	setcookie("24",$c24,time() + (60*90));
	setcookie("25",$c25,time() + (60*90));
	if(isset($_POST["back"])){
		header("location: index_5.php");
	}
	if(isset($_POST["next"])){
		header("location: index_7.php");
	}
?>