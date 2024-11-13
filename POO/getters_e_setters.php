<?php

// modelo -> Entidade

class Funcionario{ //iniciar a primeira letra de cada palavra com maiuscula
    //atributos -> Caracteristicas
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;

    //setters
    function setNome($nome){
        $this->nome = $nome;  
    }
    
    function setNumFilhos($numFilhos){
        $this->numFilhos = $numFilhos;
    }

    //getters
    function getNome(){
        return $this->nome;
    }    

    function getNumFilhos(){
        return $this->numFilhos;
    }
    
    //esse é o resumo do cadastro do funcionario 
    function resumirCadFunc(){
        return "$this->nome possui $this->numFilhos filhos(s)";
    }
}

    $y = new Funcionario();
    $y->setNome('José');
    $y->setNumFilhos(2);
    // echo $y->resumirCadFunc();
    echo $y->getNome().' possui '.$y->getNumFilhos().' filho(s) ';



?>