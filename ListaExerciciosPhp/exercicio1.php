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
                <h1 id="txtTitulo1">Insira o numero para verificar se é par ou não </h1>
                <form method="get" action="imparPar.php">
                    <br><br><br><br><br><br><br><br><br><br>
                <label id="txtInfo1"> Número: </label>
                <input type="text" name="txtNum" id="txtNum">
                <input  type="submit" value="Calcular">
                <br><br><br><br><br><br><br><br><br><br><br>
                <a href="index.php" id="txtVoltar">Voltar</a>
                </form>
            </div>
    </body>
</html>