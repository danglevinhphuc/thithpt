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
	$c36 = $_POST["36"];
	$c37 = $_POST["37"];
	$c38 = $_POST["38"];
	$c39 = $_POST["39"];
	$c40 = $_POST["40"];
	setcookie("36",$c36,time() + (60*90));
	setcookie("37",$c37,time() + (60*90));
	setcookie("38",$c38,time() + (60*90));
	setcookie("39",$c39,time() + (60*90));
	setcookie("40",$c40,time() + (60*90));
	if(isset($_POST["back"])){
		header("location: index_8.php");
	}
	if(isset($_POST["next"])){
		header("location: index_10.php");
	}
?>