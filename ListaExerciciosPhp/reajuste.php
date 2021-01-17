
<html>
    <head>
      <title>Reajuste salarial </title>
      <link rel="stylesheet" href="css/reset.css">
      <link rel="stylesheet" href="css/Style.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    </head>
    <body>
        <nav id="nav">
            <video autoplay="autoplay" muted loop poster="img/fundo.jpg" class="bg_video">
                <source src="img/Network - 12716.mp4" type="video/webm">
                <source src="img/Network - 12716.mp4" type="video/mp4">
            </video>
            <div class="menu">
                <br>
<?php
$valorSalarioAntigo = $_GET['txtSalarioAntigo'];
$funcao = $_GET ['txtFuncao'];

if ($funcao==1){
    $reajuste=5*$valorSalarioAntigo/100;
    $valorSalarioNovo=$reajuste+$valorSalarioAntigo;
    echo ("Salario antigo: ".$valorSalarioAntigo);
    echo ("<br>");
    echo ("Salario novo : ".$valorSalarioNovo);
    echo ("<br>");
    echo ("valor de reajuste : ".$reajuste);
    echo ("<br>");
    echo ("Função : Operador ");
}

else if ($funcao==2){
    $reajuste=10*$valorSalarioAntigo/100;
    $valorSalarioNovo=$reajuste+$valorSalarioAntigo;
    echo ("Salario antigo: ".$valorSalarioAntigo);
    echo ("<br>");
    echo ("Salario novo : ".$valorSalarioNovo);
    echo ("<br>");
    echo ("valor de reajuste : ".$reajuste);
    echo ("<br>");
    echo ("Função : Programador ");
}
else if ($funcao==3){
    $reajuste=15*$valorSalarioAntigo/100;
    $valorSalarioNovo=$reajuste+$valorSalarioAntigo;
    echo ("Salario antigo: ".$valorSalarioAntigo);
    echo ("<br>");
    echo ("Salario novo : ".$valorSalarioNovo);
    echo ("<br>");
    echo ("valor de reajuste : ".$reajuste);
    echo ("<br>");
    echo ("Função : Analista ");
}
else if ($funcao==4){
    $reajuste=25*$valorSalarioAntigo/100;
    $valorSalarioNovo=$reajuste+$valorSalarioAntigo;
    echo ("Salario antigo: ".$valorSalarioAntigo);
    echo ("<br>");
    echo ("Salario novo : ".$valorSalarioNovo);
    echo ("<br>");
    echo ("valor de reajuste : ".$reajuste);
    echo ("<br>");
    echo ("Função : Gerente ");
}
//operador 5%//
//programador 10%//
//analista 15%//
//gerente 25%//
?>
            </div>
        </nav>
    </body>
</html>