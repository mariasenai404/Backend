<?php

class Aluno{
    
    //Atributos -> Caractiristicas
    public $nome = 'Maria';
    public $idade = 16;
    public $curso = 'Desenvolvimennto de Sistemas';
    
    //Metodo -> Açoes...
        function exibirDadosAluno(){
            return "$this->nome possui $this->idade anos, e frequênta o curso de $this->curso";
        }
        function alterCurso($aCurso){
            //Afetar um atributo do objeto
            $this->curso = $aCurso;
        }
    }

//Objeto -> Identidade
$y = new Aluno();

echo $y->exibirDadosAluno(); //Para acessae atributos ou métodos usamos 0 -> 
echo '<hr>';

$x = new Aluno();

$x->alterCurso('Multi Midia');
echo $x->exibirDadosAluno();
echo '<hr>';

?>