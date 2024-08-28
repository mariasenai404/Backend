<?php

//declaracao das variaveis
$nota1 = 3;
$nota2 = 10;
$nota3 = 6;

$media = ($nota1 + $nota2 + $nota3) / 3;

//chamada das variaveis
echo "A nota1: $nota1 <br>";
echo "A nota2: $nota2 <br>";
echo "A nota3: $nota3 <br>";

echo "A media final do aluno e $media <br>";

//aplicacao de condicoes
if ($media < 7) {
    echo 'O aluno esta REPROVADO';
}
else{
    echo 'O aluno esta APROVADO';
}

?>