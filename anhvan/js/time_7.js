              var m = 90; // Phút
            var s = 0; // Giây
            
            var timeout = null; // Timeout
            var numQues = 64;
var numChoi = 5;
var answers = new Array();
answers[0] = "C";
answers[1] = "B";
answers[2] = "B";
answers[3] = "D";
answers[4] = "A";

answers[5] = "C";
answers[6] = "D";
answers[7] = "A";
answers[8] = "C";
answers[9] = "C";

answers[10] = "D";
answers[11] = "A";
answers[12] = "C";
answers[13] = "A";
answers[14] = "A";
answers[15] = "A";

answers[16] = "D";
answers[17] = "C";
answers[18] = "A";
answers[19] = "A";
answers[20] = "D";

answers[21] = "D";
answers[22] = "D";
answers[23] = "B";
answers[24] = "C";
answers[25] = "C";

answers[26] = "B";
answers[27] = "A";
answers[28] = "A";
answers[29] = "B";
answers[30] = "C";

answers[31] = "A";
answers[32] = "C";
answers[33] = "A";
answers[34] = "C";
answers[35] = "C";

answers[36] = "B";
answers[37] = "C";
answers[38] = "C";
answers[39] = "A";
answers[40] = "D";

answers[41] = "A";
answers[42] = "C";
answers[43] = "D";
answers[44] = "C";
answers[45] = "C";

answers[46] = "C";
answers[47] = "A";
answers[48] = "A";
answers[49] = "A";

answers[50] = "D";
answers[51] = "A";
answers[52] = "A";
answers[53] = "B";
answers[54] = "B";

answers[55] = "D";
answers[56] = "C";
answers[57] = "D";
answers[58] = "C";
answers[59] = "A";

answers[60] = "A";
answers[61] = "B";
answers[62] = "D";
answers[63] = "D";



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
