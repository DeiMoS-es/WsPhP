<?php
//el método POST nos va a permitir recepcionar información
//Se recibe la información del formulario HTML (Método POST)
    if($_POST){//Si no ponemos esta instrucción, al no enviar datos y estar imprimiendo con echo, nos va a soltar un warning de que no hay nada que imprimir
    $nombre = $_POST['txtNombre'];//almaceno el valor que viene del formulario en la variable nombre

    echo "Hola ".$nombre;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!--El formulario hace un envio a ejercicio2.php, es decir, se lo envia así mismo
        Vamos a enviar lo que se introduzca en el input de nombre
    -->
    <form action="ejercicio2.php" method="post">
        Nombre:
        <input type="text" name="txtNombre">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>