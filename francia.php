<?php
    session_start();
    if(!isset($_SESSION['reto']) || $_SESSION['reto'] != 2){
        header('location: ./reto2.php?error=3');
    }
?>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Francia</title>
        <link rel="stylesheet" type="text/css" href="./css/llegadofrancia.css">
    </head>
    <body id="spain">
        <h2> ¡Has llegado a Francia para jugar tus semifinales! </h2>
        <p> Completa el desafío propuesto por la Selección Francesa. ¿Estas listo para desafiar su reto? </p>
        <form action="reto3.php" method="post">
        <button type="submit"> Desafiar </button> 
        </form>
    </body>
    </html>
