<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'menu.php';
    include 'conexion.php';
    $sql_alumnos = "SELECT * FROM alumnos";
    $sql_materias = "SELECT * FROM materias";
    $datos_alumnos = $conexion->query($sql_alumnos);
    $datos_materias = $conexion->query($sql_materias);

    ?>

    <div class="container">
        <div class="row">
            <div class="col-12 card p-4 m-2">
                <h2>Asignar materias a alumno</h2>
                <form action="">
                    <select name="alumno" class="form-control">
                        <?php
                        if($datos_alumnos->num_rows > 0){
                            while($registro = $datos->fetch_assoc()){
                        ?>
                        <option value="<?php echo $registro["id"]; ?>"><?php echo $registro["nombre"]; ?></option>
                        <?php } ?>
                        <?php } ?>
                    </select>   
                <h3>Selecciona las materias:</h3><hr>     
</body>
</html>