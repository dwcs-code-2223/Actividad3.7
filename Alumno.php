<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Alumno
 *
 * @author maria
 */
require_once "Persoa.php";

final class Alumno extends Persoa {

    const CUOTA_UNA_CLASE = 20;
    const CUOTA_DOS_CLASES = 32;
    const CUOTA_TRES_O_MAS_CLASES = 40;

    private $numClases;

    public function __construct($nome, $apelidos, $mobil,
            $numClases=0) {
        parent::__construct($nome, $apelidos, $mobil);
        $this->numClases = $numClases;
    }

    public function setNumClases($numClases): void {
        $this->numClases = $numClases;
    }

    public function aPagar(): string {
        $importe = 0;

        if( ($this->numClases != null) && ($this->numClases > 0) ){

            switch ($this->numClases) {
                case 1:
                    $importe = self::CUOTA_UNA_CLASE;
                    break;
                case 2:
                    $importe = self::CUOTA_DOS_CLASES;
                    break;
                case 3:
                    //asumimos números positivos
                    $importe = self::CUOTA_TRES_O_MAS_CLASES;
                    break;
            }
        } else {
            $importe = "Debe indicar previamente o número de clases";
        }
        return $importe;
    }

}
