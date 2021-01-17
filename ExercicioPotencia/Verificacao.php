<?php

    $base = $_GET ['txtNum'];
    $expoente = $_GET ['txtNum1'];
    $resultado = $base;

    for($i = 1; $expoente > $i; $i++){
        $resultado = $resultado*$base;
    }

    echo("O resultado da potência de base ".$base." e expoente ".$expoente." é: ".$resultado);

    
?>