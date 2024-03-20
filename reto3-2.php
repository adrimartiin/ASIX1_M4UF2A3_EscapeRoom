
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./css/reto3-2.css">

</head>
<body>
    
    <form action="./proceso4.php" method="post">
        <label> Portero(21) </label>
        <input type="text" name="por">
        <br>
        <br>
        <label> Lateral Derecho(2) </label>
        <input type="text" name="ld">
        <br>
        <br>
        <label> Central Derecho(19) </label>
        <input type="text" name="dfcd">
        <br>
        <br>
        <label> Central Izquierdo(3) </label>
        <input type="text" name="dfci">
        <br>
        <br>
        <label> Lateral Izquierdo(13) </label>
        <input type="text" name="li">
        <br>
        <br>
        <label> Medio Centro Defensivo(8) </label>
        <input type="text" name="mcd">
        <br>
        <br>
        <label> Medio Centro(6) </label>
        <input type="text" name="mcder">
        <br>
        <br>
        <label> Medio Centro(18) </label>
        <input type="text" name="mcizq">
        <br>
        <br>
        <label> Extremo Izquierdo(10) </label>
        <input type="text" name="ei">
        <br>
        <br>
        <label> Delantero Centro(17)</label>
        <input type="text" name="dc">
        <br>
        <br>
        <label> Extremo Derecho(14) </label>
        <input type="text" name="ed">
        <br>
        <br>
        <button type="submit" name="desafiar"> Desafiar </button>
        
    </form>

    <form class="alineacion">
        <img src="./img/italia.png" alt="alineacion">
    </form>

    <div class="error-message">
    <?php
        if(isset($_GET['error'])){
            $error = $_GET['error'];
            if($error == 1){
                echo "Mira bien la alineación del equipo rival. PISTA: Esta alineación es del equipo de Italia del 2021";
            }
            if($error == 2){
                echo "No puedes pasar al siguiente nivel";
            }
        }
    ?>
    </div>
    
</body>
</html>