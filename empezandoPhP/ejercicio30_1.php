<?php
    session_start();//Simplemente con iniciar la sesion ya me da la posibilidad de hacer uso de las variables, solo es enecesario inicializar una vez las variables
    if(isset($_SESSION["usuario"])){//isset devuelve true si hay datos, false si no hay datos
        echo "Usuario: ".$_SESSION["usuario"]." estatus: ".$_SESSION["estatus"];
    }else{
        echo "No hay datos";
    }
    
?>