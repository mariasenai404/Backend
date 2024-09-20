<?php

//Criando o array lista de frutas
/*$lista_frutas = array ("Banana","Maça","Morango","Uva");
echo $lista_frutas[0]; //Isso mostraria "Maça"

//Alterando o Valor 0 -> Banana por Melancia
$lista_frutas[0] = "Melancia";

echo "<hr>";
echo $lista_frutas[0]; */


$lista_frutas = ["Banana","Maça","Morango","Uva"];

echo '<pre>';
print_r ($lista_frutas);
echo $lista_frutas[0];
echo "<hr>";
echo '</pre>';

echo '<pre>';

$lista_frutas[0] = "Melancia";
print_r ($lista_frutas);
echo '</pre>';

echo "<br>";

echo $lista_frutas[0];
?>