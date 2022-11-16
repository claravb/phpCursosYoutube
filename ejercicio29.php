<?php
    $servidor="localhost";
    $usuario="root";
    $contrasenia="";

    try {
        $conexion=new PDO("mysql:host=$servidor;dbname=album", $usuario, $contrasenia);
        $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //asegurarse de tener instalado pdo que es una libreria que ayuda a conectarnos de manera facil a una db
        
        $sql="SELECT * FROM `fotos`;";

        $sentencia=$conexion->prepare($sql);
        $sentencia->execute();

        $resultado=$sentencia->fetchAll();

        print_r($resultado);

        foreach($resultado as $foto) {
            print_r($foto['nombre']."<br>");
        }
        
        echo "Conexion establecida";
    } catch (PDOException $error) {
        echo "Conexion erronea ".$error;
    }
?>