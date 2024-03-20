<?php

$numero = $_POST['torres'];

if($numero == 9){
    session_start();
    $_SESSION['reto'] = 2;
    header('location: ./francia.php');
}else{
    header('location: ./reto2.php?error=1');
}