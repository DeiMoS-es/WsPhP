<?php
    //Métodos estáticos, pueden llamarse sin tener una instancia, o creación de un objeto
    class UnaClase{
        public static function unMetodo(){
            echo "Hola un método estático";
        }
    }

    /*
    Antes
    $obj = new UnaClase();
    $obj->unMetodo();
    */

    UnaClase::unMetodo();
?>