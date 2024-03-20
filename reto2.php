
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafío de España</title>
    <link rel="stylesheet" type="text/css" href="./css/reto2.css">

</head>
<body>
    <h1> Desafío de la Selección Española </h1>

        <div>
        <p> Adivina que número llevó Fernando Torres en el mundial del 2010 </p>
        <form action="./proceso2.php" method="post">
            <input type="number" name="torres">
            <br>
            <br>
            <button type="submit" name="probar"> Adivinar </button>
        </form>
        <div class="error-message">
    
            <?php
            if(isset($_GET['error'])){
                $error = $_GET['error'];
                if($error == 1){
                    echo "Te han metido gol, ¡intenta remontar el partido! PISTA: es un número del 5 al 10";
                }
                if($error == 3){
                    echo "Te ha pillado el árbitro";
                }
            }

            ?>
        </div>
       
    
</body>
</html>