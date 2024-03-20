<?php

$jug1 = $_POST['por'];
$jug2 = $_POST['ld'];
$jug3 = $_POST['dfcd'];
$jug4 = $_POST['dfci'];
$jug5 = $_POST['li'];
$jug6 = $_POST['mcd'];
$jug7 = $_POST['mcder'];
$jug8 = $_POST['mcizq'];
$jug9 = $_POST['dc'];
$jug10 = $_POST['ei'];
$jug11 = $_POST['ed'];

if($jug1 == "Donnarumma"){
        if($jug2 == "Di Lorenzo"){
                if($jug3 == "Bonucci"){
                    if($jug4 == "Chiellini"){
                            if($jug5 == "Emerson"){
                                if($jug6 == "Jorginho"){

                                    if($jug7 == "Verratti"){

                                        if($jug8 == "Barella"){
                                            if($jug9 == "Immobile"){
                                                if($jug10 == "Insigne"){
                                                    if($jug11 == "Chiesa"){
                                                        session_start();
                                                        $_SESSION['reto'] = 4;
                                                        header('location: ./argentina.php');
                                                    }else{
                                                    header('location: ./reto3-2.php?error=1');
                                                    }  
                                                }else{
                                                header('location: ./reto3-2.php?error=1');
                                                }  
                                            }else{
                                            header('location: ./reto3-2.php?error=1');
                                            }  
                                        }else{
                                        header('location: ./reto3-2.php?error=1');
                                        }  
                                    }else{
                                    header('location: ./reto3-2.php?error=1');
                                    }  
                                }else{
                                header('location: ./reto3-2.php?error=1');
                                }  
                            }else{
                                header('location: ./reto3-2.php?error=1');
                            }  
                    }else{
                    header('location: ./reto3-2.php?error=1');
                    }  
                }else{
                header('location: ./reto3-2.php?error=1');
                }  
        }else{
        header('location: ./reto3-2.php?error=1');
        } 
}else{
    header('location: ./reto3-2.php?error=1');
}