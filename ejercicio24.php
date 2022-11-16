<?php


    class persona {
        public $nombre;
        private $edad;
        protected $altura; 

        function __construct($nuevoNombre){
            $this->nombre=$nuevoNombre;
        }

        public function asignarNombre($nuevoNombre) { // acciones o metodos
            $this->nombre=$nuevoNombre;
        }
        public function imprimirNombre() {
            echo "Hola soy ".$this->nombre."<br>";
        }
        public function mostrarEdad() {
            $this->edad=20;
            return $this->edad;
        }
    }

    $objAlumno= new persona(); // instancia o creacion de un objeto
    $objAlumno->asignarNombre("Clara");
    echo $objAlumno->nombre; // imprimir una propiedad
    $objAlumno2= new persona(); 
    $objAlumno2->asignarNombre("Clara2");
    $objAlumno2->imprimirNombre();
    echo $objAlumno2->nombre;
    echo $objAlumno2->mostrarEdad();

    class trabajador extends persona {
        public $puesto;

        public function presentarseComoTrabajador(){
            echo "Hola soy ".$this->nombre." y soy un ".$this->puesto."<br>";
        }
    }

    $objTrabajador=new trabajador();
    $objTrabajador->asignarNombre("Clari");
    $objTrabajador->puesto="Programadora";

    echo $objTrabajador->presentarseComoTrabajador();
?>