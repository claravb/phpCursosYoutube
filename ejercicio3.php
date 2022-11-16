<?php

//get es el envio a traves de una url
//post los oculta y recepciona

if($_GET) {
    $nombre=$_GET['nombre'];

    echo "Hola ".$nombre;
}

?>