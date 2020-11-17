function mudaFoto(foto){
	document.getElementById("icone").src = foto;
}

function mudaFundo(){
	
}
function mudar_cor_over(celula){
	if(celula.style.backgroundColor = "#cecece"){
		celula.style.backgroundColor = "#dddddd";
	}
	if(celula.style.backgroundColor != "#cecece"){
		celula.style.backgroundColor = "#dddddd";
	}
} 

function muda_cor(){
   celula = document.getElementById("celula" + document.fcolor.celula.value)
   celula.style.backgroundColor=document.fcolor.minhacor.value
}

function cadastradoSucesso(){
    alert("Cadastrado com Sucesso!");
    window.alert("Cadastrado com Sucesso!");
}
function cadastradoFalho(){
    alert("Cadastrado sem Sucesso!");
    window.alert("Cadastrado sem Sucesso!");
}