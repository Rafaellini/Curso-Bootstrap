/*------------- l i t e r a t u r a    j s ---------------*/

/*------------------ f u n c i o n e s -------------------*/

function entra(x){

enlace = document.getElementById(x);

//enlace.style.fontSize = "9pt";
enlace.style.color = "#e30303";	
}

function sale(x){
enlace = document.getElementById(x);

//enlace.style.fontSize = "8pt";
enlace.style.color = "#fe6666";
}

function abrep(x){
open(x);
}

function abre(x){
window.parent.location.href = x;
}

function cierra(x){
	enlace = document.getElementById(x);
	enlace.style.visibility = "hidden";
}

function enviar() {
	
	document.forms[0].submit();
}


        
        
/*------------------ r a f a e l l i n i --------------------*/