<?php

    $jsonContenido='[
        {"nombre":"Clara", "apellido": "Veronica"},
        {"nombre":"Jose", "apellido": "Antonio"}
    ]';

    $resultado= json_decode($jsonContenido);
    //print_r($resultado);

    foreach ($resultado as $persona) {
        echo ($persona->nombre)." ".($persona->apellido)."<br>";
    }
?>