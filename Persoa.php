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
   

   
   
   public function __construct(string $nome, string $apelidos, string $mobil) {
       $this->nome = $nome;
       $this->apelidos = $apelidos;
       $this->mobil = $mobil;
      
   }

   
   public function getNome(): string{
       return $this->nome;
   }

   public function getApelidos():string {
       return $this->apelidos;
   }

   public function getMobil():string {
       return $this->mobil;
   }

   public function setNome(string $nome): void {
       $this->nome = $nome;
   }

   public function setApelidos(string $apelidos): void {
       $this->apelidos = $apelidos;
   }

   public function setMobil(string $mobil): void {
       $this->mobil = $mobil;
   }

   public function verInformacion(){
       $cadea = implode (" ", 
               [$this->nome,  $this->apelidos, 
                   "(".$this->mobil.")"]);
       echo $cadea;
   }
   
//   public function getDataNacemento() {
//       return $this->dataNacemento;
//   }
//
//   public function setDataNacemento($dataNacemento): void {
//       $this->dataNacemento = $dataNacemento;
//   }



}
