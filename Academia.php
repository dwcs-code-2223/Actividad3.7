<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Academia
 *
 * @author maria
 */
require_once 'Profesor.php';
require_once 'Alumno.php';

class Academia {

    CONST ACADEMIA_NOME = "Baila conmigo";

    private $profes = [];
    private $alumnos = [];

    public function engadirProfe(Profesor $profe): bool {
        $engadido = false;
        if (!in_array($profe, $this->profes)) {
            $this->profes[] = $profe;
            $engadido = true;
        }
        return $engadido;
    }
    
      public function engadirAlumno(Alumno $al): bool {
        $engadido = false;
        if (!in_array($al, $this->alumnos)) {
            $this->alumnos[] = $al;
            $engadido = true;
        }
        return $engadido;
    }

}
