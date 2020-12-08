
/*$(document).ready(function(){

   $.get("signupinconfirm.php", function(response) {
        $('#login').html(response);
      });

     

});*/

function userDisplay() {
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
            document.getElementById("login").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","signupinconfirm.php",true); 
    xmlhttp.send();
}