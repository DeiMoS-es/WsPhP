<?php
    if($_POST){
        $valorA = $_POST['valorA'];
        $valorB = $_POST['valorB'];

        //suma
        $suma = $valorA + $valorB;
        //resta
        $resta = $valorA - $valorB;
        //multiplicación
        $multi = $valorA * $valorB;
        //división
        $divi = $valorA / $valorB;

        echo "Suma: ".$suma."<br>";
        echo "Resta: ".$resta."<br>";
        echo "Multiplicación: ".$multi."<br>";
        echo "División: ".$divi."<br>";

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
    <form action="ejercicio8.php" method="post">
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