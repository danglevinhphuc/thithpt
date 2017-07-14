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
	function ketqua($qno){
		$qr ="select ans from generator where qno = $qno";
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
	$c46 = $_POST["46"];
	$c47 = $_POST["47"];
	$c48 = $_POST["48"];
	$c49 = $_POST["49"];
	$c50 = $_POST["50"];
	setcookie("46",$c46,time() + (60*90));
	setcookie("47",$c47,time() + (60*90));
	setcookie("48",$c48,time() + (60*90));
	setcookie("49",$c49,time() + (60*90));
	setcookie("50",$c50,time() + (60*90));
	if(isset($_POST["back"])){
		header("location: index_10.php");
	}
	if(isset($_POST["finish"])){
		header("location: ket_qua.php");
	}
?>