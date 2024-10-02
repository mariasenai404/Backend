<?php

//exemplo com variavel numerico
$idade = 20;
$resultado = ($idade >= 18) ? "Maior de idade" : "Menor de idade";
echo $resultado; //Saida: Maior de idade
echo '<br/>';

//exemplo com variavel string
$nome = "Ana";
$mensagem1 = ($nome == "Ana") ? "Olá, Ana!" : "Olá, visitante!";
echo $mensagem1; //Saida: Ola Ana!
echo '<br/>';

//exemplo com variavel booleana
$is_logged_in = true;
$mensagem2 = $is_logged_in ? 'Bem-vindo de volta!' : 'Por favor, faca login.';
echo $mensagem2; //Saida: Bem-vindo de volta
echo '<br/>'; 

?>