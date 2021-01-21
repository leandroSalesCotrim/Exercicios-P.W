<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include ("Conexao.php");
        $stmt = $pdo -> prepare ("select * from tbpaciente");
        $stmt -> execute() ;
    
        $html = "<table class='table' >";
        $html .= "<thead class='thead-dark'>";
        $html .= "<tr>";
        $html .= "<th scope='col' class='text_table'>Código</th>";
        $html .= "<th scope='col' class='text_table'>Nome Cliente</th>";
        $html .= "<th scope='col' class='text_table'>Email</th>";
        $html .= "<th scope='col' class='text_table'>CPF</th>";
        $html .= "<th scope='col' class='text_table'>RG</th>";
        $html .= "</tr>";
        $html .="</thead>";
        
        while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
            $html .="<tbody>";
            $html .=	'<tr><th><h1>'.$row['nomePaciente'].'</h1></th></tr>';                
            $html .="</tbody>";
        }
        $html .="</table>";
    ?>
</head>
<body>
</body>
</html>