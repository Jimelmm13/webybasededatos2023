<?php
include 'conexionn.php';

$nombre = $_POST["nombre"];
$numero_control = $_POST["nc"];
$semestre = $_POST["semestre"];
$edad = $_POST["edad"];
$sexo = $_POST["sexo"];

$sql = "INSERT INTO alumnos(nombre, numero_control, semestre, edad, turno, sexo)";
$sql = "VALUES('".$nombre"', '".$numero_control."', ".$semestre.", ".$edad.", '".$turno."', ".$sexo.")";

if($conexionn->query($sql)  == TRUE){
    header("location: consultarAlumnos.php");
    $conexionn->close();
    exit;
}else{
    echo "<h2>Ocurrio un error</h2> <p>Error: " .$sql . "<br>" . $conexionn-error . "</p>";
    echo"<h3><a href='consultarAlumnos.php'>Registrar a alumnos</a></h3>";
}

?>