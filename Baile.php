<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Baile
 *
 * @author maria
 */
class Baile {
    const IDADE_MINIMA_DEFECTO=8;
    
   private $nome;
   private $idadeMinima;
   
   public function __construct($nome, $idadeMinima= self::IDADE_MINIMA_DEFECTO) {
       $this->nome = $nome;
       $this->idadeMinima = $idadeMinima;
   }
   
   public function getNome() {
       return $this->nome;
   }

   public function getIdadeMinima() {
       return $this->idadeMinima;
   }

   public function setNome($nome): void {
       $this->nome = $nome;
   }

   public function setIdadeMinima($idadeMinima): void {
       $this->idadeMinima = $idadeMinima;
   }



}
