<html>
<head>
    <style>
       body{
  background-color: #f5f5dc ;
}
.bg-beige {
  background-color: #f5f5dc;
}
.text-dark {
  color: #343a40;
}
.text-secondary {
  color: #6c757d;
}
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Registro</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/81247da189.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid row text-dark" style="display: flex; justify-content: center; align-items: center;">

        <form class="col-md-4 p-3 bg-beige border rounded" method="POST">
                <h3 class="text-center text-secondary">Registro de Usuarios</h3>
                <?php
                include_once("modelo/conexion.php");
                include_once("controlador/registro_usuarios.php");


                ?>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre de Usuario</label>
                    <input type="text" pattern="[A-Za-z]+" class="form-control" name="nombre">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Apellido de Usuario</label>
                    <input type="text" pattern="[A-Za-z]+" class="form-control" name="apellido">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Direccion de Usuario</label>
                    <input type="text" class="form-control" name="direccion">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Telefono de Usuario</label>
                    <input type="text" pattern="\+?[\d ]*" class="form-control" name="telefono">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email de Usuario</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
        </form>
    </div>
</body>
</html>
