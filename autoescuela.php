<?php
//https://www.todotest.com/tests/test.asp?tip=1&t=116 Test referencia
//https://www.w3schools.com/html/html_form_input_types.asp
// devchallenges.io

/**
 * Propuesta: números = 0, pero cuando se vaya genera es cuando
 * se asignan los números
 * Poner tipo a cada pregunta
 * 12 preguntas de cada tipo
 * $bateriaDePreguntas
 * (preguntas de cada tipo = 12/tamaño del post)
 */

$preguntasCirculacion = [
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
        "pregunta" => "¿El alcohol influye en la distancia de detención?",
        "opciones" =>
        [
            "A" => "Sí, disminuyéndola.",
            "B" => "Sí, aumentándola.",
            "C" => "No, la distancia de detención sólo depende de la velocidad.."
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "4",
        "pregunta" => "¿Es recomendable mantener la velocidad indicada por la señal aunque las condiciones de la vía y la circulación sean favorables?",
        "opciones" =>
        [
            "A" => "Sí.",
            "B" => "No, si las condiciones son favorables la recomendación no es aplicable."
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "5",
        "pregunta" => "Un camión de más de 3.500 kg circula por una calzada con 3 carriles para el mismo sentido, ¿por cuál podrá circular?",
        "opciones" =>
        [
            "A" => "Por el carril de la izquierda.",
            "B" => "Por cualquiera de los 3 carriles.",
            "C" => "Por el derecho y el contiguo."
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "6",
        "pregunta" => "Si tenemos que arrancar nuestro vehículo con nieve en la vía, ¿con qué marcha lo haremos?",
        "opciones" =>
        [
            "A" => "Con una marcha larga.",
            "B" => "Con una marcha corta."
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "7",
        "pregunta" => "En esta intersección con señal de STOP y buena visibilidad, ¿qué debe hacer?",
        "opciones" =>
        [
            "A" => "",
            "B" => "",
            "C" => ""
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "8",
        "pregunta" => "",
        "opciones" =>
        [
            "A" => "",
            "B" => "",
            "C" => ""
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "9",
        "pregunta" => "",
        "opciones" =>
        [
            "A" => "",
            "B" => "",
            "C" => ""
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "10",
        "pregunta" => "",
        "opciones" =>
        [
            "A" => "",
            "B" => "",
            "C" => ""
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "11",
        "pregunta" => "",
        "opciones" =>
        [
            "A" => "",
            "B" => "",
            "C" => ""
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "12",
        "pregunta" => "",
        "opciones" =>
        [
            "A" => "",
            "B" => "",
            "C" => ""
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],
];

$preguntasEstacionamiento = [
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
        "pregunta" => "",
        "opciones" =>
        [
            "A" => "",
            "B" => "",
            "C" => ""
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "3",
        "pregunta" => "",
        "opciones" =>
        [
            "A" => "",
            "B" => "",
            "C" => ""
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "4",
        "pregunta" => "",
        "opciones" =>
        [
            "A" => "",
            "B" => "",
            "C" => ""
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "5",
        "pregunta" => "",
        "opciones" =>
        [
            "A" => "",
            "B" => "",
            "C" => ""
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "6",
        "pregunta" => "",
        "opciones" =>
        [
            "A" => "",
            "B" => "",
            "C" => ""
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "7",
        "pregunta" => "",
        "opciones" =>
        [
            "A" => "",
            "B" => "",
            "C" => ""
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "8",
        "pregunta" => "",
        "opciones" =>
        [
            "A" => "",
            "B" => "",
            "C" => ""
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "9",
        "pregunta" => "",
        "opciones" =>
        [
            "A" => "",
            "B" => "",
            "C" => ""
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "10",
        "pregunta" => "",
        "opciones" =>
        [
            "A" => "",
            "B" => "",
            "C" => ""
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "11",
        "pregunta" => "",
        "opciones" =>
        [
            "A" => "",
            "B" => "",
            "C" => ""
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "12",
        "pregunta" => "",
        "opciones" =>
        [
            "A" => "",
            "B" => "",
            "C" => ""
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

];

$preguntasSignal = [
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
        "pregunta" => "",
        "opciones" =>
        [
            "A" => "",
            "B" => "",
            "C" => ""
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "3",
        "pregunta" => "",
        "opciones" =>
        [
            "A" => "",
            "B" => "",
            "C" => ""
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "4",
        "pregunta" => "",
        "opciones" =>
        [
            "A" => "",
            "B" => "",
            "C" => ""
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "5",
        "pregunta" => "",
        "opciones" =>
        [
            "A" => "",
            "B" => "",
            "C" => ""
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "6",
        "pregunta" => "",
        "opciones" =>
        [
            "A" => "",
            "B" => "",
            "C" => ""
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "7",
        "pregunta" => "",
        "opciones" =>
        [
            "A" => "",
            "B" => "",
            "C" => ""
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "8",
        "pregunta" => "",
        "opciones" =>
        [
            "A" => "",
            "B" => "",
            "C" => ""
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "9",
        "pregunta" => "",
        "opciones" =>
        [
            "A" => "",
            "B" => "",
            "C" => ""
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "10",
        "pregunta" => "",
        "opciones" =>
        [
            "A" => "",
            "B" => "",
            "C" => ""
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "11",
        "pregunta" => "",
        "opciones" =>
        [
            "A" => "",
            "B" => "",
            "C" => ""
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "12",
        "pregunta" => "",
        "opciones" =>
        [
            "A" => "",
            "B" => "",
            "C" => ""
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

];
/*function inicializarTest($preguntas){
    foreach ($preguntas as $pregunta) {
        echo '<div class="pregunta" ' . '"pregunta-' . $pregunta['num'] . '"' . ">";
        echo "<p><span>" . $pregunta['num'] . "</span>" . " " . $pregunta['pregunta'] . "</p>";
        foreach ($pregunta['opciones'] as $letra => $enunciado) {
            echo $letra . " ) " . $enunciado . "</br>";
        }
        echo "</div>";
    }
}*/

function inicializarTest($get){
    $bateriaDePreguntas = [];
    $numeroParametros = sizeof($get);
    if ($get['circulacion'] == 'on') echo "funca";
}
?>

