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

        //Comparación
        if($valorA==$valorB){
            echo "El valor de A es igual al valor de B <br>";
            if($valorA == 4){
                echo "El valor es 4 <br>";
            }
            if($valorA == 5){
                echo "El valor es 5 <br>";
            }
        }

        if(($valorA == $valorB) && ($valorA == 4) ){
            echo "El valor de A es igual a B y su valor es 4";
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
    <form action="ejercicio11.php" method="post">
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