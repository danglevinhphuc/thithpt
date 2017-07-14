              var m = 90; // Phút
            var s = 0; // Giây
            
            var timeout = null; // Timeout
            var numQues = 64;
var numChoi = 5;
var answers = new Array();
answers[0] = "B";
answers[1] = "A";
answers[2] = "A";
answers[3] = "A";
answers[4] = "C";

answers[5] = "B";
answers[6] = "C";
answers[7] = "B";
answers[8] = "C";
answers[9] = "C";

answers[10] = "D";
answers[11] = "A";
answers[12] = "A";
answers[13] = "B";
answers[14] = "D";
answers[15] = "D";

answers[16] = "B";
answers[17] = "C";
answers[18] = "C";
answers[19] = "D";
answers[20] = "D";

answers[21] = "A";
answers[22] = "D";
answers[23] = "A";
answers[24] = "A";
answers[25] = "C";

answers[26] = "C";
answers[27] = "D";
answers[28] = "D";
answers[29] = "A";
answers[30] = "C";

answers[31] = "A";
answers[32] = "B";
answers[33] = "D";
answers[34] = "D";
answers[35] = "D";

answers[36] = "B";
answers[37] = "B";
answers[38] = "D";
answers[39] = "B";
answers[40] = "A";

answers[41] = "B";
answers[42] = "C";
answers[43] = "D";
answers[44] = "D";
answers[45] = "A";

answers[46] = "D";
answers[47] = "D";
answers[48] = "D";
answers[49] = "B";

answers[50] = "A";
answers[51] = "A";
answers[52] = "D";
answers[53] = "D";
answers[54] = "B";

answers[55] = "C";
answers[56] = "B";
answers[57] = "D";
answers[58] = "D";
answers[59] = "C";

answers[60] = "D";
answers[61] = "B";
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
