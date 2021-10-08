<?php
//https://www.todotest.com/tests/test.asp?tip=1&t=116 Test referencia
//https://www.w3schools.com/html/html_form_input_types.asp
// devchallenges.io

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
        "pregunta" => "En una calzada de doble sentido de circulación en la que no 4 están delimitados los carriles, está obligado a circular por",
        "opciones" =>
        [
            "A" => "el lugar de la calzada que crea más seguro.",
            "B" => "a derecha, lo más cerca posible del borde de la calzada.",
            "C" => "el eje imaginario de la calzada."
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "9",
        "pregunta" => "En caso de condiciones meteorológicas muy desfavorables, como lluvia muy intensa, ¿se puede circular con la luz antiniebla trasera encendida?",
        "opciones" =>
        [
            "A" => "No, solo puede utilizarse con niebla densa.",
            "B" => "Sí.",
            "C" => "Sí, aunque su uso es opcional."
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "10",
        "pregunta" => "Durante el día, las motocicletas están obligadas a llevar encendida la luz de cruce...",
        "opciones" =>
        [
            "A" => "cuando circulen por cualquier tipo de vía.",
            "B" => "cuando circulen por vías interurbanas, solamente.",
            "C" => "cuando las condiciones climatológicas sean adversas, solamente."
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "11",
        "pregunta" => "En esta vía se ha habilitado un carril adicional circunstancial, ¿a qué velocidad, como mínimo, deberán circular por dicho carril?",
        "opciones" =>
        [
            "A" => "60 km/h o inferior si así estuviese señalizado.",
            "B" => "80 km/h.",
            "C" => "A la mitad de la genérica señalada para cada categoría de vehículos."
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "12",
        "pregunta" => "Cuando viaje con su mascota, ¿en qué lugar del vehículo podrá situarse para evitar que interfiera en la conducción?",
        "opciones" =>
        [
            "A" => "En el asiento delantero ya que si dispone de airbag frontal estará doblemente protegida.",
            "B" => "Donde no comprometa su seguridad ni la del resto de pasajeros, además de ir sujeta con el dispositivo adecuado.",
            "C" => "En los asientos traseros sujeta con el cinturón de seguridad como un pasajero más."
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],
];

$preguntasEstacionamiento = [
    [
        "num" => "1",
        "pregunta" => " En esta carretera, ¿dónde se puede estacionar?",
        "opciones" =>
        [
            "A" => " Dentro de la vía, en el lado derecho.",
            "B" => " En ninguna parte; está prohibido estacionar dentro y fuera de la vía.",
            "C" => "Fuera de la vía, en el lado derecho."
        ],
        "respuesta" => 0,
        "imagen" => "images/1.jpeg"
    ],

    [
        "num" => "2",
        "pregunta" => "En esta calle de sentido único en la que no hay señalización que prohíba estacionar ni marcas viales en la calzada, ¿en qué lado está permitido el estacionamiento?",
        "opciones" =>
        [
            "A" => "En el lado derecho solamente.",
            "B" => "En ambos lados, tanto en el derecho como en el izquierdo.",
            "C" => "En el lado izquierdo solamente."
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "3",
        "pregunta" => "Esta carretera no tiene arcén; ¿puede estacionar a la derecha, fuera de la vía?",
        "opciones" =>
        [
            "A" => "Sí, porque estoy fuera de la calzada.",
            "B" => "No, porque es una vía interurbana.",
            "C" => "Solo si hay una señal que permita expresamente el estacionamiento."
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "4",
        "pregunta" => "La línea de borde de la calzada es discontinua; ¿está permitido estacionar en la parte transitable del arcén?",
        "opciones" =>
        [
            "A" => "Sí, porque la línea es discontinua.",
            "B" => "No, está prohibido.",
            "C" => "Solo para cargar o descargar mercancías."
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "5",
        "pregunta" => "Si su vehículo está provisto de caja de cambios manual, en una calle con pendiente ascendente, ¿cómo debe estacionar?",
        "opciones" =>
        [
            "A" => "Poniendo el freno de estacionamiento y la primera velocidad.",
            "B" => "Poniendo el freno de estacionamiento y la marcha atrás.",
            "C" => "Basta con poner el freno de estacionamiento."
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "6",
        "pregunta" => "¿Cuándo está permitido estacionar en un túnel?",
        "opciones" =>
        [
            "A" => "Cuando el túnel está suficientemente iluminado.",
            "B" => "Cuando la calzada tiene dos carriles de circulación para cada sentido.",
            "C" => "Nunca."
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "7",
        "pregunta" => "¿Está permitido estacionar en las calles residenciales?",
        "opciones" =>
        [
            "A" => "No, excepto en los lugares señalizados.",
            "B" => "No, excepto en horas nocturnas.",
            "C" => "Sí, en cualquier lugar de la vía."
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "8",
        "pregunta" => "En las isletas de canalización del tráfico situadas en la calzada, ¿se puede parar o estacionar?",
        "opciones" =>
        [
            "A" => "Ni parar ni estacionar.",
            "B" => "Sólo parar.",
            "C" => "Sólo estacionar."
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "9",
        "pregunta" => "Estacionas tu vehículo al anochecer en el arcén de una travesía insuficientemente iluminada. ¿Qué alumbrado deberemos dejar encendido?",
        "opciones" =>
        [
            "A" => "La señal de emergencia y la luz de estacionamiento.",
            "B" => "Las luces de cruce y la señal de emergencia.",
            "C" => "Las luces de posición."
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "10",
        "pregunta" => "¿Qué es una detención?",
        "opciones" =>
        [
            "A" => "La inmovilización del vehículo por necesidades de la circulación. ",
            "B" => "Un estacionamiento sin bajar del vehículo. ",
            "C" => "Una parada por cualquier causa. "
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "11",
        "pregunta" => "Si estaciona en una pendiente ascendiente, está obligado a… ",
        "opciones" =>
        [
            "A" => "Dejar puesta la primera marcha cuando el vehículo tiene caja de cambios. ",
            "B" => "Dejar puesta la marcha atrás. ",
            "C" => "Apoyar la rueda de detrás en la acera. "
        ],
        "respuesta" => 0,
        "imagen" => "images/2.jpeg"
    ],

    [
        "num" => "12",
        "pregunta" => "¿Cuantas luces de estacionamiento debe tener un vehículo?",
        "opciones" =>
        [
            "A" => "Tres delanteras y tres traseras ",
            "B" => "Únicamente dos luces traseras ",
            "C" => "Dos delanteras y dos traseras"
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
function escribirPreguntas($preguntas){

    for($i = 0; $i < sizeof($preguntas); $i++){
        echo "<div class='pregunta pregunta-$i'>";
        echo "<p><span>" . $i+1 . "</span>" . " " . $preguntas[$i]['pregunta'] . "</p>";
        echo "<ul>";
        foreach ($preguntas[$i]['opciones'] as $letra => $enunciado) {
            echo "<li><input type='radio' name='$i' value='$letra'>" . $letra . " ) " . $enunciado . "</li></br>";
        }
        echo "</ul>";
        echo "</div>";
    }
}

function inicializarTest($get, $preguntasCirculacion, $preguntasEstacionamiento, $preguntasSignal){
    $bateriaDePreguntas = [];
    $numeroParametros = sizeof($get);

    foreach(array_keys($get) as $llave){
        shuffle(${"preguntas" . $llave});
        for($i = 0; $i < 12/$numeroParametros; $i++){
            array_push($bateriaDePreguntas, ${"preguntas" . $llave}[$i]);
        }
    }
    return $bateriaDePreguntas;
    }
    

function corregirExamen($respuestas){
    var_dump($respuestas);
}
?>

