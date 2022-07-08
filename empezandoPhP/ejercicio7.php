<?php

    $edad = 32; //variables

    echo $edad."<br>";

    $edad = 40; //cambiar valor de la variable

    echo $edad."<br>";

    //uso de constante
    define("NOMBRE", "Nagib");
    //imprimir constante
    echo NOMBRE;

    //Si lo descomento muestra error, ya que no es posible cambiar el valor de una constante
    /*
    NOMBRE="Pedro";
    echo NOMBRE;
    */
?>