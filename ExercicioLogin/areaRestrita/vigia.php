<?php

    session_start();
    if (($_SESSION['usuario-session'] != 'adm') || 
        ($_SESSION['senha-session'] != '123')){
            header("Location: ../index.php");
        }
?>