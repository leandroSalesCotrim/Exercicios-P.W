<?php
include_once('conexao.php');
session_start();
if (isset($_SESSION['mensagem'])) :
    echo $_SESSION['mensagem'];
endif;
if (isset($_GET['id'])) :
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM tbpaciente WHERE codPaciente = '$id'";
    $result = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($result);
endif;
?>
<html>

<head>
    <title>Editar Paciente</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <p class="txt">Editar Dados</p>

    <div class="table table-bordered">
        <center>
            <h1>Paciente</h1>
        </center>
        <div class="align-form">
            <form class="form-group" action="updatePaciente.php" method="post">
                <input type="hidden" name="id" value="<?php echo $dados['codPaciente']; ?> ">
                <div class="input-field">
                    <label for="nomePaciente">nomePaciente:</label>
                    <input class="form-control" type="text" name="nomePaciente" id="nomePaciente" value="<?php echo $dados['nomePaciente']; ?> ">
                </div>
                <div class="input-field">
                    <label for="nomeSocialPaciente">nomeSocialPaciente:</label>
                    <input class="form-control" type="text" name="nomeSocialPaciente" id="nomeSocialPaciente" value="<?php echo $dados['nomeSocialPaciente']; ?> ">
                </div>
                <div class="input-field">
                    <label for="dataNascimentoPaciente">dataNascimentoPaciente:</label>
                    <input class="form-control" type="text" name="dataNascimentoPaciente" id="dataNascimentoPaciente" value="<?php echo $dados['dataNascimentoPaciente']; ?> ">
                </div>
                <div class="input-field">
                    <label for="rgPaciente">rgPaciente:</label>
                    <input class="form-control" type="text" name="rgPaciente" id="rgPaciente" value="<?php echo $dados['rgPaciente']; ?> ">
                </div>
                <div class="input-field">
                    <label for="cpfPaciente">cpfPaciente:</label>
                    <input class="form-control" type="text" name="cpfPaciente" id="cpfPaciente" value="<?php echo $dados['cpfPaciente']; ?> ">
                </div>
                <div class="input-field">
                    <label for="sexoPaciente">sexoPaciente:</label>
                    <input class="form-control" type="text" name="sexoPaciente" id="sexoPaciente" value="<?php echo $dados['sexoPaciente']; ?> ">
                </div>
                <div class="input-field">
                    <label for="numCartaoSusPaciente">numCartaoSusPaciente:</label>
                    <input class="form-control" type="text" name="numCartaoSusPaciente" id="numCartaoSusPaciente" value="<?php echo $dados['numCartaoSusPaciente']; ?> ">
                </div>
                <div class="input-field">
                    <label for="nacionalidadePaciente">nacionalidadePaciente:</label>
                    <input class="form-control" type="text" name="nacionalidadePaciente" id="nacionalidadePaciente" value="<?php echo $dados['nacionalidadePaciente']; ?> ">
                </div>
                <div class="input-field">
                    <label for="nomeMaePaciente">nomeMaePaciente:</label>
                    <input class="form-control" type="text" name="nomeMaePaciente" id="nomeMaePaciente" value="<?php echo $dados['nomeMaePaciente']; ?> ">
                </div>
                <div class="input-field">
                    <label for="logradouroPaciente">logradouroPaciente:</label>
                    <input class="form-control" type="text" name="logradouroPaciente" id="logradouroPaciente" value="<?php echo $dados['logradouroPaciente']; ?> ">
                </div>
                <div class="input-field">
                    <label for="cidadePaciente">cidadePaciente:</label>
                    <input class="form-control" type="text" name="cidadePaciente" id="cidadePaciente" value="<?php echo $dados['cidadePaciente']; ?> ">
                </div>
                <div class="input-field">
                    <label for="bairroPaciente">bairroPaciente:</label>
                    <input class="form-control" type="text" name="bairroPaciente" id="bairroPaciente" value="<?php echo $dados['bairroPaciente']; ?> ">
                </div>
                <div class="input-field">
                    <label for="ruaPaciente">ruaPaciente:</label>
                    <input class="form-control" type="text" name="ruaPaciente" id="ruaPaciente" value="<?php echo $dados['ruaPaciente']; ?> ">
                </div>
                <div class="input-field">
                    <label for="cepPaciente">cepPaciente:</label>
                    <input class="form-control" type="text" name="cepPaciente" id="cepPaciente" value="<?php echo $dados['cepPaciente']; ?> ">
                </div>
                <div class="input-field">
                    <label for="numCasaPaciente">numCasaPaciente:</label>
                    <input class="form-control" type="text" name="numCasaPaciente" id="numCasaPaciente" value="<?php echo $dados['numCasaPaciente']; ?> ">
                </div>
                <div class="input-field">
                    <label for="municipioPaciente">municipioPaciente:</label>
                    <input class="form-control" type="text" name="municipioPaciente" id="municipioPaciente" value="<?php echo $dados['municipioPaciente']; ?> ">
                </div>
                <div class="input-field">
                    <label for="tipoLogradouroPaciente">tipoLogradouroPaciente:</label>
                    <input class="form-control" type="text" name="tipoLogradouroPaciente" id="tipoLogradouroPaciente" value="<?php echo $dados['tipoLogradouroPaciente']; ?> ">
                </div>
                <div class="input-field">
                    <label for="referenciaLogradouro">referenciaLogradouro:</label>
                    <input class="form-control" type="text" name="referenciaLogradouro" id="referenciaLogradouro" value="<?php echo $dados['referenciaLogradouro']; ?> ">
                </div>
                <button type="submit" name="btnAtualizar" class="btn btn-light">Atualizar</button>
            </form>
        </div>
    </div>
</body>

</html>