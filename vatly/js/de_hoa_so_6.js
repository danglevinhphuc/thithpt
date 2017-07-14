              var m = 90; // Phút
            var s = 0; // Giây
            
            var timeout = null; // Timeout
            var numQues = 50;
var numChoi = 5;
var answers = new Array();
answers[0] ="A";
answers[1] ="D";
answers[2] ="D";
answers[3] ="D";
answers[4] ="B";
answers[5] ="B";
answers[6] ="D";
answers[7] ="D";
answers[8] ="B";
answers[9] ="D";

answers[10] ="C";
answers[11] ="C";
answers[12] ="B";
answers[13] ="D";
answers[14] ="C";
answers[15] ="D";
answers[16] ="A";
answers[17] ="B";
answers[18] ="C";
answers[19] ="A";

answers[20] ="B";
answers[21] ="A";
answers[22] ="D";
answers[23] ="A";
answers[24] ="A";
answers[25] ="D";
answers[26] ="C";
answers[27] ="C";
answers[28] ="C";
answers[29] ="B";

answers[30] ="A";
answers[31] ="C";
answers[32] ="C";
answers[33] ="A";
answers[34] ="D";
answers[35] ="A";
answers[36] ="B";
answers[37] ="A";
answers[38] ="D";
answers[39] ="C";

answers[40] ="A";
answers[41] ="B";
answers[42] ="B";
answers[43] ="C";
answers[44] ="B";
answers[45] ="B";
answers[46] ="B";
answers[47] ="C";
answers[48] ="C";
answers[49] ="A";


            function start(){
                
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
function stop(form){
                clearTimeout(timeout);
                <!--
                

        
var score = 0;
var currElt;
var currSelection;
for (i=0; i<numQues; i++) {
currElt = i*numChoi;
for (j=0; j<numChoi; j++) {
currSelection = form.elements[currElt + j];
if (currSelection.checked) {
if (currSelection.value == answers[i]) {
score++;
break;
}
}
}
}
s = Math.round(score/numQues*100);
var correctAnswers = "";
for (i=1; i<=numQues; i++) {
correctAnswers += i + ". " + answers[i-1] + "\r\n";
}
form.solutions.value = correctAnswers;
alert(s+"%"+"\n"+"So cau danh dung la :"+score+"/50");
// -->
            }
				 function start_time(){
 var date = new Date();
 var gio = date.getHours();
 var phut = date.getMinutes();
 var giay = date.getSeconds();
 //Lấy giờ hệ thống hiện tại
 if(date.getHours() > 12){

 document.getElementById('dong_ho').innerHTML = gio-12 + ':' + phut + ':' + giay +"   PM";
  }else if(date.getMinutes() <=12){
	document.getElementById('dong_ho').innerHTML = gio + ':' + phut + ':' + giay +"   AM";
  }
 timeout = setTimeout(function(){
        start_time();
    }, 1000);
}

	var so_cau = numQues;
        
        function check_radio(form){
            var qua_cau;
            var tim_cau_chon;
            for( i = 1 ; i<= so_cau ; i++){
                qua_cau = (i*5);
                for(j= 4 ; j>0 ; j--){
                    tim_cau_chon = form.elements[qua_cau-j];
                    if(tim_cau_chon.checked){
                        var d = i;
                        document.getElementById('c'+d).style.background='#57FF6D';
                    }
                }
            }
        }
