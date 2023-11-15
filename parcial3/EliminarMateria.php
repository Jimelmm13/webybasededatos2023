<?php

include 'conexion.php';

$id = $_GET['id'];

$sql = "DELETE FROM materias where id = ".$id;

if($conexion->query($sql) === TRUE){
    header("Location: ConsultarMaterias.php");
    $conexion->close();
    exit;
} else {
    echo "<h2>Ocurrió un error</h2> <p>Error: " .$sql . "<br>" . $conexion->error . "</p>";
    echo "<h3><a href='ConsultarMaterias.php'>Regresar a materias</a></h3>";
    $conexion->close();
}



    ?>