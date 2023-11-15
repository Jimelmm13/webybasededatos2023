<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Alumno</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="code.jquery.com_jquery-3.7.1.min.js"></script>
</head>
<body>
    <?php
    include 'menu.php';
    include 'conexion.php';

    $id = $_GET["id"];
    
    $sql = "SELECT * FROM materiass WHERE id=" .$id;

    $datos = $conexion->query($sql);

    $materia = $datos->fetch_assoc();
   
    ?>

    
<div class="container">
        <div class="row">
            <div class="col-12 card m-4">
                <form action="GuardarMateria.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $materia["id"]; ?>">
                    <div class="form-group">
                        <label for="">Nombre: </label>
                        <input value="<?php echo $materia["nombre"]; ?>" name="nombre" type="text" class="form-control" placeholder="Teclea el nombre del alumno:" required>
                    </div>
                    <div class="form-group">
                        <label for="">Semestre: </label>
                        <input value="<?php echo $materia["semestre"]; ?>" name="semestre" type="number" class="form-control" placeholder="Teclea el semestre del alumno:" required>
                    </div>
                    <div class="form-group">
                        <label for="">Especialidad: </label>
                        <select name="especialidad" id="" class="form-control" required>
                        <option value="">Selecciona la especialidad</option>
                        <option selected value="<?php echo $materia["especialidad"]; ?>"><?php echo $materia["especialidad"]; ?></option>
                        <option value="PROGRAMACION">PROGRAMACION</option>
                        <option value="CONTABILIDAD">CONTABILIDAD</option>
                        <option value="OFIMATICA">OFIMATICA</option>
                        <option value="CONSTRUCCION">CONSTRUCCION</option>
                        <option value="ELECTRONICA">ELECTRONICA</option>
                    </select>
                    </div>
                    <div>
                        <br>
                        <center><input type="submit" value="Registrar" class="btn btn-primary">
                        <a href="consultarAlumnos.php" class="btn btn-danger">Cancelar</a></center>
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
</body>
</html>