<?php
	session_start();
	if($_SESSION['login'] !=1){
		header('location: index.php');
	}
?>
<?php
	ob_start();
$conn = mysql_connect();
	mysql_select_db("test",$conn) or die("Can't connect to test");
	mysql_query("SET NAMES 'utf8'");
	function cauhoi($qno){
		$qr ="SELECT * FROM `generator` WHERE qno = $qno and ma_de = '".$_SESSION['de']."'";
		return mysql_query($qr);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>test</title>
	<meta charset="utf-8">
		 <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" >
  <link rel="icon" href="img/logo_thitn.png">
  <script src="bootstrap-3.3.7-dist/js/jquery-1.12.1.min.js"></script>
  
<script type="text/javascript" src="online.js"></script>
<style type="text/css">
	@font-face{
	font-family: 'myFont';
    src: url('Fonts/Lato-Regular.ttf');
}
body{
	background-color:#AAFFEE;
	font-family: 'myFont';
	font-size:18px;
}
</style>

		<style type="text/css">
		body{
			background-color: #CFF;
		}
		.btn-default{
			margin-top: 2px;
			margin-bottom: 2px;
		}
		span{
			color:;
		}
	</style>
</head>

<body onload="ReadCk(0); ReadCk(1); ReadCk(2); ReadCk(3); ReadCk(4); ReadCk(5); ReadCk(6); ReadCk(7); ReadCk(8); ReadCk(9); ReadCk(10); ReadCk(11);ReadCk(12); ReadCk(13); ReadCk(14); ReadCk(15); ReadCk(16); ReadCk(17); ReadCk(18); ReadCk(19); ReadCk(20); ReadCk(21); ReadCk(22); ReadCk(23);ReadCk(24); ReadCk(25); ReadCk(26); ReadCk(27); ReadCk(28); ReadCk(29); ReadCk(30); ReadCk(31); ReadCk(32); ReadCk(33); ReadCk(34); ReadCk(35);ReadCk(36); ReadCk(37); ReadCk(38); ReadCk(39); ReadCk(40); ReadCk(41); ReadCk(42); ReadCk(43); ReadCk(44); ReadCk(45); ReadCk(46); ReadCk(47);ReadCk(48); ReadCk(49);">
	<div id="ghi_chu" style="float:left; width:20%;  ">
							
							
								<a href="#1"> <input type="button" class="btn btn-default "  style="padding:0px; width:20px" value="1" id="c1" ></a>
								<a href="#2"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="2" id="c2"></a>
								<a href="#3"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="3" id="c3"></a>
								<a href="#4"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="4" id="c4"></a>
								<a href="#5"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="5" id="c5"></a>
								<a href="#6"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="6" id="c6"></a>
								<a href="#7"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="7" id="c7"></a>
								<a href="#8"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="8" id="c8"></a>
								<a href="#9"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="9" id="c9"></a>
								<a href="#10"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="10" id="c10"></a>
								<a href="#11"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="11" id="c11"></a>
								<a href="#12"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="12" id="c12"></a>
								<a href="#13"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="13" id="c13"></a>
								<a href="#14"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="14" id="c14"></a>
								<a href="#15"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="15" id="c15"></a>
								<a href="#16"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="16" id="c16"></a>
								<a href="#17"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="17" id="c17"></a>
								<a href="#18"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="18" id="c18"></a>
								<a href="#19"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="19" id="c19"></a>
								<a href="#20"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="20" id="c20"></a>
								<a href="#21"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="21" id="c21"></a>
								<a href="#2"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="22" id="c22"></a>
								<a href="#23"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="23" id="c23"></a>
								<a href="#24"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="24" id="c24"></a>
								<a href="#25"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="25" id="c25"></a>
								<a href="#26"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="26" id="c26"></a>
								<a href="#27"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="27" id="c27"></a>
								<a href="#28"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="28" id="c28"></a>
								<a href="#29"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="29" id="c29"></a>
								<a href="#30"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="30" id="c30"></a>
								<a href="#31"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="31" id="c31"></a>
								<a href="#32"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="32" id="c32"></a>
								<a href="#33"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="33" id="c33"></a>
								<a href="#34"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="34" id="c34"></a>
								<a href="#35"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="35" id="c35"></a>
								<a href="#36"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="36" id="c36"></a>
								<a href="#37"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="37" id="c37"></a>
								<a href="#38"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="38" id="c38"></a>
								<a href="#39"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="39" id="c39"></a>
								<a href="#40"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="40" id="c40"></a>
								<a href="#41"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="41" id="c41"></a>
								<a href="#42"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="42" id="c42"></a>
								<a href="#43"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="43" id="c43"></a>
								<a href="#44"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="44" id="c44"></a>
								<a href="#45"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="45" id="c45"></a>
								<a href="#46"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="46" id="c46"></a>
								<a href="#47"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="47" id="c47"></a>
								<a href="#48"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="48" id="c48"></a>
								<a href="#49"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="49" id="c49"></a>
								<a href="#50"> <input type="button" class="btn btn-default" style="padding:0px; width:20px" value="50" id="c50"></a>
	</div>
	<div style="float:right; width:80%;">
	<form action="index_8_8.php" method="post" name="form">   
	<table border="1">
	<?php
	for( $i =31 ; $i <= 35 ;$i++){
	if(!isset($_COOKIE[$i])){
		$row = mysql_fetch_assoc(cauhoi($i));
		
			/*echo "<tr>"."<td>"."Cau:".$row['qno']."</td>"."<td colspan=3>".$row['question']."</td>"."</tr>";
			echo "<tr>"."<td>"."A:"."<input type='radio' name='".$row['qno']."' value='".$row['opt1']."'/>".$row["opt1"]."</td>"."<td>"."B:"."<input type='radio' name='".$row['qno']."' value='".$row['opt2']."'/>".$row["opt2"]."</td>"."<td>"."C:"."<input type='radio' name='".$row['qno']."' value='".$row['opt3']."' />".$row["opt3"]."</td>"."<td>"."D:"."<input type='radio' name='".$row['qno']."' value='".$row['opt4']."'/>".$row["opt4"]."</td>"."</tr>";*/
			echo "<input type='button' class='btn btn-default btn-lg' value='Câu ".$row['qno']."'>";
			echo "<span>".$row['question']."</span>";
			echo "<p><input type = 'radio' name='".$row['qno']."' value= '".$row['opt1']."' >A: ".$row["opt1"]."</p>";
			echo "<p><input type = 'radio' name='".$row['qno']."' value= '".$row['opt2']."' >B: ".$row["opt2"]."</p>";
			echo "<p><input type = 'radio' name='".$row['qno']."' value= '".$row['opt3']."' >C: ".$row["opt3"]."</p>";
			echo "<p><input type = 'radio' name='".$row['qno']."' value= '".$row['opt4']."' >D: ".$row["opt4"]."</p>";
		}else{
			$row = mysql_fetch_assoc(cauhoi($i));
			if( strcmp ($_COOKIE[$i] ,$row["opt1"]) ==0){
				/*echo "<tr>"."<td>"."Cau:".$row['qno']."</td>"."<td colspan=3>".$row['question']."</td>"."</tr>";
			echo "<tr>"."<td>"."A:"."<input type='radio' name='".$row['qno']."' value='".$row['opt1']."' checked/>".$row["opt1"]."</td>"."<td>"."B:"."<input type='radio' name='".$row['qno']."' value='".$row['opt2']."'/>".$row["opt2"]."</td>"."<td>"."C:"."<input type='radio' name='".$row['qno']."' value='".$row['opt3']."' />".$row["opt3"]."</td>"."<td>"."D:"."<input type='radio' name='".$row['qno']."' value='".$row['opt4']."'/>".$row["opt4"]."</td>"."</tr>";*/
			echo "<input type='button' class='btn btn-default btn-lg' value='Câu ".$row['qno']."'>";
			echo "<span>".$row['question']."</span>";
			echo "<p><input type = 'radio' name='".$row['qno']."' value= '".$row['opt1']."' checked>A: ".$row["opt1"]."</p>";
			echo "<p><input type = 'radio' name='".$row['qno']."' value= '".$row['opt2']."' >B: ".$row["opt2"]."</p>";
			echo "<p><input type = 'radio' name='".$row['qno']."' value= '".$row['opt3']."' >C: ".$row["opt3"]."</p>";
			echo "<p><input type = 'radio' name='".$row['qno']."' value= '".$row['opt4']."' >D: ".$row["opt4"]."</p>";
			}else if(strcmp ($_COOKIE[$i] ,$row["opt2"]) ==0){
					/*echo "<tr>"."<td>"."Cau:".$row['qno']."</td>"."<td colspan=3>".$row['question']."</td>"."</tr>";
			echo "<tr>"."<td>"."A:"."<input type='radio' name='".$row['qno']."' value='".$row['opt1']."' />".$row["opt1"]."</td>"."<td>"."B:"."<input type='radio' name='".$row['qno']."' value='".$row['opt2']."' checked/>".$row["opt2"]."</td>"."<td>"."C:"."<input type='radio' name='".$row['qno']."' value='".$row['opt3']."' />".$row["opt3"]."</td>"."<td>"."D:"."<input type='radio' name='".$row['qno']."' value='".$row['opt4']."'/>".$row["opt4"]."</td>"."</tr>";*/
			echo "<input type='button' class='btn btn-default btn-lg' value='Câu ".$row['qno']."'>";
			echo "<span>".$row['question']."</span>";
			echo "<p><input type = 'radio' name='".$row['qno']."' value= '".$row['opt1']."' >A: ".$row["opt1"]."</p>";
			echo "<p><input type = 'radio' name='".$row['qno']."' value= '".$row['opt2']."' checked>B: ".$row["opt2"]."</p>";
			echo "<p><input type = 'radio' name='".$row['qno']."' value= '".$row['opt3']."' >C: ".$row["opt3"]."</p>";
			echo "<p><input type = 'radio' name='".$row['qno']."' value= '".$row['opt4']."' >D: ".$row["opt4"]."</p>";
			}else if(strcmp ($_COOKIE[$i],  $row["opt3"]) ==0) {
				/*echo "<tr>"."<td>"."Cau:".$row['qno']."</td>"."<td colspan=3>".$row['question']."</td>"."</tr>";
			echo "<tr>"."<td>"."A:"."<input type='radio' name='".$row['qno']."' value='".$row['opt1']."' />".$row["opt1"]."</td>"."<td>"."B:"."<input type='radio' name='".$row['qno']."' value='".$row['opt2']."' />".$row["opt2"]."</td>"."<td>"."C:"."<input type='radio' name='".$row['qno']."' value='".$row['opt3']."' checked/>".$row["opt3"]."</td>"."<td>"."D:"."<input type='radio' name='".$row['qno']."' value='".$row['opt4']."'/>".$row["opt4"]."</td>"."</tr>";*/
							echo "<input type='button' class='btn btn-default btn-lg' value='Câu ".$row['qno']."'>";
			echo "<span>".$row['question']."</span>";
			echo "<p><input type = 'radio' name='".$row['qno']."' value= '".$row['opt1']."' >A: ".$row["opt1"]."</p>";
			echo "<p><input type = 'radio' name='".$row['qno']."' value= '".$row['opt2']."' >B: ".$row["opt2"]."</p>";
			echo "<p><input type = 'radio' name='".$row['qno']."' value= '".$row['opt3']."' checked>C: ".$row["opt3"]."</p>";
			echo "<p><input type = 'radio' name='".$row['qno']."' value= '".$row['opt4']."' >D: ".$row["opt4"]."</p>";
		}else{
			/*echo "<tr>"."<td>"."Cau:".$row['qno']."</td>"."<td colspan=3>".$row['question']."</td>"."</tr>";
			echo "<tr>"."<td>"."A:"."<input type='radio' name='".$row['qno']."' value='".$row['opt1']."' />".$row["opt1"]."</td>"."<td>"."B:"."<input type='radio' name='".$row['qno']."' value='".$row['opt2']."' />".$row["opt2"]."</td>"."<td>"."C:"."<input type='radio' name='".$row['qno']."' value='".$row['opt3']."' />".$row["opt3"]."</td>"."<td>"."D:"."<input type='radio' name='".$row['qno']."' value='".$row['opt4']."' checked/>".$row["opt4"]."</td>"."</tr>";*/
							echo "<input type='button' class='btn btn-default btn-lg' value='Câu ".$row['qno']."'>";
			echo "<span>".$row['question']."</span>";
			echo "<p><input type = 'radio' name='".$row['qno']."' value= '".$row['opt1']."' >A: ".$row["opt1"]."</p>";
			echo "<p><input type = 'radio' name='".$row['qno']."' value= '".$row['opt2']."' >B: ".$row["opt2"]."</p>";
			echo "<p><input type = 'radio' name='".$row['qno']."' value= '".$row['opt3']."' >C: ".$row["opt3"]."</p>";
			echo "<p><input type = 'radio' name='".$row['qno']."' value= '".$row['opt4']."' checked>D: ".$row["opt4"]."</p>";
		}
		}}
	?>	
	
	</table>
	<!--<input type="submit" name="finish" value="finish">
	<input type="submit" name="back" value="back">-->
	<input type="submit" class="btn btn-danger btn-lg" name="back" value="Trang Trước" >
	<input type="submit" class="btn btn-success btn-lg" name="next" value="Trang kế" >
	</form>
	</div>
</body>
</html>