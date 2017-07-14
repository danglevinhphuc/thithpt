<?php
	session_start();
	if($_SESSION['login'] !=1){
		header('location: index.php');
	}
?>
<?php
	ob_start();
	session_start();
	$conn = mysql_connect("localhost","root","root");
	mysql_select_db("thi_online",$conn);
	mysql_query("SET NAMES 'utf8'");
	function ketqua($qno){
		$qr ="SELECT ans FROM ` generator` WHERE qno = $qno";
		return mysql_query($qr);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>test</title>
	<meta charset="utf-8">
	  <link rel="icon" href="img/logo_thitn.png">
  <script src="bootstrap-3.3.7-dist/js/jquery-1.12.1.min.js"></script>


<!-- Latest compiled JavaScript -->
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>

<body>
	<?php
		$tong = 0;
		for($i = 1; $i<=50 ; $i++){
			$row = mysql_fetch_assoc(ketqua($i));
			if(strcmp($_COOKIE[$i],$row["ans"]) == 0){
					$tong = $tong +1;
			}else{
				echo "<p>";
				echo "Cau sai thu :";
				echo $i;
				echo $row["qno"];
				echo "</p>";
				echo "<span>";
				echo "Dap an cua ban la :";
				echo $_COOKIE[$i];
				echo "| dap an chinh xac la:";
				echo $row["ans"];
				echo "</span>";
			}
		}
		echo "<H1>";
		echo $tong;
		echo " Diem </H1>";
	?>
	<?php
		for($i = 1; $i<=50 ; $i++){
			setcookie($i,$_COOKIE[$i],time()-360);
		}

	?>
</body>
</html>