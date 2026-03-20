<?php

if (!empty($_POST["btnregistrar"])) {
    if (
        !empty($_POST["nombre"]) and
        !empty($_POST["apellido"]) and
        !empty($_POST["rut"]) and
        !empty($_POST["fecha_nacimiento"]) and
        !empty($_POST["correo_electronico"])
    ) {

        // ================= CAPTURAR DATOS DEL FORMULARIO =================
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $rut = $_POST["rut"];
        $fecha_nacimiento = $_POST["fecha_nacimiento"];
        $correo_electronico = $_POST["correo_electronico"];

        // ================= CONSULTA SQL (INSERT) =================
        $sql = $conexion->query("
        UPDATE personas 
        SET 
        nombre='$nombre',
        apellido='$apellido',
        rut='$rut',
        fecha_nacimiento='$fecha_nacimiento',
        correo_electronico='$correo_electronico'
        where id=$id ");

        if ($sql==1) {
            header("location:../admin/panel.php");
        } else {
            echo "<div class='alert alert-danger'>ERROR AL MOPDIFICAR PRODUCTO</div>";
        }
        

    } else {
        echo "<div class='alert-warning'>Hay campos vacios</div>";
    }
}

?>