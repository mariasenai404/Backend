<?php

// modelo -> Entidade

class Funcionario{ //iniciar a primeira letra de cada palavra com maiuscula
    //atriburos -> Caracteristicas
    public $nome = 'Jose';
    public $telefone = null;
    public $numFilhos = 2; //iniar a segunda palavra com letra maiuscula
    
    //metodos -> ações  
    function resumirCadFunc(){
        return "$this->nome possui $this->numFilhos filhos(s)";


    }

    function modificarNumFilhos($Filhos){
        //Afetar um atributo do objeto
        $this ->numFilhos = $Filhos;

    }
    function modificarNome($AlterarNome){
        $this ->nome = $AlterarNome;

    }
}
//objeto -> identidade
$y = new Funcionario();
echo $y->resumirCadFunc(); //Para acessar atributos ou métodos usamos o ->
echo '<hr>';
$x = new Funcionario();
$x ->modificarNumFilhos(3);
echo $x -> resumirCadFunc();
echo '<hr>';

// $x = new Funcionario();
// echo $x->resumirCadFunc(); //Para acessar atributos ou métodos usamos o ->
// echo '<hr>';

$x = new Funcionario();
$x -> modificarNome('Gilmar');
echo $x -> resumirCadFunc();
echo '<hr>';

?>