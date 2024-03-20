
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/Reto1.css">
    <title>Desafío de Brasil</title>
</head>
<body>
    <form action="./proceso1.php" method="post">
        <label> ¿En qué año ganó su primer mundial Brasil? </label><br>
        <input type="number" name="1958">
        <br>
        <br>
        <label> ¿Cuantos mundiales tiene Brasil? </label><br>
        <input type="number" name="5">
        <br>
        <br>
        <label> ¿Quién es el máximo goleador de Brasil? </label><br>
        <input type="text" name="Neymar">
        <br>
        <br>
        <label> ¿Quien es el jugador con mas partidos de la selección de Brasil?</label><br>
        <input type="text" name="Cafú">
        <br>
        <br>
        <button type="submit"> Prueba </button>
    </form>
    <div class="error-message">
        <?php
            if(isset($_GET['error'])){
                $error = $_GET['error'];
                if($error == 1){
                    echo "Te han metido gol, ¡intenta remontar el partido! PISTA: Te dejamos buscar información sobre la Selección Brasileña";
                }
                if($error == 2){
                    echo "No puedes pasar al siguiente nivel";
                }
            }
        ?>
    </div>
</body>
</html>