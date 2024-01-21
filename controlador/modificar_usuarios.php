<?php
// Verificación de si se ha enviado el formulario
if (!empty($_POST["btnregistrar"])) {
    // Verificación de la existencia y no vaciedad de los campos del formulario
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["direccion"]) and !empty($_POST["telefono"]) and !empty($_POST["email"])) {
        // Obtención de los valores del formulario
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $direccion = $_POST["direccion"];
        $telefono = $_POST["telefono"];
        $email = $_POST["email"];
        $id = $_GET["id"];
        
        // Actualización de los datos en la base de datos
        $sql = $conexion->query("update usuarios set nombre='$nombre', apellido='$apellido', direccion='$direccion', telefono='$telefono', email='$email' where id=$id");
        
        // Verificación del éxito de la operación de actualización
        if ($sql == 1) {
            // Redirección a la página principal después de la actualización
            header("location:index.php");
        } else {
            // Mensaje de error si la actualización no fue exitosa
            echo "<div class='alert alert-danger'>Error al modificar el registro</div>";
        }
    } else {
        // Mensaje de advertencia si algunos campos están vacíos
        echo "<div class='alert alert-warning'>Campos vacíos</div>";
    }
}
?>
