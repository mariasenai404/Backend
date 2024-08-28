<?php
//Criei um array com 10 posições
$numeros = [1,2,3,4,5,6,7,8,9,10];
//Exiba o array original
echo '<pre>';
print_r ($numeros);
echo '</pre>';

echo $numeros[0];
echo '<br>';
echo $numeros[4];
echo '<br>';
echo $numeros[9];
echo '<br>';

echo "<hr>";
//Alterei os valores nas posicoes especificas
echo '<pre>';
$numeros[0] = "100";
$numeros[4] = "500";
$numeros[9] = "1000";
print_r ($numeros);
echo '</pre>';
//exiba os arrays com os updates
echo $numeros[0];
echo '<br>';
echo $numeros[4];
echo '<br>';
echo $numeros[9];
echo '<br>';

echo "<hr>";
?>