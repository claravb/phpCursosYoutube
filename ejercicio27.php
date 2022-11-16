<?php
    echo "<p>Metodos estaticos: pueden llamarse sin tener una instancia</p>";

    class unaClase {
        public static function unMetodo() {
            echo "Hola soy un metodo estatico";
        }
    }

    $obj=new unaClase();
    $obj->unMetodo();

    //Sin instanciar creamos una referencia a la clase
    unaClase::unMetodo(); //esto me lo puedo encontrar mucho en los ORM
?>