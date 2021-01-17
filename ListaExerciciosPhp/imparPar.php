
<html>
    <head>
      <title>Impar ou Par </title>
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
    //receber os dados do formulário, observar o method
    $numero = $_GET['txtNum']; 
  
    if ( $numero %2 == 0 ){
        echo (" O número " . $numero . " é par!");
} else{
    echo(" O número " . $numero . " é Impar!");
}
?>
            </div>
    </body>
</html>