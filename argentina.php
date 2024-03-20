<?php
    session_start();
    if(!isset($_SESSION['reto']) || $_SESSION['reto'] != 4){
        header('location: ./reto3-2.php?error=2');
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link  rel="stylesheet" type="text/css" href="./css/argentina.css">
</head>
<body>
        <h2> ¡Has llegado a Argentina para jugar la gran final! </h2>
        <p> Completa el desafío propuesto por la Selección Argentina. ¿Estas listo para desafiar su reto? </p>
        <form action="reto4.php" method="post">
        <button type="submit"> Desafiar </button> 
        </form>
</body>
</html>