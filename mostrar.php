<?php
// Captura los datos pasados por la URL
$dia = $_GET['dia'];
$nombreMes = $_GET['nombreMes'];
$anio = $_GET['anio'];
$diasMes = $_GET['diasMes'];

// Muestra los resultados en el formato solicitado
echo "Fecha: $dia de $nombreMes de $anio<br>";
echo "Días en el mes: $diasMes<br>";

