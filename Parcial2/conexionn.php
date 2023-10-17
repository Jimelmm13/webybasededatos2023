<?php

    $server = "localhost";
    $user = "root";
    $password = "";

    $conexionn = new mysqli($server, $user, $password);

    if($conexionn->connect_error){
        die("Fallo la conexión" . $coneccionn);
    }

?>