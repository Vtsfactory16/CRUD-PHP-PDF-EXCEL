<?php
// Inclusión del archivo de conexión a la base de datos
include_once("modelo/conexion.php");

// Obtención del valor del parámetro "id" a través de la URL (GET)
$id = $_GET["id"];

// Consulta para seleccionar los datos del usuario con el ID proporcionado
$sql = $conexion->query("select * from usuarios where id=$id");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud en PHP</title>
    <!-- Enlace a la hoja de estilos de Bootstrap y al conjunto de iconos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/81247da189.js" crossorigin="anonymous"></script>
</head>

<body>
    <form class="col-4 p-3 m-auto" method="POST">
        <h5 class="text-center text-secondary">Modificar de Usuarios</h5>
        <!-- Campo oculto para almacenar el ID del usuario -->
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
        <?php
        // Inclusión del archivo de controlador para la modificación de usuarios
        include_once "controlador/modificar_usuarios.php";

        // Bucle para mostrar los datos del usuario
        while ($datos = $sql->fetch_object()) { ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre de Usuario</label>
                <!-- Campo de entrada para el nombre con valor predefinido -->
                <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre ?>">
            </div>
            <!-- Repetición similar para los demás campos -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido de Usuario</label>
                <input type="text" class="form-control" name="apellido" value="<?= $datos->apellido ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Direccion de Usuario</label>
                <input type="text" class="form-control" name="direccion" value="<?= $datos->direccion ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Telefono de Usuario</label>
                <input type="text" class="form-control" name="telefono" value="<?= $datos->telefono ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email de Usuario</label>
                <input type="text" class="form-control" name="email" value="<?= $datos->email ?>">
            </div>
        <?php } ?>
        <!-- Botón para enviar el formulario y modificar el usuario -->
        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar Usuario</button>
    </form>
</body>

</html>
