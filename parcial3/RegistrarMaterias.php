<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Alumno</title>
    <link rel="stylesheet" href="css/bootstrap.css"> 
    <script src="code.jquery.com_jquery-3.7.1.js"></script>
</head>
<body>
    <?php include 'menu.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-12 card m-4 p-4">
            <form action="">
                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <input name="nombre" type="text" class="form-control"  name= "nombre" placeholder="Teclea la materia" required>
                    </div>
                    <div class="form-group">
                        <label for="">Semestre:</label>
                        <input name="nombre" type="text" class="form-control" name="semestre" placeholder="Teclea el semestre" required>
                    </div>
                    <div class="form-group">
                        <select name="ESPECIALIDAD" class="form-control">
                            <option value="">Seleccione una especialidad</option>
                            <option value="PROGRAMACION">PROGRAMACION</option>
                            <option value="OFIMATICA">OFIMATICA</option>
                            <option value="ELECTRONICA">ELECTRONICA</option>
                            <option value="CONTABILIDAD">CONTABILIDAD</option>
                            <option value="CONSTRUCCION">CONSTRUCCION</option>

                        </select>
</div>
</form>
</div>
</div>
</div>
</body>
</html>


