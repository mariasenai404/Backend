<?php

//criando a array cadastro
$cadastro = [];

//criando a subarray nome
$cadastro ['nome'] = ['Anna','Maria','João','José','Pedro'];

//ciando a subarray email
$cadastro ['email'] = ['a.bonvicine@','ma.garatini@','joão.oliveira@','josé.pereira','ph.martins@'];

echo '<pre>';
print_r ($cadastro);
echo '</pre>';

$cadastro ['nome'] [1] = 'SENAI';
$cadastro ['email'] [0] = 'aluno@senai.br';

echo '<pre>';
print_r ($cadastro);
echo '</pre>';

echo $cadastro ['nome'] [2];
echo "<br>";
echo $cadastro ['email'] [3];


?>