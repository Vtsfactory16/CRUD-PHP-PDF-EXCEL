<?php 
// Load the database configuration file 
require ("modelo/conexion.php");
 global $conexion;
include_once ("libreria/PhpXlsxGenerator.php");
// Excel file name for download 
$fileName = "members-data_" . date('Y-m-d') . ".xlsx"; 
 
// Column names 
$fields[] = array('id', 'nombre', 'apellido', 'direccion', 'telefono', 'email'); 
 
// Fetch records from database 
$query = $conexion->query("SELECT * FROM usuarios"); 
if($query->num_rows > 0){ 
    // Output each row of the data 
    while($row = $query->fetch_assoc()){ 
        $rowData = array($row['id'], $row['nombre'], $row['apellido'], $row['direccion'], $row['telefono'], $row['email']); 
        //array_walk($rowData, 'filterData'); 
        $fields[] = $rowData;
    } 
}
$xlsx = CodexWorld\PhpXlsxGenerator::fromArray($fields);
$xlsx->downloadAs($fileName);
exit;