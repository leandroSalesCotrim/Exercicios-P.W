function soma() {
    var n1 = parseInt(document.getElementById("txtN1").value);
    var n2 = parseInt(document.getElementById("txtN2").value);
    var resultado = n1 + n2;
    document.getElementById("txtResult").value = resultado;
    var opcao = document.getElementById("slcSexo").value;
    if (opcao == 1) {
        document.getElementById("fraseSexo").innerHTML = "Parabéns você é mulher!";
        document.body.style.backgroundColor = "pink";
    } else if (opcao == 2) {
        document.getElementById("fraseSexo").innerHTML = "Sexo frágil";
        document.body.style.backgroundColor = "yellow";

    } else {
        document.getElementById("fraseSexo").innerHTML = "Você vai encontrar seu caminho";
    }
}

function alteraCor() {
    //document.body.bgColor = "red";
    //document.body.style.backgroundColor = "#0000ff";
    document.getElementById("txtN1").style.borderColor = "red";
}