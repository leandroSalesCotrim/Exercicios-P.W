
<html>
    <head>
      <title>Série de fibonacci </title>
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
$numero = $_GET ['num'];


        $i=0;
		$v1=1;
		$v2=0;
        
            echo ("A série de fibonacci até o ".$numero."° termo é :");
		while ($i<$numero) {
			$v1=$v1+$v2;
			$v2=$v1-$v2;
			echo ($v2."  , ");
            $i++;
        }
?>
			</div>
		</nav>
	</body>
</html>