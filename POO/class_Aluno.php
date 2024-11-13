<?php

class Aluno{

//variaveis
public $nome;
public $idade;
private $matricula;
protected $turma;

//metodos
    public function estudar (){
        echo "$this->nome está estudando.";
    }
    
    public function fazerProva(){
        echo"$this->nome está fazendo uma prova.";
    }

    public function assistirAula(){
        echo"$this->nome está assistindo à aula da $this->turma ";
    }

    private function entregarTrabalho(){
        echo"$this->nome entregou o trabalho ";
    }

    private function faltarAula(){
        echo"$this->nome faltou a aula";
    }

    public function simularEntregaDeTrabalho(){
        $this->entregarTrabalho();
    }

    public function simularFaltaAula(){
        $this->faltarAula();
    }
}

?>