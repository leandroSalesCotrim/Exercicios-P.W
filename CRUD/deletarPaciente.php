<?php 

//inclui as variaveis da pagina "produtos-cadastrados.php"
require_once 'conexao.php';
$codPaciente = filter_input(INPUT_GET,'id');
try{

    //consulta para deletar dados abaixo  
    $sql = "DELETE FROM tbpaciente WHERE codPaciente = '$codPaciente'";

    if(mysqli_query($connect, $sql)):
        header("Location: listarPaciente.php");
    else:
        header("Location: listarPaciente.php");
    endif;
}
catch(Exception $e){
    echo '<pre>';
        print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}
