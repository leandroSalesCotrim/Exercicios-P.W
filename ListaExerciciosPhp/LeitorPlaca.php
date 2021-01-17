
<html>
    <head>
      <title>Leitor de placas </title>
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
    $Numero = $_GET['txtNumPlaca']; 
    $NumeroFinal = $Numero%10;


    if ($NumeroFinal==1 || $NumeroFinal==2){
        echo ("O carro está dentro do rodizio de segunda-feira");
    }else if ($NumeroFinal==3 || $NumeroFinal==4){
        echo ("O carro está dentro do rodizio de terça-feira");
    }else if ($NumeroFinal==5 || $NumeroFinal==6){
        echo ("O carro está dentro do rodizio de quarta-feira");
    }else if ($NumeroFinal==7 || $NumeroFinal==8){
        echo ("O carro está dentro do rodizio de quinta-feira");
    }else if ($NumeroFinal==9 || $NumeroFinal==0){
        echo ("O carro está dentro do rodizio de sexta-feira");
    }
    

    
?>
            </div>
            </nav>
</body>   
</html>