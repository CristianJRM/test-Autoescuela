<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
    
</head>
<body>
    <!-- Roboto -->
    
    <form action="test.php" method="get">
        <div class="circulacion">
            <input type="checkbox" id="circulacion">
            <label for="circulacion" name="circulacion">
                <img src="images/circulacion.jpg" alt="">
            </label>
        </div>

        <div class="estacionamiento">
            <input type="checkbox" id="estacionamiento">
            <label for="estacionamiento" name="estacionamiento">
                <img src="images/estacionamiento.jpg" alt="">
            </label>
        </div>

        <div class="signal">
            <input type="checkbox" id="signal">
            <label for="signal" name="signal">
                <img src="images/signal.jpg" alt="">
            </label>
        </div>

            <button type="submit">¡Generar test!</button>
    </form>
    
</body>
</html>