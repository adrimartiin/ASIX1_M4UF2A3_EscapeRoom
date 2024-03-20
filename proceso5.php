<?php
$adivinar = $_POST['adiv'];

if($adivinar == "Mbappé"){
    session_start();
    $_SESSION['reto'] = 5;
    header('location: ./marruecos.php');
}else{
    header('location: ./reto3.php?error=1');
}