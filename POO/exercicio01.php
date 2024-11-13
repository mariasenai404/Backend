<?php

class Aluno{ //iniciar a primeira letra de cada palavra com maiuscula
    //atriburos -> Caracteristicas
    public $nome = 'Anna';
    public $idade = 17;
    public $curso = 'Desenvolvimento de Sistemas'; //iniar a segunda palavra com letra maiuscula
    
    //metodos -> ações  
    function resumirCadFunc(){
        return "$this->nome esta no curso $this->curso e tem $this->idade";


    }

    function modificarAlterCurso($AlterarCurso){
        $this ->curso = $AlterarCurso;

    }
}
//objeto -> identidade
$y = new Aluno();
echo $y->resumirCadFunc(); //Para acessar atributos ou métodos usamos o ->
echo '<hr>';

$x = new Aluno();
$x -> modificarAlterCurso('Multimidia');
echo $x -> resumirCadFunc();
echo '<hr>';

?>