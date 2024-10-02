<?php

//fiz a array nome
$nome = ["Anna","Augusto","Daniel","Enzo","Felipe","Guilherme","Luis","Maria","Pablo","Vinicius"];
//declarei a variaveu de pesquisa $valor
$valor = "Enzo";
//declarei a pesquisa 
$indice = array_search("$valor",$nome);

//laço if e else
if ($indice !== false) {
    echo "$valor foi encontrada na posição: ". $indice;
}
else{
    echo "Este não foi encontrado na base de dados";
}

?>