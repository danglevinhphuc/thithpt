              var m = 90; // Phút
            var s = 0; // Giây
            
            var timeout = null; // Timeout
            var numQues = 64;
var numChoi = 5;
var answers = new Array();
answers[0] = "B";
answers[1] = "D";
answers[2] = "A";
answers[3] = "C";
answers[4] = "B";

answers[5] = "B";
answers[6] = "C";
answers[7] = "C";
answers[8] = "D";
answers[9] = "D";

answers[10] = "C";
answers[11] = "B";
answers[12] = "C";
answers[13] = "C";
answers[14] = "C";
answers[15] = "C";

answers[16] = "C";
answers[17] = "B";
answers[18] = "B";
answers[19] = "D";
answers[20] = "A";

answers[21] = "B";
answers[22] = "B";
answers[23] = "C";
answers[24] = "A";
answers[25] = "A";

answers[26] = "B";
answers[27] = "C";
answers[28] = "D";
answers[29] = "D";
answers[30] = "D";

answers[31] = "D";
answers[32] = "D";
answers[33] = "B";
answers[34] = "D";
answers[35] = "B";

answers[36] = "B";
answers[37] = "A";
answers[38] = "C";
answers[39] = "D";
answers[40] = "B";

answers[41] = "D";
answers[42] = "A";
answers[43] = "B";
answers[44] = "B";
answers[45] = "C";

answers[46] = "D";
answers[47] = "B";
answers[48] = "B";
answers[49] = "D";

answers[50] = "D";
answers[51] = "C";
answers[52] = "D";
answers[53] = "C";
answers[54] = "C";

answers[55] = "A";
answers[56] = "A";
answers[57] = "C";
answers[58] = "B";
answers[59] = "C";

answers[60] = "C";
answers[61] = "A";
answers[62] = "A";
answers[63] = "A";

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
alert(s+"%"+"\n"+"So cau danh dung la :"+score+"/64");
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

	var so_cau = 64;
        
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
