<?php
    session_start(); //sirve para mantener la info en cualquier pag mientras el navegador este abierto

    $_SESSION["usuario"]="clara";
    $_SESSION["estatus"]="logueado";

    echo "Sesion iniciada"."<br>";

    echo "Usuario ".$_SESSION["usuario"]." estatus: ".$_SESSION["estatus"];

?>