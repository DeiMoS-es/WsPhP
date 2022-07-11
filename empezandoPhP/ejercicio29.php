<?php

//conexión al servidor
    $servidor = "localhost"; //127.0.0.1
    $usuario = "root";
    $contrasenia = "";

    try{
        $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $contrasenia);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM `fotos`";
        $sentencia = $conexion->prepare($sql);//ejecuta la instrucción anterior, y se almacena en la variable sentencia
        $sentencia->execute();//con execute ejecutamos esa sentencia de obtener los datos

        $resultado = $sentencia->fetchAll();//los resultados se almacenaran en la variable resultado, fetcAll devuelve todo el resultado de la sentencia

        //print_r($resultado);

        foreach($resultado as $foto){//$foto o como me de la gana
            //print_r($foto['nombre']);
            //otra forma de mostrar los datos
            echo $foto['nombre']."<br>";
        }

        echo "Conexion establecida";
    }catch(PDOException $error){
        echo "Conexion erronea".$error;
    }
?>