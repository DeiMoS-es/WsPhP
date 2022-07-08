<?php
    //Clases
    class persona{

        public $nombre; //Propiedades

        //Método, acciones
        public function asignarNombre($nuevoNombre){
            $this->nombre = $nuevoNombre;
        }

        public function imprimirNombre(){
            echo "Hola soy: ".$this->nombre;
        }
    }

    //Creo el objeto alumno a partir de la clase
    $objAlumno = new persona();
    $objAlumno->asignarNombre("Nagib");//llamo a un método
    echo $objAlumno->nombre;//imprimo una propiedad

    $objAlumno2 = new persona();
    $objAlumno2->asignarNombre("Celia");
    $objAlumno2->imprimirNombre();
    //echo $objAlumno2->nombre;
?>