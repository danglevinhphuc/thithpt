<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tài khoản sẽ tìm thấy mật khẩu tại website thitn| thi trực tuyến uy tín</title>
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
<body >
<?php
	$username = $_POST["username"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	include "db.php";
	$query = "Select password from user where user= '".$username."' and email = '".$email."' and phone = '".$phone."' ";
	$mysql = mysqli_query($conn,$query) ;
	if(mysqli_num_rows($mysql) == 0 ){
		echo "<h1>Tài khoản không tồn tại</h1";
	}else{
	$row = mysqli_fetch_assoc($mysql);
	echo "<h1>Tài khoản của bạn có mật khẩu là: ";
	echo $row["password"];
	echo "</h1>";
	}
	mysqli_close($conn);
?>
</body>
</html>