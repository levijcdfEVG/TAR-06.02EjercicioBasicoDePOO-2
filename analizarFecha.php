<?php
require 'fechas.php'; // Incluye la clase Fechas

$cadenaFecha = $_POST['fecha']; // Captura la fecha enviada por el formulario
$analisisFecha = new Fechas(); // Crea una instancia de la clase Fechas

// Analiza la fecha y verifica si es un año bisiesto
$fechaCompuesta = $analisisFecha->esBisiesto($cadenaFecha);

// Divide el array en día, mes y año
$dia = $fechaCompuesta['dia'];
$mes = $fechaCompuesta['mes'];
$anio = $fechaCompuesta['anio'];

// Obtiene el nombre del mes y la cantidad de días
$infoMes = $analisisFecha->getNombreYDiasMes($mes);
$nombreMes = $infoMes['nombre'];
$diasMes = $infoMes['dias'];

// Redirige a una página y pasa los valores en la URL
header("Location: mostrar.php?dia=$dia&nombreMes=$nombreMes&anio=$anio&diasMes=$diasMes");

