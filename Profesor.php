<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Profesor
 *
 * @author maria
 */
require_once "Persoa.php";

require_once "Baile.php";

final class Profesor extends Persoa {

    const IMPORTE_HORA_POR_DEFECTO = 16;

    private $NIF;
    private $bailes = [];

    public function __construct($nome, $apelidos, $mobil, $NIF) {
        parent::__construct($nome, $apelidos, $mobil);
        $this->NIF = $NIF;
    }

    public function calcularSoldo(float $horas, float $importe_hora = self::IMPORTE_HORA_POR_DEFECTO): float {
        return $horas * $importe_hora;
    }

    public function engadir(Baile $baile): bool {
        $engadido = false;
        if (!in_array($baile, $this->bailes)) {
            $this->bailes[] = $baile;
            $engadido = true;
        }
        return $engadido;
    }

    public function eliminar(Baile $baile): bool {
        $eliminado = false;
        //false o index
        $encontrado = array_search($baile, $this->bailes);
        if ($encontrado !== false) {
            unset($this->bailes[$encontrado]);
            $eliminado = true;
        }


        return $eliminado;
    }
    
    public function mostrarBailes(){
        foreach ($this->bailes as $b) {
            $nome_baile =$b->getNome();
            
            echo $nome_baile." (idade min: ".$b->getIdadeMinima()." anos)<br/>";
        }
    }

}
