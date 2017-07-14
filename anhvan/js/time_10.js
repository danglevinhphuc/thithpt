              var m = 90; // Phút
            var s = 0; // Giây
            
            var timeout = null; // Timeout
            var numQues = 64;
var numChoi = 5;
var answers = new Array();
answers[0] ="B";
answers[1] ="D";
answers[2] ="D";
answers[3] ="C";
answers[4] ="A";
answers[5] ="C";
answers[6] ="B";
answers[7] ="A";
answers[8] ="D";
answers[9] ="B";

answers[10] ="D";
answers[11] ="B";
answers[12] ="A";
answers[13] ="B";
answers[14] ="D";
answers[15] ="A";
answers[16] ="B";
answers[17] ="A";
answers[18] ="C";
answers[19] ="A";

answers[20] ="B";
answers[21] ="C";
answers[22] ="B";
answers[23] ="D";
answers[24] ="D";
answers[25] ="A";
answers[26] ="B";
answers[27] ="D";
answers[28] ="D";
answers[29] ="C";

answers[30] ="D";
answers[31] ="B";
answers[32] ="A";
answers[33] ="B";
answers[34] ="A";
answers[35] ="A";
answers[36] ="B";
answers[37] ="D";
answers[38] ="C";
answers[39] ="C";

answers[40] ="C";
answers[41] ="D";
answers[42] ="D";
answers[43] ="B";
answers[44] ="C";
answers[45] ="A";
answers[46] ="D";
answers[47] ="A";
answers[48] ="C";
answers[49] ="B";

answers[50] ="B";
answers[51] ="C";
answers[52] ="A";
answers[53] ="B";
answers[54] ="B";
answers[55] ="D";
answers[56] ="A";
answers[57] ="B";
answers[58] ="C";
answers[59] ="A";

answers[60] ="C";
answers[61] ="A";
answers[62] ="D";
answers[63] ="D";

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
