<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
    
</head>
<body>
    <form action="test.php" method="get">
        <div class="circulacion">
            <input type="checkbox" id="Circulacion" name="Circulacion">
            <label for="Circulacion">
                <img src="images/circulacion.jpg" alt="">
            </label>
        </div>

        <div class="estacionamiento">
            <input type="checkbox" id="Estacionamiento" name="Estacionamiento">
            <label for="Estacionamiento">
                <img src="images/estacionamiento.jpg" alt="">
            </label>
        </div>

        <div class="signal">
            <input type="checkbox" id="Signal" name="Signal">
            <label for="Signal">
                <img src="images/signal.jpg" alt="">
            </label>
        </div>

        <button type="submit">¡Generar test!</button>
    </form>
    
</body>
</html>