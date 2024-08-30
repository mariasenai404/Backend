<?php

$cadastro = [];

$cadastro ['Usuario'] = ['Joao','Maria','`Pedro'];

$cadastro ['Senha'] = ['1234', 'abcd', '5678'];

echo '<pre>';
print_r($cadastro);
echo '</pre>';

echo "<hr>";

//Alterando o terceiro valor da array FRUTAS
$cadastro['Usuario'][1] = 'Ana';

//Alterando o segundo valor da array PESSOAS
$cadastro['Senha'][1] = 'efgh';

echo '<pre>';
print_r($cadastro);
echo '</pre>';

echo "O terceiro valor da arraay USUARIO agora é: ";
echo $cadastro['Usuario'][1];

echo "<br>";

echo "O segundo valor da array SENHA agora é: ";
echo $cadastro['Senha'][1];

?>