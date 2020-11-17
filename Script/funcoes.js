function mudaFoto(foto){
    document.getElementById("icone").src = foto;
}
function aparecerLogin(){
    //alert("cheked the button - worked");
    if(visibility='visible'){
        document.getElementById("iframeLogin").style.visibility='hidden';
    }
    if(visibility='hidden'){
        document.getElementById("iframeLogin").style.visibility='visible';
    }
}