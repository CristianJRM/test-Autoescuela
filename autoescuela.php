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
        "respuesta" => "A",
        "imagen" => "images/circulacion_1.jpg"
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
        "respuesta" => "C",
        "imagen" => "images/circulacion_2.jpg"
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
        "respuesta" => "B",
        "imagen" => "images/circulacion_3.jpg"
    ],

    [
        "num" => "4",
        "pregunta" => "¿Es recomendable mantener la velocidad indicada por la señal aunque las condiciones de la vía y la circulación sean favorables?",
        "opciones" =>
        [
            "A" => "Sí.",
            "B" => "No, si las condiciones son favorables la recomendación no es aplicable."
        ],
        "respuesta" => "A",
        "imagen" => "images/circulacion_4.jpg"
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
        "respuesta" => "C",
        "imagen" => "images/circulacion_5.jpg"
    ],

    [
        "num" => "6",
        "pregunta" => "Si tenemos que arrancar nuestro vehículo con nieve en la vía, ¿con qué marcha lo haremos?",
        "opciones" =>
        [
            "A" => "Con una marcha larga.",
            "B" => "Con una marcha corta."
        ],
        "respuesta" => "A",
        "imagen" => "images/circulacion_6.jpg"
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
        "respuesta" => "A",
        "imagen" => "images/circulacion_7.jpg"
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
        "respuesta" => "A",
        "imagen" => "images/circulacion_8.jpg"
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
        "respuesta" => "A",
        "imagen" => "images/circulacion_9.jpg"
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
        "respuesta" => "A",
        "imagen" => "images/circulacion_10.jpg"
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
        "respuesta" => "A",
        "imagen" => "images/circulacion_11.jpg"
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
        "respuesta" => "A",
        "imagen" => "images/circulacion_12.jpg"
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
        "respuesta" => "A",
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
        "respuesta" => "A",
        "imagen" => "images/circulacion_1.jpg"
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
        "respuesta" => "A",
        "imagen" => "images/circulacion_1.jpg"
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
        "respuesta" => "A",
        "imagen" => "images/circulacion_1.jpg"
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
        "respuesta" => "A",
        "imagen" => "images/circulacion_1.jpg"
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
        "respuesta" => "A",
        "imagen" => "images/circulacion_1.jpg"
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
        "respuesta" => "A",
        "imagen" => "images/circulacion_1.jpg"
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
        "respuesta" => "A",
        "imagen" => "images/circulacion_1.jpg"
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
        "respuesta" => "A",
        "imagen" => "images/circulacion_1.jpg"
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
        "respuesta" => "A",
        "imagen" => "images/circulacion_1.jpg"
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
        "respuesta" => "A",
        "imagen" => "images/circulacion_1.jpg"
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
        "respuesta" => "A",
        "imagen" => "images/circulacion_1.jpg"
    ],

];

