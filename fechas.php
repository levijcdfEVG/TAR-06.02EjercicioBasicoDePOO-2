<?php 

    class Fechas{
        protected string $fecha; //String de la fecha
        protected $anio = array(); //Array del año

        public function __construct(string $fecha){
            $this->fecha = $fecha;
        }

    }
