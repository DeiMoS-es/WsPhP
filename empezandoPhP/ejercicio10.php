<?php
    if($_POST){
        //Operadores lógicos
        $valorA = $_POST['valorA'];
        $valorB = $_POST['valorB'];

       /* if(($valorA != $valorB) && ($valorA > $valorB)){
            echo "El valor de A es diferente a B y también es mayor";
        }
        */
        if(($valorA != $valorB) || ($valorA > $valorB)){
            echo "El valor de A es diferente a B o El valor de A  es mayor que el valor de B";
        }

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
    <form action="ejercicio10.php" method="post">
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