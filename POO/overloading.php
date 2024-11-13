<?php

// modelo -> Entidade

class Funcionario{ //iniciar a primeira letra de cada palavra com maiuscula
    //atributos -> Caracteristicas
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;
    public $cargo = null;
    public $salario = null;

    // setters overloading
    function __set($atributos, $valor){
        $this->$atributos = $valor;
    }

    //getters overloading
   function __get($atributos){
    return $this ->$atributos;
   }
    
    //esse é o resumo do cadastro do funcionario 
    function resumirCadFunc(){
        // return "$this->nome possui $this->numFilhos filhos(s)";
        return $this->__get('nome'). " possui ".$this->__get('numFilhos'). " filho(s) ";
    }
}

  $y = new Funcionario();
  $y->__set('nome','José');
  $y->__set('numFilhos',2);
  echo $y->resumirCadFunc();



?>