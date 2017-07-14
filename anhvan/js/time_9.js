              var m = 90; // Phút
            var s = 0; // Giây
            
            var timeout = null; // Timeout
            var numQues = 64;
var numChoi = 5;
var answers = new Array();
answers[0] = "D";
answers[1] = "C";
answers[2] = "D";
answers[3] = "C";
answers[4] = "A";

answers[5] = "D";
answers[6] = "B";
answers[7] = "D";
answers[8] = "D";
answers[9] = "B";

answers[10] = "B";
answers[11] = "A";
answers[12] = "C";
answers[13] = "B";
answers[14] = "B";
answers[15] = "C";

answers[16] = "C";
answers[17] = "A";
answers[18] = "C";
answers[19] = "D";
answers[20] = "B";

answers[21] = "C";
answers[22] = "A";
answers[23] = "B";
answers[24] = "B";
answers[25] = "D";

answers[26] = "A";
answers[27] = "A";
answers[28] = "A";
answers[29] = "C";
answers[30] = "A";

answers[31] = "A";
answers[32] = "C";
answers[33] = "B";
answers[34] = "D";
answers[35] = "C";

answers[36] = "B";
answers[37] = "B";
answers[38] = "C";
answers[39] = "D";
answers[40] = "C";

answers[41] = "A";
answers[42] = "B";
answers[43] = "A";
answers[44] = "D";
answers[45] = "B";

answers[46] = "A";
answers[47] = "B";
answers[48] = "D";
answers[49] = "B";

answers[50] = "B";
answers[51] = "D";
answers[52] = "B";
answers[53] = "B";
answers[54] = "C";

answers[55] = "D";
answers[56] = "B";
answers[57] = "A";
answers[58] = "C";
answers[59] = "C";

answers[60] = "B";
answers[61] = "A";
answers[62] = "D";
answers[63] = "B";


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
