<?php  

    include'conexionn.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM alumnos where id = ".$id;

    if($conexionn->query($sql) === TRUE){
        header("location: consultarAlumnos.php");
        $conexionn->close();
        exit;
    } else {
        echo "<h2>Ocurrio un error</h2> <p>Error: " .$sql . "<br>" . $conexionn->error . "</p>";
        echo "<h3><a href='consultarAlumnos.php'>Regresar a alumnos</a></h3>";
        $conexionn->close();
    }

    ?>