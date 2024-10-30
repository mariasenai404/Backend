<?php
//Modelo -> Entidade

class Funcionario{
    
//Atributos -> Caractiristicas
public $nome = 'José';
public $telefone = null;
public $numFilhos = 2;

//Metodo -> Açoes...
    function resumirCadFunc(){
        return "$this->nome possui $this->numFilhos filho(s)";
    }
    function modificarNumFilhos($Filhos){
        //Afetar um atributo do objeto
        $this->numFilhos = $Filhos;
    }
    function modificarNome($AlterarNome){
        $this->nome = $AlterarNome;
    }


}

//Objeto -> Identidade
$y = new Funcionario();

echo $y->resumirCadFunc(); //Para acessae atributos ou métodos usamos 0 -> 
echo '<hr>';

$y->modificarNumFilhos(3);
echo $y->resumirCadFunc();
echo '<hr>';

$x = new Funcionario();

$x->modificarNome('Gilmar');
echo $x->resumirCadFunc();
echo '<hr>';

?>