<?php

class Professor{

//variaveis
public $nome;
public $idade;
private $cpf;
protected $salario;

//metodos
    public function ensinar(){
        echo"$this->nome está ensinando.";
    }
    
    public function corrigirProva(){
        echo"$this->nome está corrigindo as provas.";
    }

    public function prepararAula(){
        echo"$this->nome está preparando aula.";
    }

    private function fazerChamada(){
        echo"$this->nome está fazendo chamada.";
    }

    private function corrigirTarefa(){
        echo"$this->nome está corrigindo tarefas.";
    }

    public function simularFazerChamada(){
        $this->fazerChamada();
    }

    public function simularCorrigirTarefa(){
        $this->corrigirTarefa();
    }
}

?>