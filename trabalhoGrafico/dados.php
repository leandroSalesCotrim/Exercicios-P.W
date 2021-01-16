<?php
        
        try{
            $conexao = Conexao::pegarConexao();
            $stmt = $conexao -> prepare ("SELECT * FROM tbPaciente");
            $stmt -> execute();
            $vetor = array ();
            $vetor2 = array ();
            $i= 0;
            $quantidade=0;
            $quantidade2=0;
            while( $row = $stmt ->fetch(PDO::FETCH_BOTH)){
                $vetor [] = $row['cidadePaciente'] ;
                echo $row ['cidadePaciente'];
                if($vetor[$i] =="São Paulo"){
                   $quantidade++;
                }else if($vetor[$i] =="Bahia"){
                    $quantidade2++;
                 }
             //   $vetor2 [] = $row['qtdeproduto'] ;
             $i++;
            }

        }
        catch(PDOException $e){
           echo "erro" . $e -> getMessage();
           
        }
    ?>
		