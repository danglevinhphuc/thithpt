<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <title>Tìm lại tài khoảng tại website thtin| thi thu truc tuyến | chất lượng</title>
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
   <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->

<!-- jQuery library -->
<link rel="stylesheet" type="text/css" href="style.css">
<script src="../bootstrap-3.3.7-dist/js/jquery-1.12.1.min.js"></script>
<script type="text/javascript" src="../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script type="text/javascript">
  function check_info(){
    var username = document.getElementById("#username");
    var email = document.getElementById("#email");
    var phone = document.getElementById("#phone");
    if(username == null || email == null || phone == null){
      document.getElementById("submit").disabled  = true;
    }else{
      document.getElementById("submit").disabled  = false;
    }
}
</script>
</head>
<body onload="check_info();">
<div class="module form-module">
  <div class="toggle">
  </div>
  <div class="form" >
    <h2>Change your password?</h2>
    <form action="change_pass.php" method="POST">
      <input type="text" placeholder="Username" name="username" class="username" id="username" />
      <p class="errmsg">Username có kí tự lớn hơn 6</p>
      <input type="email" placeholder="Email" name="email" class="email" id="email" />
      <p class="errmsg">VD: anhyeuem@gmail.com</p>
      <input type="text" placeholder="Phone" name="phone" class="phone" id="phone" />
      <p class="errmsg">VD: 0123456789</p>
      
      <input type="password" placeholder="New Password" class="password" name="password"  id="password" />
      <input type="submit" name="submit" value="Change" id="submit" class="btn btn-primary " >
    </form>
  </div>
  </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
      var sum=0 , tong1, tong2, tong3;
      $('.username').on('blur',function(){
        var username = $(this).val();
        if(username.length < 6){
          $(this).next('.errmsg').slideDown();
          $('#submit').attr('disabled','true');
        }else{
          $(this).next('.errmsg').slideUp();
          tong1 = 1;
          sum = sum +tong1;
        }
      });

       $('.email').on('blur',function(){
        var email = $(this).val();
        var pattern = new RegExp(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/);
        if(!pattern.test(email)){
          $(this).next('.errmsg').slideDown();
          $('#submit').attr('disabled','true');
        }else{
          $(this).next('.errmsg').slideUp();
          tong2 = 1; 
          sum =sum+ tong2;
        }
      });

        $('.phone').on('blur',function(){
        var phone = $(this).val();
        if(isNaN(phone) || phone.length < 10){
          $(this).next('.errmsg').slideDown();
          $('#submit').attr('disabled','true');
        }else{
          $(this).next('.errmsg').slideUp();
          tong3 = 1;
          sum = sum + tong3;
          if(sum >=3 && tong1 == 1 && tong2 == 1 && tong3 == 1){
              $('#submit').removeAttr('disabled');
              
          }else{
            alert("Ban nhap con thieu thong tin");
                      }
        }
      });
    });
</script>
</body>
</html>