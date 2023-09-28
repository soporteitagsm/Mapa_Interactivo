<?php
// Ruta al archivo Excel
$ruta_excel = 'ACTIVOS.xlsx';

// Cargar la librería PHPExcel
require_once 'PHPExcel/PHPExcel.php';

// Crear un objeto PHPExcel
$excel = PHPExcel_IOFactory::load($ruta_excel);

// Seleccionar la hoja de Excel
$hoja = $excel->getSheet(0); // Cambia el índice según la hoja que contenga tus datos

// Obtener todas las filas de la hoja
$filas = $hoja->toArray();

// Crear un arreglo asociativo para almacenar los datos
$datos = array();

// Ignorar la primera fila (encabezados)
for ($i = 1; $i < count($filas); $i++) {
    $nombre = $filas[$i][0];
    $activo = $filas[$i][1];
    $agrupacion = $filas[$i][2];
    $asignado = $filas[$i][3];

    // Agregar los datos a la matriz de datos
    $datos[] = array('NOMBRE' => $nombre, 'ACTIVO' => $activo, 'AGRUPACION' => $agrupacion, 'ASIGNADO' => $asignado);
}

// Convertir los datos a formato JSON (puedes usar otros formatos si lo prefieres)
echo json_encode($datos);
?>
