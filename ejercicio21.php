<?php
    echo "Arreglos:<br><br>";

    $frutas=array("frutilla","manzana","pera");
    echo $frutas."<br>";
    print($frutas."<br>");
    print_r($frutas);
    echo "<br><h2>Arreglos Asociativos: puedo cambiar los indices</h2><br>";
    echo $frutas[0]."<br>";
    echo "<br>";
    $frutas2=array("f"=>"frutilla","m"=>"manzana","p"=>"pera");
    echo $frutas2."<br>";
    print($frutas2."<br>");
    print_r($frutas2);
    echo "<br>";
    echo $frutas2["f"]."<br>";
    echo "<br><br>";
    for($index=0;$index<3;$index++) {
        echo $frutas[$index]."<br>";
    }
    echo "<br><br>";
    foreach($frutas2 as $indice=>&$valor) {
        echo $frutas2[$indice]."<br>";
        echo $valor."<br>";//imprime los valores
        echo $indice."<br>";//imprime los indices
    }

?>