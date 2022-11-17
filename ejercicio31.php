<?php
    $txtNombre="";

    $rdgLenguaje="";

    $chkphp="";
    $chkhtml="";
    $chkcss="";

    $isOption="";

    $txtComentario="";

    if($_POST) {
        $txtNombre=(isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
        $rdgLenguaje=(isset($_POST['lenguaje'])) ? $_POST['lenguaje'] : "";
        
        $chkphp=( isset($_POST['chkphp'])=="si" ) ? "checked" : "";
        $chkhtml=(isset($_POST['chkhtml'])=="si" ) ? "checked" : "";
        $chkcss=(isset($_POST['chkcss'])=="si" ) ? "checked" : "";
        
        $isOption=(isset($_POST['isOption'])) ? $_POST['isOption'] : "";
        //print($_POST['isOption']);
        
        $txtComentario=(isset($_POST['txtComentario'])) ? $_POST['txtComentario'] : "";
        // Instruccion de insertar
        // Rutina de algun calculo
        // Aqui puedes alterar esos valores para mostrar diferentes valores modificados
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php if($_POST) {?>
    <strong>Hola </strong>: <?php echo $txtNombre;?>
    <br>
    <strong>Tu lenguaje es </strong>: <?php echo $rdgLenguaje;?>
    <br>
    <strong>Estas aprendiendo: </strong><br>
    - <?php echo ($chkphp=="checked")?"PHP":""; ?> <br>
    - <?php echo ($chkhtml=="checked")?"HTML":""; ?> <br>
    - <?php echo ($chkcss=="checked")?"CSS":""; ?> <br>
    <br><br>
    <strong>Tu opcion es: </strong> <?php echo $isOption; ?>
    <br><br>
    <strong>Tu comentario es: </strong> <?php echo $txtComentario; ?> <br>

    <?php }?>
    <form action="ejercicio31.php" method="post">
        Nombre: <br>
        <input value="<?php echo $txtNombre;?>" type="text" name="txtNombre" id=""><br>

        <br>Te gusta?<br>
        <br> php: <input type="radio" <?php echo ($rdgLenguaje=="php")?"checked":"" ?> name="lenguaje" value="php" id=""> <br>
        <br> html: <input type="radio" <?php echo ($rdgLenguaje=="html")?"checked":"" ?> name="lenguaje" value="html" id=""> <br>
        <br> css: <input type="radio" <?php echo ($rdgLenguaje=="css")?"checked":"" ?> name="lenguaje" value="css" id=""> <br><br>
        <br>Estas aprendiendo... <br><br>
        <br> php: <input type="checkbox" <?php echo $chkphp;?> name="chkphp" value="si" id=""> <br>
        <br> html: <input type="checkbox" <?php echo $chkhtml;?> name="chkhtml" value="si" id=""> <br>
        <br> css: <input type="checkbox" <?php echo $chkcss;?> name="chkcss" value="si" id=""> <br><br>
        
        <br><br>
        Que opcion eliges?<br> <br>
        <select name="isOption" id="">
            <option value="">[Ninguna]</option>
            <option value="option1" <?php echo ($isOption=="option1")?"selected":"" ?> >Opcion 1</option>
            <option value="option2" <?php echo ($isOption=="option2")?"selected":"" ?> >Opcion 2</option>
            <option value="option3" <?php echo ($isOption=="option3")?"selected":"" ?> >Opcion 3</option> <br> <br>
        </select>
        <br><br>
        Tienes alguna duda?<br><br>
        <textarea name="txtComentario" id="" cols="30" rows="10"><br>
        <?php echo $txtComentario; ?>
        </textarea><br><br>
        
        <input type="submit" value="Enviar informacion">
    </form>
</body>
</html>