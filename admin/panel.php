<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud en php y pysql</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b0c77242ce.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="text-center">Seguro a casa</h1>
    <div class="container-fluid row">
    <!-- Formulario de registro -->
    <form class="col-4 p-3" method="POST">
        <h3 text-center text-primary>registro de personas</h3>
        <?php
            include "../modelo/conexion.php";
            include "../controlador/registro_persona.php";
            ?>
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Nombre de la persona</label>
            <input type="text" class="form-control" name="nombre">
        </div>

        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Apellido de la persona</label>
            <input type="text" class="form-control" name="apellido">
        </div>

        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Rut de la persona</label>
            <input type="text" class="form-control" name="rut">
        </div>
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Fecha de nacimiento</label>
            <input type="date" class="form-control" name="fecha_nacimiento">
        </div>
        
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" name="correo_electronico">



        </div>

        

        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>

    </form>
        

        <!-- ================= TABLA DE PERSONAS (READ) ================= -->
        <div class="col-8 p-4">
        <table class="table">
            <thead class="table-primary ">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">RUT</th>
                <th scope="col">FECHA DE NACIMIENTO</th>
                <th scope="col">CORREO ELECTRÓNICO</th>
                </tr>
            </thead>
            <tbody>

                <!-- ================= CONEXIÓN A BASE DE DATOS ================= -->
                <?php
                include "../modelo/conexion.php";
                // ================= CONSULTA SQL (SELECT) =================
                $sql = $conexion->query("SELECT * FROM personas");
                // ================= RECORRER RESULTADOS =================
                while($datos=$sql->fetch_object()) {?>

                <!-- ================= FILA DE DATOS ================= -->
                <tr>
                    <td><?= $datos->id ?></td>
                    <td><?= $datos->nombre ?></td>
                    <td><?= $datos->apellido ?></td>
                    <td><?= $datos->rut ?></td>
                    <td><?= $datos->fecha_nacimiento ?></td>
                    <td><?= $datos->correo_electronico ?></td>
                    <!-- ================= BOTONES DE ACCIÓN ================= -->
                    <td>
                        <!-- Editar -->
                        <a href="" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                        <!-- Eliminar -->
                        <a href="" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                    </td>
                </tr>
                <?php } 
                ?>
  </tbody>
</table>

        </div>

    </div>


    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>