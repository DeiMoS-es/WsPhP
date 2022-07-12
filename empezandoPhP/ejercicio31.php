<?php

$txtNombre = "";
$rdgLenguaje = "";
if($_POST){//si hay envio
    $txtNombre = (isset($_POST['txtNombre'])) ?$_POST['txtNombre']:"" ;//pregunto si el dato ha llegado, si hay le asignas el nobre, si no hay dato asigna cadena vacía
    $rdgLenguaje = (isset($_POST['lenguaje'])) ?$_POST['lenguaje']:"" ;

    print_r($rdgLenguaje);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php if($_POST){ ?><!-- mediante código embevido pregunto si hay envio para mostrar el saludo -->
    <strong> Hola </strong> : <?php echo $txtNombre; ?>
    <br>
    <strong>Tu lenguaje es: </strong> <?php echo $rdgLenguaje; ?>
    <?php } ?>
    <form action="ejercicio31.php" method="post">
        <p>Nombre:</p>        
        <!-- Le digo que me guarde el valor del nombre que introduzca -->
        <input value="<?php echo $txtNombre; ?>" type="text" name="txtNombre">
        <p>¿Te gusta?:</p>
        <br> php: <input type="radio" <?php echo ($rdgLenguaje=="php")?"checked":""; ?> name="lenguaje" value="php"> <br>
        <br> html:<input type="radio" <?php echo ($rdgLenguaje=="html")?"checked":""; ?> name="lenguaje" value="html"> <br>
        <br> css: <input type="radio" <?php echo ($rdgLenguaje=="css")?"checked":""; ?> name="lenguaje" value="css"> <br>
        <button type="submit">Enviar</button>        
    </form>
</body>
</html>