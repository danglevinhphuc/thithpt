<?php
	session_start();
	if($_SESSION['login'] !=1){
		header('location: index.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Thi online trung hoc pho thong  | Kiến thức về các môn thi thpt và đh</title>
<meta name="keywords" content="
  thi thu online, thi thu offline, thi thử trực tuyến, thi thu, thi thử đại học trực tuyến, thi thử thpt trực tuyến, thi thử đại học online, thi thử đại học offline, thi thử thpt online, thi thử thpt offline" />
  <meta name="copyright" content="THITHPT WEB" />
  <meta name="author" content="THITHPT" />
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
  <meta name="dc.identifier" content="http://thithpt.tk/">
  <meta name="dc.rights.copyright" content="THIHPT">
  <meta name="dc.language" content="vi-VN">
	<link rel="icon" href="../img/logo_thitn.png">
	<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="online.css">
	<script src="../bootstrap-3.3.7-dist/js/jquery-1.12.1.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">

<script>
function thi(url_link) {
    window.open(url_link, "windowChild ", "width=1500, height=680");
}

</script>

</head>
<body >
<div id="main">
	<header><!-- header-->
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-12 col-sm-12">
					<div id="rule-test"><!-- the le thi online -->
						<div style="float:left"><img src="../img/logo_thitn.png" alt="logo website thitn" title="logo website thitn" style=" width:150px; height: 70px; margin-top:15px; margin-left: -0px ">

						</div>
						<a href="unvalidate.php" style="float:right; color:red">Thoát khỏi thi online</a>
						<div style="float:left">

						<h1>Thi Online</h1>
						<h2 style="font-size: 20px;">Thệ lệ thi online tại <a href="http://www.thithpt.tk/">THITHPT</a></h2>
						<ol >
							<li>Đăng kí tài khoảng tham gia thi trực tuyến -> Đăng nhập vào trang thi.</li>
							<li>Chọn môn thi trực tuyến tại <a href="#">thitn</a> gồm có 3 môn chính: Hóa Học , Sinh Học , Vật Lý.</li>
							<li>Bắt đầu tham gia thi theo khoảng thời gian nhất định làm trực tiếp trên trang web.</li>
							<li>Kết thúc khi hết thời gian hoặc hoàn thành bài thi trước thời gian để tham gia.</li>
							<li>Điểm sẽ được lưu và học sinh có thể xem lại tại trang xem điểm hoặc tại <a href="#">đây</a>.</li>
						</ol>
						</div>
					</div><!-- end the le thi online-->
				</div>
			</div>
		</div>
	</header><!-- end header-->
<section class="content"><!-- section -->
	<div class="container">
		<div class="row text-center">
			<div class="col-sm-12 col-md-12 col-xs-12">
				<div class="col-sm-6 col-md-6 col-xs-6">
					<div class="jumbotron offline" >
  <h3> THI OFFLINE</h3>
  <p><a class="btn btn-default btn-lg" href="../thi-offline.html" role="button">Bắt Đầu</a></p>
</div>
				</div>
				<div class="col-sm-6 col-md-6 col-xs-6">
				<div class="jumbotron hoahoc">
  <h3>HÓA HỌC</h3>
  <p><button class="btn btn-default btn-lg"  onclick="thi('hoa-hoc/thi-hoa.php');"  role="button">Bắt Đầu</button></p>
</div>
				</div>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-sm-12 col-md-12 col-xs-12">
				<div class="col-sm-6 col-md-6 col-xs-6">
<div class="jumbotron sinhhoc">
  <h3>SINH HỌC</h3>
  <p><button class="btn btn-default btn-lg"  onclick="thi('sinh-hoc/thi-sinh.php');"  role="button">Bắt Đầu</button></p>
</div>
				</div>
				<div class="col-sm-6 col-md-6 col-xs-6">
<div class="jumbotron vatly">
  <h3>VẬT LÝ</h3>
  <p><button class="btn btn-default btn-lg"  onclick="thi('vat-ly/thi-vat-ly.php');"  role="button">Bắt Đầu</button></p>
</div>
				</div>
			</div>
		</div>
		
	</div>
</section><!--end section -->
<footer><!-- footer -->
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-xs-12 text-center">
					<div id="copy">Copyright @<a href="http://www.thithpt.tk/">http://thithpt.tk</a><br/>
		Product of student CANTHO UNIVERSITY
		</div>
				</div>
			</div>
		</div>
	</div>
</footer><!--end footer -->
</div>

</body>
</html>