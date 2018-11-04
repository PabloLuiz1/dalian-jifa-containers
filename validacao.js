/* Doctype Javascript*/
function validarBl(){
	if(document.pesquisar.txtPesquisa.value.length !== 10){
		alert ("Insert a valid BL number");
		document.pesquisar.txtPesquisa.focus();
		return false;
	}
}

function validar(){
	if (document.cadastroFicha.txtBl.value.length !== 10){
		alert ("Insert a valid BL number");
		document.cadastroFicha.txtBl.focus();
		return false;
	}

	if (document.cadastroFicha.txtBl.value.includes(" ")){
		alert ("Insert a valid BL number");
		document.cadastroFicha.txtBl.focus();
		return false;
	}

	if (document.cadastroFicha.txtContainer.value == ""){
		alert ("Insert the container");
		document.cadastroFicha.txtContainer.focus();
		return false;
	}

	if (document.cadastroFicha.txtPais.value == ""){
		alert ("Insert the country");
		document.cadastroFicha.txtPais.focus();
		return false;
	}

	if (document.cadastroFicha.txtNavio.value == ""){
		alert ("Insert the vessel");
		document.cadastroFicha.txtNavio.focus();
		return false;
	}

	if (document.cadastroFicha.txtLocalizacao.value.length < 34){
		alert ("Insert the link in the field LOCATION");
		document.cadastroFicha.txtLocalizacao.focus();
		return false;
	}
}