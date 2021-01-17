<html>
    <head>
        <title>Leitor Notas</title>
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
      <form method="get" action="notasAluno.php">
            <h1 id="txtTitulo2">Calculo de notas</h1>
            <br><br><br><br><br><br><br>
            <label id="txtInfo2"> Nota 1: </label>
            <input type="text" name="TxtNota1" id="TxtNota1">
            <br>
            <label id="txtInfo2"> Nota 2: </label>
            <input type="text" name="TxtNota2" id="TxtNota2">
            <br>
            <label id="txtInfo2"> Nota 3: </label>
            <input type="text" name="TxtNota3" id="TxtNota3">
            <br>
            <label id="txtInfo2"> Nota 4: </label>
            <input type="text" name="TxtNota4" id="TxtNota4">
            <br><br>
            <input id="btnEnviar" type="submit" value="Enviar">
            <br><br><br><br><br><br>
            <a href="index.php" id="txtVoltar">Voltar</a>
      </form>
            </div>
    </body>
</html>