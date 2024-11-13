<?php

require_once('class_Pessoa.php');

$aluno1 = new Pessoa();

$aluno1->nome = "João";
$aluno1->idade = 10;
// $aluno1->cpf = "123-456-789-00";
// $aluno1->endereco = "Rua Blablabla";

$aluno1->apresentar();
echo"<hr>";
$aluno1->caminhar();
echo"<hr>";
$aluno1->falar();
echo"<hr>";
$aluno1->simularComer();
echo"<hr>";
$aluno1->simularDormir();
echo"<hr>";

?>