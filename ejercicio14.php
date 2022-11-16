<?php

    echo "Ciclos:";
    echo "<br>";
    echo "Ciclo for";

    for ($numeroInicial=0; $numeroInicial<10; $numeroInicial++) {
        echo "Numero ".$numeroInicial."<br>";
    }

    echo "Do while";

    $numero=0;

    do {
        echo "Numero ".$numero."<br>";
        $numero++;
    } while ( $numero<10 );

    echo "Mientras";

    $inicial=0;

    while($inicial<10){
        echo "Numero ".$inicial."<br>";
        $inicial++;
    }


?>