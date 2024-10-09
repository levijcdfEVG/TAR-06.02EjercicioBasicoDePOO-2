<?php 

    class Fechas{
        //Atributos de fecha
        protected $mes = array(); //Array del año
        protected $infoMes = array(); //Array del mes
        public function __construct() {
            // Define los días de cada mes
            $this->mes = array(
                1 => $this->infoMes = array("enero" => 31),
                2 => $this->infoMes = array("febrero" => 28), // Puede ser 29 en años bisiestos
                3 => $this->infoMes = array("marzo" => 31),
                4 => $this->infoMes = array("abril" => 30),
                5 => $this->infoMes = array("mayo" => 31),
                6 => $this->infoMes = array("junio" => 30),
                7 => $this->infoMes = array("julio" => 31),
                8 => $this->infoMes = array("agosto" => 31),
                9 => $this->infoMes = array("septiembre" => 30),
                10 => $this->infoMes = array("octubre" => 31),
                11 => $this->infoMes = array("noviembre" => 30),
                12 => $this->infoMes = array("diciembre" => 31)
            );
        }

        /*
        public function esBisiesto($fecha){
            $this->fecha = $fecha;

        }
        */

        //Getters y Setters
        public function getMes() {
            return $this->mes;
        }

        public function getInfoMes() {
            return $this->infoMes;
        }

        public function setMes($mes) {
            $this->mes = $mes;
        }

        public function setInfoMes($infoMes) {
            $this->infoMes = $infoMes;
        }

    
        public function esBisiesto($fecha){
            // Utilizar la función analisisFecha para obtener los componentes de la fecha
            $composicionFecha = $this->analisisFecha($fecha);
            
            // Extraer el año
            $anio = $composicionFecha['anio'];

            
            // Verificar si es un año bisiesto
            if ($anio % 4 == 0 && ($anio % 100 != 0 || $anio % 400 == 0)){
                $resultado = true;
            }

            $bisiesto = false;

            if($composicionFecha[1] == 02 && $bisiesto){
                $this->infoMes['febrero'] == 29;
            }
        }

        private function analisisFecha($fecha){
            // Separa la fecha por "/"
            $partesFecha = explode("/", $fecha);

            // Devuelve las partes como enteros
            return [
                'dia' => (int)$partesFecha[0],
                'mes' => (int)$partesFecha[1],
                'anio' => (int)$partesFecha[2]
            ];
        }


    }
