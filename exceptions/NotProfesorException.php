<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace exceptions;

/**
 * Description of NotProfesorException
 *
 * @author maria
 */
class NotProfesorException extends \Exception{

    private $otroClass;

    public function __construct(  string $otroClass, string $message,) {
        parent::__construct($message);
        $this->otroClass = $otroClass;
        $this->message = $message . " La clase encontrada es: " . $this->otroClass;
    }

    public function getOtroClass() {
        return $this->otroClass;
    }

}
