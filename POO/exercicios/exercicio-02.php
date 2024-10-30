<?php

//Modelo -> Entidade
class Livro{
    
    //Atributos -> Caractiristicas
    public $titulo = 'Jogos Vorazes';
    public $autor = 'Suzanne Collins';
    public $anoPublicacao = 2008;
    
        //Metodo -> Açoes...
        function exibirDetalhes(){
            return "$this->titulo de $this->autor tem como ano de publicação $this->anoPublicacao";
        }
        function alterarAnoPublicacao($Ano){
            //Afetar um atributo do objeto
            $this->anoPublicacao = $Ano;
        }
    
    }

//Objeto -> Identidade
$y = new Livro();

echo $y->exibirDetalhes(); //Para acessae atributos ou métodos usamos 0 -> 
echo '<hr>';

$y->alterarAnoPublicacao(2022);
echo $y->exibirDetalhes();
echo '<hr>';

?>