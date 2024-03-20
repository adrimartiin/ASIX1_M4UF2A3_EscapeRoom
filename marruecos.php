<?php
      session_start();
      if(!isset($_SESSION['reto']) || $_SESSION['reto'] != 5){
          header('location: ./reto3.php?error=2');
      }
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./css/marruecos.css">


</head>
<body>
    <h2> El entrenador ha decidido hacer dos partidos amistosos antes de la gran final </h2>
    <p> El primer partido es en Marruecos contra la Selección Marroquí. Supera su desafío para ganar el amistoso y tener una buena preparación para la final <p>

    <form action="./reto3-1.php" method="post">
        <button type="submit" name="Desafiar"> Desafiar </button>
    </form>
</body>
</html>