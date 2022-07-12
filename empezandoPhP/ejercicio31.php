<?php

$txtNombre = "";
if($_POST){//si hay envio
    $txtNombre = (isset($_POST['txtNombre'])) ?$_POST['txtNombre']:"" ;//pregunto si el dato ha llegado, si hay le asignas el nobre, si no hay dato asigna cadena vacía

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
    <?php } ?>
    <form action="ejercicio31.php" method="post">
        <!-- Le digo que me guarde el valor del nombre que introduzca -->
        <input value="<?php echo $txtNombre; ?>" type="text" name="txtNombre">
        <button type="submit">Enviar</button>        
    </form>
</body>
</html>