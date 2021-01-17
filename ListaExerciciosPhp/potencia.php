
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
$base = $_GET['vlBase'];
$expo = $_GET['vlExpo'];
$i=1;
$resul=$base;



while ($i<$expo){
    $resul=$resul*$base;
    $i++;
    
}
echo ("O número ".$base." elevado a  ".$expo." é igual a :" . $resul);


?>
            </div>
        </nav>
    </body>
</html>