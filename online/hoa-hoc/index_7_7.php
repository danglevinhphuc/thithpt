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
	$c26 = $_POST["26"];
	$c27 = $_POST["27"];
	$c28 = $_POST["28"];
	$c29 = $_POST["29"];
	$c30 = $_POST["30"];
	setcookie("26",$c26,time() + (60*90));
	setcookie("27",$c27,time() + (60*90));
	setcookie("28",$c28,time() + (60*90));
	setcookie("29",$c29,time() + (60*90));
	setcookie("30",$c30,time() + (60*90));
	if(isset($_POST["back"])){
		header("location: index_6.php");
	}
	if(isset($_POST["next"])){
		header("location: index_8.php");
	}
?>