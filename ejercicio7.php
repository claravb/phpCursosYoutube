<?php
    $edad=32; // Variables

    echo $edad."<br>";

    $edad=40; // cambiar valor de la variable

    echo $edad."<br>";

    // uso de constante
    define("NOMBRE","CLARA");

    // imprimir constante
    echo NOMBRE;
    
    //NOMBRE="JOSE";  -> esto no se puede hacer, cambiar el valor de una constante
    
    echo NOMBRE;

?>