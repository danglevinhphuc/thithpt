<?php
  session_start();
  $_SESSION['login'] =  0;
  if($_SESSION['login'] == ""){
    $_SESSION['login'] = 0;
  }else{
  if($_SESSION['login'] == 1){
    header("location: online.php");
  }
  }
?>
<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
  <title>Đăng kí thông tin tại website thitn | thi trực tuyến uy tín hàng đầu</title>
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
		
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
   <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->

<!-- jQuery library -->
<link rel="stylesheet" type="text/css" href="style.css">
<script src="../bootstrap-3.3.7-dist/js/jquery-1.12.1.min.js"></script>
<script type="text/javascript" src="../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="check.js"></script>
<script type="text/javascript">
  function login_form(){
    var user = document.getElementById("user").value;
    var pass =document.getElementById("pass").value;
    if(user == "" || pass == ""){
      alert("Bạn nhập thiếu thông tin hãy kiểm tra lại ");
    }
  }
</script>
</head>
<body onload="check();">
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    <div class="tool">Đăng ký</div>
  </div>
  <div class="form">
    <h2>Đăng Nhập Tài Khoản</h2>
    <form action="validate.php" method="POST">
      <input type="text" placeholder="Username" name="user" id="user" value="" />
      <input type="password" placeholder="Password" name="pass" id="pass"  />
      <input type="submit" name="submit" value="Đăng Nhập" id="login" class="btn btn-primary "  onclick="login_form();">

    </form>
  </div>
  <div class="form">
    <h2>Tạo Tài Khoản Mới</h2>
    <form action="create-account.php" method="POST">
      <input type="text" placeholder="Username" class="username" id="username" name="username" />
      <p class="errmsg">Username có kí tự lớn hơn 6</p>
      <input type="email" placeholder="Email Address" class="email" name="email"  id="email" />
      <p class="errmsg">VD: anhyeuem@gmail.com</p>
      <input type="text" placeholder="Phone" class="phone" name="phone"  id="phone" />
      <p class="errmsg">VD: 0123456789</p>
      <input type="password" placeholder="Password" class="password" name="password"  id="password" />
      <input type="password" placeholder="Password-again" name="password-again" class="password-again" id="password-again">
      <p class="errmsg">Không giống với Password</p>
      <input type="submit" name="submit" value="Đăng Ký" id="submit" class="btn btn-primary " >

    </form>
  </div>
  <div class="cta">

  <a href="forgot_password.php" target="_blank">Forgot your password?</a><br>
<a href="change_password.php" target="_blank">Change your password?</a>
  </div>
</div>

</body>
</html>