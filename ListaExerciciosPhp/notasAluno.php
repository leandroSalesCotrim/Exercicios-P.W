<html>
    <head>
      <title>Media aluno </title>
      <link rel="stylesheet" href="css/reset.css">
      <link rel="stylesheet" href="css/Style.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    </head>
    <body>
        <nav id="nav">
            <video autoplay="autoplay" muted loop poster="img/fundo.jpg" class="bg_video">
                <source src="img/Network - 12716.mp4" type="video/webm">
                <source src="img/Network - 12716.mp4" type="video/mp4">
            </video>
            <div class="menu">
                <br>
                
<?php
$nota1 = $_GET['TxtNota1'];
$nota2 = $_GET['TxtNota2'];
$nota3 = $_GET['TxtNota3'];
$nota4 = $_GET['TxtNota4'];
$mediaAluno = ($nota1+$nota2+$nota3+$nota4)/4;

if ($mediaAluno >= 7.0){
    echo ("media do aluno : ".$mediaAluno."<br>"." Status: Aprovado");

}
else if ($mediaAluno >= 5.0 && $mediaAluno < 7.0) {
    echo ("media do aluno : ".$mediaAluno."<br>"." Status:  Em exame");
}
else {
    echo ("media do aluno : ".$mediaAluno."<br>"." Status:  Retido");
}
?>
            </div>
            </nav>
    <body>
<html>