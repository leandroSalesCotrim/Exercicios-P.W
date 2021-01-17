<html>
    <head>
        <title>Leitor Placa</title>
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
        <h1 id="txtTitulo3">Insira as informações da placa</h1>
        <br><br><br><br><br><br><br>
        <form method="get" action="LeitorPlaca.php">
        <label id="txtInfo1">Letra:</label>
            <input type="text" name="txtLetra" id="txtLetra">
            <br><br>
        <label id="txtInfo1">Número :</label>
            <input type="text" name="txtNumPlaca" id="txtNumPlaca">
            <br><br>
            <input type="submit" id="btnEnviar" value="Verificar">
            <br><br><br><br><br><br><br><br><br><br>
            <a href="index.php" id="txtVoltar">Voltar</a>
        </form>
            </div>
    </body>
</html>