<?php
    //Clases
    class persona{

        public $nombre; //Propiedades
        private $edad;//solo se puede acceder desde la clase
        protected $altura; //solo se puede acceder desde la misma clase, o clases heredadas

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
    $objAlumno = new persona();
    $objAlumno->asignarNombre("Nagib");//llamo a un método
    echo $objAlumno->nombre;//imprimo una propiedad
    echo "<br>".$objAlumno->mostrarEdad()."<br>";

    $objAlumno2 = new persona();
    $objAlumno2->asignarNombre("Celia");
    $objAlumno2->imprimirNombre();
    //echo $objAlumno2->nombre;
?>