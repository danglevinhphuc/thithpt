<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tạo tài khoản tại trang web thitn | Website thi trực tuyến tầm quốc gia</title>
	 <meta name="description" content="
  Website thi thử trực tuyến từ offline đến online cung cấp cho học sinh đến sinh viên có môi trường thi ôn lại kiến thức và tích lũy kinh nghiệm"/>
  <meta name="keywords" content="
  thi thu online, thi thu offline, thi thử trực tuyến, thi thu, thi thử đại học trực tuyến, thi thử thpt trực tuyến, thi thử đại học online, thi thử đại học offline, thi thử thpt online, thi thử thpt offline" />
  <meta name="copyright" content="THITN WEB" />
  <meta name="author" content="THITN" />
  <meta name="geo.region" content="VN-CT" />
  <meta name="geo.placename" content="Cần Thơ" />
  <meta name="geo.position" content="10.028089;105.770886" />
  <meta name="ICBM" content="10.028089, 105.770886" />
  <meta name="dc.description" content="Website thi thu dai hoc truc tuyen ho tro on lai kien thuc, Website thi thu thpt truc tuyen ho tro trao doi kien thuc moi.">
  <meta name="dc.keywords" content="Website thi thu dai hoc online, Website thi thu dai hoc offline, Website thi thu thpt online, Website thi thu thpt offline">
  <meta name="dc.subject" content="Website thi truc tuyen">
  <meta name="dc.created" content="2016-11-01">
  <meta name="dc.publisher" content="Website thi thu truc tuyen THITN">
  <meta name="dc.creator.name" content="THITN WEB">
  <meta name="dc.identifier" content="http://thitn.com/">
  <meta name="dc.rights.copyright" content="THITN">
  <meta name="dc.language" content="vi-VN">
  <link rel="icon" href="../img/logo_thitn.png">
</head>
<body style="#">
<?php
	$username = $_POST["username"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$password = $_POST["password"];
  include "db.php";
  $query = "SELECT * FROM `users` WHERE user = '$username' ";
  $sql = mysqli_query($conn,$query) or die ("Can connect to users");
  if(!mysqli_num_rows($sql)){
    $query_1 = "insert into users values('$username','$password','$email','$phone')";
    if(!mysqli_query($conn,$query_1)){
    die('<center><br><br><br>Can not connect .</center>');
    }
    echo "<center><br><br><br>Congratulation!<br>Tạo tài khoản thành công.</center>";
  mysqli_close($conn);
  }
  else{
    echo "<center><br><br><br>Wrong!<br>Tài Khoản đã có người sử dụng.</center>";
  }

  /*if(!mysql_query($query,$conn)){
    die('<center><br><br><br>Tài Khoản đã có người sử dụng.</center>');
  }*/

	/*$query = "insert into users values('$username','$password','$email','$phone')";

	echo "<center><br><br><br>Congratulation!<br>Tạo tài khoản thành công.</center>";
	mysql_close($conn);*/
?>
</body>
</html>