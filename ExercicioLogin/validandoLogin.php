<?php
//Iniciando variaveis
$usuario = $_POST['txtUser'];
$senha = $_POST['txtPass'];

//verificando variaveis
if(($usuario == 'adm') && ($senha == '123')){
//Iniciando seção e variveis da seção que serão destruidas após o logout
    session_start();

    $_SESSION ['usuario-session'] = $usuario;
    $_SESSION ['senha-session'] = $senha;

//Redirecionando para a pagina restrita
    header("Location: areaRestrita/indexAR.php");
}
else{
    //Caso não for a senha e usuario corretos , ele ira mandar o usuario de volta para a index  
    header("Location: index.php");

}
?>