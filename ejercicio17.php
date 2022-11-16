<?php
    function imprimirNombre($nombre,$comidaFavorita="") {
        // Rutinas instrucciones
        echo "Hola ".$nombre.".<br>";
        if($comidaFavorita!="") {
            echo "Tu comida favorita es: ".$comidaFavorita;
        }
    }

    imprimirNombre("Clara");
    imprimirNombre("Jose","Pizza");

    echo "<br><br>Fechas funciones<br>";

    $hoy=date("Y/m/d");

    echo $hoy;

?>