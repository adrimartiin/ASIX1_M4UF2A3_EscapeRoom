<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafío de Francia</title>
    <link rel="stylesheet" type="text/css" href="./css/reto3.css">
</head>
<label> Soy un jugador que juega de delantero, soy muy rápido y soy conocido como la tortuga ¿quién soy? </label>

    <img src="./img/reto3.jpg" alt="Pregunta">
    
    <form action="./proceso5.php" method="post">
        <br>
        <br>
        <input name="adiv"> 
        <br>
        <br>
        <button type="submit"> Adivinar </button>
       
    </form>
    </div class="error-message">
    <?php
    if(isset($_GET['error'])){
            $error = $_GET['error'];
            if($error == 1){
                echo "Te han metido gol, ¡intenta remontar el partido! PISTA: Su nombre empieza con la letra M";
            }
            if($error == 2){
                echo "No puedes pasar al siguiente nivel";
            }
        }
    ?>
    </div>

</body>


</html>
