
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

$cpf = $_GET['txtCpf'];
            if (strlen($cpf ) != 11 ) {
                echo ("O cpf informado não possui números suficiente");
                echo ("<br>");
            }else{
                echo ("O cpf informado possui 11 digitos ou mais");
                echo ("<br>");
            }
            if (preg_match('/(\d)\1{10}/', $cpf)){
                echo ("O cpf informado não é valido");
                echo ("<br>");
            }else{
                echo ("O cpf informado não possui números repetidos");
                echo ("<br>");
            }
            for ($t = 9; $t < 11; $t++) {
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf{$c} * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf{$c} != $d) {
                    echo ("O cpf informado é invalido");
                break;
                }else{
                    echo ("O cpf informado é valido");
                break;
                }
            }


?>
            </div>
        </nav>
    </body>
</html>