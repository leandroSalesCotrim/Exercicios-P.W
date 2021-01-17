<?php
    $numero = $_GET ["txtNumero"];
    $numFinal = $numero%10;
    
    switch($numFinal){

        case 1: 
            echo("Seu carro só pode rodar em dias ímpares");
        break;
        case 2:
            echo("Seu carro só pode rodar em dias pares");
        break;
        case 3: 
            echo("Seu carro só pode rodar em dias ímpares");
        break;
        case 4:
            echo("Seu carro só pode rodar em dias pares");
        break;
        case 5: 
            echo("Seu carro só pode rodar em dias ímpares");
        break;
        case 6:
            echo("Seu carro só pode rodar em dias pares");
        break;
        case 7: 
            echo("Seu carro só pode rodar em dias ímpares");
        break;
        case 8:
            echo("Seu carro só pode rodar em dias pares");
        break;
        case 9: 
            echo("Seu carro só pode rodar em dias ímpares");
        break;
        case 0:
            echo("Seu carro só pode rodar em dias pares");
        break;
        default:
            echo("Inválido!");
    }
?>