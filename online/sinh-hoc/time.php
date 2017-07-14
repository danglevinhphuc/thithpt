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
	<title>Time </title>
	<link rel="stylesheet" type="text/css" href="">
	<script type="text/javascript">
		              var m = 90; // Phút
            var s = 0; // Giây
            function start(){
                var timeout = null;
    /*BƯỚC 1: LẤY GIÁ TRỊ BAN ĐẦU*/
    
 
    /*BƯỚC 1: CHUYỂN ĐỔI DỮ LIỆU*/
    // Nếu số giây = -1 tức là đã chạy ngược hết số giây, lúc này:
    //  - giảm số phút xuống 1 đơn vị
    //  - thiết lập số giây lại 59
    if (s === -1){
        m -= 1;
        s = 59;
    }
 
    // Nếu số phút = -1 tức là đã chạy ngược hết số phút, lúc này:
    //  - giảm số giờ xuống 1 đơn vị
    //  - thiết lập số phút lại 59
    if (m === -1){
        m = 59;
    }
 
    // Nếu số giờ = -1 tức là đã hết giờ, lúc này:
    //  - Dừng chương trình
    if (m == 0&& s==0){
        clearTimeout(timeout);
        alert('Hết giờ mà bạn chưa nộp bài');
		location = 'index.html';
        return false;
    }
 
    /*BƯỚC 1: HIỂN THỊ ĐỒNG HỒ*/
   document.getElementById('m').innerText = m.toString();
    document.getElementById('s').innerText = s.toString();
  
    /*BƯỚC 1: GIẢM PHÚT XUỐNG 1 GIÂY VÀ GỌI LẠI SAU 1 GIÂY */
    timeout = setTimeout(function(){
        s--;
        start();
    }, 1000);

}


	</script>

  <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" >
  <link rel="icon" href="img/logo_thitn.png">
  <script src="bootstrap-3.3.7-dist/js/jquery-1.12.1.min.js"></script>


<!-- Latest compiled JavaScript -->
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<style type="text/css">
body{
	background-color: #bcdff2;
}
	#dong_ho{
	margin-top:30px;
	font-size:18px;
}
	span{
		background-color:#0067ac;
		padding:20px;
		border-radius: 5px;
		padding-top:15px;
		color:#fff;
	}
}
</style>
</head>
<body onload="start();">
<div id="dong_ho" style="float:left; width: auto;  position:fixed">
								<span id="m">90</span> :phút<br><br><br>
								<span id="s">00</span> :giây
</div>
</body>
</html>