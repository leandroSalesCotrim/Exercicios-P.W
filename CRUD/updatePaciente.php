<?php

session_start();
//conexao com banco
require_once 'conexao.php';

//pegando os dados
if(isset($_POST['btnAtualizar'])):
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

//id para filtrar de quem sao os dados
    $id = mysqli_escape_string($connect,$_POST['id']);

//passando dados digitados para o banco
    $sql = "UPDATE tbpaciente SET nomePaciente = '$nomePaciente'
    ,nomeSocialPaciente = '$nomeSocialPaciente'
    ,dataNascimentoPaciente = '$dataNascimentoPaciente'
    ,rgPaciente = '$rgPaciente'
    ,cpfPaciente = '$cpfPaciente'
    ,sexoPaciente = '$sexoPaciente'
    ,numCartaoSusPaciente = '$numCartaoSusPaciente'
    ,nacionalidadePaciente = '$nacionalidadePaciente'
    ,nomeMaePaciente = '$nomeMaePaciente'
    ,logradouroPaciente = '$logradouroPaciente'
    ,cidadePaciente = '$cidadePaciente'
    ,bairroPaciente = '$bairroPaciente'
    ,ruaPaciente = '$ruaPaciente'
    ,cepPaciente = '$cepPaciente'
    ,numCasaPaciente = '$numCasaPaciente'
    ,municipioPaciente = '$municipioPaciente'
    ,tipoLogradouroPaciente = '$tipoLogradouroPaciente'
    ,referenciaLogradouro = '$referenciaLogradouro'


    WHERE codPaciente = '$id'";

//try catch para aparecer o erro
    if(mysqli_query($connect, $sql)):
        $_SESSION ['mensagem'] = 'Atualizado com Sucesso!';
        header("Location: listarPaciente.php");
    else:
        $_SESSION ['mensagem'] = 'Erro na Atualização!'. $sql . "<br>" . mysqli_error($connect);
        header("Location: listarPaciente.php");
    endif;
endif;
