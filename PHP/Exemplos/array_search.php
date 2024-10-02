<?php

$valor = "banana";

//Cria um array $frutas contendo 3 elementos
$frutas = ["maçã","banana","laranja"];

//Procura o valor "banana" no array $frutas e armazena o índice correspondente na variavel $indice.
$indice = array_search("$valor",$frutas);

//verificase $indice não é false, o seja, se banana foi encontrada na array
if ($indice !== false) {
    //Se "banana" foi encontrada, exibe a msg com indice onde ela está localizada
    echo "$valor foi encontrada na posição: ". $indice;
}
else{
    //Se "banana" não foi encontrada, exibe uma msg indicando isso
    echo "$valor não foi encontrada na lista de frutas";
}

?>