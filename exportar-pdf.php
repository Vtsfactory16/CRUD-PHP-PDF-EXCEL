<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
     <!-- Enlace a la hoja de estilos de Bootstrap y al conjunto de iconos -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/81247da189.js" crossorigin="anonymous"></script>
    <style>
        /* Estilos adicionales para el encabezado */
        .header {
            text-align: left;
            margin-bottom: 20px; /* Agrega margen inferior para separar la cabecera de la tabla */
        }

        .header h1 {
            font-size: 24px;
            font-weight: bold;
        }

        .header p {
            margin: auto;
        }

        .header img {
            float: right;
            max-width: 100px;
            max-height: 100px;
        }
        .principal{
            display: flex;
        }
    </style>
</head>
<body>
    <div class="principal">
        <!-- Encabezado con los datos de la empresa -->
        <div class="header">
            <div>
                <h1>VTSFACTORY S.L</h1>
                <p>El paraiso 69</p>
                <p>Teléfono: 696969696</p>
                <p>Yes, we can</p>
            </div>
            <div>   
                
                <img src="https://files.catbox.moe/y86dzz.jpg"  style="width: 100px">
            </div>
        </div>

        <!-- Tabla con los datos de los usuarios -->
        <table class="table table-striped table-hover">
            <thead class="bg-dark text-white">
                <!-- Encabezados de la tabla -->
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Email</th>
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
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php
    include_once("modelo/conexion.php");
    $sql = $conexion->query("select * from usuarios");
    $listaUsuarios = $sql->fetch_all(PDO::FETCH_ASSOC);
?>

<?php 
$html = ob_get_clean();

require_once 'C:\xampp\htdocs\Php\RetosPHP3\libreria\dompdf\autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf();

$options = $dompdf->getOptions();
$options->setIsRemoteEnabled(true);
$dompdf->setOptions($options);

$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape');

$dompdf->render();
$dompdf->stream("sample.pdf", array("Attachment" => false));
?>
