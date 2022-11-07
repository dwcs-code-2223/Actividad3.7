<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Persoa
 *
 * @author maria
 */
class Persoa {
   protected $nome;
   protected $apelidos;
   protected $mobil;
   
   
   public function __construct($nome, $apelidos, $mobil) {
       $this->nome = $nome;
       $this->apelidos = $apelidos;
       $this->mobil = $mobil;
   }

   
   public function getNome() {
       return $this->nome;
   }

   public function getApelidos() {
       return $this->apelidos;
   }

   public function getMobil() {
       return $this->mobil;
   }

   public function setNome($nome): void {
       $this->nome = $nome;
   }

   public function setApelidos($apelidos): void {
       $this->apelidos = $apelidos;
   }

   public function setMobil($mobil): void {
       $this->mobil = $mobil;
   }

   public function verInformacion(){
       $cadea = implode (" ", 
               [$this->nome,  $this->apelidos, 
                   "(".$this->mobil.")<br/>"]);
       echo $cadea;
   }

}
