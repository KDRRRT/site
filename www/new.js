var popup = document.getElementById("modul-vhod");
var vhod = document.getElementById("vhod");
var close = document.getElementById("close");
vhod.onclick = function () {
    popup.style.display = "block"
}
close.onclick = function () {
    popup.style.display = "none"
}

var popup_r = document.getElementById("modul-reg");
var reg = document.getElementById("reg");
var close_r = document.getElementById("close2");
reg.onclick = function () {
    popup_r.style.display = "block"
}
close_r.onclick = function () {
    popup_r.style.display = "none"
}



reg_form.onsubmit= function(e) { e.preventDefault(); 
    console.log('submit');
    
    $.ajax({
        url: "reg.php",
        method: "POST",
        data:{login: uname.value, password: upass.value}
        }).done(function( otvet ){
        console.log(otvet);
        answer.innerHTML=otvet;
        });
}















