    function check(){
  var user = document.getElementById('#username');
  var password = document.getElementById("#password");
  var email = document.getElementById("#email");
  var phone = document.getElementById("#phone");
  if(password == null || user == null || email == null || phone == null){
    document.getElementById("submit").disabled = true;
  }else{
    document.getElementById("submit").disabled = false;
  }
}
     $(document).ready(function(){
        $('.toggle').click(function(){
             // Switches the forms
            $('.form').animate({
              height: "toggle",
              'padding-top': 'toggle',
              'padding-bottom': 'toggle',
              opacity: "toggle"
            },"slow");
        });
          var tong,tong1,tong2,tong3, sum =0 ;
        $('.username').on('blur',function(){
            var username = $(this).val();
            if(username.length <6){
              $(this).next('.errmsg').slideDown();
              $('#submit').attr('disabled','true');
            }else{
              $(this).next('.errmsg').slideUp();
                tong = 1;
                sum = sum+ tong;
                
            }
        });

        $("#phone").on('blur',function(){
            var phone = $(this).val();
            if(isNaN(phone) || phone.length < 10){
              $(this).next('.errmsg').slideDown();
              $('#submit').attr('disabled','true');
            }else{
              $(this).next('.errmsg').slideUp();
              tong1 = 1;
              sum = sum+ tong1;
                
            }
        });

        $("#email").on('blur',function(){
      var email= $(this).val();
      var pattern = new RegExp(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/);
      if(!pattern.test(email)){
        $(this).next('.errmsg').slideDown();
        $('#submit').attr('disabled','true');
      }else{
        //neu khong phai dung dieu kien thi ta cho hien thong bao
        $(this).next('.errmsg').slideUp();
        tong2 = 1;
        sum = sum+ tong2;
                
      }
    });

          $('#password-again').on('blur', function(){
    var pwone = $('#password').val();
    var pwtwo = $(this).val();
    
    if(pwtwo.length < 1 || pwone != pwtwo) {
      $(this).next('.errmsg').slideDown();
      $('#submit').attr('disabled','true');
    } else if(pwone == pwtwo) {
      // both passwords match and we hide the error
      $(this).next('.errmsg').slideUp();
      tong3 = 1;
      sum = sum + tong3;
      if(sum>= 4 && tong1 == 1 && tong2 == 1 && tong == 1  && tong3 == 1){
        $('#submit').removeAttr("disabled");
      }
        else{
          alert("Ban nhap con thieu thong tin");
        }
    }
    
  }); 
     });