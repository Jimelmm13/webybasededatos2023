<?php

    $server     = "localhost"; //para XAMPP es solo "localhost"
    $user       = "root";
    $password   = "";
    $baseDatos  = "cetis107";

    $conexion = new mysqli($server, $user, $password, $baseDatos);

    if($conexion->connect_error){
        die("Fallo la conexion" . $conexion->connect_error);
    }

?>