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
    <form action="test.php" method="post">
        <div class="circulacion">
            <input type="checkbox" id="circulacion" name="circulacion">
            <label for="circulacion">
                <img src="images/circulacion.jpg" alt="">
            </label>
        </div>

        <div class="estacionamiento">
            <input type="checkbox" id="estacionamiento" name="estacionamiento">
            <label for="estacionamiento">
                <img src="images/estacionamiento.jpg" alt="">
            </label>
        </div>

        <div class="signal">
            <input type="checkbox" id="signal" name="signal">
            <label for="signal">
                <img src="images/signal.jpg" alt="">
            </label>
        </div>

        <button type="submit">¡Generar test!</button>
    </form>
    
</body>
</html>