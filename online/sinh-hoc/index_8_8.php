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
	$c31 = $_POST["31"];
	$c32 = $_POST["32"];
	$c33 = $_POST["33"];
	$c34 = $_POST["34"];
	$c35 = $_POST["35"];
	setcookie("31",$c31,time() + (60*90));
	setcookie("32",$c32,time() + (60*90));
	setcookie("33",$c33,time() + (60*90));
	setcookie("34",$c34,time() + (60*90));
	setcookie("35",$c35,time() + (60*90));
	if(isset($_POST["back"])){
		header("location: index_7.php");
	}
	if(isset($_POST["next"])){
		header("location: index_9.php");
	}
?>