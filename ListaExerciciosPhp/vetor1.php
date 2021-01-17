
<html>
    <head>
      <title>Calculando a potência </title>
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
$nome = $_GET['txtName'];
$cpf = $_GET['txtCpf'];
$data = $_GET['txtData'];

    $usuario = array(
                "nome" => $nome,
                "cpf" => $cpf,
                "data" => $data
            );
            echo("<br>");
            echo("Nome : ".$usuario['nome'] );
            echo("<br>");
            echo("Cpf : ".$usuario['cpf']);
            echo("<br>");
            echo("Data de nascimento : ".$usuario['data']);


?>
            </div>
        </nav>
    </body>
</html>