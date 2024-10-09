<?php 

    class Fechas{
        protected string $fecha; //String de la fecha
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

    }
