function validarSenha() {
	var senha = document.getElementById('senha').value;

	if (senha.length >= 1) {
        document.getElementById("minimo").innerHTML = "<span style='color: #008000'> tem 1 caractere </span>";
	} else {
        document.getElementById("minimo").innerHTML = "<span style='color: #ff0000'> nao tem 1 caractere </span>";
    }

    if (senha.length >= 8) {
        document.getElementById("maximo").innerHTML = "<span style='color: #008000'> tem 8 caractere </span>";
	} else {
        document.getElementById("maximo").innerHTML = "<span style='color: #ff0000'> nao tem 8 caractere </span>";
    }

	if (senha.match(/[a-z]+/)) {
		document.getElementById("minusculo").innerHTML = "<span style='color: #008000'> tem minuscula </span>";
	} else {
        document.getElementById("minusculo").innerHTML = "<span style='color: #ff0000'> nao tem minuscula </span>";
    }

    if (senha.match(/[A-Z]+/)) {
		document.getElementById("maiusculo").innerHTML = "<span style='color: #008000'> tem maiusculo </span>";
	} else {
        document.getElementById("maiusculo").innerHTML = "<span style='color: #ff0000'> nao tem maiusculo </span>";
    }
}
