
<html>
    <head>
      <title>Números primos </title>
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
$numero = $_GET ['vlNum'];
$i;
$resul;
$j = 0;   
    for($i = 1; $i <= $numero; $i++ ){

        if($numero %$i == 0){
            $j++;
        }
    }
    if($j == 2){
        echo ("<br> O número é primo");
    }else{
        echo ("<br> O número não é primo");
    }


?>
            </div>
        </nav>
    </body>
</html>