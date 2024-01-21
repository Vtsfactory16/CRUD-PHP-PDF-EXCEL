<?php
// Incluimos la librería PhpXlsxGenerator.php
require_once 'C:\xampp\htdocs\Php\RetosPHP3\libreria\PhpXlsxGenerator.php';
require_once 'conexion.php';

// Consulta a la base de datos
$sql = "SELECT * FROM usuarios";
$resultado = $mysqli->query($sql);

// Array para almacenar los datos
$data = array();

// Encabezados de la tabla
$data[] = array('ID', 'Nombre', 'Apellido', 'Email', 'Telefono');

// Recorremos los resultados de la consulta y los agregamos al array
while($rows = $resultado->fetch_assoc()) {
    $data[] = array($rows['id'], $rows['nombre'], $rows['apellido'], $rows['email'], $rows['telefono']);
}

// Definimos el nombre del archivo
$filename = "Reporte_de_usuarios.xlsx";

// Llamamos a la función para generar el archivo Excel
PhpXlsxGenerator::generate($data, $filename);

?>