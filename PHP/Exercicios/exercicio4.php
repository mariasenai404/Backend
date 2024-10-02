<?php

//Laço for para verificacao
for ($i = 1; $i <= 10; $i++) {

//condicional switch com booleano
switch (true) {

    case ($i >= 1 && $i <= 3):
        $categoria = "BAIXO";
        break;

    case ($i >= 4 && $i <= 7):
        $categoria = "MÉDIO";
        break;

    case ($i >= 8 && $i <= 10):
        $categoria = "ALTO";
        break;        
    }

//condicao 3: par ou impar
$par = ($i % 2 == 0) ? "PAR" : "IMPAR";

echo "O número $i é $par e está na categoria $categoria. <br>";
} //Saida: numero, par ou impar, categoria

?>