$preguntasSignal = [
    [
        "num" => "1",
        "pregunta" => "¿Qué le indica esta señal?",
        "opciones" =>
        [
            "A" => " Principio de autovía.",
            "B" => " Principio de autopista o autovía.",
            "C" => " Principio de autopista"
        ],
        "respuesta" => "C",
        "imagen" => "images/signal_1.jpg"
    ],

    [
        "num" => "2",
        "pregunta" => "¿Podremos realizar un cambio de dirección a la vista de esta señal?",
        "opciones" =>
        [
            "A" => "No, sólo podemos continuar de frente.",
            "B" => "Sí, tanto a la derecha como a la izquierda."
        ],
        "respuesta" => "B",
        "imagen" => "images/signal_2.jpg"
    ],

    [
        "num" => "3",
        "pregunta" => "¿Qué significa esta señal?",
        "opciones" =>
        [
            "A" => "Prohibido estacionar por vado.",
            "B" => "Estacionamiento limitado en tiempo.",
            "C" => "Estacionamiento prohibido."
        ],
        "respuesta" => "B",
        "imagen" => "images/signal_3.jpg"
    ],

    [
        "num" => "4",
        "pregunta" => "¿Qué significa esta señal?",
        "opciones" =>
        [
            "A" => "Recuerda que encendamos las luces de corto alcance.",
            "B" => "Obliga a encender alguna luz.",
            "C" => "Obliga a encender la luz de corto alcance, como mínimo."
        ],
        "respuesta" => "C",
        "imagen" => "images/signal_4.jpg"
    ],

    [
        "num" => "5",
        "pregunta" => "¿Qué significa esta señal?",
        "opciones" =>
        [
            "A" => "Calzada de 2 carriles con bifurcación hacia la izquierda.",
            "B" => "Calzada de 2 carriles con bifurcación hacia la izquierda.",
        ],
        "respuesta" => "B",
        "imagen" => "images/signal_5.jpg"
    ],

    [
        "num" => "6",
        "pregunta" => "¿Qué significa esta señal?",
        "opciones" =>
        [
            "A" => "Puente móvil",
            "B" => "Paso a nivel con barreras.",
            "C" => "Pavimento deslizante"
        ],
        "respuesta" => "A",
        "imagen" => "images/signal_6.jpg"
    ],

    [
        "num" => "7",
        "pregunta" => "¿Qué indica esta señal?",
        "opciones" =>
        [
            "A" => "Salida en autopista, autovía o vía para automóviles a 300 metros y a la derecha.",
            "B" => "Salida a 300 metros a la izquierda.",
            "C" => "Paso a nivel a 300 metros."
        ],
        "respuesta" => "A",
        "imagen" => "images/signal_7.jpg"
    ],

    [
        "num" => "8",
        "pregunta" => "¿Qué significa una luz amarilla fija?",
        "opciones" =>
        [
            "A" => "Extremar la precaución",
            "B" => "Igual que una luz roja, detenerse en condiciones de seguridad",
            "C" => "Ceder el paso"
        ],
        "respuesta" => "B",
        "imagen" => "images/signal_8.jpg"
    ],

    [
        "num" => "9",
        "pregunta" => "¿Ante una señal de STOP debemos parar?",
        "opciones" =>
        [
            "A" => "Sí, siempre cediendo el paso.",
            "B" => "Sí, cuando no haya visibilidad.",
            "C" => "Sí, cuando no haya peatones."
        ],
        "respuesta" => "A",
        "imagen" => "images/signal_9.jpg"
    ],

    [
        "num" => "10",
        "pregunta" => "¿Qué significa esta señal?",
        "opciones" =>
        [
            "A" => "Peligro por pérdida de visibilidad.",
            "B" => "Peligro por niebla.",
            "C" => "Peligro por lluvia."
        ],
        "respuesta" => "A",
        "imagen" => "images/signal_10.jpg"
    ],

    [
        "num" => "11",
        "pregunta" => "Si un agente está moviendo su brazo de arriba abajo, ¿qué está indicando?",
        "opciones" =>
        [
            "A" => "Que nos detengamos",
            "B" => "Que disminuyamos la velocidad",
            "C" => "Que cambiemos de dirección hacia el lado que tiene el brazo."
        ],
        "respuesta" => "B",
        "imagen" => "images/signal_11.jpg"
    ],

    [
        "num" => "12",
        "pregunta" => "¿Qué significan unas luces rojas intermitentes?",
        "opciones" =>
        [
            "A" => "Paso a nivel cerrado.",
            "B" => "Prohibición temporal de paso.",
            "C" => "Pasar con precaución."
        ],
        "respuesta" => "B",
        "imagen" => "images/signal_12.jpg"
    ],

];
function escribirPreguntas($preguntas){
    for($i = 0; $i < sizeof($preguntas); $i++){
        echo "<div class='pregunta pregunta-$i'>";
        echo "<p><span>" . $i+1 . "</span>" . " " . $preguntas[$i]['pregunta'] . "</p>";
        echo "<ul>";
        echo "<img src='".$preguntas[$i]['imagen']."'/>";
        foreach ($preguntas[$i]['opciones'] as $letra => $enunciado) {
            echo "<li><input type='radio' name='$i' value='$letra'>" . $letra . " ) " . $enunciado . "</li></br>";
        }
        echo "</ul></div>";
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
    

function corregirExamen($preguntas, $respuestas){
    $falladas = $acertadas = 0;
    for($i = 0; $i < sizeof($preguntas); $i++){
        echo "<div class='pregunta pregunta-$i'>";
        echo "<p><span>" . $i+1 . "</span>" . " " . $preguntas[$i]['pregunta'] . "</p>";
        echo "<ul>";
        echo "<img src='".$preguntas[$i]['imagen']."'/>";

        /**
         * TODO:
         * Optimizar recursos
         */
        if(isset($respuestas[$i])){
            if($preguntas[$i]['respuesta'] == $respuestas[$i]) $acertadas++;
            else $falladas++;

            foreach ($preguntas[$i]['opciones'] as $letra => $enunciado) {
                $checked = "";
                $acierto = "fallo";
                if($letra == $respuestas[$i]){
                    $checked = "checked";
                }if($preguntas[$i]['respuesta'] == $respuestas[$i]){
                    $acierto = "acierto";
                }
                echo "<li><input $checked disabled type='radio' class='$acierto' name='$i' value='$letra'>" . "<label for='$letra'>$letra) " . $enunciado. "</label>" . "</li></br>";
            }
            if($acierto == "fallo"){
                echo "¡Incorrecto! La respuesta correcta era: " . $preguntas[$i]['respuesta'] . ") " . $preguntas[$i]['opciones'][$preguntas[$i]['respuesta']];
            }else{
                echo "¡Correcto!";
            }
        }else{
            foreach ($preguntas[$i]['opciones'] as $letra => $enunciado){
                echo "<li><input type='radio' name='$i' value='$letra'>" . "<label for='$letra'>$letra)" . $enunciado. "</label>" . "</li></br>";
            }
        }

        echo "</ul></div>";
    }
    echo "Acertadas: " . $acertadas;
    echo "</br>Falladas: " . $falladas;

    if(sizeof($preguntas)/2 > $acertadas){
        echo "<p> ¡Debe mejorar!</p>";
    }

    imprimirGrafica(sizeof($preguntas), $acertadas, $falladas);
}

function imprimirGrafica($numPreguntas, $preguntasAcertadas, $preguntasFalladas){
    echo    "<div>
                <canvas id='grafica'></canvas>
            </div>";
    $etiquetas = ["Aciertos", "Fallos", "Sin responder"];
    $preguntasSinResponder = $numPreguntas - $preguntasFalladas - $preguntasAcertadas;
    $valores = [$preguntasAcertadas, $preguntasFalladas, $preguntasSinResponder];

    $respuesta = [
        "etiquetas" => $etiquetas,
        "datos" => $valores,
    ];
}
?>

