<?php
	session_start();
	if($_SESSION['login'] !=1){
		header('location: index.php');
	}
?>
<?php
	/*ob_start();
	session_start();
	$conn = mysql_connect("localhost","root","root");
	mysql_select_db("userdata",$conn);
	function ketqua($qno){
		$qr ="select ans from generator where qno = $qno";
		return mysql_query($qr);
	}
	$c9 = $_POST["9"];
	$c10 = $_POST["10"];
	$c11 = $_POST["11"];
	$c12 = $_POST["12"];
	setcookie("9",$c9,time() + (60000*10));
	setcookie("10",$c10,time() + (60000*10));
	setcookie("11",$c11,time() + (60000*10));
	setcookie("12",$c12,time() + (60000*10));*/
	ob_start();
	
	$conn = mysql_connect();
	mysql_select_db("test",$conn);
	function cauhoi($qno){
		$qr ="select * from generator where qno = $qno";
		return mysql_query($qr);
	}
	$c11 = $_POST["11"];
	$c12 = $_POST["12"];
	$c13 = $_POST["13"];
	$c14 = $_POST["14"];
	$c15 = $_POST["15"];
	setcookie("11",$c11,time() + (60*90));
	setcookie("12",$c12,time() + (60*90));
	setcookie("13",$c13,time() + (60*90));
	setcookie("14",$c14,time() + (60*90));
	setcookie("15",$c15,time() + (60*90));
?>
<?php
	if(isset($_POST["back"])){
		header("location: index_2.php");
	}
	if(isset($_POST["next"])){
		header("location: index_5.php");
	}
?>
