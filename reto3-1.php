<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./css/Reto3-1.css">
</head>
<body>
<p> ¿Quién es este jugador? </p>
    <div class="adivinajug">
        <img src="./img/achraf.jpg" alt="imagen_achraf">
    </div>
    <form action="./proceso3.php" method="post">
    <input type="text" name="jugador">
    <button type="submit" name="desafiar"> Desafiar </button>
    </form>


    <div class="error-message">
        <?php
            if(isset($_GET['error'])){
                $error = $_GET['error'];
                if($error == 1){
                    echo "Pista: Juega en el PSG";
                }
                if($error == 4){
                    echo "El Árbitro te ha pillado, vuelve a intentarlo";
                }
            }
        ?>
    </div>
    
</body>
</html>