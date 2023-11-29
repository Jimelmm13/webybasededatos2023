<?php

    include 'conexion.php';
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $semestre = $_POST["semestre"];
    $especialidad = $_POST["especialidad"];

    $sql = "UPDATE materias SET nombre='".$nombre."', semestre=".$semestre.", especialidad='".$especialidad."' WHERE id=".$id;

    if($conexion->query($sql) === TRUE){
        header("Location: consultarMaterias.php");
        $conexion->close();
        exit;
    } else {
        echo "<h2>Ocurrió un error</h2> <p>Error: " .$sql . "<br>" . $conexion->error . "</p>";
        echo "<h3><a href='consultarMaterias.php'>Regresar a materias</a></h3>";
        $conexion->close();
    }

?>