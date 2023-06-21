/*AJAX*/
$(document).ready(function() {
    $("#search").keyup(function() {
        $.ajax({
            url: 'backend.php',
            type: 'post',
            data: { search: $(this).val() },
            success: function(result) {
                $("#result").html(result);
            }
        });
    });
});
/*Contador de caracteres*/
    /*Contador traductor*/
function countChar(val) {
    document.getElementById('result').style.color = "rgb(58, 58, 58)";
        /*Adapta tamaño de textarea al contenido*/
    val.style.height = "5px";
    val.style.height = (val.scrollHeight) + "px";
        /*--------------------------------------*/
    var len = val.value.length;
    if (len >= 2001) {
        val.value = val.value.substring(0, 2000);
    } else {
        $('#charNum').text(2000 - len);
    }

}
    /*Contador comentario de traduccion*/
function countCharCom(val) {
    var len = val.value.length;
    var comTracSubmit = document.getElementById('comTracSubmit');
    if (len < 5) {
        comTracSubmit.removeAttribute("onclick");
        comTracSubmit.style.opacity = ".7";
    }
    if (len >= 5) {
        comTracSubmit.setAttribute("onclick", "comTracSubmit()");
        comTracSubmit.style.opacity = "1";
    }
    if (len >= 301) {
        val.value = val.value.substring(0, 300);
    } else {
        $('#charNumCom').text(300 - len);
    }

}
    /*Contador comentario de sitio*/
function countCharComExp(val) {
    var len = val.value.length;
    var comSiteSubmit = document.getElementById('comSiteSubmit');
    if (len < 5) {
        comSiteSubmit.removeAttribute("onclick");
        comSiteSubmit.style.opacity = ".7";
    }
    if (len >= 5){
        comSiteSubmit.setAttribute("onclick", "comSiteSubmit()");
        comSiteSubmit.style.opacity = "1";
    }
    if (len >= 201) {
        val.value = val.value.substring(0, 200);
    } else {
        $('#charNumExp').text(200 - len);
    }
}
/*Menu deslisante*/
function showMenu() {
    document.getElementById('slide-menu').style.right = "0";
    setTimeout(function() {
        document.getElementById('container').setAttribute("onclick", "hideMenu()");
    }, 250);

}

function hideMenu() {
    document.getElementById('slide-menu').style.right = "-350px";
    document.getElementById('container').removeAttribute("onclick");
}
/*Borrar texto*/
function erase() {
    document.getElementById('search').value = "";
    $("#charNum").html("2000");
    $("#result").html("");
}
/*Copiar traduccion*/
function copyText() {
    /* Obtener traducción del texto */
    var copyText = document.getElementById("result");
    /* Select the text field */
    window.getSelection().selectAllChildren(copyText);
    /* Copy the text inside the text field */
    navigator.clipboard.writeText(copyText.textContent);
}
/*Mostrar informacion*/
function showInfo() {
    /*Ocultar curiosidad*/
    var elements = document.querySelectorAll('.divisor');
    for (var i = 0; i < elements.length; i++) {
        elements[i].style.width = "100%";
    }
    document.getElementById('curiosidad').style.width = "0";
    document.getElementById('ver-mas').style.visibility = "hidden";

    /*Mostrar informacion*/
    document.getElementById('info').style.maxHeight = "550px";

}
/*Comentario de sitio*/
function showCom() {
    document.getElementById('showCom').style.visibility = "visible";
}

function comSiteSubmit() {
    var comSiteSubmit = document.getElementById('comSiteSubmit');
    comSiteSubmit.removeAttribute("onclick");
    /*Submit Report to datebase*/
    jQuery(document).ready(function($){
        var siteCom = document.getElementById('siteCom').value;
        $.ajax({
            url: 'backend.php',
            type: 'post',
            data: {'siteCom': siteCom},
            success: function(){
                comSiteSubmit.classList.add("comTracSubmit");
                setTimeout("location.reload()",2400);
            }
        });
    });
}

function hideCom() {
    document.getElementById('showCom').style.visibility = "hidden";
}
/*Comentario de traducción*/
function showComTrac() {
    document.getElementById('comentLang').style.visibility = "visible";
}

function hideComTrac() {
    document.getElementById('comentLang').style.visibility = "hidden";
}
function comTracSubmit() {
    var comTracCancel = document.getElementById('comTracCancel');
    comTracCancel.style.opacity = "0.7";
    comTracCancel.removeAttribute("onclick");
    var comTracSubmit = document.getElementById('comTracSubmit');
    comTracSubmit.removeAttribute("onclick");
    /*Submit Report to datebase*/
    jQuery(document).ready(function($){
        var textOrig = document.getElementById('search').value;
        var textTrad = document.getElementById('result').innerHTML;
        var tradCom = document.getElementById('tracReport').value;
        $.ajax({
            url: 'backend.php',
            type: 'post',
            data: {
                'textOrig': textOrig,
                'textTrad': textTrad,
                'tradCom': tradCom
            },
            success: function(){
                comTracSubmit.classList.add("comTracSubmit");
                setTimeout("location.reload()",2400);
            }
        });
    });
}
/*Lector de texto*/
function sound() {
    window.speechSynthesis.cancel();
    var texto = document.getElementById("result").textContent;
    var sonido = new SpeechSynthesisUtterance(texto);
    sonido.rate = .8;
    sonido.lang = "es-MX";
    speechSynthesis.speak(sonido);
}