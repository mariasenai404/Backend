<?php

//Declarei as variaveis
$horas_extra = 15;
$salario = 1500;
$bonus01 = 0.2;
$bonus02 = 0.1;

// Implementei as condicoes if, else if, else, e $$ (and)
if ($salario >= 2000 && $horas_extra > 5){
    $bonus_total = $salario * $bonus02;
    echo "Bonus de: $bonus_total";
}
else if ($salario < 2000 && $horas_extra > 10){
    $bonus_total2 = $salario * $bonus01;
    echo "Bonus de: $bonus_total2";
}
else {
    echo "Sem bonus, salario de: $salario";
}

?>
