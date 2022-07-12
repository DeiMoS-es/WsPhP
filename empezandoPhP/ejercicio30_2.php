<?php
//Destruir una sesión
    session_start();//Siempre hay que iniciar sesion para luego destruirla
    
    session_destroy();

    echo "Se destruyó la sesión de usuario";
?>