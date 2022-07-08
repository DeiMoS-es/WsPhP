<?php
    //Clases
    class persona{

        public $nombre; //Propiedades
        private $edad;//solo se puede acceder desde la clase
        protected $altura; //solo se puede acceder desde la misma clase, o clases heredadas

        //Constructor
        function __construct($nuevoNombre){
            $this->nombre=$nuevoNombre;
        }
        //Método, acciones
        public function asignarNombre($nuevoNombre){
            $this->nombre = $nuevoNombre;
        }

        public function imprimirNombre(){
            echo "Hola soy: ".$this->nombre;
        }

        public function mostrarEdad(){
            $this->edad = 20;
            return $this->edad;
        }
    }

    //Creo el objeto alumno a partir de la clase
    $objAlumno = new persona("Antonio");
    //$objAlumno->asignarNombre("Nagib");//llamo a un método
    $objAlumno->imprimirNombre();

?>