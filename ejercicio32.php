<?php
    if ($_POST) {
        print_r($_POST);
    
        //Se recibe asi los input de tipo file

        print_r($_FILES['archivo']['name']); //nombre archivo temporal
        //dar permisos de escritura...
        //funcion recibe el nombre temporal y lo guarda con ese mismo nombre temporal, se copiara en la misma carpeta
        move_uploaded_file($_FILES['archivo']['tmp_name'],$_FILES['archivo']['tmp_name']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio32.php" enctype="multipart/form-data" method="post">
        Imagen: <br>
        <input type="file" name="archivo" id=""> <br>//a este tipo no le puedo poner un valor por defecto
        <input type="submit" name="enviar" value="Enviar informacion" >
    </form>
</body>
</html>