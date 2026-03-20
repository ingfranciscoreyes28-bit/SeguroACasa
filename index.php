<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud en php y pysql</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- CSS propio -->
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/b0c77242ce.js" crossorigin="anonymous"></script>
</head>

<body>
    <h1 class="text-center">Seguro a casa</h1>
    <div class="container-fluid row">
    <!-- Formulario de registro -->
    <form class="col-4 p-3 mt-5 ms-5" method="POST">
        <h3 text-center text-primary>registro de personas</h3>
        <?php
            include "modelo/conexion.php";
            include "controlador/registro_persona.php";
            ?>
        
    
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" name="correo_electronico">

        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="contraseña">

        </div>

        <button type="submit" class="btn btn-primary" name="btnlogin" value="ok">Iniciar sesión</button>
        <button type="submit" class="btn btn-success" name="btnregistrar" value="ok">Crea una cuenta nueva</button>

      

    </form>
        













    </div>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>