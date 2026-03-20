<!-- validar que el usuario haya ingresado todos los datos
    “Primero valido que el formulario se haya enviado, luego verifico que los campos no estén vacíos, capturo los datos, ejecuto un INSERT en la base de datos y finalmente muestro un mensaje según el resultado.”
-->
<?php

// Verifica si se presionó el botón registrar
if (isset($_POST["btnregistrar"])) {

    // ================= VALIDAR CAMPOS (NO VACÍOS) =================
    if (
        !empty($_POST["nombre"]) and
        !empty($_POST["apellido"]) and
        !empty($_POST["rut"]) and
        !empty($_POST["fecha_nacimiento"]) and
        !empty($_POST["correo_electronico"])
    ) {

        // ================= CAPTURAR DATOS DEL FORMULARIO =================
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $rut = $_POST["rut"];
        $fecha_nacimiento = $_POST["fecha_nacimiento"];
        $correo_electronico = $_POST["correo_electronico"];

        // ================= CONSULTA SQL (INSERT) =================
        $sql = $conexion->query("
            insert into personas(nombre,apellido,rut,fecha_nacimiento,correo_electronico)
            values('$nombre','$apellido','$rut','$fecha_nacimiento','$correo_electronico')
        ");

        // ================= MENSAJE SEGÚN RESULTADO =================
        if ($sql == 1) {
            echo '<div class="alert alert-success">Persona registrada correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar persona</div>';
        }
    } else {
        // ================= MENSAJE SI FALTAN DATOS =================
        echo '<div class="alert alert-warning">Algunos de los campos esta vacio</div>';
    }
}

?>