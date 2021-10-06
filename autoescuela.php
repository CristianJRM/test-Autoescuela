<?php

$preguntas = [
    [
        "num" => "1",
        "pregunta" => " Circulando por una vía frecuentada por peatones, especialmente niños o ancianos, ¿qué haremos?",
        "opciones" =>
        [
            "A" => " Reducir la velocidad, incluso llegando a detenerme.",
            "B" => " Adoptaré las medidas necesarias para su seguridad, sin tener que moderar obligatoriamente la velocidad.",
        ],
        "respuesta" => 0,
        "imagen" => "images/1.jpeg"
    ],

    [
        "num" => "2",
        "pregunta" => "Circulando por una carretera de dos sentidos y tres carriles, dos para mi sentido y uno para el contrario, ¿para qué se utilizará el carril central?",
        "opciones" =>
        [
            "A" => "El central para los vehículos más rápidos y el de la derecha para los vehículos lentos.",
            "B" => "Para adelantar.",
            "C" => "Para adelantar o cuando las circunstancias del tráfico o de la vía lo aconsejen."
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "3",
        "pregunta" => "¿El pasajero de una moto debe llevar abrochado el casco?",
        "opciones" =>
        [
            "A" => "Sí, y además el conductor es responsable de que lo lleve abrochado.",
            "B" => "Sí, siendo el pasajero el único responsable.",
            "C" => "No es obligatorio, pero si aconsejable."
        ],
        "respuesta" => 0,
        "imagen" => "images/3.jpeg"
    ],

    [
        "num" => "4",
        "pregunta" => "¿Qué significa una luz amarilla fija?",
        "opciones" =>
        [
            "A" => "Extremar la precaución.",
            "B" => "Igual que una luz roja, detenerse en condiciones de seguridad.",
            "C" => "Ceder el paso."
        ],
        "respuesta" => 0,
        "imagen" => "images/4.jpeg"
    ],

    [
        "num" => "5",
        "pregunta" => "Si un agente está moviendo su brazo de arriba abajo, ¿qué está indicando?",
        "opciones" =>
        [
            "A" => "Que nos detengamos.",
            "B" => "Que disminuyamos la velocidad.",
            "C" => "Que cambiemos de dirección hacia el lado que tiene el brazo."
        ],
        "respuesta" => 0,
        "imagen" => "images/5.jpeg"
    ],
];

function inicializarTest($preguntas){
    foreach ($preguntas as $pregunta) {
        echo '<div class="pregunta" ' . '"pregunta-' . $pregunta['num'] . '"' . ">";
        echo "<p><span>" . $pregunta['num'] . "</span>" . " " . $pregunta['pregunta'] . "</p>";
        foreach ($pregunta['opciones'] as $letra => $enunciado) {
            echo $letra . " ) " . $enunciado . "</br>";
        }
        echo "</div>";
    }
}
