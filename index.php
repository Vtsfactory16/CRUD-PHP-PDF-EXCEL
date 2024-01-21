<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Configuración de la página -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud en PHP</title>

    <!-- Enlace a la hoja de estilos de Bootstrap y al conjunto de iconos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/81247da189.js" crossorigin="anonymous"></script>
</head>

<script>
    // Definición de la función eliminar para confirmar antes de eliminar un usuario
    function eliminar() {
        var respuesta = confirm("¿Desea eliminar este usuario?");
        if (respuesta == true) {
            return true;
        } else {
            return false;
        }
    }
</script>

<body class="bg-beige">
    <!-- Encabezado de la página -->
    <h1 class="text-center bg-beige text-dark p-4">Registro de Usuarios</h1>

    <?php
    // Inclusión de archivos PHP necesarios
    include_once("modelo/conexion.php");
    include_once("controlador/eliminar_usuarios.php");
    ?>

    <!-- Contenedor principal -->
    <div class="container-fluid  text-dark">
      
        <div class="text text-center">
            <!-- Enlace para añadir un nuevo usuario -->
            <a href="formulario.php" class="btn btn-success boton text-center"><i class="fa-solid fa-user"> <i class="fa-solid fa-plus"></i></i></a>
            <!-- Enlace para generar un documento PDF-->
            <a href="exportar-pdf.php" class="btn btn-danger boton text-center"><i class="fa-solid fa-file-pdf"> Pdf</i></a>
            <!-- Enlace para generar un documento Excel-->
            <a href="exportar_excel.php" class="btn btn-warning boton text-center"><i class="fa-solid fa-file-excel"> Excel</i></a>
        </div>
</br>

        <div class="table-responsive">
            
            <!-- Tabla que muestra los usuarios -->
            <table class="table table-striped table-hover">
                <thead class="bg-dark text-white">
                    <!-- Encabezados de la tabla -->
                    <tr>
                        <th scope="col" class="bg-success">Id</th>
                        <th scope="col"class="bg-success">Nombre</th>
                        <th scope="col"class="bg-success">Apellido</th>
                        <th scope="col"class="bg-success">Dirección</th>
                        <th scope="col"class="bg-success">Teléfono</th>
                        <th scope="col"class="bg-success">Email</th>
                        <th scope="col"class="bg-success">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Consulta a la base de datos y bucle para mostrar los usuarios
                    include_once("modelo/conexion.php");
                    $sql = $conexion->query("select * from usuarios");
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                            <!-- Datos de cada usuario -->
                            <td><?= $datos->id ?></td>
                            <td><?= $datos->nombre ?></td>
                            <td><?= $datos->apellido ?></td>
                            <td><?= $datos->direccion ?></td>
                            <td><?= $datos->telefono ?></td>
                            <td><?= $datos->email ?></td>
                            <td>
                                <!-- Enlaces para modificar y eliminar usuarios -->
                                <a href="modificar_usuarios.php?id=<?= $datos->id ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a onclick="return eliminar()" href="index.php?id=<?= $datos->id ?>" class="btn btn-danger"><i class="fa-sharp fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Inclusión de script de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
