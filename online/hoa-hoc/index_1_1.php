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
		$c1 = $_POST["1"];
		$c2 = $_POST["2"];
		$c3 = $_POST["3"];
		$c4 = $_POST["4"];
		$c5 = $_POST["5"];
		setcookie("1",$c1,time() + (60*90));
		setcookie("2",$c2,time() + (60*90));
		setcookie("3",$c3,time() + (60*90));
		setcookie("4",$c4,time() + (60*90));
		setcookie("5",$c5,time() + (60*90));
	if(isset($_POST["next"])){
		header("location: index_2.php");
	}
?>
