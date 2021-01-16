<?php

session_start();

require_once 'conexao.php';


if(isset($_POST['btnCadastrar'])):
    $nomePaciente = mysqli_escape_string($connect,$_POST['nomePaciente']);
    $nomeSocialPaciente = mysqli_escape_string($connect,$_POST['nomeSocialPaciente']);
    $dataNascimentoPaciente = mysqli_escape_string($connect,$_POST['dataNascimentoPaciente']);
    $rgPaciente = mysqli_escape_string($connect,$_POST['rgPaciente']);
    $cpfPaciente = mysqli_escape_string($connect,$_POST['cpfPaciente']);
    $sexoPaciente = mysqli_escape_string($connect,$_POST['sexoPaciente']);
    $numCartaoSusPaciente = mysqli_escape_string($connect,$_POST['numCartaoSusPaciente']);
    $nacionalidadePaciente = mysqli_escape_string($connect,$_POST['nacionalidadePaciente']);
    $nomeMaePaciente = mysqli_escape_string($connect,$_POST['nomeMaePaciente']);
    $logradouroPaciente = mysqli_escape_string($connect,$_POST['logradouroPaciente']);
    $cidadePaciente = mysqli_escape_string($connect,$_POST['cidadePaciente']);
    $bairroPaciente = mysqli_escape_string($connect,$_POST['bairroPaciente']);
    $ruaPaciente = mysqli_escape_string($connect,$_POST['ruaPaciente']);
    $cepPaciente = mysqli_escape_string($connect,$_POST['cepPaciente']);
    $numCasaPaciente = mysqli_escape_string($connect,$_POST['numCasaPaciente']);
    $municipioPaciente = mysqli_escape_string($connect,$_POST['municipioPaciente']);
    $tipoLogradouroPaciente = mysqli_escape_string($connect,$_POST['tipoLogradouroPaciente']);
    $referenciaLogradouro = mysqli_escape_string($connect,$_POST['referenciaLogradouro']);


    $sql = "INSERT INTO tbpaciente (nomePaciente
    ,nomeSocialPaciente
    ,dataNascimentoPaciente
    ,rgPaciente
    ,cpfPaciente
    ,sexoPaciente
    ,numCartaoSusPaciente
    ,nacionalidadePaciente
    ,nomeMaePaciente
    ,logradouroPaciente
    ,cidadePaciente
    ,bairroPaciente
    ,ruaPaciente
    ,cepPaciente
    ,numCasaPaciente
    ,municipioPaciente
    ,tipoLogradouroPaciente
    ,referenciaLogradouro) VALUES ('$nomePaciente'
    ,'$nomeSocialPaciente'
    ,'$dataNascimentoPaciente'
    ,'$rgPaciente'
    ,'$cpfPaciente'
    ,'$sexoPaciente'
    ,'$numCartaoSusPaciente'
    ,'$nacionalidadePaciente'
    ,'$nomeMaePaciente'
    ,'$logradouroPaciente'
    ,'$cidadePaciente'
    ,'$bairroPaciente'
    ,'$ruaPaciente'
    ,'$cepPaciente'
    ,'$numCasaPaciente'
    ,'$municipioPaciente'
    ,'$tipoLogradouroPaciente'
    ,'$referenciaLogradouro')";

    if(mysqli_query($connect, $sql)):
        $_SESSION ['mensagem'] = 'Cadastrado com Sucesso!';
        header("Location: listarPaciente.php");
    else:
        $_SESSION ['mensagem'] = "Error: " . $sql . "<br>" . mysqli_error($connect);
        header("Location: listarPaciente.php");
    endif;
endif;
