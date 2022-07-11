<?php
//para mantener los datos durante toda la sesión, epor ejemplo un login
    session_start();//nos permite mantener información en todas las páginas mientras el anvegador esté abierto

    $_SESSION["usuario"] = "deimos";//variable de tipo sesión de nombre usuario y valor deinmos
    $_SESSION["estatus"] = "logueado";//variable de tipo sesión de nombre estatus y valor logueado

    echo "Sesión iniciada".":<br>";
    echo "Usuario: ".$_SESSION["usuario"]." estatus: ".$_SESSION["estatus"];

?>