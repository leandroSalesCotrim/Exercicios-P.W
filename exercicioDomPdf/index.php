<?php
   include ('Conexao.php');
   //referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();

	$stmt = $pdo -> prepare ("select * from tbpaciente");
	$stmt -> execute() ;

	$html = "<table class='table' >";
	$html .=	"<thead class='thead-dark'>";
	$html .=		"<tr>";
	$html .=			"<th scope='col' class='text_table'>Código</th>";
	$html .=			"<th scope='col' class='text_table'>Nome</th>";
	$html .=			"<th scope='col' class='text_table'>Nome social</th>";
	$html .=			"<th scope='col' class='text_table'>Data</th>";
	$html .=			"<th scope='col' class='text_table'>RG</th>";
	$html .=			"<th scope='col' class='text_table'>CPF</th>";
	$html .=			"<th scope='col' class='text_table'>Sexo</th>";
	$html .=			"<th scope='col' class='text_table'>Número cartão SUS</th>";
	$html .=			"<th scope='col' class='text_table'>Nacionalidade</th>";
	$html .=			"<th scope='col' class='text_table'>Nome da mãe</th>";
	$html .=			"<th scope='col' class='text_table'>Logradouro</th>";
	$html .=			"<th scope='col' class='text_table'>Cidade</th>";
	$html .=			"<th scope='col' class='text_table'>Rua</th>";
	$html .=			"<th scope='col' class='text_table'>CEP</th>";
	$html .=			"<th scope='col' class='text_table'>Número residencial</th>";
	$html .=		"</tr>";
	$html .=	"</thead>";
	
	while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
		$html .="<tbody>";
		$html .=	"<tr>";
		$html .=		"<th>".$row['codPaciente']."</th>";                
		$html .=		"<th>".$row['nomePaciente']."</th>";                
		$html .=		"<th>".$row['nomeSocialPaciente']."</th>";
		$html .=        "<th>".date('d-m-Y',strtotime($row['dataNascimentoPaciente']))."</th>";
		$html .=		"<th>".$row['rgPaciente']."</th>";                
		$html .=		"<th>".$row['cpfPaciente']."</th>";                
		$html .=		"<th>".$row['sexoPaciente']."</th>";                
		$html .=		"<th>".$row['numCartaoSusPaciente']."</th>";                
		$html .=		"<th>".$row['nacionalidadePaciente']."</th>";                
		$html .=		"<th>".$row['nomeMaePaciente']."</th>";                
		$html .=		"<th>".$row['logradouroPaciente']."</th>";                
		$html .=		"<th>".$row['cidadePaciente']."</th>";                
		$html .=		"<th>".$row['ruaPaciente']."</th>";                
		$html .=		"<th>".$row['cepPaciente']."</th>";                
		$html .=		"<th>".$row['numCasaPaciente']."</th>";                
		$html .=	"</tr>";
		$html .="</tbody>";
	}
	$html .="</table>";
	// Carrega seu HTML
	$dompdf->load_html("
		
	
		<style>			

			.tit-cert{
				font-family: diploma;
				text-align: center;
				font-size:5em;				
				color:#04c;
				color: #003e89;	
				margin:0px;	
				
			}

			.tx-cert{
				padding-top:40px;	
				padding-bottom:70px;
				text-align: center; 
				font-size:2em;
				font-style:italic;				
			}

			.strong-cert{
				color: #003e89;				
			}	
			.logo{
				width: 200px;
			}
			
		</style>
		
		
			<p class='tit-cert'> Pacientes cadastrados </p>
			<hr style='width:800px';>
			$html
			<center>
			<img src='img/logo.jpg' class='logo' />
			</center>
		");

	
	$dompdf->setPaper('A4', 'landscape');	
		
	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"pacientes.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>