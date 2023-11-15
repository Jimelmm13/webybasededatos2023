<?php

    include 'conexion.php';
    $alumno_id = $_POST["alumno"];
    $materias = $_POST["materiass"];

    if(count($materias) > 0){
        $sql = "";
        for ($i=0; $i < count($materias); $i++) {
            $sql .= "INSERT INTO alumno_materias(alumno_id, materia_id) VALUES(".$alumno_id.", ".$materias[$i].");";
        }

        if($conexion->multi_query($sql) === TRUE){
            header("Location: inicio.php");
            $conexion->close();
            exit;
        } else {
            echo"<h2>Ocurrio un error</h2> <p>Error: " .$sql . "<br>" . $conexion->error . "</p>";
            echo "<h3><a href='inicio.php'>Regresar a inicio</a></h3>";
        }
    }