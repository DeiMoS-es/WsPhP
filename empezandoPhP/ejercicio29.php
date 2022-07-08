<?php

//conexión al servidor
    $servidor = "localhost"; //127.0.0.1
    $usuario = "root";
    $contrasenia = "";

    try{
        $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $contrasenia);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM `fotos`";
        $sentencia = $conexion->prepare($sql);
        $sentencia->execute();

        $resultado = $sentencia->fetchAll();

        //print_r($resultado);

        foreach($resultado as $foto){//$foto o como me de la gana
            print_r($foto['nombre']);
        }

        echo "Conexion establecida";
    }catch(PDOException $error){
        echo "Conexion erronea".$error;
    }
?>