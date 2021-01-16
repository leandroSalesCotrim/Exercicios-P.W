<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de pacientes</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <?php

    include_once 'conexao.php';
    $i = 0;
    ?>
</head>

<body>
    <div id="container-fluid">
        <div class="table table-bordered">
            <div class="tamanho-tabela">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Codigo</th>
                            <th scope="col">Nome completo</th>
                            <th scope="col">Nome Social</th>
                            <th scope="col">Data de nascimento</th>
                            <th scope="col">RG</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Sexo</th>
                            <th scope="col">Número do cartão SUS</th>
                            <th scope="col">Nacionalidade</th>
                            <th scope="col">Nome da mãe</th>
                            <th scope="col">Logradouro</th>
                            <th scope="col">Cidade</th>
                            <th scope="col">Bairro</th>
                            <th scope="col">Rua</th>
                            <th scope="col">CEP</th>
                            <th scope="col">Número da residencia</th>
                            <th scope="col">Municipio</th>
                            <th scope="col">Tipo do logradouro</th>
                            <th scope="col">Referencia do logradouro</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM tbpaciente";
                        $result = mysqli_query($connect, $sql);
                        if ($dados = mysqli_num_rows($result) > 0) :
                            while ($dados = mysqli_fetch_array($result)) :
                        ?>
                                <tr>
                                    <td><?php echo $dados['codPaciente']; ?></td>
                                    <td><?php echo $dados['nomePaciente']; ?></td>
                                    <td><?php echo $dados['nomeSocialPaciente']; ?></td>
                                    <td><?php echo $dados['dataNascimentoPaciente']; ?></td>
                                    <td><?php echo $dados['rgPaciente']; ?></td>
                                    <td><?php echo $dados['cpfPaciente']; ?></td>
                                    <td><?php echo $dados['sexoPaciente']; ?></td>
                                    <td><?php echo $dados['numCartaoSusPaciente']; ?></td>
                                    <td><?php echo $dados['nacionalidadePaciente']; ?></td>
                                    <td><?php echo $dados['nomeMaePaciente']; ?></td>
                                    <td><?php echo $dados['logradouroPaciente']; ?></td>
                                    <td><?php echo $dados['cidadePaciente']; ?></td>
                                    <td><?php echo $dados['bairroPaciente']; ?></td>
                                    <td><?php echo $dados['ruaPaciente']; ?></td>
                                    <td><?php echo $dados['cepPaciente']; ?></td>
                                    <td><?php echo $dados['numCasaPaciente']; ?></td>
                                    <td><?php echo $dados['municipioPaciente']; ?></td>
                                    <td><?php echo $dados['tipoLogradouroPaciente']; ?></td>
                                    <td><?php echo $dados['referenciaLogradouro']; ?></td>

                                    <td><a href="editarPaciente.php?id=<?php echo $dados['codPaciente']; ?>" type="button" class="btn btn-warning">Editar</a></td>
                                    <!-- <td><a onClick="(confirmarDelete())" href="deletarPaciente.php?id=<?php echo $dados['codPaciente']; ?>" >Remover</a></td> -->
                                    <td><a type="button" onClick="(confirmarDelete(<?php echo $dados['codPaciente']; ?>))">Remover</a></td>

                                </tr>
                            <?php
                            endwhile;
                        else : ?>
                            <tr>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                        <?php
                        endif;
                        ?>
                    </tbody>
                </table>
                <a href="cadastrarPaciente.php" type="button" class="btn btn-dark" id="btn-add">Adicionar</a>
                <br>
                <br>
            </div>
        </div>
    </div>

    <script src="js/confirmar.js"></script>
</body>

</html>