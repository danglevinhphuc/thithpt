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
	$query = "select ma_mon from chon_de where mon= 'sinh' order by rand()";
	$row = mysql_query($query,$conn);
	$a = mysql_fetch_assoc($row);
	$_SESSION['de'] = $a['ma_mon'];
?>
<!DOCTYPE html>  
<html>  
<head>  

<meta charset="utf-8">
	<title>Thi online trung hoc pho thong  | Đề thi trực tuyến môn vật lý tại thitn</title>
	<meta name="description" content="
	Website thi thử trực tuyến từ offline đến online cung cấp cho học sinh đến sinh viên các đề thi chất lượng uy tín và an toàn hàng đầu Vn tại THITN"/>
		<meta name="keywords" content="
	thi thu online, thi thu offline, thi thử trực tuyến, thi thu, thi thử đại học trực tuyến, thi thử thpt trực tuyến, thi thử đại học online, thi thử đại học offline, thi thử thpt online, thi thử thpt offline" />
	<meta name="copyright" content="THITHPT WEB" />
	<meta name="author" content="THITN" />
	<meta name="geo.region" content="VN-CT" />
	<meta name="geo.placename" content="Cần Thơ" />
	<meta name="geo.position" content="10.028089;105.770886" />
	<meta name="ICBM" content="10.028089, 105.770886" />
	<meta name="dc.description" content="Website thi thu dai hoc truc tuyen ho tro on lai kien thuc, Website thi thu thpt truc tuyen ho tro trao doi kien thuc moi.">
	<meta name="dc.keywords" content="Website thi thu dai hoc online, Website thi thu dai hoc offline, Website thi thu thpt online, Website thi thu thpt offline">
	<meta name="dc.subject" content="Website thi truc tuyen">
	<meta name="dc.created" content="2016-11-01">
	<meta name="dc.publisher" content="Website thi thu truc tuyen THITHPT">
	<meta name="dc.creator.name" content="THITHPT WEB">
	<meta name="dc.identifier" content="http://thitk.tk/">
	<meta name="dc.rights.copyright" content="THITPHT">
	<meta name="dc.language" content="vi-VN">
	<link rel="icon" href="../../img/logo_thitn.png">
  <script src="bootstrap-3.3.7-dist/js/jquery-1.12.1.min.js"></script>


<!-- Latest compiled JavaScript -->
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
		<script type="text/javascript">
	$(window).on('unload',function() {
		for(i = 1;  i <= 50; i++){
   	document.cookie = i + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
   	}
   	window.close();
});
</script>
<script type="text/javascript">
	time = null;
	function move(){
		alert("HẾT GIỜ MÀ BAN CHƯA NỘP BÀI!");
		window.close();
	}
</script>
</head>  
<frameset cols="10%,90%" frameborder="0" noresize="1" onload="timer=setTimeout('move()',90000)">  
   <frame  src="time.php" />  
   <frame  src="index_1.php" />  
</frameset>  
</body>  
</html>  