<?php
    session_start();
    if(!isset($_SESSION['reto']) || $_SESSION['reto'] != 1){
        header('location: ./reto1-1.php?error=2');
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>España</title>
    <link rel="stylesheet" type="text/css" href="./css/espanya.css">
</head>
<body id="spain">
    <h2> ¡Has llegado a España para jugar tus cuartos de final! </h2>
    <p> Acierta el desafío propuesto por la Selección Española. ¿Estas listo para desafiar su reto? </p>
    <form action="reto2.php" method="post">
    <button type="submit"> Desafiar </button> 
    </form>
</body>
</html>