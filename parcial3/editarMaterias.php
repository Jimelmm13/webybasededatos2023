<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Materia</title>
    <link rel="stylesheet" href="css/bootstrap.css"> 
    <script src="code.jquery.com_jquery-3.7.1.js"></script>
</head>
<body>
    <?php 
        include 'menu.php'; 
        include 'conexion.php';

        $id = $_GET["id"];

        $sql = "SELECT * FROM materias WHERE id=".$id;

        $datos = $conexion->query($sql);
        
        $materias = $datos->fetch_assoc();

    ?>
    <div class="container">
        <div class="row">
            <div class="col-12 card m-4 p-4">
                <h2>Registrar Materia</h2><hr>
                <form action="ActualizarMaterias.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $materias["id"]; ?>">
                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <input value="<?php echo $materias["nombre"]; ?>" name="nombre" type="text" class="form-control" placeholder="Teclea el nombre del de la materia" required>
                    </div>
                    <div class="form-group">
                        <label for="">Semestre:</label>
                        <input value="<?php echo $materias["semestre"]; ?>" name="semestre" type="number" class="form-control" placeholder="Teclea el semestre" required>
                    </div>
                    <div class="form-group">
                        <label for="">Especialidad:</label>
                        <select name="especialidad" class="form-control" required>
                            <option value="">Selecciona la especialidad</option>
                            <option selected value="<?php echo $materias["especialidad"]; ?>"><?php echo $materias["especialidad"]; ?></option>
                            <option value="programacion">PROGRAMACIÓN</option>
                            <option value="ofimatica">OFIMÁTICA</option>
                            <option value="construccion">CONSTRUCCIÓN</option>
                            <option value="contabilidad">CONTABILIDAD</option>
                            <option value="electronica">ELECTRÓNICA</option>
                        </select>
                    </div><br>
                    <div>
                        <input type="submit" value="Actualizar" class="btn btn-primary">
                        <a href="consultarMaterias.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer class="text-center">
        <hr>
        CETIS 107 &copy; 2023
    </footer>

    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>