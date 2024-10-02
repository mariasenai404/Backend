<?php
//declarei as variaveis das raizes
$raiz = 0;
$raiz2 = 0;

//executei os laços de repetição
for($i = 1; $i <= 50; $i++){
    $raiz = sqrt($i);
    $raiz2 = round($raiz, 2);
    //inprimi o resultado
    echo "As raizes de $i: $raiz2 </br>";
}
?>