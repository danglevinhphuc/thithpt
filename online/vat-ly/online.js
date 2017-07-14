
		 function ReadCk(i){
    	var timeout= null;
    	var allcookies = document.cookie;
    	if(allcookies){
    	cookiearray = allcookies.split(";");
    	for (  j = i; j < i+1 ;j++){
    		name = cookiearray[j].split('=')[0];
    		if(name){
    			var d =  name.toString();
    			document.getElementById("c" + d.trim()).style.background = "#f09415";

    		}
    	}
    	
       
       }
	}       
    $(document).ready(function(){
        $("#c1,#c2,#c3,#c4,#c5").click(function(){
        window.location.href="index_1.php";
    });
    $("#c6,#c7,#c8,#c9,#c10").click(function(){
        window.location.href="index_2.php";
    });
    $("#c11,#c12,#c13,#c14,#c15").click(function(){
        window.location.href="index_3.php";
    });
    $("#c16,#c17,#c18,#c19,#c20").click(function(){
        window.location.href="index_5.php";
    });
    $("#c21,#c22,#c23,#c24,#c25").click(function(){
        window.location.href="index_6.php";
    });
    $("#c26,#c27,#c28,#c29,#c30").click(function(){
        window.location.href="index_7.php";
    });
    $("#c31,#c32,#c33,#c34,#c35").click(function(){
        window.location.href="index_8.php";
    });
    $("#c36,#c37,#c38,#c39,#c40").click(function(){
        window.location.href="index_9.php";
    });
    $("#c41,#c42,#c43,#c44,#c45").click(function(){
        window.location.href="index_10.php";
    });
    $("#c46,#c47,#c48,#c49,#c50").click(function(){
        window.location.href="index_11.php";
    });

    });
    