<?php

//Cria um array chamado $frutas contendo 3 elementos 
$frutas = array("maçã","banana","laranja");

//Variavel $valor para facilitar pesquisa 
$valor = "abacate";

//Verifica se "banana" está presente no array $frutas
if (in_array("$valor",$frutas)) {
    //Se "banana" estiver no array, exibe a mensagem "Banana está na lista de frutas."
    echo "$valor está na lista de frutas.";
}
else {
    //Se "banana" não estiver no array, exibe a mensagem "Banana não está na lista de frutas."
    echo "$valor não está na lista de frutas.";
}

?>