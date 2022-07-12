<?php
    session_start();//Simplemente con iniciar la sesion ya me da la posibilidad de hacer uso de las variables, solo es enecesario inicializar una vez las variables
    echo "Usuario: ".$_SESSION["usuario"]." estatus: ".$_SESSION["estatus"];
?>