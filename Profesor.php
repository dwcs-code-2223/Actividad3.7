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
use exceptions\NotProfesorException;

final class Profesor extends Persoa implements IComparar {

    const IMPORTE_HORA_POR_DEFECTO = 16;

    private $NIF;
    private $bailes = [];
    private $idade;
    

    public function __construct(string $nome,
            string $apelidos,
            string $mobil,
            string $NIF,
            int $idade) {
        parent::__construct($nome, $apelidos, $mobil, $idade);
        $this->NIF = $NIF;
        $this->idade = $idade;
    }

    public function calcularSoldo(float $horas,
            float $importe_hora = self::IMPORTE_HORA_POR_DEFECTO): float {
        return $horas * $importe_hora;
    }

    public function engadir(Baile $baile): bool {
        $engadido = false;
        if (!in_array($baile, $this->bailes)) {
            $this->bailes[] = $baile;
//Outra posibilidade: 
            //   if(array_search($baile, $this->bailes===false){
            //array_push($this->bailes, $baile);     
            // }

            $engadido = true;
        }
        return $engadido;
    }

    //Se se considera o mesmo baile só polo nome:
    public function engadirSoDiferenteNome(Baile $baile): bool {
        $engadido = false;
        $array_nomes_bailes = array_map("getNomesBailes", $this->bailes);
        if (!in_array($baile->getNome(), $array_nomes_bailes)) {
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
            //Para non quedar co índice numérico $encontrado baleiro:
            //$this->bailes = array_values($this->bailes);
            $eliminado = true;
        }


        return $eliminado;
    }

    public function mostrarBailes() {
        foreach ($this->bailes as $b) {
            //$nome_baile = $b->getNome();

            echo $b->getNome() . " (idade min: " . $b->getIdadeMinima() . " anos)<br/>";
        }
    }

    public function comparar($otro) {
        if (!($otro instanceof Profesor)) {

            throw new NotProfesorException(get_class($otro), "No se puede comparar un objeto de la clase ". get_class($this) . " con otra clase.");
        }
        else{
            return $this->idade <=> $otro-> idade;
        }
    }
    
    public function verInformacion() {
        parent::verInformacion();
        echo ", Idade: $this->idade<br/>";
    }
    
    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade): void {
        $this->idade = $idade;
    }


}
    