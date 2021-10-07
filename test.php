<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    include "autoescuela.php";

    ?>
    <!-- TODO
    * Mostrar respuesta, siendo en verde si acertó o en rojo si no acertó.
    * Sumar la puntuación de las respuestas positivas.
    * Mejorar su aspecto visual con CSS
    -->
    <div class="container">
        <form action="<?= $_SERVER['PHP_SELF'] ?>">

            <?php inicializarTest($_GET, $preguntasCirculacion, $preguntasEstacionamiento, $preguntasSignal); ?>

        </form>
    </div>
</body>

</html>