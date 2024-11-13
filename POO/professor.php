<?php

require_once('class_Professor.php');

$professor1 = new Professor();

$professor1->nome = "João";
$professor1->idade = 30;
// $professor1->cpf = "123-456-789-00";
// $professor1->salario = "R$3.500,00";

$professor1->ensinar();
echo"<hr>";
$professor1->corrigirProva();
echo"<hr>";
$professor1->prepararAula();
echo"<hr>";
$professor1->simularFazerChamada();
echo"<hr>";
$professor1->simularCorrigirTarefa();
echo"<hr>";

?>