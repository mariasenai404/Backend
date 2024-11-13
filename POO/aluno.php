<?php

require_once('class_Aluno.php');

$aluno1 = new Aluno();

$aluno1->nome = "João";
$aluno1->idade = 10;
//$aluno1->matricula = "12345";
//$aluno1->turma = "2 B";
$aluno1->estudar();
echo"<hr>";
$aluno1->fazerProva();
echo"<hr>";
$aluno1->assistirAula();
echo"<hr>";
$aluno1->simularEntregaDeTrabalho();
echo"<hr>";
$aluno1->simularFaltaAula();
echo"<hr>";

?>