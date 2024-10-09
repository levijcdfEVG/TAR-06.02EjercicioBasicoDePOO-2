<?php 

class Fechas {
    // Atributos de fecha
    protected $mes = array(); // Array que almacena los meses del año
    protected $infoMes = array(); // Array que almacena información del mes

    public function __construct() {
        // Define los días de cada mes
        $this->mes = array(
            1 => $this->infoMes = array("enero" => 31), // Enero tiene 31 días
            2 => $this->infoMes = array("febrero" => 28), // Febrero tiene 28 días (29 en años bisiestos)
            3 => $this->infoMes = array("marzo" => 31), // Marzo tiene 31 días
            4 => $this->infoMes = array("abril" => 30), // Abril tiene 30 días
            5 => $this->infoMes = array("mayo" => 31), // Mayo tiene 31 días
            6 => $this->infoMes = array("junio" => 30), // Junio tiene 30 días
            7 => $this->infoMes = array("julio" => 31), // Julio tiene 31 días
            8 => $this->infoMes = array("agosto" => 31), // Agosto tiene 31 días
            9 => $this->infoMes = array("septiembre" => 30), // Septiembre tiene 30 días
            10 => $this->infoMes = array("octubre" => 31), // Octubre tiene 31 días
            11 => $this->infoMes = array("noviembre" => 30), // Noviembre tiene 30 días
            12 => $this->infoMes = array("diciembre" => 31) // Diciembre tiene 31 días
        );
    }

    public function esBisiesto($fecha) {
        // Utilizar la función analisisFecha para obtener los componentes de la fecha
        $composicionFecha = $this->analisisFecha($fecha);
        
        // Extraer el año
        $anio = $composicionFecha['anio'];

        // Verificar si es un año bisiesto
        if ($anio % 4 == 0 && ($anio % 100 != 0 || $anio % 400 == 0)) {
            $resultado = true; // Es un año bisiesto
        } else {
            $resultado = false; // No es un año bisiesto
        }

        // Modificar el número de días en febrero si es bisiesto
        if ($composicionFecha['mes'] == 2 && $resultado) {
            $this->mes[2]['febrero'] = 29; // Cambiar febrero a 29 días
        }

        return $composicionFecha; // Devolver la composición de la fecha
    }

    private function analisisFecha($fecha) {
        // Separa la fecha por "/"
        $partesFecha = explode("/", $fecha);
    
        // Almacena las partes como enteros en un array
        $fechaAnalizada = [
            'dia' => (int)$partesFecha[0], // Día de la fecha
            'mes' => (int)$partesFecha[1], // Mes de la fecha
            'anio' => (int)$partesFecha[2] // Año de la fecha
        ];
    
        // Devuelve el array con las partes de la fecha
        return $fechaAnalizada; // Retornar el array analizado
    }
    

    public function getNombreYDiasMes($mes) {
        // Obtener el nombre del mes
        $nombreMes = array_keys($this->mes[$mes])[0]; // array_keys() devuelve las claves del array del mes específico; como solo hay una clave (el nombre del mes), usamos [0] para acceder a ella

        // Obtener el número de días del mes
        $diasMes = $this->mes[$mes][$nombreMes]; // Días del mes
        
        // Guardar en un array separado
        $infoMes = [];
        $infoMes['nombre'] = $nombreMes; // Asignar el nombre del mes
        $infoMes['dias'] = $diasMes; // Asignar el número de días
        
        // Devolver el array con el nombre y los días
        return $infoMes; // Retornar el array separado
    }
}
