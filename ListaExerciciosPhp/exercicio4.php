<html>
<head> 
    <title>Reajuste</title>
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
    <h1 id="txtTitulo4">Cadastro de Clientes</h1>
    <br><br><br><br><br><br>
            <form method="get" action="reajuste.php">
                <label id="txtInfo4">Valor do salario:</label>
                <input type="text" name="txtSalarioAntigo" id="txtSalarioAntigo">
                <br> 
                <label id="txtInfo4">Função</label>
                <select name="txtFuncao" id="txtFuncao">
                <option value='0'>Selecione</option>
                <option value='1'>Operador</option>
                <option value='2'>Programador</option>
                <option value='3'>Analista</option>
                <option value='4'>Gerente</option>
                
                </select>
                <input type="submit" value="Enviar">
                <br><br><br><br><br><br>
                <a href="index.php" id="txtVoltar">Voltar</a>
            </form>
            
            </div>
                
</body> 
</html>