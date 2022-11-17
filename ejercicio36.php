<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include</title>
</head>
<body>
    <?php include 'ejercicio36_1.php'; ?>
    <?php echo "prueba require: <br>" ?>
    <?php include 'ejercicio36_.php'; ?>
    <?php echo "Hola, estoy en la pagina principal. Con include si hay un error con el archivo de arriba se sigue ejecutando, con require se para todo"; ?>
</body>
</html>