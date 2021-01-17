<html>
    <head> 
        <title>Verificação</title>
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
        <h1>Verificação de dados</h1>
            <form method="get" action="vetor1.php">
                <label>Insira o seu nome :</label>
                <br>
                <input type="text" name="txtName" id="txtName">
                <label>Insira o seu cpf :</label>
                <br>
                <input type="text" name="txtCpf" id="txtCpf">
                <label>Insira a sua data de nascimento :</label>
                <br>
                <input type="text" name="txtData" id="txtData">
                <input type="submit" value="Verificar">
                <a href="index.php" id="txtVoltar">Voltar</a>
            </form>  
            </div>
    </body> 
</html>