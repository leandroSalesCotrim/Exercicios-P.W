
<html>
    <head>
      <title>Números multiplos </title>
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
$numero=$_GET['num'];

for($i = 1; $i <= $numero; $i++ ){


    if($numero % $i ==0){
        echo("O número".$i." é multiplo de ".$numero."<br>");
    }else{
        echo ("O número".$i." não é multiplo de ".$numero."<br>");
    }
}

?>
            </div>
            </nav>
    </body>
</html>
