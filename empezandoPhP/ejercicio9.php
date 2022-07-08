<?php
    if($_POST){
        //Valores relacionales
        $valorA = $_POST['valorA'];
        $valorB = $_POST['valorB'];

        if($valorA > $valorB){
            echo "El valor de A es mayor que B";
        }else
            echo "El valor de A es menor que B";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritméticos</title>
</head>
<body>
    <form action="ejercicio9.php" method="post">
        ValorA:
        <input type="text" name="valorA">
        <br>
        ValorB:
        <input type="text" name="valorB">
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>