<?php

class Coordenador{

//variaveis
public $nome;
public $departamento;
private $cpf;
protected $salario;

//metodos
    public function coordenarTurmas(){
        echo"$this->nome está coordenando as turmas.";
    }
    
    public function planejarAulas(){
        echo"$this->nome está planejando as aulas.";
    }

    public function auxiliarProfessores(){
        echo"$this->nome está auxiliando os professores.";
    }

    private function definirHorarios(){
        echo"$this->nome está definindo horarios.";
    }

    private function organizarReunioes(){
        echo"$this->nome está organizando reuniões.";
    }

    public function simularDefinirHorarios(){
        $this->definirHorarios();
    }

    public function simularOrganizarReunioes(){
        $this->organizarReunioes();
    }
}

?>