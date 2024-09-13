<?php

$nome = ["Anna","Augusto","Daniel","Enzo","Felipe","Guilherme","Luis","Maria","Pablo","Vinicius"];
$valor = "Enzo";
$indice = array_search("$valor",$nome);

if ($indice !== false) {
    echo "$valor foi encontrada na posição: ". $indice;
}
else{
    echo "Este não foi encontrado na base de dados";
}

?>