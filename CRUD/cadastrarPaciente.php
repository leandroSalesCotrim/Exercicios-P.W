<?php
session_start();
if (isset($_SESSION['mensagem'])) :
    echo $_SESSION['mensagem'];
endif;

include_once 'conexao.php';

?>

<html>

<head>
    <title>PacienteCadastro</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <form action="createPaciente.php" method="post">
        <div class="formPac" style="width:50%">
            <div class="form-group">
                <label for="nomePaciente">Nome</label>
                <input type="text" class="form-control" id="nomePaciente" name="nomePaciente">
            </div>
            <div class="form-group">
                <label for="nomeSocialPaciente">nomeSocialPaciente</label>
                <input type="text" class="form-control" id="nomeSocialPaciente" name="nomeSocialPaciente">
            </div>
            <div class="form-group">
                <label for="dataNascimentoPaciente">dataNascimentoPaciente</label>
                <input type="text" class="form-control" id="dataNascimentoPaciente" name="dataNascimentoPaciente">
            </div>
            <div class="form-group">
                <label for="rgPaciente" rgPaciente>rgPaciente</label>
                <input type="text" class="form-control" id="rgPaciente" name="rgPaciente">
            </div>
            <div class="form-group">
                <label for="cpfPaciente">cpfPaciente</label>
                <input type="text" class="form-control" id="cpfPaciente" name="cpfPaciente">
            </div>
            <div class="form-group">
                <label for="sexoPaciente">sexoPaciente</label>
                <input type="text" class="form-control" id="sexoPaciente" name="sexoPaciente">
            </div>
            <div class="form-group">
                <label for="numCartaoSusPaciente">numCartaoSusPaciente</label>
                <input type="text" class="form-control" id="numCartaoSusPaciente" name="numCartaoSusPaciente">
            </div>
            <div class="form-group">
                <label for="nacionalidadePaciente">nacionalidadePaciente</label>
                <input type="text" class="form-control" id="nacionalidadePaciente" name="nacionalidadePaciente">
            </div>
            <div class="form-group">
                <label for="nomeMaePaciente">nomeMaePaciente</label>
                <input type="text" class="form-control" id="nomeMaePaciente" name="nomeMaePaciente">
            </div>
            <div class="form-group">
                <label for="logradouroPaciente">logradouroPaciente</label>
                <input type="text" class="form-control" id="logradouroPaciente" name="logradouroPaciente">
            </div>
            <div class="form-group">
                <label for="cidadePaciente">cidadePaciente</label>
                <input type="text" class="form-control" id="cidadePaciente" name="cidadePaciente">
            </div>
            <div class="form-group">
                <label for="bairroPaciente">bairroPaciente</label>
                <input type="text" class="form-control" id="bairroPaciente" name="bairroPaciente">
            </div>
            <div class="form-group">
                <label for="ruaPaciente">ruaPaciente</label>
                <input type="text" class="form-control" id="ruaPaciente" name="ruaPaciente">
            </div>
            <div class="form-group">
                <label for="cepPaciente">cepPaciente</label>
                <input type="text" class="form-control" id="cepPaciente" name="cepPaciente">
            </div>
            <div class="form-group">
                <label for="numCasaPaciente">numCasaPaciente</label>
                <input type="text" class="form-control" id="numCasaPaciente" name="numCasaPaciente">
            </div>
            <div class="form-group">
                <label for="municipioPaciente">municipioPaciente</label>
                <input type="text" class="form-control" id="municipioPaciente" name="municipioPaciente">
            </div>
            <div class="form-group">
                <label for="tipoLogradouroPaciente">tipoLogradouroPaciente</label>
                <input type="text" class="form-control" id="tipoLogradouroPaciente" name="tipoLogradouroPaciente">
            </div>
            <div class="form-group">
                <label for="referenciaLogradouro">referenciaLogradouro</label>
                <input type="text" class="form-control" id="referenciaLogradouro" name="referenciaLogradouro">
            </div>

            <button type="submit" name="btnCadastrar" class="btn btn-primary">Enviar</button>
        </div>
    </form>

</body>

</html>