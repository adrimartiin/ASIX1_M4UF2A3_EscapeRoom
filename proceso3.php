<?php

$respuesta = $_POST['jugador'];

if ($respuesta == "Achraf"){
    session_start();
    $_SESSION['reto'] = 3;
    header('location: ./amistoso2.php');
}else{
        header ('location: ./reto3-1.php?error=1');
        }

