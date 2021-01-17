<?php

$nome = $_GET['txtNome'];
$data = $_GET['txtData'];
$cpf = $_GET['txtCpf'];
$rg = $_GET['txtRg'];
$turma = $_GET['txtTurma'];

    $parts = array_reverse(explode('-', $data));
  
    $aluno = array(
        "nome" => $nome,
        "data" => $parts,
        "cpf" => $cpf,
        "rg" => $rg,
        "turma" => $turma
    );
        echo("Nome do aluno: ".$aluno['nome']."<br>");
        echo("Data de Nascimento: ");
        echo implode('-', $parts);
        echo("<br>"."CPF: ".$aluno['cpf']."<br>");
        echo("RG: ".$aluno['rg']."<br>"."Turma: ".$aluno['turma']."<br><br>");
        echo("Aluno matriculado com sucesso!");
?>