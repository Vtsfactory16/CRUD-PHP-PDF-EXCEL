<?php
// Verificación de si se ha recibido un parámetro "id" a través de la URL (GET)
if (!empty($_GET["id"])) {
    // Obtención del valor del parámetro "id"
    $id = $_GET["id"];
    
    // Eliminación del usuario con el ID proporcionado de la base de datos
    $sql = $conexion->query("delete from usuarios where id=$id ");

    // Verificación del éxito de la operación de eliminación
    if ($sql == 1) {
        // Mensaje de éxito si la eliminación fue exitosa
        echo '<div class="alert alert-success">Usuario eliminado correctamente</div>';
    } else {
        // Mensaje de error si la eliminación no fue exitosa
        echo '<div class="alert alert-danger">Usuario no eliminado</div>';
    }
}
?>
