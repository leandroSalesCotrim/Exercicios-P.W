<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtro de pesquisa</title>
</head>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript">
    $(document).ready(function (e) {
        $("#filtro").hide();

        $("#btnMostrarEsconder").click(function (e) {
            $("#filtro").toggle();
        });
    });
</script>
    <body>
    <button id="btnMostrarEsconder" type="button" >Abrir/fechar filtro</button>
    <div id="filtro">
    <form method="post">
            <label>Pesquisar por nome :</label>
            <input type="text" name="campo1" id= "campo1" value="">
            <button type="submit">Pesquisar</button>
    </form>
    <form method="post">
            <label>Pesquisar por data de nascimento :</label>
            <input type="date" name="campo2" id= "campo2" value="">
            <button type="submit">Pesquisar</button>
    </form>
   
    <form method="post">
                <label>Pesquisar entre </label>
                <input type="date" name="campo3" id= "campo3" value="">
                <label> e </label>
                <input type="date" name="campo4" id= "campo4" value="">
                <button type="submit">Pesquisar</button>
    </form>
            
    <form method="post">
                <label>Pesquisar por letra inicial :</label>
                <input type="text" name="campo5" id= "campo5" value="">
                <button type="submit">Pesquisar</button>
   
            </form>
            <a href="index.php">Resetar filtros</a>

        <hr>
    </div>
        <table class="table" >
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="text_table">Nome</th>
                    <th scope="col" class="text_table">Data de nascimento</th>
                    <th scope="col" class="text_table">E-mail</th>
                    <th scope="col" class="text_table">Cpf</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include ('Conexao.php');
                $campo1 = @$_POST['campo1'];
                $campo2 = @$_POST['campo2'];
                $campo3 = @$_POST['campo3'];
                $campo4 = @$_POST['campo4'];
                $campo5 = @$_POST['campo5'];
                    
                if(empty($campo1)){
                    if(empty($campo2)){
                        if(empty($campo3)){
                            if(empty($campo4)){
                                if(empty($campo5)){
                                    $stmt = $pdo -> prepare ("select idcliente, nomecliente,
                        cpfcliente, rgcliente, emailcliente, nascimentocliente 
                        from tbcliente");
                        $stmt -> execute() ;
                    //laço
                    while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
                        
                                echo '<tr>';
                                    echo "<th>".$row['nomecliente']."</th>";                /*Resgata o valor no banco e apresenta o nome do cliente*/
                                    echo "<td>".date('d-m-Y',strtotime($row['nascimentocliente']))."</td>";   /*Resgata o valor no banco e apresenta a data de nascimento do cliente*/
                                    echo "<td>".$row['emailcliente']."</td>";             /*Resgata o valor no banco e apresenta o email do cliente*/       
                                    echo "<td>".$row['cpfcliente']."</td>";             /*Resgata o valor no banco e apresenta o cpf do cliente*/       
                                echo '</tr>';
                            }
                        }else if(isset ($campo5)){
                            $stmt = $pdo -> prepare ("select idcliente, nomecliente,
                            cpfcliente, rgcliente, emailcliente, nascimentocliente 
                            from tbcliente
                            where nomecliente like '".$campo5."%' ");
                            $stmt -> execute() ;
                            while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
                                $id = $row['idcliente'];
                                $nome = $row['nomecliente'];
                                $datanasc = $row['nascimentocliente'];
                                $email = $row['emailcliente'];
                                $cpf = $row['cpfcliente'];
                                        echo '<tr>';
                                            echo "<th>".$row['nomecliente']."</th>";                
                                            echo "<td>".date('d-m-Y',strtotime($row['nascimentocliente']))."</td>";
                                            echo "<td>".$row['emailcliente']."</td>";                    
                                            echo "<td>".$row['cpfcliente']."</td>";                    
                                        echo '</tr>';
                               }
                        }
                    }else{}
                }else if ( isset ($campo3 ) && isset ($campo4) ){
                    $stmt = $pdo -> prepare ("select idcliente, nomecliente,
                    cpfcliente, rgcliente, emailcliente, nascimentocliente 
                    from tbcliente
                    where nascimentocliente between '".$campo3."%' and '".$campo4."'");
                    $stmt -> execute() ;
                    while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
                        $id = $row['idcliente'];
                        $nome = $row['nomecliente'];
                        $datanasc = $row['nascimentocliente'];
                        $email = $row['emailcliente'];
                        $cpf = $row['cpfcliente'];
                                echo '<tr>';
                                    echo "<th>".$row['nomecliente']."</th>";                /*Resgata o valor no banco e apresenta o id do produto*/
                                    echo "<td>".date('d-m-Y',strtotime($row['nascimentocliente']))."</td>";              /*Resgata o valor no banco e apresenta a descrição do produto*/
                                    echo "<td>".$row['emailcliente']."</td>";             /*Resgata o valor no banco e apresenta o valor do produto*/       
                                    echo "<td>".$row['cpfcliente']."</td>";             /*Resgata o valor no banco e apresenta o valor do produto*/       
                                echo '</tr>';
                       }
                }
            }else if ( isset ($campo2) ){
                $stmt = $pdo -> prepare ("select idcliente, nomecliente,
                cpfcliente, rgcliente, emailcliente, nascimentocliente 
                from tbcliente
                where nascimentocliente like '".$campo2."%'");
                $stmt -> execute() ;
                while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
                    $id = $row['idcliente'];
                    $nome = $row['nomecliente'];
                    $datanasc = $row['nascimentocliente'];
                    $email = $row['emailcliente'];
                    $cpf = $row['cpfcliente'];
                            echo '<tr>';
                                echo "<th>".$row['nomecliente']."</th>";                /*Resgata o valor no banco e apresenta o id do produto*/
                                echo "<td>".date('d-m-Y',strtotime($row['nascimentocliente']))."</td>";              /*Resgata o valor no banco e apresenta a descrição do produto*/
                                echo "<td>".$row['emailcliente']."</td>";             /*Resgata o valor no banco e apresenta o valor do produto*/       
                                echo "<td>".$row['cpfcliente']."</td>";             /*Resgata o valor no banco e apresenta o valor do produto*/       
                            echo '</tr>';
                   }
            }
       
         }else if ( isset ($campo1)){
                        $stmt = $pdo -> prepare ("select idcliente, nomecliente,
                        cpfcliente, rgcliente, emailcliente, nascimentocliente 
                        from tbcliente
                        where nomecliente like '%".$campo1."%'");
                        $stmt -> execute() ;
                        while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
                            echo ($campo2);
                            $id = $row['idcliente'];
                            $nome = $row['nomecliente'];
                            $datanasc = $row['nascimentocliente'];
                            $email = $row['emailcliente'];
                            $cpf = $row['cpfcliente'];
                                    echo '<tr>';
                                        echo "<th>".$row['nomecliente']."</th>";                /*Resgata o valor no banco e apresenta o id do produto*/
                                        echo "<td>".date('d-m-Y',strtotime($row['nascimentocliente']))."</td>";              /*Resgata o valor no banco e apresenta a descrição do produto*/
                                        echo "<td>".$row['emailcliente']."</td>";             /*Resgata o valor no banco e apresenta o valor do produto*/       
                                        echo "<td>".$row['cpfcliente']."</td>";             /*Resgata o valor no banco e apresenta o valor do produto*/       
                                    echo '</tr>';
                           }
                    }
       ?>
            </tbody>
        </table>
    </body>
</html>