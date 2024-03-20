<?php
    session_start();
    if(!isset($_SESSION['reto']) || $_SESSION['reto'] !=3){
        header('location ./reto3-1.php?error=4');
    }
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./css/amistoso2.css">




</head>
<body>
    <h2> Estás en el último partido antes de la gran final, acaba con la Selección Italiana para jugar ya la gran final </h2>
    <p> Adivina la alineación de la Selección Italiana contra Inglaterra en la final de la Eurocopa del 2021 </p>

    <form action="./reto3-2.php" method="post">
        <button type="submit" name="Desafiar"> Desafiar </button>
    </form>
</body>
</html>