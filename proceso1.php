<?php

$preg1 = $_POST['1958'];
$preg2 = $_POST['5'];
$preg3 = $_POST['Neymar'];
$preg4 = $_POST['Cafú'];

if($preg1 == 1958){
   
    if($preg2 == 5){
        
        if($preg3 == 'Neymar'){

            if($preg4 == 'Cafú'){
                session_start();
                $_SESSION['reto'] = 1;
                header('location: ./espanya.php');
            }else{
                header('location: ./reto1-1.php?error=1');
            }

        }else{
            header('location: ./reto1-1.php?error=1');
        }

    }else{
        header('location: ./reto1-1.php?error=1');
    }

}else{
    header('location: ./reto1-1.php?error=1');
}





