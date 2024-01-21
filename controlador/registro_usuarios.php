<?php
// Verificación de si se ha enviado el formulario
if (!empty($_POST["btnregistrar"])) {
    // Verificación de la existencia y no vaciedad de los campos del formulario
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["direccion"]) and !empty($_POST["telefono"]) and !empty($_POST["email"])) {
        
        // Obtención de los datos del formulario
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $direccion = $_POST["direccion"];
        $telefono = $_POST["telefono"];
        $email = $_POST["email"];
        
        // Inserción de los datos en la base de datos
        $sql = $conexion->query("insert into usuarios(nombre,apellido,direccion,telefono,email) values('$nombre','$apellido','$direccion','$telefono','$email')");
        
        // Verificación del éxito de la operación de inserción
        if ($sql == 1) {
            echo '<div class="alert alert-success">Registro exitoso</div>';
        } else {
            echo '<div class="alert alert-danger">Error al Registrar el Usuario</div>';
        }
    } else {
        // Mensaje de advertencia si algunos campos están vacíos
        echo '<div class="alert alert-warning">Algunos de los campos están vacíos</div>';
    }
    // Restablecimiento del historial para evitar el reenvío del formulario al recargar la página
    ?>
    <script>
        history.replaceState(null, null, location.pathname)
    </script>
<?php }
?>
