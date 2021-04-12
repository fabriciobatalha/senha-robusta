function validarSenha() {
	var senha = document.getElementById('senha').value,
        minimo = false,
        maximo = false,
        minusculo = false,
        maiusculo = false;

	if (senha.length >= 1) {
        document.getElementById("minimo").innerHTML = "<span style='color: #008000'> tem 1 caractere </span>";
        minimo = true;
    } else {
        document.getElementById("minimo").innerHTML = "<span style='color: #ff0000'> nao tem 1 caractere </span>";
        minimo = false;
    }

    if (senha.length >= 8) {
        document.getElementById("maximo").innerHTML = "<span style='color: #008000'> tem 8 caractere </span>";
        maximo = true;
	} else {
        document.getElementById("maximo").innerHTML = "<span style='color: #ff0000'> nao tem 8 caractere </span>";
        maximo = false;
    }

	if (senha.match(/[a-z]+/)) {
		document.getElementById("minusculo").innerHTML = "<span style='color: #008000'> tem minuscula </span>";
        minusculo = true;
	} else {
        document.getElementById("minusculo").innerHTML = "<span style='color: #ff0000'> nao tem minuscula </span>";
        minusculo = false;
    }

    if (senha.match(/[A-Z]+/)) {
		document.getElementById("maiusculo").innerHTML = "<span style='color: #008000'> tem maiusculo </span>";
        maiusculo = true;
	} else {
        document.getElementById("maiusculo").innerHTML = "<span style='color: #ff0000'> nao tem maiusculo </span>";
        maiusculo = false;
    }

    if (minimo || !maximo || !minusculo || !maiusculo) {
        document.getElementById("btnCadastrar").disabled = true; 
    } else {
        document.getElementById("btnCadastrar").disabled = false; 
    }
}
