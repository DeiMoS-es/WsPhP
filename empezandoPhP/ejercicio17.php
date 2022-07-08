<?php
    //Funciones
    //en apllido añado el valor default vacío
    function imprimirNombre($nombre, $apellido=""){
        //Instrucciones
        echo "Mi nombre es: ".$nombre." ".$apellido."<br>";
    }

    imprimirNombre("Nagib");
    imprimirNombre("Celia","Bosque");
?>