<?php

require_once('class_Coordenador.php');

$professor1 = new Coordenador();

$professor1->nome = "João";
$professor1->departamento = "coordenação";
// $professor1->cpf = "123-456-789-00";
// $professor1->salario = "R$3.500,00";

$professor1->coordenarTurmas();
echo"<hr>";
$professor1->planejarAulas();
echo"<hr>";
$professor1->auxiliarProfessores();
echo"<hr>";
$professor1->simularDefinirHorarios();
echo"<hr>";
$professor1->simularOrganizarReunioes();
echo"<hr>";

?>